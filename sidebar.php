<?php
/**
 * @package WordPress
 * @subpackage Stargazer
 */
?>

	<aside id="sidebar" role="complementary">

		<?php if ( ! dynamic_sidebar( 'Sidebar' ) ) : ?>

			<section id="archives" class="widget">
				<h3><?php _e('Archives', 'stargazer'); ?></h3>
				<ul>
					<?php wp_get_archives( array('type' => 'monthly') ); ?>
				</ul>
			</section>

			<section id="meta" class="widget">
				<h3><?php _e( 'Meta', 'stargazer' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</section>
			
		<?php endif; ?>

	</aside>