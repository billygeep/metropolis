<?php
/**

 * Template Name: Custom Home Page
 * @package WordPress
*/
get_header(); 
?>

    <!-- <div id="wkm-header" class="wkm-header wkm-solid"> -->

<?php

$post_id = 1;

$image_ids = array ();

// get all the galleries in the post
if ( $galleries = get_post_galleries( $post_id, false ) ) {

    foreach ( $galleries as $gallery ) {

        // pull the ids from each gallery
        if ( ! empty ( $gallery[ 'ids' ] ) ) {

            // merge into our final list
            $image_ids = array_merge( $image_ids, explode( ',', $gallery[ 'ids' ] ) );
        }
    }
}

// make the values unique
$image_ids = array_unique( $image_ids );    

// convert the ids to urls -- $gallery[ 'src' ] already holds this info
$image_urls = array_map( "wp_get_attachment_url", $image_ids );    

// ---------------------------- //

?>


<section class="content-container content-intro color-white bg-white" style="background-image: url(<?php echo do_shortcode("[HomeIntroBgImage]"); ?>">
      
  <div class="content-intro-tagline color-limegreen"><p>A new world of work. Now in green.</p></div>
  <div class="content-intro-logo"><img src="<?php echo do_shortcode("[HomeIntroLogo]"); ?>" /></div>

      <div class="container-intro-base">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
            Exemplary sustainability credentials
            </div>
            <div class="col-sm-4">
            100 m from Marylebone Station
            </div>
            <div class="col-sm-4">
            The healthiest, most amenity-rich building in London
            </div>
          </div>
        </div>
</div>
<p>175,000 sq. ft of design-led, human-centric 
workspace in the heart of Marylebone</p>
      </section>

      <section>
  VIDEO
</section>


<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
            <h2 class="color-limegreen">PLANET FIRST</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
            25,764 tonnes of carbon saved through reuse and innovative construction
            </div>
            <div class="col-sm-4">
            100% renewable energy
            </div>
            <div class="col-sm-4">
            Net zero operation
            </div>
        </div>
    </div>
</section>


      <section class="content-container viewCarousel-carousel bg-lightgreen">
      <div id="viewCarousel" class="carousel carousel-main">
        <div class="carousel-outer">
          <div class="carousel-inner">

          <?php foreach ($image_urls as $i => $post) { ?>

            <img class="carousel-image" src="<?php echo $post; ?>"  alt=""/>

            <?php
          }
            ?>
          </div>
        </div>

        <button id="carousel-main-left" class="carousel-button carousel-button-left"></button>
        <button id="carousel-main-right" class="carousel-button carousel-button-right"></button>

        <div class="carousel-labels">
          <label class="carousel-label">Meeting room</label>
          <label class="carousel-label">3<sup>rd</sup> Floor</label>
          <label class="carousel-label">3<sup>rd</sup> Floor</label>
          <label class="carousel-label">3<sup>rd</sup> Floor</label>
          <label class="carousel-label">3<sup>rd</sup> Floor</label>
          <label class="carousel-label">Fully fitted kitchen</label>
          <label class="carousel-label">Breakout room</label>
        </div>
        <div class="carousel-pips"></div>
      </div>

    </section>

    <section class="bg-darkgreen color-white">

    <div class="container divide-module">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="color-limegreen">BEST IN CLASS</h2>
            </div>
        </div>
        </div>

        <hr class="divide-module-line" />
          <div class="container divide-module">
        <div class="row">
            <div class="col-sm-4 divide-module-box">
              <div class="divide-module-icon bg-limegreen">
                <img src="" />
              </div>
              <p>Over 20,000 sq ft of amenity</p>
            </div>
            <div class="col-sm-4 divide-module-box">
            <div class="divide-module-icon bg-limegreen">
                <img src="" />
              </div>
              <p>Private terraces on every floor</p>
            </div>
            <div class="col-sm-4 divide-module-box">
            <div class="divide-module-icon bg-limegreen">
                <img src="" />
              </div>
            <p>Communal rooftop terrace, events space and members lounge</p>
            </div>
        </div>
    </div>
</section>


      <section id="anchorB" class="section-main bg-palegreen">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <img class="fade-in-b" src="<?php echo do_shortcode("[HomeArticleImg1]"); ?>" alt="" />

              <div class="row">
                <div class="offset-lg-4 col-lg-8">
                  <p class="section-main-description fade-in-c desktop">
                    A transformed environment featuring a private landscaped
                    garden, roof terrace, reception, Club Room lounge, extensive
                    shower and changing facilities, gym and separate Spin
                    Studio, with light-filled CAT A floors setting a new
                    standard for Greater London.
                  </p>
                  <p class="section-main-headline fade-in-b color-pink mobile">
                    Rethought and refurbished<br />from the inside out to
                    create<br />a destination office
                  </p>
                </div>
              </div>
            </div>

            <div id="anchorC" class="offset-lg-1 col-lg-5">
              <p class="section-main-headline fade-in-b color-pink desktop">
                Rethought and<br />
                refurbished from the<br />
                inside out to create<br />
                a destination office
              </p>

              <img class="fade-in-c" src="<?php echo do_shortcode("[HomeArticleImg2]"); ?>" alt="" />

              <p class="section-main-description fade-in-c mobile">
                A transformed environment featuring a private landscaped garden,
                roof terrace, reception, Club Room lounge, extensive shower and
                changing facilities, gym and separate Spin Studio, with
                light-filled CAT A floors setting a new standard for<br
                  class="small-mobile"
                />
                Greater London.
              </p>
            </div>
          </div>
        </div>
        <div class="arrow" id="right-arrow">
            <img src="<?php echo do_shortcode("[RightArrow]"); ?>" />
        </div>
      </section>

      <section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="color-limegreen">CONNECTED</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4">
            Less than 15 mins to all 
major mainline stations
            </div>
            <div class="col-sm-4">
            Connection to ten underground lines within six minutes
            </div>
            <div class="col-sm-4">
            Three minutes from Paddington Crossrail
            </div>
        </div>
    </div>
</section>



      <?php
get_template_part( 'template-parts/module-download' ); 
get_template_part( 'template-parts/module-footer' ); 
?>

