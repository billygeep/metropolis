<?php
namespace PostSnippets;

class DBTable{

    public $psp_db_version = '1.0';

    function __construct() {

        $this->create_db_table();
        $this->insert_initial_data();

        self::update_db_table_previous( get_option(\PostSnippets::OPTION_KEY) );  /**Update table with previous version snippets, for backward compatibility */

    }    
    
    function create_db_table(){
        
        global $wpdb;

        $snippets_table_name = $wpdb->prefix . \PostSnippets::TABLE_NAME;
        $group_table_name = $wpdb->prefix . \PostSnippets::GROUP_TABLE_NAME;

        $charset_collate = $wpdb->get_charset_collate();        
        
        $sql = "CREATE TABLE $snippets_table_name (
            ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            snippet_group longtext NOT NULL,
            snippet_title text NOT NULL,
            snippet_content longtext NOT NULL,
            snippet_date datetime DEFAULT '0000-00-00 00:00:00' NOT NULL,
            snippet_vars longtext NOT NULL,
            snippet_desc longtext NOT NULL,
            snippet_status smallint(11) unsigned NOT NULL,
            snippet_shortcode smallint(11) unsigned NOT NULL,
            snippet_php smallint(11) unsigned NOT NULL,
            snippet_wptexturize smallint(11) unsigned NOT NULL,
            PRIMARY KEY  (ID)
        ) $charset_collate;";



        $sql .= "CREATE TABLE $group_table_name (
            ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            group_name text NOT NULL,
            group_slug text NOT NULL,
            group_desc longtext NOT NULL,
            group_count int unsigned NOT NULL,
            PRIMARY KEY  (ID)
        ) $charset_collate;";


    
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta( $sql );
    
        update_option( 'psp_db_version', $this->psp_db_version );
    }

    function insert_initial_data(){
        
        global $wpdb;
        
        $table_name = $wpdb->prefix . \PostSnippets::GROUP_TABLE_NAME;
        $ungrouped  = __('ungrouped','post-snippets');

        // Properly generate the LIKE query.
        $like = '%' . $wpdb->esc_like( $ungrouped ) . '%'; // e.g. '%input%'
        //$like = '%' . $wpdb->esc_like( $myinput ); // e.g. '%input'
        //$like = $wpdb->esc_like( $myinput ) . '%'; // e.g. 'input%'

        $result = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE group_name LIKE %s ",$like) );
        
        if(!$result){
            
            $wpdb->insert( 
                $table_name, 
                array( 
                    // 'ID' => $welcome_name,
                    // 'time' => current_time( 'mysql' ), 
                    'group_name' => $ungrouped,
                    'group_slug' => $ungrouped,
                    'group_desc' => __('Autogenerated Uncategorized Group', 'post-snippets')
                ) 
            );
        }

    }

    
    
    public static function update_db_table_previous( $snippets, $old_import = false ){

        global $wpdb;
        
        $table_name = $wpdb->prefix . \PostSnippets::TABLE_NAME;
        $table_name_group = $wpdb->prefix . \PostSnippets::GROUP_TABLE_NAME;

        // $wpdb->show_errors();
        // $wpdb->print_error();

        $count = $wpdb->get_var($wpdb->prepare("SELECT COUNT(*) FROM %1s", $table_name));

        if (!empty($snippets) && $count == 0 || $old_import) {

            $ungrouped = __('ungrouped','post-snippets');
            $like = '%' . $wpdb->esc_like( $ungrouped ) . '%';
            $group_id = $wpdb->get_var($wpdb->prepare("SELECT ID FROM $table_name_group WHERE group_name LIKE %s ",$like) );
            
            foreach ($snippets as $snippet) {

                $snippet_php = PSallSnippets::get_snippet_php($snippet["php"]);

                $snippet_added = $wpdb->insert(
                    $table_name,
                    array(
                        'snippet_group'         => maybe_serialize( array($group_id) ),
                        'snippet_title'         => Edit::filter_snippet_title( $snippet["title"] ),
                        'snippet_content'       => addslashes( $snippet["snippet"] ),
                        'snippet_date'          => current_time( 'mysql' ),
                        'snippet_vars'          => Edit::filter_snippet_vars( $snippet['vars'] ),
                        'snippet_desc'          => sanitize_textarea_field( $snippet["description"] ),
                        'snippet_status'        => 1,     //Enabled by default
                        'snippet_shortcode'     => ( ($snippet["shortcode"]      ?? 0 ) == 1 ) ? 1 : 0,
                        'snippet_php'           => $snippet_php,
                        'snippet_wptexturize'   => ( ($snippet["wptexturize"]    ?? 0 ) == 1 ) ? 1 : 0,
                    ) 
                );

                if($snippet_added){
                    Edit::change_group_count( array($group_id), 'increment');
                }


            }        
        }
    }
}