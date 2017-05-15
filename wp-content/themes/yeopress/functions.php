<?php
  function format_comment() { ?>
    <li class="comments-list__wrapper__item">
      <div class="comments-list__wrapper__image">
        <?php echo get_avatar( $comment, 32 ); ?>
      </div>
      <div class="comments-list__wrapper__data">
        <div class="comments-list__wrapper__data__top">
          <span><?php printf(__('%s'), get_comment_author_link()) ?> . <?php comment_time('H:i'); ?>hs</span>
        </div>
        <div class="comments-list__wrapper__data__bottom">
          <?php comment_text(); ?>
        </div>
      </div>
    </li>
 <?php } ?>
<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
function theme_enqueue_scripts() {

	wp_register_script('modernizr', get_bloginfo('template_url') . '/js/modernizr.js');
	wp_enqueue_script('modernizr');

	wp_register_script('require', get_bloginfo('template_url') . '/js/vendor/requirejs/require.js', array(), false, true);
	wp_enqueue_script('require');

  wp_register_script('require', get_bloginfo('template_url') . '/js/vendor/jquery/jquery.js', array('require'), false, true);
  wp_enqueue_script( 'jquery' );

	wp_register_script('global', get_bloginfo('template_url') . '/js/global.js', array('jquery'), false, true);
	wp_enqueue_script('global', false);

	wp_register_script('livereload', 'http://localhost:35729/livereload.js?snipver=1', null, false, true);
	wp_enqueue_script('livereload');

	wp_enqueue_style('global', get_bloginfo('template_url') . '/css/global.css');
}

add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999, 2 );

function sdt_remove_ver_css_js( $src, $handle )
{
    $handles_with_version = [ 'style' ]; // <-- Adjust to your needs!

    if ( strpos( $src, 'ver=' ) && ! in_array( $handle, $handles_with_version, true ) )
        $src = remove_query_arg( 'ver', $src );

    return $src;
}

function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

remove_filter( 'the_excerpt', 'wpautop' );
remove_filter('term_description','wpautop');

//Add Featured Image Support
add_theme_support('post-thumbnails');

// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

function register_menus() {
	register_nav_menus(
		array(
			'main-nav' => 'Main Navigation',
			'secondary-nav' => 'Secondary Navigation',
			'sidebar-menu' => 'Sidebar Menu'
		)
	);
}
add_action( 'init', 'register_menus' );

function register_widgets(){

	register_sidebar( array(
		'name' => __( 'Sidebar' ),
		'id' => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
add_action( 'widgets_init', 'register_widgets' );

function dynamic_excerpt($length) {
  global $post;
  $text = $post->post_excerpt;

  if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
  }

  $text = strip_shortcodes($text);
  $text = strip_tags($text);
  $text = mb_substr($text,0,$length).' ...';
  echo $text;
}

function dynamic_excerpt2($length) {
  global $post;
  $text = $post->post_excerpt;

  if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace(']]>', ']]>', $text);
  }

  $text = strip_shortcodes($text);
  $text = strip_tags($text);
  $text = mb_substr($text,0,$length).'';
  echo $text;
}
