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
              <?php
              $brand_loop = new WP_Query(array(
                'post_type' => 'client_work',
                'order' => 'ASC',
                'cat' => 5,
                'posts_per_page' => '4'
              ));
              while ($brand_loop->have_posts()) : $brand_loop->the_post(); ?>
                <div class=" col-lg-6 col-md-6 filter branding">
                  <div class="project_product-two-columns">
                    <div class="project-holder">
                      <a href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('full', ['class' => 'img-responsive']);
                        }
                        ?>
                        <div class="project_product-two-columns-holder">
                          <div class="project_product-two-columns-text">
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo get_cat_name(5); ?></span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

              <?php endwhile;
              wp_reset_query(); ?>

              <?php
              $web_loop = new WP_Query(array(
                'post_type' => 'client_work',
                'order' => 'ASC',
                'cat' => 4,
                'posts_per_page' => '4'
              ));
              while ($web_loop->have_posts()) : $web_loop->the_post(); ?>

                <div class=" col-lg-6 col-md-6 filter Web-design">
                  <div class="project_product-two-columns">
                    <div class="project-holder">
                      <a href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('full', ['class' => 'img-responsive']);
                        }
                        ?>
                        <div class="project_product-two-columns-holder">
                          <div class="project_product-two-columns-text">
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo get_cat_name(4); ?></span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

              <?php endwhile;
              wp_reset_query(); ?>

              <?php
              $graphic_loop = new WP_Query(array(
                'post_type' => 'client_work',
                'order' => 'ASC',
                'cat' => 6,
                'posts_per_page' => '4'
              ));
              while ($graphic_loop->have_posts()) : $graphic_loop->the_post(); ?>
                <div class=" col-lg-6 col-md-6 filter Graphic-design">
                  <div class="project_product-two-columns">
                    <div class="project-holder">
                      <a href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('full', ['class' => 'img-responsive']);
                        }
                        ?>
                        <div class="project_product-two-columns-holder">
                          <div class="project_product-two-columns-text">
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo get_cat_name(6); ?></span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

              <?php endwhile;
              wp_reset_query(); ?>

              <?php
              $other_loop = new WP_Query(array(
                'post_type' => 'client_work',
                'order' => 'ASC',
                'cat' => 7,
                'posts_per_page' => '4'
              ));
              while ($other_loop->have_posts()) : $other_loop->the_post(); ?>

                <div class=" col-lg-6 col-md-6 filter other">
                  <div class="project_product-two-columns">
                    <div class="project-holder">
                      <a href="<?php the_permalink(); ?>">
                        <?php
                        if (has_post_thumbnail()) {
                          the_post_thumbnail('full', ['class' => 'img-responsive']);
                        }
                        ?>
                        <div class="project_product-two-columns-holder">
                          <div class="project_product-two-columns-text">
                            <h4><?php the_title(); ?></h4>
                            <span><?php echo get_cat_name(7); ?></span>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>

              <?php endwhile;
              wp_reset_query(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();
