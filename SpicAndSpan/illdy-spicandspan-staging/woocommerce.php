<?php
/**
 *	The template for displaying WooCommerce.
 *
 *	@package WordPress
 *	@subpackage illdy
 */
?>

<?php
// AA: Doing here a dirty hack
// Illdy theme uses the function woocommerce_content() to output the content of woocommerce module
// I don't like how the function behaves - I want to modify the displayed title of the store, without having to update that title globally
// Best quick solution I see now is copying the function definition, renaming it slightly and using this new function instead
// Better solution to this problem is described here:
// https://docs.woocommerce.com/document/third-party-custom-theme-compatibility/#usinghooks
// Maybe instead of creating and function and calling it later I can directly dump the contents of the function 
// in the place where I currently am calling it

/*

AA: Function checks whether it is a product archive page
It is used in the subsequent code to check whether the title and custom message should be displayed

 */

if ( ! function_exists( 'is_product_archive_page' ) ) {

	function is_product_archive_page() {
		if ( is_search() || is_tax() || is_singular( 'product' )) {
			return false;
		} 
		return true;
	}
}

if ( ! function_exists( 'woocommerce_content_illdy' ) ) {
	/*
	AA: This is the copy of woocommerce_content function
	It is based on the function available here: 
	woocommerce/includes/wc-template-functions.php 
	 */
	function woocommerce_content_illdy() {
		if ( is_singular( 'product' ) ) {
			while ( have_posts() ) : the_post();
				wc_get_template_part( 'content', 'single-product' );
			endwhile;
		} else { ?>
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
			<?php 
				// On the initial store page display custom title. On other page display the title using woocommerce_page_title() function
			?> 
				<h1 class="page-title"><?php 
					if (is_product_archive_page()) {
						echo 'Welcome to <span class="spic-and-span-text">SPIC AND SPAN<span class="spic-and-span-text-after-dot">.STORE</span></span>'; 
					} else {
						woocommerce_page_title();
					}
				?></h1>
			<?php endif; ?>
			<?php // AA: store_welcome_message() from functions.php is hooked to the hook below ?>
			<?php (is_product_archive_page() ? do_action( 'woocommerce_archive_description') : false); ?>
			<?php if ( have_posts() ) : ?>
				<?php do_action( 'woocommerce_before_shop_loop' );?>
				<?php woocommerce_product_loop_start(); ?>
					<?php woocommerce_product_subcategories(); ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php wc_get_template_part( 'content', 'product' ); ?>
					<?php endwhile; // end of the loop. ?>
				<?php woocommerce_product_loop_end(); ?>
				<?php do_action( 'woocommerce_after_shop_loop' ); ?>
			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>
				<?php do_action( 'woocommerce_no_products_found' ); ?>
			<?php endif;
		}
	}
}

?>

<!-- Proper layout of the page starts here-->

<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-sm-7">
			<section id="blog">
				<?php woocommerce_content_illdy(); ?>
			</section><!--/#blog-->
		</div><!--/.col-sm-7-->
		<?php if( is_active_sidebar( 'woocommerce-sidebar' ) ): ?>
			<div class="col-sm-4">
				<div id="sidebar">
					<?php dynamic_sidebar( 'woocommerce-sidebar' ); ?>
				</div><!--/#sidebar-->
			</div><!--/.col-sm-4-->
		<?php else: ?>
			<div class="col-sm-4">
				<div id="sidebar">
					<?php
					$the_widget_title = array(
						// AA: add the widget name as class name
						// AA: this is based on the fact that the_widget() function uses sprintf with $widget_obj->widget_options['classname'] as argument
						'before_widget'	=> '<div class="widget %s">',
						'after_widget'	=> '</div>',
						'before_title'	=> '<div class="widget-title"><h3>',
						'after_title'	=> '</h3></div>'
					);

					// AA: modified the card title
					the_widget( 'WC_Widget_Cart', 'title=' . __( 'Your cart', 'illdy' ), $the_widget_title );
					the_widget( 'WC_Widget_Product_Categories', 'title=' . __( 'Product Categories', 'illdy' ), $the_widget_title );
					?>
				</div><!--/#sidebar-->
			</div><!--/.col-sm-4-->
		<?php endif; ?>
	</div><!--/.row-->
</div><!--/.container-->
<?php get_footer(); ?>