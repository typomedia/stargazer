<?php
/**
 * @package WordPress
 * @subpackage Stargazer
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title('- ', true, 'right'); ?><?php bloginfo('name'); ?></title>
<link rel="icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_url'); ?>/style.less" />
<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.0/less.min.js"></script>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/vendor/modernizr.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="off-canvas-wrap" data-offcanvas="">
      <div class="inner-wrap">
        <aside class="left-off-canvas-menu">

  <!--<ul class="off-canvas-list">
    <li><label class="first"><?php bloginfo('name'); ?></label></li>
    <li><a href="./index_files/index.html">Home</a></li>
  </ul>-->
  <?php wp_nav_menu( array( 'container' => false, 'menu_class' => 'off-canvas-list' ) ); ?>
</aside>

<nav class="tab-bar show-for-small">
  <a class="left-off-canvas-toggle menu-icon ">
    <span><?php bloginfo('name'); ?></span>
  </a>
</nav>

<nav class="top-bar hide-for-small" data-topbar="">
  <ul class="title-area">
    <li class="name"><h1><a href="<?php bloginfo('home'); ?>"><?php bloginfo('name'); ?></a></h1></li>
  </ul>
  
  <section class="top-bar-section">
	<?php wp_nav_menu( array( 'container' => false, 'menu_class' => 'right' ) ); ?>
    <!--<ul class="right">
      <li class="divider"></li>
      <li class="has-dropdown not-click">
        <a href="#" class="">Develop</a>
			<?php wp_nav_menu( array( 'container' => false, 'menu_class' => 'dropdown' ) ); ?>
      </li>
      <li class="divider"></li>
      <li><a href="http://phalconium.typomedia.org/about">About</a></li>
      <li class="divider"></li>
      <li class="has-form"><a href="http://phalconium.typomedia.org/docs" class="small button">Getting Started</a></li>
    </ul>-->
  </section>
</nav>
	  
<section class="stage">
  <div class="row">
    <div class="yeti">
      <img src="<?php bloginfo( 'template_directory' ); ?>/img/hero-image.svg" />
	</div>
    <div class="small-8 medium-8 columns">
      <h1><?php the_title(); ?></h1><br>
    </div>
    <div class="small-12 medium-8 columns">
      <h3>The next responsive WordPress Theme <br class="hide-for-small"> on steroids made with ZURB's Foundation.</h3><br>
    </div>
    <div class="columns"></div>
  </div>
  <div class="row">
    <div class="large-4 medium-6 columns">
      <a href="http://phalconium.typomedia.org/docs" class="large button">Getting Started</a>
    </div>
  </div>
</section>

<section class="intro">
  <div class="row">
    <div class="small-8 columns">
      <h3>Frontend build with Foundation!</h3>
      <h4 class="subheader">The most advanced responsive frontend framework in the world.</h4>
    </div>
    <div class="small-4 columns">
      <a href="/foundation" class="button right">Check It Out!</a>
	</div>
  </div>
</section>