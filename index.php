<?php
/**
 * @package WordPress
 * @subpackage Stargazer
 */
?>

<?php get_header(); ?>

    <section class="main">
      <div class="row">
        <div class="large-8 columns">

        <?php if ( have_posts() ) : ?>

          <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', get_post_format() ); ?>

          <?php endwhile; ?>

          <?php /* Display navigation to next/previous pages when applicable */ ?>
          <?php if ( $wp_query->max_num_pages > 1 ) : ?>
            <nav id="nav-below" role="navigation">
              <h1 class="section-heading"><?php _e( 'Post navigation', 'stargazer' ); ?></h1>
              <div class="nav-prev"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'stargazer' ) ); ?></div>
              <div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'stargazer' ) ); ?></div>
            </nav><!-- #nav-below -->
          <?php endif; ?>	

          <?php else : ?>

            <article id="post-0" class="post no-results not-found">
              <header class="entry-header">
                <h1 class="entry-title"><?php _e( 'Nothing Found!', 'stargazer' ); ?></h1>
              </header><!-- .entry-header -->

              <div class="entry-content">
                <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'stargazer' ); ?></p>
                <?php get_search_form(); ?>
              </div><!-- .entry-content -->
            </article><!-- #post-0 -->

          <?php endif; ?>			

        </div>
        <aside class="large-4 columns">
    <?php get_sidebar(); ?>
        </aside>
      </div>
    </section>
  </div><!-- .inner-wrap -->
</div><!-- .off-canvas-wrap -->
<?php get_footer(); ?>