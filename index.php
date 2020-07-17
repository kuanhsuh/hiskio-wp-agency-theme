<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hiskio-agency
 */

get_header();
?>
<!-- section title -->

<div class="section-title blog-section-title padd-title">
  <div class="row-centered">
    <div class="col-centered col-lg-7">
      <h2 class="title-h2">Large Sidebar Right</h2>

      <p>We can found some diffrent blog</p>
    </div>
  </div>
</div>

<!-- section title -->

<!--Blog Content -->

<section id="blog" class="padd-80">
  <div class="container-page">
    <div class="row">
      <div class="col-lg-8 col-md-8">
        <div class="blog-content">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

              <!--Blog post -->
              <div class="blog-item">
                <div class="blog-item-img">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                  } ?>
                  <img src="assets/images/blog/blog4.jpg" alt="" />
                  <span class="date"><?php the_date(); ?></span>
                </div>

                <div class="blog-summary">
                  <h3><?php the_title(); ?></h3>

                  <div>
                    <?php the_excerpt(); ?>
                    <a class="more-link" href="<?php the_permalink(); ?>">read more →</a>
                  </div>

                  <div class="blog-meta">
                    <ul>
                      <li><?php echo get_the_date(); ?></li>

                      <li><?php the_author(); ?></li>

                      <li>No comments</li>

                      <li><?php the_category(); ?></li>
                    </ul>
                  </div>
                </div>
              </div>

            <?php endwhile;
          else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>
        </div>
      </div>

      <?php get_sidebar(); ?>
    </div>
    <div class="mt-4">
      <?php wp_pagenavi(); ?>
    </div>
  </div>

</section>

<?php

get_footer();
