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
          <a data-scroll="" class="nav-link section-scroll" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a data-scroll="" class="nav-link section-scroll" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a data-scroll="" class="nav-link section-scroll" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a data-scroll="" class="nav-link section-scroll" href="#portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a data-scroll="" class="nav-link section-scroll" href="#team">Team</a>
        </li>
        <li class="nav-item">
          <a data-scroll="" class="nav-link section-scroll" href="#blog">Blog</a>
        </li>
        <li>
          <a data-scroll="" href="#testimonials" class="nav-link section-scroll">Testimonials</a>
        </li>
        <li>
          <a data-scroll="" href="#contact" class="nav-link section-scroll">Contact</a>
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
                      <form method="get" action="#">
                        <div class="form-group">
                          <input type="search" name="field-name" value="" placeholder="Search Here" required="">
                          <button type="submit" class="search-btn"><span class=" icon_search"></span></button>
                        </div>
                      </form>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!--Header-->