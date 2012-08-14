<?php
/**
 * Template Name: Mea-I Home Page
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
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/prettyPhoto.css" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/layout.css" />

<?php //wp_head(); ?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.masonry.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mea-i.js"></script>
</head>
<body <?php body_class(); ?>>
	<div id="main-home-wrap">
	<div class="home-content-wrap">

<?php query_posts(array('post_type'=>'meai', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC')); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="home-wrap" <?php post_class(); ?>>

			<?php 
			//Check if there is featured image

			if(has_post_thumbnail()) {
				?>
				<div class="home-bg">
					<?php the_post_thumbnail('medium');?>
				</div><!--/home-bg-->
			<?php } else { 
				//return empty
			}
			?>

						<div class="home-content">
	<?php //check if there is custom css class add in the custom field ?>					
	<?php $class = get_post_meta($post->ID, "class", true);
	if ($class) { //if there is add it to div tag
	?>
	<div class="<?php echo $class; ?>">
							<a rel="loadedpage" href="<?php the_permalink(); ?>?iframe=true&width=100%&height=100%" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
							<?php //the_content(); ?>
							<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
							</div><!--/post class-->
						</div><!--/home-content-->
				 </div><!--/home-wrap-->

	<?php } else { ?> <?php //if not, return content whitout div post class tag ?>
							<a rel="loadedpage" href="<?php the_permalink(); ?>?iframe=true&width=90%&height=90%" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a> 
							<?php //the_content(); ?>
							<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

						</div><!--/home-content-->
				 </div><!--/home-wrap-->
	<?php } ?>


<?php endwhile; ?>

	</div><!--/home-content-wrap-->
<ul class="sidebar">
<li><a id="login" href="<?php echo wp_logout_url( home_url() ); ?>" title="Login" class="simplemodal-login">Login</a></li>
<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/flags/eng.gif" alt=""></a></li>
<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/flags/fra.gif" alt=""></a></li>
<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/flags/arb.gif" alt=""></a></li>
<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/flags/rus.gif" alt=""></a></li>
<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/flags/esp.gif" alt=""></a></li>
<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/flags/por.gif" alt=""></a></li>
<li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/flags/chn.gif" alt=""></a></li>
</ul>

<footer>
<?php get_sidebar( 'footer' ); ?>

 <a rel="loadedpage" href="<?php echo site_url(); ?>/terms-of-use/?iframe=true&width=90%&height=90%">Terms Of Use</a> |  <a rel="loadedpage" href="<?php echo site_url(); ?>/privacy-statement/?iframe=true&width=90%&height=90%">Privacy Statement</a> | Copyright &copy; 2012 MEA-I
&nbsp;
  <a class="pull-right" href="http://kilmulis.com" title="KILMULIS Design" target="_blank">KILMULIS Design</a>

<?php //wp_footer(); ?>
</footer>

	</div><!--/main-home-wrap-->
</body>
</html>