<?php

/**
 * Template Name: 所有作品頁面
 *
 *
 */
get_header();
?>

<!-- section title -->
<div class="section-title  portflio-section-title padd-title">
  <div class="row-centered">
    <div class="col-centered col-lg-7">
      <h2 class="title-h2">We are Looking for ? <span id="typed"></span></h2>
      <div id="typed-strings">
        <b>Print</b>
        <b>Web design</b>
        <b>Mobile design</b>
        <b>Branding</b>
        <b>E-commerce</b>
        <b>Motion design</b>
      </div>
      <p class="font-p">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <br> doloremque laudantium, totam
        rem aperiam, eaque ipsa quae ab
      </p>
    </div>
  </div>
</div>
<!-- section title -->
<!-- portfolio -->
<section id="projets" class="padd-80">
  <div class="container-page">
    <div class="row-centered mag-left">
      <div class="col-centered col-lg-12">
        <div class="project-holder two-columns-porfolios">
          <!--Filter-->
          <div class="filter-tab mg-bt-60">
            <button class="btn filter-btn active" data-filter="all">All</button>
            <button class="btn  filter-btn" data-filter="branding">Branding</button>
            <button class="btn filter-btn" data-filter="Web-design">Web design</button>
            <button class="btn filter-btn" data-filter="Graphic-design">Graphic Design</button>
            <button class="btn  filter-btn" data-filter="other">Others</button>
          </div>
          <!--Filter-->
          <div class="projetc-inner">
            <div class="row">
              <div class=" col-lg-6 col-md-6">
                <div class="filter all branding Graphic-design">
                  <div class="project_product-two-columns">
                    <div class="project-holder">
                      <a href="single-portflio-2.html">
                        <img src="<?php echo get_theme_file_uri('assets/images/portflio/1.jpg'); ?>" class="img-responsive" alt="" title="">
                        <div class="project_product-two-columns-holder">
                          <div class="project_product-two-columns-text">
                            <h4>Package Design</h4>
                            <span>Branding</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" col-lg-6 col-md-6">
                <div class="filter all branding Graphic-design">
                  <div class="project_product-two-columns">
                    <div class="project-holder">
                      <a href="single-portflio-2.html">
                        <img src="<?php echo get_theme_file_uri('assets/images/portflio/2.jpg'); ?>" class="img-responsive" alt="" title="">
                        <div class="project_product-two-columns-holder">
                          <div class="project_product-two-columns-text">
                            <h4>Package Design</h4>
                            <span>Branding</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" col-lg-6 col-md-6">
                <div class="filter all branding Web-design other Graphic-design">
                  <div class="project_product-two-columns">
                    <div class="project-holder">
                      <a href="single-portflio-2.html">
                        <img src="<?php echo get_theme_file_uri('assets/images/portflio/3.jpg'); ?>" class="img-responsive" alt="" title="">
                        <div class="project_product-two-columns-holder">
                          <div class="project_product-two-columns-text">
                            <h4>Package Design</h4>
                            <span>Branding</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" col-lg-6 col-md-6">
                <div class="filter all Web-design  other Graphic-design ">
                  <div class="project_product-two-columns">
                    <div class="project-holder">
                      <a href="single-portflio-2.html">
                        <img src="<?php echo get_theme_file_uri('assets/images/portflio/4.jpg'); ?>" class="img-responsive" alt="" title="">
                        <div class="project_product-two-columns-holder">
                          <div class="project_product-two-columns-text">
                            <h4>Package Design</h4>
                            <span>Branding</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" col-lg-6 col-md-6">
                <div class="filter all Web-design">
                  <div class="project_product-two-columns">
                    <div class="project-holder">
                      <a href="single-portflio-2.html">
                        <img src="<?php echo get_theme_file_uri('assets/images/portflio/6.jpg'); ?>" class="img-responsive" alt="" title="">
                        <div class="project_product-two-columns-holder">
                          <div class="project_product-two-columns-text">
                            <h4>Package Design</h4>
                            <span>Branding</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class=" col-lg-6 col-md-6">
                <div class="filter all Web-design">
                  <div class="project_product-two-columns">
                    <div class="project-holder">
                      <a href="single-portflio-2.html">
                        <img src="<?php echo get_theme_file_uri('assets/images/portflio/1.jpg'); ?>" class="img-responsive" alt="" title="">
                        <div class="project_product-two-columns-holder">
                          <div class="project_product-two-columns-text">
                            <h4>Package Design</h4>
                            <span>Branding</span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
