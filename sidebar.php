<div class="col-lg-4 col-md-4">
  <div class="sidebar-side">
    <!-- Search sidebar-->
    <div class="sidebar-search">
      <?php echo get_search_form(); ?>
    </div>

    <!-- Search sidebar-->

    <div class="sidebar-categroies">
      <!-- Sidebar categories-->
      <h3>Categories</h3>

      <ul class="catgeorie-list">
        <?php
        $categories = get_categories('exclude=1,4,5,6,7');
        foreach ($categories as $category) {
        ?>
          <li>
            <a href="<?php echo get_category_link($category->term_id); ?>" class="clearfix"> <span><?php echo $category->name; ?></span> </a>
          </li>
        <?php } ?>

      </ul>
      <!-- Sidebar categories-->
    </div>

    <div class="sidebar-tags">
      <!-- Tags sidebar-->

      <h3>Tags</h3>

      <div class="tags-inner">
        <?php
        $tags = get_tags();
        foreach ($tags as $tag) {
        ?>
          <a href="<?php echo get_term_link($tag); ?>"><?php echo $tag->name; ?></a>
        <?php } ?>

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