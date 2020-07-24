<?php

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hiskio-agency
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if (post_password_required()) {
  return;
}
?>

<?php if (post_password_required()) {
  return;
} ?>
<div id="comments" class="comments-area">
  <?php if (have_comments()) { ?>
    <h4 class="comments-title"><?php comments_number(__('No Comments', 'your-text-domain'), __('1 Comment', 'your-text-domain'), '% ' . __('Comments', 'your-text-domain')); ?></h4>
    <span class="title-line"></span>
    <ol class="comment-list">
      <?php wp_list_comments(array('avatar_size' => 70, 'style' => 'ul', 'callback' => 'hiskio_agency_comments', 'type' => 'all')); ?>
    </ol>
    <?php the_comments_pagination(array('prev_text' => '<i class="fa fa-angle-left" aria-hidden="true"></i> <span class="screen-reader-text">' . __('Previous', 'your-text-domain') . '</span>', 'next_text' => '<span class="screen-reader-text">' . __('Next', 'your-text-domain') . '</span> <i class="fa fa-angle-right" aria-hidden="true"></i>',)); ?>
  <?php } ?>
  <?php if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) { ?>
    <p class="no-comments"><?php _e('Comments are closed.', 'your-text-domain'); ?></p>
  <?php } ?>
  <?php comment_form(); ?>
</div>