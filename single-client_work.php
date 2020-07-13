<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hiskio-agency
 */
// Web Design ID 4
// Brand ID 5
// Graphic Design ID 6
// Other ID 7
$cat_id = get_the_category()[0]->term_id;
if ($cat_id === 5) {
  $portfolio_bg_file = get_theme_file_uri('assets/images/portfolio/bg-branding.jpg');
}
if ($cat_id === 4) {
  $portfolio_bg_file = get_theme_file_uri('assets/images/portfolio/bg-web-design.jpg');
}
if ($cat_id === 6) {
  $portfolio_bg_file = get_theme_file_uri('assets/images/portfolio/bg-graphic-design.jpg');
}
if ($cat_id === 7) {
  $portfolio_bg_file = get_theme_file_uri('assets/images/portfolio/bg-others.jpg');
}

get_header();
?>
<?php while (have_posts()) : the_post(); ?>
  <!-- section title -->

  <div class="section-title ">
    <div class="container-page  portflio-section-title bg-portflio-section padd-title" style="background-image: url(<?php echo $portfolio_bg_file; ?>);">
      <div class="row-centered pd-tp-50">
        <div class="col-centered col-lg-7">
          <h2 class="title-h2"><?php the_title(); ?></h2>
          <small>
            <?php
            foreach (get_the_category() as $category) {
              echo $category->name;
            } ?>
          </small>
          <div class="font-p">
            <?php the_excerpt(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section title -->
  <!-- Portfolio -->
  <section id="projets" class="padd-80">
    <div class="container-page">
      <div class="row">
        <div class="single-portfolio-content col-lg-12">
          <?php
          if (has_post_thumbnail()) {
            the_post_thumbnail('full');
          }
          ?>
          <div class="row">
            <div class="col-lg-8 col-md-8">
              <?php the_content(); ?>
            </div>
            <div class="col-lg-4 col-md-4">
              <div class="info-portfolio">
                <ul>
                  <li class="clearfix"><strong>Client</strong> <span><?php the_field('client_name'); ?></span></li>
                  <li class="clearfix"><strong>Date</strong> <span><?php the_date(); ?></span></li>
                  <li class="clearfix"><strong>Category</strong> <span>
                      <?php
                      foreach (get_the_category() as $category) {
                        echo $category->name;
                      } ?>
                    </span></li>
                  <li class="clearfix"><strong>URL</strong> <span><a href="<?php the_field('client_url'); ?>" target="_blank">View Project</a></span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--related projects -->
  <section class="related-projects ">
    <div class="container-page  padd-80 ">
      <div class="row">
        <div class="row-centered">
          <div class="col-centered col-lg-7">
            <h2 class="title-h2">Related Projects</h2>
            <p class="font-p mg-tp-30 mg-bt-30">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
              rem aperiam, eaque ipsa quae ab
            </p>
          </div>
        </div>
        <div class=" col-lg-4  col-md-4">
          <div class="project_product">
            <div class="project-holder">
              <img src="assets/images/portflio/3.jpg" class="img-responsive" alt="" title="">
              <div class="text-holder">
                <div class="text-holder-outer">
                  <div class="text-holder-inner">
                    <h4>Branding Project</h4>
                    <div class="icon-holder">
                      <a href="assets/images/portflio/branding-3.jpg" class="modal-venobox project-link">
                        <i class=" icon_zoom-in_alt"></i>
                      </a>
                      <a href="single-portflio.html" class=" project-link">
                        <i class="icon_link_alt"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-lg-4  col-md-4">
          <div class="project_product">
            <div class="project-holder">
              <img src="assets/images/portflio/2.jpg" class="img-responsive" alt="" title="">
              <div class="text-holder">
                <div class="text-holder-outer">
                  <div class="text-holder-inner">
                    <h4>Branding Project</h4>
                    <div class="icon-holder">
                      <a href="assets/images/portflio/branding-3.jpg" class="modal-venobox project-link">
                        <i class=" icon_zoom-in_alt"></i>
                      </a>
                      <a href="single-portflio.html" class=" project-link">
                        <i class="icon_link_alt"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=" col-lg-4  col-md-4">
          <div class="project_product">
            <div class="project-holder">
              <img src="assets/images/portflio/6.jpg" class="img-responsive" alt="" title="">
              <div class="text-holder">
                <div class="text-holder-outer">
                  <div class="text-holder-inner">
                    <h4>Branding Project</h4>
                    <div class="icon-holder">
                      <a href="assets/images/portflio/branding-3.jpg" class="modal-venobox project-link">
                        <i class=" icon_zoom-in_alt"></i>
                      </a>
                      <a href="single-portflio.html" class=" project-link">
                        <i class="icon_link_alt"></i>
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
  </section>
  <!--related projects -->
<?php endwhile;
wp_reset_query(); ?>
<?php
get_footer();
