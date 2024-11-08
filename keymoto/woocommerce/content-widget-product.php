<?php
/**
 * The template for displaying product widget entries.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.5
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}

?>
<li>
	<?php do_action( 'woocommerce_widget_product_item_start'); ?>

	<div class="product_thumbnail"><?php echo keymoto_return_text($product->get_image());?></div>
	<div class="product_summary">
		<a class="product-title" href="<?php echo esc_url( $product->get_permalink() ); ?>" title="<?php echo esc_attr( $product->get_name() ); ?>">
			<?php echo wp_kses_post( $product->get_name() ); ?>
		</a>
        <?php if ( ! empty( $product->get_average_rating() ) ) : ?>
            <div class="product-rating">
                <?php echo wc_get_rating_html( $product->get_average_rating() );?>
            </div>
        <?php endif; ?>
		<div class="product-price"><?php echo keymoto_return_text($product->get_price_html()); ?></div>

    </div>

	<?php do_action( 'woocommerce_widget_product_item_end' ); ?>
</li>
