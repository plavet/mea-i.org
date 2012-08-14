<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<div id="footer-wrap">
<footer>
<?php get_sidebar( 'footer' ); ?>

 <a rel="loadedpage" href="<?php echo site_url(); ?>/terms-of-use/?iframe=true&width=90%&height=90%">Terms Of Use</a> |  <a rel="loadedpage" href="<?php echo site_url(); ?>/privacy-statement/?iframe=true&width=90%&height=90%">Privacy Statement</a> | Copyright &copy; 2012 MEA-I

  <a class="pull-right" href="http://kilmulis.com" title="KILMULIS Design" target="_blank">KILMULIS Design</a>

<?php wp_footer(); ?>
</footer>
</div><!--/footer-wrap-->
</div><!--/page-wrap-->
</body>
</html>