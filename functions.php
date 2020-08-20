<?php

/**
 * hiskio-agency functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package hiskio-agency
 */

if (!defined('_S_VERSION')) {
  // Replace the version number of the theme on each release.
  define('_S_VERSION', '1.0.0');
}

if (!function_exists('hiskio_agency_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function hiskio_agency_setup()
  {
    /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on hiskio-agency, use a find and replace
		 * to change 'hiskio-agency' to the name of your theme in all the template files.
		 */
    load_theme_textdomain('hiskio-agency', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
    add_theme_support('title-tag');

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
      array(
        'menu-1' => esc_html__('Primary', 'hiskio-agency'),
      )
    );

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
      )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
      'custom-background',
      apply_filters(
        'hiskio_agency_custom_background_args',
        array(
          'default-color' => 'ffffff',
          'default-image' => '',
        )
      )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
      'custom-logo',
      array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
  }
endif;
add_action('after_setup_theme', 'hiskio_agency_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hiskio_agency_content_width()
{
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters('hiskio_agency_content_width', 640);
}
add_action('after_setup_theme', 'hiskio_agency_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function hiskio_agency_widgets_init()
{
  register_sidebar(
    array(
      'name'          => esc_html__('Sidebar', 'hiskio-agency'),
      'id'            => 'sidebar-1',
      'description'   => esc_html__('Add widgets here.', 'hiskio-agency'),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h2 class="widget-title">',
      'after_title'   => '</h2>',
    )
  );
}
add_action('widgets_init', 'hiskio_agency_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function hiskio_agency_scripts()
{
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), _S_VERSION);
  wp_enqueue_style('elegant-icons', get_template_directory_uri() . '/assets/css/elegant-icons.css');
  wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
  wp_enqueue_style('owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
  wp_enqueue_style('venobox', get_template_directory_uri() . '/assets/css/venobox.css');
  wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/style.css');
  wp_enqueue_style('theme-responsive', get_template_directory_uri() . '/assets/css/responsive.css');
  wp_enqueue_style('hiskio-agency-style', get_stylesheet_uri(), array(), _S_VERSION);
  wp_style_add_data('hiskio-agency-style', 'rtl', 'replace');

  wp_enqueue_script('hiskio-agency-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_deregister_script('jquery'); // remove standard jquery
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.4.min.js', array(), _S_VERSION, true);

  wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), _S_VERSION, true);
  wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/js/jquery.easing.js', array(), _S_VERSION, true);
  wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), _S_VERSION, true);
  wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), _S_VERSION, true);
  wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.min.js', array(), _S_VERSION, true);
  wp_enqueue_script('jquery-scrollUp', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', array(), _S_VERSION, true);
  wp_enqueue_script('jquery-ajaxchimp', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array(), _S_VERSION, true);
  if (is_front_page()) {
    wp_enqueue_script('typed', get_template_directory_uri() . '/assets/js/typed.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('text-typed', get_template_directory_uri() . '/assets/js/text-typed.js', array(), _S_VERSION, true);
  }
  wp_enqueue_script('venobox', get_template_directory_uri() . '/assets/js/venobox.min.js', array(), _S_VERSION, true);

  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'hiskio_agency_scripts');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length($length)
{
  return 200;
}
add_filter('excerpt_length', 'wpdocs_custom_excerpt_length', 999);

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more($more)
{
  return '...';
}
add_filter('excerpt_more', 'wpdocs_excerpt_more');


// Custom Callback

function hiskio_agency_comments($comment, $args, $depth)
{
  $GLOBALS['comment'] = $comment; ?>
  <li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">

    <div class="comment-wrap">
      <div class="comment-img">
        <?php echo get_avatar($comment, $args['avatar_size'], null, null, array('class' => array('img-responsive', 'img-circle'))); ?>
      </div>
      <div class="comment-body">
        <h4 class="comment-author"><?php echo get_comment_author_link(); ?></h4>
        <span class="comment-date"><?php printf(__('%1$s at %2$s', 'your-text-domain'), get_comment_date(),  get_comment_time()) ?></span>
        <?php if ($comment->comment_approved == '0') { ?><em><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> <?php _e('Comment awaiting approval', 'your-text-domain'); ?></em><br /><?php } ?>
        <?php comment_text(); ?>
        <span class="comment-reply"> <?php comment_reply_link(array_merge($args, array('reply_text' => __('回覆', 'your-text-domain'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?></span>
      </div>
    </div>
  <?php }

// Enqueue comment-reply

add_action('wp_enqueue_scripts', 'hiskio_agency_public_scripts');

function hiskio_agency_public_scripts()
{
  if (!is_admin()) {
    if (is_singular() && get_option('thread_comments')) {
      wp_enqueue_script('comment-reply');
    }
  }
}

// Enqueue fontawesome

add_action('wp_enqueue_scripts', 'hiskio_agency_public_styles');

function hiskio_agency_public_styles()
{
  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
}

add_action('rest_api_init', function () {
  register_rest_field(['post', 'client_work'], 'featured_image_src', array(
    'get_callback' => function ($post_arr) {
      $image_src_arr = wp_get_attachment_image_src($post_arr['featured_media'], 'thumbnail');

      return $image_src_arr[0];
    },
    'update_callback' => null,
    'schema' => null
  ));
});

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
  require get_template_directory() . '/inc/jetpack.php';
}
