<?php
/**
 * Template Name: Mea-I Members Area
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
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/members.css" />

<?php //wp_head(); ?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.masonry.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.prettyPhoto.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/mea-i-members.js"></script>
</head>
<body <?php body_class(); ?>>
	<div id="main-members-wrap">
	<div class="members-content-wrap">
<?php if(is_user_logged_in()):?>

<?php query_posts(array('post_type'=>'members', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC')); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="members-wrap" <?php post_class(); ?>>

			<?php 
			//Check if there is featured image

			if(has_post_thumbnail()) {
				?>
				<div class="members-bg">
					<?php the_post_thumbnail('medium');?>
				</div><!--/members-bg-->
			<?php } else { 
				//return empty
			}
			?>

						<div class="members-content">
	<?php //check if there is custom css class add in the custom field ?>					
	<?php $class = get_post_meta($post->ID, "class", true);
	if ($class) { //if there is add it to div tag
	?>
	<div class="<?php echo $class; ?>">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>
							</div><!--/post class-->
						</div><!--/members-content-->
				 </div><!--/members-wrap-->

	<?php } else { ?> <?php //if not, return content whitout div post class tag ?> 
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
							<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

						</div><!--/members-content-->
				 </div><!--/members-wrap-->
	<?php } ?>


<?php endwhile; ?>

	</div><!--/members-content-wrap-->
<ul class="sidebar">
<li><a id="logout" href="<?php echo wp_logout_url( home_url() ); ?>" title="Logout" class="simplemodal-login">Logout</a></li>
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

	</div><!--/main-members-wrap-->
<?php else:
wp_die('Sorry, you must first <a href="/wp-login.php?redirect_to=/members-area" class="simplemodal-login">log in</a> to view this page.</a>.');
endif;?>
</body>
</html>