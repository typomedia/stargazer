<?php
/**
 * @package WordPress
 * @subpackage Stargazer
 */

// Language support
load_theme_textdomain( 'stargazer', TEMPLATEPATH . '/languages' );

$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable( $locale_file ) )
	require_once( $locale_file );

// Define content width
if ( ! isset( $content_width ) ) $content_width = 900;

// This theme styles the visual editor with editor-style.css to match the theme style.
add_editor_style();

// Adds RSS feed links to <head> for posts and comments.
add_theme_support( 'automatic-feed-links' );

// This theme supports a variety of post formats.
// add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );

// This theme uses wp_nav_menu() in one location.
register_nav_menu( 'primary', __( 'Primary Menu', 'stargazer' ) );
	
// Register widgetized area and update sidebar with default widgets
function textura_widgets_init() {
	register_sidebar( array (
		'name' => __( 'Sidebar', 'stargazer' ),
		'id' => 'sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => "</section><!-- .widget -->",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );	
}
add_action( 'init', 'textura_widgets_init' );

// https://gist.github.com/lekkerduidelijk/5576437

//Deletes all CSS classes and id's, except for those listed in the array below
function custom_wp_nav_menu($var) {
  return is_array($var) ? array_intersect($var, array(
		//List of allowed menu classes
		'current_page_item',
		'current_page_parent',
		'current_page_ancestor',
		'first',
		'last',
		'vertical',
		'horizontal'
		)
	) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');


// Fallback for home link.
function textura_page_menu_args($args) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'textura_page_menu_args' );

// Comment function called in 'comments.php'
if ( ! function_exists( 'textura_comment' ) ) :

function textura_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">

			<header class="comment-meta">

				<div class="comment-author vcard">
					<?php echo get_avatar( $comment, 40 ); ?>
					<?php printf( __( '<span class="says">%s:</span>', 'stargazer' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'stargazer' ); ?></p>
				<?php endif; ?>

				<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><time pubdate datetime="<?php comment_time( 'c' ); ?>"><?php printf( __( '%1$s at %2$s', 'stargazer' ), get_comment_date(),  get_comment_time() ); ?></time></a>
				<?php edit_comment_link( __( '(Edit)', 'stargazer' ), ' ' ); ?>

			</header><!-- .comment-meta -->

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</article><!-- #comment-<?php comment_ID(); ?> -->

	<?php
		break;
		case 'pingback'  :
		case 'trackback' :
	?>

	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'stargazer' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'stargazer'), ' ' ); ?></p>
	<?php
		break;
		endswitch;
}
endif; // textura_comment()

/**
 * Deaktiviert die XML-RPC Schnittstelle ab WordPress 3.5.
 */
add_filter( 'xmlrpc_enabled', '__return_false' );

?>