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
              <a href=" "><img alt="" src="assets/images/team/team1.jpg" class="avatar-photo"></a>
            </div>
            <div class="author-bio">
              <h4>About The Author</h4>
              <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut
                aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="commnent-blog">
            <h3>3 Comments</h3>
            <div class="comment-blog-inner">
              <div class="avatar-blog">
                <img src="assets/images/team/team3.jpg" alt="">
              </div>
              <div class="comment-blog-text">
                <span>John Marconi</span>
                <small>August 7, 2018</small>
                <p>
                  Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                  consequatur aut perferendis doloribus asperiores repellat.
                </p>
              </div>
            </div>
            <div class="comment-blog-inner">
              <div class="avatar-blog">
                <img src="assets/images/team/team4.jpg" alt="">
              </div>
              <div class="comment-blog-text">
                <span>John Marconi</span>
                <small>August 7, 2018</small>
                <p>
                  Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                  consequatur aut perferendis doloribus asperiores repellat.
                </p>
              </div>
            </div>
            <div class="comment-blog-inner">
              <div class="avatar-blog">
                <img src="assets/images/team/team2.jpg" alt="">
              </div>
              <div class="comment-blog-text">
                <span>John Marconi</span>
                <small>August 7, 2018</small>
                <p>
                  Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias
                  consequatur aut perferendis doloribus asperiores repellat.
                </p>
              </div>
            </div>
          </div>
          <div class="comments-reply">
            <h3>Leave a reply</h3>
            <form class="form-comment">
              <div class="row form-group">
                <div class="col-lg-6">
                  <input type="text" name="name-field" class="form-control" placeholder="Your name">
                </div>
                <div class="col-lg-6">
                  <input type="email" name="name-field" class="form-control" placeholder="Your E-mail">
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="5" cols="3" placeholder="Your message"></textarea>
              </div>
              <div class="from-group">
                <a href="#" class="btn btn-red  "> Comment </a>
              </div>
            </form>
          </div>
        </div>

        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

<?php endwhile; ?>
<?php
get_footer();
