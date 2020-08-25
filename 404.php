<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package hiskio-agency
 */

get_header();
?>

<div class="container py-5 mt-5">
  <h2 class="text-center">頁面找不到</h2>
  <div class="row d-flex justify-content-center mt-4">
    <div class="col-10 ">
      <img src="<?php echo get_theme_file_uri('assets/images/404.svg'); ?>" alt="" class="w-100">
    </div>
  </div>
</div>


<?php
get_footer();
