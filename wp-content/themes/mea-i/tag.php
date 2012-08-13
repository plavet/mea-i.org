<?php
/**
 * The template for displaying Tag Archive pages.
 *
 * @package WordPress
 * @package WordPress
 * @subpackage Mea-I
 */
get_header(); ?>

				<h1><?php
					printf( __( 'Tag Archives: %s', 'twentyten' ), '' . single_tag_title( '', false ) . '' );
				?></h1>

<?php
 get_template_part( 'loop', 'tag' );
?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>