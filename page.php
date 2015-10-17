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
      <?php the_post(); ?>
      <!--<h1 class="post-title"><?php the_title(); ?></h1>-->
      <?php the_content(); ?>
      <?php wp_link_pages(array('before' => '<span class="page-link">' . __('Pages:', 'textura'), 'after' => '</span>')); ?>
      <?php edit_post_link(__('Edit', 'textura'), '<span class="edit-link">', '</span>'); ?>
    </div>
    <aside class="large-4 columns">
      <?php get_sidebar(); ?>
      <!--<p><strong>So what is Phalconium?</strong> Phalconium is a skeleton application based on Phalcon PHP and ZURB Foundation. It comes along with a very strong feature set:</p> 
      <ul>
        <li>Support for MySQL, Postgres and SQLite</li>
        <li>Responsive design with mobile first approach</li>
        <li>Pretty error interface for debugging issues</li>
        <li>Web tool for controller, models, scaffold and migrations</li>
      </ul>-->
    </aside>
  </div>
</section>
</div></div>
<?php get_footer(); ?>