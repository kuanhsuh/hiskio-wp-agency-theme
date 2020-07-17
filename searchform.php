<form class="search clearfix" method="get" action="<?php echo home_url('/'); ?>">
  <input type="text" value="<?php echo get_search_query() ?>" name="s" placeholder="Search our blog" />
  <button type="submit"><i class="icon_search"></i></button>
</form>