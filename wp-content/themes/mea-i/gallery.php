<?php
/**
 * Template Name: Mea-I Gallery
 *
 * @package WordPress
 * @subpackage Mea-I
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css" />

<?php //wp_head(); ?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.masonry.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mea-i-gallery.js"></script>
</head>
<body <?php body_class(); ?>>
	<div id="gallery-wrap">
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<span class="close-bg-blue"></span>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

				<?php //comments_template( '', true ); ?>

<?php endwhile; ?>
</div><!--/gallery-wrap-->
</body>
</html>