<?php
/**
 * @package WordPress
 * @subpackage Stargazer
 */
?>

<?php get_header(); ?>

    <section class="main">
      <div class="row">
        <div class="large-10 columns">

          <?php if (have_posts()) while (have_posts()) : the_post(); ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
                <header>
                  <div class="category right">
                    <span class="radius secondary label"><?php echo get_the_category_list(_x(', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen')); ?></span>
                  </div>
                  <h1 class="title"><?php the_title(); ?></h1>

                  <div class="meta">
                    <span class="info"><span class="fi-calendar"></span><?php the_time('j F Y'); ?></span>
                    <span class="info"><span class="fi-torso"></span><?php the_author_link(); ?></span>
                    <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
                    <span class="info"><span class="fi-comment"></span><?php comments_popup_link(__('Leave a comment', 'twentyfourteen'), __('1 Comment', 'twentyfourteen'), __('% Comments', 'twentyfourteen')); ?></span>
                    <?php endif; ?>
                    <span class="info"><span class="fi-pencil"></span><?php edit_post_link(__('Edit', 'twentyfourteen'), '', ''); ?></span>
                  </div>
                </header>

                <div class="content">
                  <?php the_content(); ?>
                  <?php wp_link_pages(array('before' => '<div class="page-link">' . __('Pages:', 'stargazer'), 'after' => '</div>')); ?>
                </div>

                <?php the_tags('<footer class="tags">', '', '</footer>'); ?>
              </article>

              <?php comments_template('', true); ?>

            <?php endwhile; ?>
        </div>
        <aside class="large-2 columns">
          <?php get_sidebar(); ?>
        </aside>
      </div>
    </section>
  </div><!-- .inner-wrap -->
</div><!-- .off-canvas-wrap -->
<?php get_footer(); ?>