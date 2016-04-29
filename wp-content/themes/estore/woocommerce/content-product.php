<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see     http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop, $i;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) ) {
	$woocommerce_loop['loop'] = 0;
}

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) ) {
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );
}

// Ensure visibility
if ( ! $product || ! $product->is_visible() ) {
	return;
}

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 === ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 === $woocommerce_loop['columns'] ) {
	$classes[] = 'first';
}
if ( 0 === $woocommerce_loop['loop'] % $woocommerce_loop['columns'] ) {
	$classes[] = 'last';
}
$attributes = $product->get_attributes();
$class = 'nha-mang-';
switch ($attributes['nha-mang']['value']) {
    case 'mobi':
        $class .= 'mobi';
        break;
    case 'viettel':
        $class .= 'viettel';
        break;
    case 'vina':
        $class .= 'vina';
        break;
    case 'vietnammobilr':
        $class .= 'vietnammobilr';
        break;
    case 'gmobile':
        $class .= 'gmobile';
        break;
    case 'smobile':
        $class .= 'smobile';
        break;
    default: $class .= 'default';

}
?>
<tr <?php post_class( $classes ); ?>>
	<td class="stt"><?php echo $i ?></td>
	<td><?php echo '<h3 class="products-title"><a>' . esc_html(get_the_title()) . '</a></h3>';?></td>
	<td class="price">
		<span class=""><span class="price"><?php esc_html_e( 'Giá: ', 'estore' ); ?><?php echo $product->get_price_html(); ?></span>
	</td>
	<td class="<?php echo $class?>"></td>
	<td>
        <div class="products-hover-wrapper">
            <div class="products-hover-block">
                <?php woocommerce_template_loop_add_to_cart( $product->post, $product ); ?>
            </div>
        </div><!-- featured hover end -->
	</td>
<!--	<div class="products-block">-->
<!---->
<!--		--><?php
//		/**
//		 * woocommerce_before_shop_loop_item hook.
//		 *
//		 * @hooked woocommerce_template_loop_product_link_open - 10
//		 */
//		do_action( 'woocommerce_before_shop_loop_item' );
//
//		/**
//		 * woocommerce_before_shop_loop_item_title hook.
//		 *
//		 * @unhooked woocommerce_show_product_loop_sale_flash - 10 // See woocommerce.php line no: 19
//		 * @unhooked woocommerce_template_loop_product_thumbnail // See woocommerce.php line no: 17
//		 * @hooked estore_template_loop_product_thumbnail - 10 // See woocommerce.php line no: 19
//		 */
//		do_action( 'woocommerce_before_shop_loop_item_title' );
//		?>
<!--		<div class="products-content-wrapper">-->
<!--			--><?php
//			/**
//			 * woocommerce_shop_loop_item_title hook.
//			 *
//			 * @hooked woocommerce_template_loop_product_title - 10
//			 */
//			do_action( 'woocommerce_shop_loop_item_title' );
//
//			/**
//			 * woocommerce_after_shop_loop_item_title hook.
//			 *
//			 * @hooked woocommerce_template_loop_rating - 5
//			 * @hooked woocommerce_template_loop_price - 10
//			 */
//			do_action( 'woocommerce_after_shop_loop_item_title' );
//
//			/**
//			 * woocommerce_after_shop_loop_item hook.
//			 *
//			 * @unhooked woocommerce_template_loop_product_link_close - 5
//			 * @unhooked woocommerce_template_loop_add_to_cart - 10 // See woocommerce.php line no: 25
//			 * @hooked estore_template_loop_add_to_wishlist - 10 // See woocommerce.php line no: 27
//			 */
//			do_action( 'woocommerce_after_shop_loop_item' );
//			?>
<!--		</div>-->
<!---->
<!--	</div>-->
</tr>
