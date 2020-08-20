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

<script>
  var previousValue;
  var typingTimer;

  function typingLogic(a) {
    if (a.value != previousValue) {
      clearTimeout(typingTimer);
      typingTimer = setTimeout(function() {
        searchQuery(a.value)
      }, 800)
    }


    previousValue = a.value;
  }

  function searchQuery(searchValue) {
    if (!searchValue) {
      document.querySelector(".search-result-post").innerHTML = " "
      document.querySelector(".search-result-work").innerHTML = " "
      return
    }

    var urls = [`http://localhost:8888/hiskio-agency/wp-json/wp/v2/posts?search=${searchValue}&per_page=3`, `http://localhost:8888/hiskio-agency/wp-json/wp/v2/client_work?search=${searchValue}&per_page=3`]

    Promise.all(urls.map(u => fetch(u))).then(responses =>
      Promise.all(responses.map(res => res.json()))
    ).then(data => {
      displayPostResults(data[0])
      displayWorkResults(data[1])
    })
  }

  function displayPostResults(data) {
    if (data.length === 0) {
      var postResults =
        `
      <li class="my-2 d-flex">
        找不到相關文章
      </li>
      `
      document.querySelector(".search-result-post").innerHTML = postResults;
    } else {
      var postResults = data.map(post =>
        `
      <li class="my-2 d-flex">
        <a href="${post.link}" class="d-flex align-items-center">
          <div class="search-icon">
            <img src="${post.featured_image_src}" alt="" class="mw-none h-100">
          </div>
          <div class="ml-1 mb-0 font-light">${post.title.rendered}</div>
        </a>
      </li> <!-- search-result-item-->
      `
      )

      document.querySelector(".search-result-post").innerHTML = postResults.join(" ");

    }
  }

  function displayWorkResults(data) {
    if (data.length === 0) {
      var workResults =
        `
      <li class="my-2 d-flex">
        找不到相關文章
      </li>
      `
      document.querySelector(".search-result-work").innerHTML = workResults;
    } else {
      var workResults = data.map(post =>
        `
      <li class="my-2 d-flex">
        <a href="${post.link}" class="d-flex align-items-center">
          <div class="search-icon">
            <img src="${post.featured_image_src}" alt="" class="mw-none h-100">
          </div>
          <div class="ml-1 mb-0 font-light">${post.title.rendered}</div>
        </a>
      </li> <!-- search-result-item-->
      `
      )

      document.querySelector(".search-result-work").innerHTML = workResults.join(" ");

    }
  }
</script>

</body>

</html>