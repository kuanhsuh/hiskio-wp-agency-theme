<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hiskio-agency
 */

?>
<!-- Footer-->
<footer class="footer">
  <div class="footer-warpper">
    <div class="footer-top">
      <div class="container-page">
        <div class="footer-top  clearfix">
          <div class="footer-bottom-content clearfix">
            <div class="row">
              <div class="col-lg-3 col-md-3">
                <div class="logo-footer">
                  <img src="<?php echo get_theme_file_uri('assets/images/logo-white.png'); ?>" alt="Big Boy Can Code Agency">
                </div>
                <div class="text-footer">
                  <p>
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                  </p>
                </div>
                <ul class="list-social list-inline">
                  <li>
                    <a href="#" class="btn btn-circle btn-facebook">
                      <i class="social_facebook "></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-circle btn-twitter">
                      <i class="social_twitter "></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-circle btn-google-plus">
                      <i class="social_googleplus "></i>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="btn btn-circle btn-instgram">
                      <i class="social_instagram"></i>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3">
                <h5>Menu</h5>
                <ul class="list-menu">
                  <li>
                    <a href="#">Home </a>
                  </li>
                  <li>
                    <a href="#">About</a>
                  </li>
                  <li>
                    <a href="#">Services</a>
                  </li>
                  <li>
                    <a href="#">Portfolio</a>
                  </li>
                  <li>
                    <a href="#">Team</a>
                  </li>
                  <li>
                    <a href="#">Blog</a>
                  </li>
                  <li>
                    <a href="#">Contact</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3">
                <h5>Contact </h5>
                <ul class="list-contact">
                  <li>
                    71 Amsteroum Avenue Sedney, NY 10243
                  </li>
                  <li>+369 258 147 258</li>
                  <li>s-tudio@contact.com</li>
                </ul>
              </div>
              <div class="col-lg-3 col-md-3">
                <h5>Subscribe to our newsletter</h5>
                <!-- Newsletter -->
                <div class="newsletter-block">
                  <div class="subscribe-form">
                    <form action="#" method="get" class="subscribe-mail">
                      <div class="form-group ">
                        <input type="email" class="form-control email-input" placeholder="Enter your email">
                        <button type="submit" class="btn btn-subscribe bg-color-1">Subscribe</button>
                      </div>
                      <p class="error-message"></p>
                      <p class="sucess-message"></p>
                    </form>
                  </div>
                </div>
                <!-- Newsletter -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <!-- COPYRIGHT TEXT -->
      <div class="copyright">
        <p>2018 © Copyright Design_GrapahMA All rights Reserved.</p>
      </div>
      <!-- COPYRIGHT TEXT -->
    </div>
  </div>
</footer>
<!--Footer -->

<?php wp_footer(); ?>

<?php if (is_front_page()) { ?>

  <script>
    var videoYoutubeLink = "<?php the_field('video_youtube_link', 10); ?>";

    /*----------------------------------------------------*/
    /*  VIDEO POP PUP
      /*----------------------------------------------------*/

    $(".video-modal").magnificPopup({
      type: "iframe",

      iframe: {
        patterns: {
          youtube: {
            index: "youtube.com",
            src: videoYoutubeLink,
          },
        },
      },
    });
  </script>

<?php } ?>

</body>

</html>