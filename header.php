<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hiskio-agency
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
  <?php if (is_page(7)) { ?>
    <style>
      .googlemap {
        position: relative;
        /* 4:3 ratio*/
        overflow: hidden;
        height: 600px;
      }

      .googlemap iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        height: 600px;
      }

      @media screen and(max-width: 620px) {
        .googlemap {
          height: 350px;
        }

        .googlemap iframe {
          height: 350px;
        }
      }
    </style>
  <?php } ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-default" data-offset="100">
  <!-- Page Content -->
  <div class="warpper clearfix">
    <!--sidebar menu-->
    <div class="panel panel-menu right">
      <a href="#" class="menu-btn">
        <span></span>
      </a>
      <ul>
        <li class="nav-item active">
          <a class="nav-link section-scroll" href="<?php echo get_page_link(10); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link section-scroll" href="<?php echo get_page_link(5); ?>">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link section-scroll" href="<?php echo esc_html(site_url("/blog")); ?>">Blog</a>
        </li>
        <li>
          <a href="<?php echo esc_html(site_url("/contact")); ?>" class="nav-link section-scroll">Contact</a>
        </li>
        <li class="menu-contact mg-tp-40"><a target="_blank" href="#">Facebook<i class="social_facebook"></i></a></li>
        <li class="menu-contact"><a target="_blank" href="#">Twitter<i class="social_twitter"></i></a></li>
        <li class="menu-contact"><a target="_blank" href="#">google plus<i class="social_googleplus"></i></a></li>
        <li class="menu-contact"><a target="_blank" href="#">Instagram<i class="social_instagram"></i></a></li>
      </ul>
    </div>
    <div class="panel-overlay"></div>
    <!--sidebar menu-->
    <!-- Header -->
    <header class="navbar-header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <a class="navbar-brand" href="#"><img src="<?php echo get_theme_file_uri('assets/images/logo.png'); ?>" alt="Big Boy Can Code Agency"></a>
        <div class="ml-auto right-nav">
          <ul>
            <li>
              <a href=""><i class="icon_phone"></i>+369 258 147 258 </a>
            </li>
            <li>
              <div class="dropdown search-box ">
                <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class=" icon_search"></span></button>
                <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                  <li class="panel-outer">
                    <div class="form-container">
                      <div class="form-group">
                        <input id="searchInput" type="text" value="" placeholder="Search Here" onkeyup="typingLogic(this)">
                      </div>

                      <div id="search-result">
                        <div>
                          <h4 class="mt-3">文章</h4>
                          <ul class="search-result-post">


                          </ul>
                        </div> <!-- search-result-post -->

                        <hr>
                        <div>
                          <h4>作品</h4>
                          <ul class="search-result-work">

                          </ul>
                        </div> <!-- search-result-work -->
                      </div><!-- search-result -->
                    </div> <!-- form container-->
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--Header-->