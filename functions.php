<?php
/**
 * Main functions file
 *
 * @package WordPress
 * @subpackage Shop Isle
 */

/**
 * Initialize all the things.
 */
require get_template_directory() . '/inc/init.php';

/**
 * Note: Do not add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * http://codex.wordpress.org/Child_Themes
 */

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );



/** Disable Ajax Call from WooCommerce on front page and posts*/
add_action( 'wp_enqueue_scripts', 'dequeue_woocommerce_cart_fragments', 11);
function dequeue_woocommerce_cart_fragments() {
if ( is_single() ) { 
wp_dequeue_script('wc-cart-fragments'); 
}
}
// /** Disable Ajax Call from WooCommerce on front page and posts*/
// add_action( 'wp_enqueue_scripts', 'dequeue_woocommerce_cart_fragments', 11);
// function dequeue_woocommerce_cart_fragments() {
// if (is_front_page() || is_single() ) { 
// wp_dequeue_script('wc-cart-fragments'); 
// }
// }

/** Disable All WooCommerce Styles and Scripts Except Shop Pages*/
add_action( 'wp_enqueue_scripts', 'dequeue_woocommerce_styles_scripts', 99 );
function dequeue_woocommerce_styles_scripts() {
if ( function_exists( 'is_woocommerce' ) ) {
if ( ! is_woocommerce() && ! is_cart()  && ! is_front_page() ) {
# Styles
wp_dequeue_style( 'woocommerce-general' );
wp_dequeue_style( 'woocommerce-layout' );
wp_dequeue_style( 'woocommerce-smallscreen' );
wp_dequeue_style( 'woocommerce_frontend_styles' );
wp_dequeue_style( 'woocommerce_fancybox_styles' );
wp_dequeue_style( 'woocommerce_chosen_styles' );
wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
# Scripts
wp_dequeue_script( 'wc_price_slider' );
wp_dequeue_script( 'wc-single-product' );
wp_dequeue_script( 'wc-add-to-cart' );
wp_dequeue_script( 'wc-cart-fragments' );
wp_dequeue_script( 'wc-checkout' );
wp_dequeue_script( 'wc-add-to-cart-variation' );
wp_dequeue_script( 'wc-single-product' );
wp_dequeue_script( 'wc-cart' );
wp_dequeue_script( 'wc-chosen' );
wp_dequeue_script( 'woocommerce' );
wp_dequeue_script( 'prettyPhoto' );
wp_dequeue_script( 'prettyPhoto-init' );
wp_dequeue_script( 'jquery-blockui' );
wp_dequeue_script( 'jquery-placeholder' );
wp_dequeue_script( 'fancybox' );
wp_dequeue_script( 'jqueryui' );
}
}
}


// if ( $was_added_to_cart ) {

//     $url = apply_filters( 'add_to_cart_redirect', $url );

//     // If has custom URL redirect there
//     if ( $url ) {
//         wp_safe_redirect( $url );
//         exit;
//     }

//     // Redirect to cart option
//     elseif ( get_option('woocommerce_cart_redirect_after_add') == 'yes' && $woocommerce->error_count() == 0 ) {
//         wp_safe_redirect( $woocommerce->cart->get_cart_url() );
//         exit;
//     }

//     // Redirect to page without querystring args
//     elseif ( wp_get_referer() ) {
//         // Commented the line below
//         //wp_safe_redirect( add_query_arg( 'added-to-cart', implode( ',', $added_to_cart ), remove_query_arg( array( 'add-to-cart', 'quantity', 'product_id' ), wp_get_referer() ) ) );
//         exit;
//     }

// }

/**
 * @snippet       WooCommerce Disable Payment Gateway for a Specific Country
 * @how-to        Watch tutorial @ https://businessbloomer.com/?p=19055
 * @sourcecode    https://businessbloomer.com/?p=164
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 3.3.1
 */
 
// function payment_gateway_disable_country( $available_gateways ) {
//     global $woocommerce;
//     if ( is_admin() ) return;
//     if ( isset( $available_gateways['bacs'] ) && $woocommerce->customer->get_billing_country() == 'DE' || isset( $available_gateways['bacs'] ) && $woocommerce->customer->get_billing_country() == 'IT' || isset( $available_gateways['bacs'] ) && $woocommerce->customer->get_billing_country() == 'AT') {
//     unset( $available_gateways['bacs'] );
//     }
//     return $available_gateways;
//     }
     
//     add_filter( 'woocommerce_available_payment_gateways', 'payment_gateway_disable_country' );