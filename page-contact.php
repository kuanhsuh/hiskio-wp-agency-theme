<?php

/**
 * Template Name: 聯絡我們
 *
 *
 */
get_header();
?>

<!-- section title -->
<div class="section-title  blog-section-title padd-title">
  <div class="row-centered">
    <div class="col-centered col-lg-7">
      <h2 class="title-h2">Large Sidebar Right </h2>
      <p>We can found some diffrent blog </p>
    </div>
  </div>
</div>
<section id="contact">
  <div class="container-page  bg-color">
    <div class="contact-inner padd-80">
      <div class="row-centered">
        <div class="col-centered col-lg-7">
          <h2 class="title-h2  ">You can contact us</h2>
          <p class="font-p mg-tp-30 mg-bt-30 ">
            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
            rem aperiam, eaque ipsa quae ab
          </p>
        </div>
        <div class="col-centered col-lg-6">
          <div class="content-map">
            <?php echo do_shortcode('[contact-form-7 id="155" title="Contact Form"]'); ?>
            <div class="btn-map"><i class=" icon_pin_alt"></i></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="googlemap">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.0204203507983!2d120.31391331508615!3d22.690283734358648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e0512b5824861%3A0x2b258b5cf5dc5dbb!2z5aSn5bKz5ZyL6Zqb6ZaA56qX5bu65p2Q!5e0!3m2!1szh-TW!2stw!4v1587682246539!5m2!1szh-TW!2stw" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>


<?php
get_footer();
