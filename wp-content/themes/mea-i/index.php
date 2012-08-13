<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Mea-I
 */
get_header(); ?>

			<?php
			 get_template_part( 'loop', 'index' );
			?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>