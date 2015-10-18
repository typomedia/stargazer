<?php
/**
 * @package WordPress
 * @subpackage Stargazer
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'stargazer' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( 'post' == $post->post_type ) : ?>

		<address class="entry-meta">
			<?php
				printf( __( '<span class="sep">Posted on </span><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s">%3$s</time></a> <span class="sep"> by </span> <a class="url fn n" href="%4$s" title="%5$s">%6$s</a>', 'stargazer' ),
					get_permalink(),
					get_the_date( 'c' ),
					get_the_date(),
					get_author_posts_url( get_the_author_meta( 'ID' ) ),
					sprintf( esc_attr__( 'View all posts by %s', 'stargazer' ), get_the_author() ),
					get_the_author()
				);
			?>
		</address><!-- .entry-meta -->

		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>

	<article class="entry-summary">
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'stargazer' ) ); ?>
	</article><!-- .entry-summary -->

	<?php else : ?>

	<article class="entry-content">
		<?php the_excerpt(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'stargazer' ), 'after' => '</div>' ) ); ?>
	</article><!-- .entry-content -->

	<?php endif; ?>

	<footer class="entry-meta">
		<span class="cat-links"><?php _e( 'Posted in ', 'stargazer' ); ?> <?php the_category( ', ' ); ?></span>
		<span class="sep"> | </span>
		<?php the_tags( '', '<span class="sep">', '</span>' ); ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Comment', 'stargazer' ), __( '1 Comment', 'stargazer' ), __( '% Comments', 'stargazer' ) ); ?></span>
		<?php edit_post_link( __( 'Edit', 'stargazer' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
	</footer><!-- #entry-meta -->

</section><!-- #post-<?php the_ID(); ?> -->