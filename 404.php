<?php
/**
 * @package WordPress
 * @subpackage Textura
 */
?>

<?php get_header(); ?>

	<section id="content">

		<article id="post-0" class="post error404 not-found">
			<header class="entry-header">
				<h1 class="entry-title"><?php _e( 'The requested page does not exist.', 'textura' ); ?></h1>
			</header>

			<div class="entry-content" role="search">
				<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching, or one of the links, can help.', 'textura' ); ?></p>

				<?php get_search_form(); ?>
	
				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

				<div class="widget">
					<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'textura' ); ?></h2>
					<ul>
						<?php wp_list_categories( array( 'orderby' => 'count', 'order' => 'DESC', 'show_count' => 'TRUE', 'title_li' => '', 'number' => '10' ) ); ?>
					</ul>
				</div><!-- .widget -->

				<div class="widget">
					<h2 class="widget-title"><?php _e('Archives', 'textura'); ?></h2>
						<ul>
							<?php wp_get_archives( array('type' => 'monthly') ); ?>
						</ul>
				</div><!-- .widget -->

			</div><!-- .entry-content -->
		</article><!-- #post-0 -->

	</section><!-- #content -->

<?php get_footer(); ?>