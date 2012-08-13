<?php
/**
 * Template Name: Mea-I Light Red
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
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font.css" />

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fitvids.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mea-i-box.js"></script>
</head>
<body <?php body_class(); ?>>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<div id="box-wrap">
				<span class="close-bg-lightred"></span>
				<div class="aside-box">
					<div class="aside-box-pad">
					<?php the_title(); ?>
					</div>
				</div>
				<div class="content-box">
					<div class="content-box-pad">
					<?php the_content(); ?>
					<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
					<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

					<?php //comments_template( '', true ); ?>
					</div><!--/content-box-pad-->
				</div><!--/content-box-->
		</div>
<?php endwhile; ?>
</body>
</html>