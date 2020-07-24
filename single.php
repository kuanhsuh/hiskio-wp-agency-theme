<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hiskio-agency
 */

get_header();
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>
<?php while (have_posts()) : the_post(); ?>
  <!-- section title  -->
  <div class="section-title ">
    <div class="container-page portflio-section-title bg-portflio-section padd-title" style="background-image: url(<?php echo $featured_img_url; ?>);">
      <div class="row-centered pd-tp-50">
        <div class="col-centered col-lg-7">
          <h2 class="title-h2"><?php the_title(); ?></h2>
          <small><?php the_date(); ?></small>
          <div class="font-p">
            <?php the_excerpt(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section title  -->
  <!-- Blog content -->
  <div class="blog-single-post padd-80">
    <!-- container page -->
    <div class="container-page ">
      <div class="row ">
        <div class="col-lg-8 col-md-8">
          <h3><?php the_title(); ?></h3>
          <div class="blog-meta">
            <ul>
              <li><?php echo get_the_date(); ?></li>
              <li><?php the_author(); ?></li>
              <li>No comments </li>
              <li><?php the_category(); ?></li>
            </ul>
          </div>
          <div>
            <?php the_content(); ?>
          </div>
          <div class="sharebox clearfix">
            <ul>
              <li><a href="#"><i class="social_facebook"></i>Facebook</a></li>
              <li><a href="#"><i class="social_twitter"></i>Twitter</a></li>
              <li><a href="#"><i class="social_googleplus"></i>google plus</a></li>
              <li><a href="#"><i class="icon_mail_alt"></i>E-mail</a></li>
            </ul>
          </div>
          <div class="author-info">
            <div class="author-image">

              <?php echo get_avatar(get_the_author_meta('ID'), 32, '', '', array('class' => 'avatar-photo')); ?>
            </div>
            <div class="author-bio">
              <h4>About The Author <?php echo get_the_author_meta("display_name"); ?></h4>
              <p><?php echo get_the_author_meta("description"); ?>
              </p>
            </div>
          </div>


          <?php
          // If comments are open or we have at least one comment, load up the comment template.
          if (comments_open() || get_comments_number()) :
            comments_template();
          endif;
          ?>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>


  </div>

<?php endwhile; ?>
<?php
get_footer();
