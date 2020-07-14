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
          <!--Blog post -->

          <div class="blog-item">
            <div class="blog-item-img">
              <img src="assets/images/blog/blog4.jpg" alt="" />
              <span class="date">Apr, 12, 2018</span>
            </div>

            <div class="blog-summary">
              <h3>Trends in UX Design</h3>

              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam et justo duo dolores et ea rebum. Stet clita kasd
                gubergren, no sea takimata sanctus sit amet....
                <a class="more-link" href="single-post.html">read more →</a>
              </p>

              <div class="blog-meta">
                <ul>
                  <li>Apr, 12, 2018</li>

                  <li>minti</li>

                  <li>No comments</li>

                  <li>Web design, Print</li>
                </ul>
              </div>
            </div>
          </div>

          <!--Blog post -->

          <div class="blog-item">
            <div class="blog-item-img">
              <img src="assets/images/blog/blog5.jpg" alt="" />
              <span class="date">Apr, 12, 2018</span>
            </div>

            <div class="blog-summary">
              <h3>Web development</h3>

              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam et justo duo dolores et ea rebum. Stet clita kasd
                gubergren, no sea takimata sanctus sit amet....
                <a class="more-link" href="single-post.html">read more →</a>
              </p>

              <div class="blog-meta">
                <ul>
                  <li>Apr, 12, 2018</li>

                  <li>minti</li>

                  <li>No comments</li>

                  <li>Web design, Print</li>
                </ul>
              </div>
            </div>
          </div>

          <!--Blog post -->

          <div class="blog-item">
            <div class="blog-item-img">
              <img src="assets/images/blog/blog6.jpg" alt="" />
              <span class="date">Apr, 12, 2018</span>
            </div>

            <div class="blog-summary">
              <h3>Branding</h3>

              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                sed diam nonumy eirmod tempor invidunt ut labore et dolore
                magna aliquyam erat, sed diam voluptua. At vero eos et
                accusam et justo duo dolores et ea rebum. Stet clita kasd
                gubergren, no sea takimata sanctus sit amet....
                <a class="more-link" href="single-post.html">read more →</a>
              </p>

              <div class="blog-meta">
                <ul>
                  <li>Apr, 12, 2018</li>

                  <li>minti</li>

                  <li>No comments</li>

                  <li>Web design, Print</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4">
        <div class="sidebar-side">
          <!-- Search sidebar-->
          <div class="sidebar-search">
            <form class="search clearfix" method="get" action="#">
              <input type="text" name="name-filed" placeholder="Search ou blog" />
              <button type="submit"><i class="icon_search"></i></button>
            </form>
          </div>

          <!-- Search sidebar-->

          <div class="sidebar-categroies">
            <!-- Sidebar categories-->
            <h3>Categories</h3>

            <ul class="catgeorie-list">
              <li>
                <a href="" class="clearfix"> <span>Web design</span> </a>
              </li>

              <li>
                <a href="" class="clearfix">
                  <span>Developpement</span>
                </a>
              </li>

              <li>
                <a href="" class="clearfix"> <span>UX design</span> </a>
              </li>

              <li>
                <a href="" class="clearfix"> <span>Others</span> </a>
              </li>
            </ul>
            <!-- Sidebar categories-->
          </div>

          <div class="sidebar-tags">
            <!-- Tags sidebar-->

            <h3>Tags</h3>

            <div class="tags-inner">
              <a href="">Web Design</a>
              <a href="">Inspiration</a>
              <a href="">UX Design</a>
              <a href="">Animation</a>
              <a href="">Developpement</a>
              <a href="">UI Design</a>
              <a href="">Mobile</a>
            </div>
            <!-- Tags sidebar-->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php

get_footer();
