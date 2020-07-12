<?php

/**
 * Template Name: 首頁
 *
 *
 */
get_header();
// $heading_title = get_post_meta(10, "heading_title", true);
// $heading_subtitle = get_post_meta(10, "heading_subtitle", true);
$video_img = get_field('video_background_img', 10);
$team_one_img = get_field('team_one_img', 10);
$team_two_img = get_field('team_two_img', 10);
?>
<!--Begin Hero Section-->
<section id="home" class="pd-tp-80">
  <div class="container-page  hero">
    <div class="col-md-12 col-xs-12 col-sm-12">
      <div class="hero-text">
        <h2>
          <?php the_field('heading_title', 10); ?></h2>
        <div id="typed-strings">
          <b>Landing Pages</b>
          <b>Logo Design</b>
          <b>Illustrations</b>
          <b>eCommerce</b>
        </div>
        <span id="typed"></span>
        <p><?php the_field('heading_subtitle', 10); ?></p> <a href="" class="btn btn-red">About us</a>
      </div>
    </div>
  </div>
</section>

<section id="about-p" class="pd-tp-80 pd-bt-40">
  <div class="container-page">
    <div class="row">
      <div class="row-centered">
        <div class="col-centered col-lg-7">
          <h2 class="title-h2"><?php the_field('service_heading', 10); ?></h2>
          <p class="font-p mg-tp-30 mg-bt-40">
            <?php the_field('service_subheading', 10); ?>
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-block">
          <div class="icon-service">
            <img src="<?php echo get_theme_file_uri('assets/images/magic-wand.svg'); ?>" alt="">
          </div>
          <h3><?php the_field('service_one_heading', 10); ?></h3>
          <p><?php the_field('service_one_description', 10); ?>
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-block">
          <div class="icon-service">
            <img src="<?php echo get_theme_file_uri('assets/images/brain.svg'); ?> " alt="">
          </div>
          <h3><?php the_field('service_two_heading', 10); ?></h3>
          <p><?php the_field('service_two_description', 10); ?>
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-4">
        <div class="service-block">
          <div class="icon-service">
            <img src="<?php echo get_theme_file_uri('assets/images/megaphone.svg'); ?>" alt="">
          </div>
          <h3><?php the_field('service_three_heading', 10); ?></h3>
          <p><?php the_field('service_three_description', 10); ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--About-->
<section id="about">
  <!--container-->
  <div class="container-page bg-color padd-80">
    <div class="container">
      <div class="row ">
        <div class="col-lg-5 col-md-5">
          <h2 class="title-h2"><?php the_field('about_heading', 10); ?></h2>
          <?php the_field('about_description', 10); ?>
          <a href="" class="btn btn-red">Get started</a>
        </div>
        <div class="col-lg-7 col-md-7">
          <div class="row">
            <div class="col-md-6 col-lg-6">
              <div class="icon-block ">
                <img src="<?php echo get_theme_file_uri('assets/images/browser.svg'); ?>" alt="">
                <h3><?php the_field('about_one_heading', 10); ?></h3>
                <p><?php the_field('about_one_description', 10); ?>
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="icon-block ">
                <img src="<?php echo get_theme_file_uri('assets/images/startup.svg'); ?>" alt="">
                <h3><?php the_field('about_two_title', 10); ?></h3>
                <p><?php the_field('about_two_description', 10); ?>
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="icon-block ">
                <img src="<?php echo get_theme_file_uri('assets/images/bag.svg'); ?>" alt="">
                <h3>BRANDING</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-6">
              <div class="icon-block ">
                <img src="<?php echo get_theme_file_uri('assets/images/chat.svg'); ?>" alt="">
                <h3>Collaboration</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--container-->
</section>
<section id="video-features">
  <div class="container-page padd-80 video-bloc" style="background-image: url(<?php echo $video_img['url']; ?>);">
    <div class="container">
      <div class="row">
        <div class="row-centered">
          <div class="col-centered col-lg-6">
            <div class="text-video">
              <h2>what can we do?</h2>
              <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                aliquid ex ea commodi consequatur
              </p>
              <div class="ply-btn">
                <a href="https://www.youtube.com/embed/lnqqrkl7aWc" class="video-modal"> <img src="<?php echo get_theme_file_uri('assets/images/play.svg'); ?>" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="services" class="padd-80 ">
  <div class="container-page">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <h2 class="title-h2">Digital Design Studio </h2>
          <p class="mg-tp-30">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
            rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
            explicabo.
          </p>
          <p class="mg-bt-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.
          </p>
          <div class="row">
            <div class="col-lg-6 col-md-6">
              <ul class="list-p">
                <li>Excepteur sint occaecat</li>
                <li>Excepteur sint occaecat</li>
                <li>Excepteur sint occaecat</li>
              </ul>
            </div>
            <div class="col-lg-6 col-md-6">
              <ul class="list-p">
                <li>Excepteur sint occaecat</li>
                <li>Excepteur sint occaecat</li>
                <li>Excepteur sint occaecat</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <h2 class="title-h2">What we offer ? </h2>
          <p class="mg-tp-30">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium. Ut enim ad
            minim veniam, quis nostrud exercitation
          </p>
          <div class="progrees-bar-content">
            <div class="progrees-bar-text clearfix">
              <span class=" float-left"> Web Hosting</span>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                70
              </div>
            </div>
          </div>
          <div class="progrees-bar-content">
            <div class="progrees-bar-text clearfix">
              <span class=" float-left"> Web Design</span>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                90
              </div>
            </div>
          </div>
          <div class="progrees-bar-content">
            <div class="progrees-bar-text clearfix">
              <span class=" float-left">BRANDING</span>
            </div>
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                60
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="numbers">
  <div class="container-page  bg-color-1 padd-40">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <div class="row row-mag">
            <div class="number-block  col-lg-3 col-md-3">
              <span>132</span>
              <small>Web Projects </small>
            </div>
            <div class="number-block   col-lg-3 col-md-3">
              <span>64</span>
              <small>Happy Customers</small>
            </div>
            <div class="number-block  col-lg-3 col-md-3">
              <span>58</span>
              <small>Increased Profits</small>
            </div>
            <div class="number-block  col-lg-3 col-md-3">
              <span>970</span>
              <small>Coding lines </small>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="number-text">
            <p>An unmeasurable amount of awesomenimity something can produce. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="portfolio">
  <div class="container-page padd-80">
    <div class="row row-mag">
      <div class="row-centered">
        <div class="col-centered col-lg-7 col-md-7">
          <h2 class="title-h2">Our Projects </h2>
          <p class="font-p mg-tp-30 mg-bt-30">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
            rem aperiam, eaque ipsa quae ab
          </p>
        </div>
        <div class="project-holder">
          <div class="filter-tab">
            <button class="btn active filter-btn" data-filter="all">All</button>
            <button class="btn filter-btn" data-filter="branding">Branding</button>
            <button class="btn filter-btn" data-filter="Web-design">Web design</button>
            <button class="btn filter-btn" data-filter="Graphic-design">Graphic Design</button>
            <button class="btn filter-btn" data-filter="other">Others</button>
          </div>
          <div class="projetc-inner">
            <div class="row">
              <div class=" col-lg-4 col-md-4 filter branding">
                <div class="project_product">
                  <div class="project-holder">
                    <img src="<?php echo get_theme_file_uri('assets/images/portflio/1.jpg'); ?>" class="img-responsive" alt="" title="">
                    <div class="text-holder">
                      <div class="text-holder-outer">
                        <div class="text-holder-inner">
                          <h4>Branding</h4>
                          <div class="icon-holder">
                            <a href="assets/images/portflio/1.jpg" class="modal-venobox project-link">
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
              <div class=" col-lg-4 col-md-4 filter Web-design">
                <div class="project_product">
                  <div class="project-holder">
                    <img src="<?php echo get_theme_file_uri('assets/images/portflio/2.jpg'); ?>" class="img-responsive" alt="" title="">
                    <div class="text-holder">
                      <div class="text-holder-outer">
                        <div class="text-holder-inner">
                          <h4>Web Design</h4>
                          <div class="icon-holder">
                            <a href="assets/images/portflio/2.jpg" class="modal-venobox project-link">
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
              <div class=" col-lg-4 col-md-4 filter Graphic-design">
                <div class="project_product">
                  <div class="project-holder">
                    <img src="<?php echo get_theme_file_uri('assets/images/portflio/3.jpg'); ?>" class="img-responsive" alt="" title="">
                    <div class="text-holder">
                      <div class="text-holder-outer">
                        <div class="text-holder-inner">
                          <h4>Graphic Design</h4>
                          <div class="icon-holder">
                            <a href="assets/images/portflio/3.jpg" class="modal-venobox project-link">
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
              <div class=" col-lg-4  col-md-4 filter other">
                <div class="project_product">
                  <div class="project-holder">
                    <img src="<?php echo get_theme_file_uri('assets/images/portflio/4.jpg'); ?>" class="img-responsive" alt="" title="">
                    <div class="text-holder">
                      <div class="text-holder-outer">
                        <div class="text-holder-inner">
                          <h4>Other</h4>
                          <div class="icon-holder">
                            <a href="assets/images/portflio/4.jpg" class="modal-venobox project-link">
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
        </div>
      </div>
    </div>
  </div>
</section>
<section id="team">
  <div class="container-page  bg-color padd-80">
    <div class="container">
      <div class="row">
        <div class="row-centered">
          <div class="col-centered col-lg-7">
            <h2 class="title-h2"><?php the_field('team_heading', 10); ?></h2>
            <p class="font-p mg-tp-30 mg-bt-60">
              <?php the_field('team_subheading', 10); ?>
            </p>
          </div>
        </div>
        <div class="team-caroussel carousel">
          <div class="item">
            <div class="team-bloc">
              <img src="<?php echo $team_one_img['url']; ?>" alt="<?php echo $team_one_img['alt']; ?>">
              <div class="team-bloc-inner">
                <h3><?php the_field('team_one_name', 10); ?></h3>
                <span><?php the_field('team_one_position', 10); ?></span>
                <p><?php the_field('team_one_description', 10); ?> </p>
                <ul class="social-icon">
                  <?php if (get_field('team_one_fb', 10)) { ?>
                    <li><a href="<?php the_field('team_one_fb', 10); ?>"><i class="social_facebook"></i></a></li>
                  <?php } ?>
                  <li><a href=""><i class="social_twitter"></i></a></li>
                  <li><a href=""><i class="social_linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="team-bloc">
              <img src="<?php echo $team_two_img['url']; ?>" alt="<?php echo $team_two_img['alt']; ?>">
              <div class="team-bloc-inner">
                <h3><?php the_field('team_two_name', 10); ?></h3>
                <span><?php the_field('team_two_position', 10); ?></span>
                <p><?php the_field('team_two_description', 10); ?> </p>
                <ul class="social-icon">
                  <?php if (get_field('team_two_fb', 10)) { ?>
                    <li><a href="<?php the_field('team_two_fb', 10); ?>"><i class="social_facebook"></i></a></li>
                  <?php } ?>
                  <li><a href=""><i class="social_twitter"></i></a></li>
                  <li><a href=""><i class="social_linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="blog">
  <div class="container-page padd-80">
    <div class="row">
      <div class="row-centered">
        <div class="col-centered col-lg-7">
          <h2 class="title-h2">Our Blog</h2>
          <p class="font-p mg-tp-30 mg-bt-60">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
            rem aperiam, eaque ipsa quae ab
          </p>
        </div>
      </div>
      <div class="col-lg-4  col-md-4">
        <div class="blog-inner">
          <div class="blog-image">
            <img src="<?php echo get_theme_file_uri('assets/images/blog/blog1.jpg'); ?>" alt="">
            <div class="blog-date">
              <strong>15</strong>
              <span>APR</span>
            </div>
          </div>
          <div class="blog-inner-content">
            <h3><a href="single-post.html">Excepteur sint occaecat cupidatat non proident</a></h3>
            <div class="comment-blog">
              <ul>
                <li><a href=""><i class="icon_ribbon_alt"></i>Strategy</a></li>
                <li><a href=""><i class=" icon_comment_alt"></i> 5 Comments</a></li>
              </ul>
            </div>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque audantium,
              totam rem aperiam,
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4  col-md-4">
        <div class="blog-inner">
          <div class="blog-image">
            <img src="<?php echo get_theme_file_uri('assets/images/blog/blog2.jpg'); ?>" alt="">
            <div class="blog-date">
              <strong>15</strong>
              <span>APR</span>
            </div>
          </div>
          <div class="blog-inner-content">
            <h3><a href="single-post.html">Excepteur sint occaecat cupidatat non proident</a></h3>
            <div class="comment-blog">
              <ul>
                <li><a href=""><i class="icon_ribbon_alt"></i>Strategy</a></li>
                <li><a href=""><i class=" icon_comment_alt"></i> 5 Comments</a></li>
              </ul>
            </div>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque audantium,
              totam rem aperiam,
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4  col-md-4">
        <div class="blog-inner">
          <div class="blog-image">
            <img src="<?php echo get_theme_file_uri('assets/images/blog/blog3.jpg'); ?>" alt="">
            <div class="blog-date">
              <strong>15</strong>
              <span>APR</span>
            </div>
          </div>
          <div class="blog-inner-content">
            <h3><a href="single-post.html">Excepteur sint occaecat cupidatat non proident</a></h3>
            <div class="comment-blog">
              <ul>
                <li><a href=""><i class="icon_ribbon_alt"></i>Strategy</a></li>
                <li><a href=""><i class=" icon_comment_alt"></i> 5 Comments</a></li>
              </ul>
            </div>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque audantium,
              totam rem aperiam,
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="testimonials">
  <div class="container-page padd-80 bg-color-1">
    <div class="container">
      <div class="row">
        <div class="row-centered">
          <div class="col-centered col-lg-7 col-md-7">
            <h2 class="title-h2 color-white">What our clients are saying</h2>
            <p class="font-p mg-tp-30 mg-bt-30 color-white">
              Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
              totam rem aperiam, eaque ipsa quae ab
            </p>
            <div class="testimonial-caroussel carousel">
              <?php
              $args = array(
                'post_type' => 'testimonal'
              );
              $testimonial_query = new WP_Query($args);

              while ($testimonial_query->have_posts()) : $testimonial_query->the_post();
              ?>
                <div class="item">
                  <div class="avatar-item">
                    <?php if (has_post_thumbnail()) {
                      the_post_thumbnail('medium');
                    } ?>
                  </div>
                  <div class="item-inner">
                    <?php the_content(); ?>
                    <div class="rating">
                      <?php
                      $star_count = (int) get_field('testimonial_star_count');
                      for ($x = 1; $x <= $star_count; $x++) {
                        echo "<span class='icon_star'></span>";
                      }
                      ?>
                    </div>
                    <div class="avatar-info">
                      <h4><?php the_title(); ?></h4>
                      <span><?php the_field('testimonial_position'); ?></span>
                    </div>
                  </div>
                </div>
              <?php endwhile;
              wp_reset_query();
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--sponsors clients-->
<section id="sponsors">
  <div class="container-page pd-tp-80 pd-bt-60">
    <!--container-->
    <div class="container ">
      <div class="row ">
        <div class="client-caroussel ">
          <?php
          $args = array(
            'post_type' => 'clients_img'
          );
          $client_img_query = new WP_Query($args);

          while ($client_img_query->have_posts()) : $client_img_query->the_post();
          ?>

            <div class="item ">
              <div class="client-item-img ">

                <?php if (has_post_thumbnail()) {
                  the_post_thumbnail('large', array('class' => 'img-responsive'));
                } ?>

              </div>
            </div>

          <?php endwhile;
          wp_reset_query();
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!--End sponsors clients-->

<script>
  var videoYoutubeLink = "<?php the_field('video_youtube_link', 10); ?>";
</script>
<?php
get_footer();
