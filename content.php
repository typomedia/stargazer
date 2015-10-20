<?php
/**
 * @package WordPress
 * @subpackage Stargazer
 */
?>

<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <header>
    <div class="category">
      <span class="radius secondary label right"><?php echo get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'stargazer')); ?></span>
    </div>
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'stargazer' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

    <?php if ( 'post' == $post->post_type ) : ?>
      <div class="meta">
        <span class="info"><span class="fi-calendar"></span><?php the_time('j F Y'); ?></span>
        <span class="info"><span class="fi-torso"></span><?php the_author_link(); ?></span>
        <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
        <span class="info"><span class="fi-comment"></span><?php comments_popup_link(__('Leave a comment', 'stargazer'), __('1 Comment', 'stargazer'), __('% Comments', 'stargazer')); ?></span>
        <?php endif; ?>
        <span class="info"><span class="fi-pencil"></span><?php edit_post_link(__('Edit', 'stargazer'), '', ''); ?></span>
      </div>
    <?php endif; ?>
  </header>

	<?php if ( is_search() ) : ?>

	<article class="content">
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'stargazer' ) ); ?>
	</article>

	<?php else : ?>

	<article class="content">
		<?php the_excerpt(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'stargazer' ), 'after' => '</div>' ) ); ?>
	</article>

	<?php endif; ?>

	<?php the_tags('<footer class="tags">', '', '</footer>'); ?>

</section>