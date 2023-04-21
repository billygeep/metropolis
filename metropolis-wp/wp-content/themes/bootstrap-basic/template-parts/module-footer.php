<!-- 
< ?php
	$attachmentID1 = 13;
	$imageSizeName = "full";
	$map = wp_get_attachment_image_src($attachmentID1, $imageSizeName);
?> -->

      <section class="content-container content-footer bg-darkgreen color-white">
        <div class="footer-mid">
          <div class="container">
            <div class="row">

              <div class="col-sm-3">
                <a href="https://www.brayfoxsmith.com/" target="_blank"
                  ><img
                    class="footer-icon footer-icon-fox"
                    alt="BRAY FOX SMITH"
                    src="<?php echo do_shortcode("[BrayFoxSmithLogo]"); ?>"
                /></a>
              </div>
              
              <div class="col-sm-3">
                <ul class="footer-detail">
                  <li class="footer-name">Sarah Brisbaner</li>
                  <li><a href="tel:+44 7769 201 458">+44 7769 201 458</a></li>
                  <li>
                    <a href="mailto:sarah.brisbane@eu.jll.com"
                      >sarah.brisbane@eu.jll.com</a
                    >
                  </li>
                </ul>
              </div>
                              
              <div class="col-sm-3">
                <ul class="footer-detail">
                  <li class="footer-name">Chris Valentine</li>
                  <li><a href="tel:+44 7747 758 2893">+44 7747 758 2893</a></li>
                  <li>
                    <a href="mailto:chris.valentine@eu.jll.com"
                      >chris.valentine@eu.jll.com</a
                    >
                  </li>
                </ul>
              </div>
                              
              <div class="col-sm-3">
                <ul class="footer-detail footer-detail-last">
                  <li class="footer-name">George Reynolds</li>
                  <li><a href="tel:+44 7592 112 110">+44 7592 112 110</a></li>
                  <li>
                    <a href="mailto:george.reynolds@eu.jll.com"
                      >george.reynolds@eu.jll.com</a
                    >
                  </li>
                </ul>
              </div>
            </div>

            <div class="row">

              <div class="col-sm-3">
                <a href="https://www.savills.co.uk/" target="_blank"
                  ><img
                    class="footer-icon footer-icon-savills"
                    alt="SAVILLS"
                    src="<?php echo do_shortcode("[SavillsLogo]"); ?>"
                /></a>
              </div>

              <div class="col-sm-3">
                <ul class="footer-detail">
                  <li class="footer-name">Craig Norton</li>
                  <li><a href="tel:+44 7818 424 764">+44 7818 424 764</a></li>
                  <li>
                    <a href="mailto:cnorton@edwardcharles.co.uk"
                      >cnorton@edwardcharles.co.uk</a
                    >
                  </li>
                </ul>
              </div>

              <div class="col-sm-3">
                <ul class="footer-detail">
                  <li class="footer-name">Ian Bradshaw</li>
                  <li><a href="tel:+44 7468 525 486">+44 7468 525 486</a></li>
                  <li>
                    <a href="mailto:ibradshaw@edwardcharles.co.uk"
                      >ibradshaw@edwardcharles.co.uk</a
                    >
                  </li>
                </ul>
              </div>

              <div class="col-sm-3">
                <ul class="footer-detail footer-detail-last">
                  <li class="footer-name">Andrew Okin</li>
                  <li><a href="tel:+44 7887 714 491">+44 7887 714 491</a></li>
                  <li>
                    <a href="mailto:aokin@edwardcharles.co.uk">aokin@edwardcharles.co.uk</a>
                  </li>
                </ul>
              </div>

            </div>
          </div>
        </div>

        <div class="footer-bottom footer-band bg-green">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <div class="footer-credit color-green">
                  <a href="https://graphicks.co.uk/" target="_blank"
                    >Website by Graphicks</a
                  >
                </div>
                <p>A Henderson Park & General Projects production</p>
                <p class="footer-legals">
                  Disclaimer
                Whilst every effort has been made to ensure that the information in this brochure is correct, it is designed as a broad indicative guide only and JLL and Edward Charles reserves the right to amend the specification at its absolute discretion as necessary and without any formal notice of any changes made. Computer generated images in this brochure are intended to be a general guide to the appearance of the development, and occasionally it may be necessary for us to make architectural or design changes. Layouts may vary from those shown as we have a process of continuous development and therefore features may change. This information does not constitute a contract or warranty and prospective purchasers should check the latest plans and specifications with our sales team. Maps are not to scale and approximate distances and journey times are taken from Google Maps. April 2023
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

</div>
<?php wp_footer(); ?> 
    </body>
</html>