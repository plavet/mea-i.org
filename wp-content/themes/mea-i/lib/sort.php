<?php
/**
 * Enable Sort menu
 *
 * @return void
 * @author Kilmulis
 **/
function kilmulis_enable_sort() {
    add_submenu_page('edit.php?post_type=members', 'Sort Content', 'Sort Content', 'edit_posts', basename(__FILE__), 'kilmulis_sort');
}
add_action('admin_menu' , 'kilmulis_enable_sort'); 


/**
 * Display Sort admin
 *
 * @return void
 * @author Kilmulis
 **/
function kilmulis_sort() {
	$members = new WP_Query('post_type=members&posts_per_page=-1&orderby=menu_order&order=ASC');
?>
	<div class="wrap">
	<h1>Sort Content <img src="<?php bloginfo('url'); ?>/wp-admin/images/loading.gif" id="loading-animation" /></h1>
	<h3>Simply drag and drop to reorder content, it saves automaticly</h3>
	<ul id="content-list">
	<?php while ( $members->have_posts() ) : $members->the_post(); ?>
		<li id="<?php the_id(); ?>"><?php the_title(); ?> &nbsp; <?php echo get_post_format(); ?></li>			
	<?php endwhile; ?>
	<p><em>Kilmulis developing team</em></p>
	</div><!-- End div#wrap //-->

<?php
}

/**
 * Queue up administration CSS
 *
 * @return void
 * @author Kilmulis
 **/
function kilmulis_sort_print_styles() {
	global $pagenow;
	
	$pages = array('edit.php');
	if (in_array($pagenow, $pages))
		wp_enqueue_style('kilmulis_sort', get_bloginfo('template_url').'/lib/sort.css');
}
add_action( 'admin_print_styles', 'kilmulis_sort_print_styles' );

/**
 * Queue up administration JavaScript file
 *
 * @return void
 * @author Kilmulis
 **/
function kilmulis_sort_print_scripts() {
	global $pagenow;
	
	$pages = array('edit.php');
	if (in_array($pagenow, $pages)) {
		wp_enqueue_script('jquery-ui-sortable');
		wp_enqueue_script('kilmulis_sort', get_bloginfo('template_url').'/lib/sort.js');
	}
}
add_action( 'admin_print_scripts', 'kilmulis_sort_print_scripts' );

function kilmulis_save_sort_order() {
	global $wpdb; // WordPress database class

	$order = explode(',', $_POST['order']);
	$counter = 0;
	
	foreach ($order as $members_id) {
		$wpdb->update($wpdb->posts, array( 'menu_order' => $counter ), array( 'ID' => $members_id) );
		$counter++;
	}
	die(1);
}
add_action('wp_ajax_members_sort', 'kilmulis_save_sort_order');
add_action('wp_ajax_nopriv_members_sort', 'kilmulis_save_sort_order');