<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @package WordPress
 * @subpackage Mea-I
 */
?>

<ul class="sidebar">
<li><a id="login" href="/wp-login.php?redirect_to=/members-area" class="simplemodal-login">Log In</a></li>
<?php

	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
			<li>
				<?php get_search_form(); ?>
			</li>

			<li>
				<h3><?php _e( 'Archives', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ul>
			</li>

			<li>
				<h3><?php _e( 'Meta', 'twentyten' ); ?></h3>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<?php wp_meta(); ?>
				</ul>
			</li>

		<?php endif; // end primary widget area ?>
			</ul>

<?php
	// A second sidebar for widgets, just because.
	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

			<ul class="sidebar">
				<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
			</ul>

<?php endif; ?>