<?php
/**

 * Template Name: Custom Building Page
 * @package WordPress
*/
get_header(); 
?>

    <!-- <div id="wkm-header" class="wkm-header wkm-solid"> -->

<?php
// get_template_part( 'template-parts/custom-header' );
// get_template_part( 'template-parts/module-featured-image' ); 
?>



<section id="anchorA" class="content-container content-intro bg-grey">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <div id="intro-logo" class="logo-container">
                <img
                  src="imgs/explore_new.svg"
                  alt="Explore | The Richmond Experience"
                />
              </div>

              <div class="intro-text-container">
                <p id="intro-text">
                  <span
                    >45,000 SQ FT OF OUTSTANDING<br />OFFICE SPACE COMING
                    SOON<br />TO RICHMOND UPON THAMES</span
                  >
                </p>
                <div class="arrow" id="down-arrow">
                    <img src="<?php echo do_shortcode("[DownArrow]"); ?>" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="intro-image" class="intro-image"></div>
      </section>

      <section id="anchorB" class="section-main bg-green">
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



<?php
get_template_part( 'template-parts/section-footer' ); 
?>

