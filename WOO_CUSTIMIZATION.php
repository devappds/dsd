<?php 
 $postid = get_the_ID();
 echo $postid;
?>
<?php woocommerce_page_title(); ?>

<?php

/*add custome class in woocomerce catagory page in bodyonwoocomerce customizati*/
add_filter( 'body_class', 'bbloomer_wc_product_cats_css_body_class' );
 
function bbloomer_wc_product_cats_css_body_class( $classes ){
  if( is_singular( 'product' ) )
  {
    $custom_terms = get_the_terms(0, 'product_cat');
    if ($custom_terms) {
      foreach ($custom_terms as $custom_term) {
        $classes[] = 'product_cat_' . $custom_term->slug;
      }
    }
  }
  return $classes;
}

/*Remove Prices from the Shop Page Only*/

remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

/*Remove Prices Everywhere but the Cart and Checkout Pages*/

add_filter( 'woocommerce_variable_sale_price_html', 'businessbloomer_remove_prices', 10, 2 );
add_filter( 'woocommerce_variable_price_html', 'businessbloomer_remove_prices', 10, 2 );
add_filter( 'woocommerce_get_price_html', 'businessbloomer_remove_prices', 10, 2 );
 
function businessbloomer_remove_prices( $price, $product ) {
$price = '';
return $price;
}

/*Change WooCommerce Grouped Product Price Range Format $$$-$$$*/

add_filter( 'woocommerce_grouped_price_html', 'bbloomer_grouped_price_range_from', 10, 3 );
function bbloomer_grouped_price_range_from( $price, $product, $child_prices ) {
$prices = array( min( $child_prices ), max( $child_prices ) );
$price = $prices[0] !== $prices[1] ? sprintf( __( 'From: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );
return $price;
}

/*Remove WooCommerce Grouped Product Price Range Entirely $$$-$$$*/

add_filter( 'woocommerce_grouped_price_html', 'bbloomer_grouped_price_range_delete', 10, 3 );
 
function bbloomer_grouped_price_range_delete( $price, $product, $child_prices ) {
$price = '';
return $price;
}

/*Hide add to cart & prices if logged out & show “Login to See Prices” instead (#1)*/

add_action( 'init', 'bbloomer_hide_price_add_cart_not_logged_in' );
 
function bbloomer_hide_price_add_cart_not_logged_in() { 
if ( !is_user_logged_in() ) {       
 remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );
 remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
 remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );  
 add_action( 'woocommerce_single_product_summary', 'bbloomer_print_login_to_see', 31 );
 add_action( 'woocommerce_after_shop_loop_item', 'bbloomer_print_login_to_see', 11 );
}
}
 
function bbloomer_print_login_to_see() {
echo '<a href="' . get_permalink(wc_get_page_id('myaccount')) . '">' . __('Login to see prices', 'theme_name') . '</a>';
}


/*Display Out of Stock Products via a Shortcode – WooCommerce*/

add_shortcode( 'out_of_stock_products', 'bbloomer_out_of_stock_products_shortcode' );
  
function bbloomer_out_of_stock_products_shortcode() {
global $product, $woocommerce, $woocommerce_loop;
$columns = 4;
 
$args = array(
    'post_type'             => 'product',
    'post_status'           => 'publish',
    'meta_query'            => array(
        array(
            'key'           => '_stock',
            'value'         => 1,
            'compare'       => '<'
        )
    )
);
$loop = new WP_Query($args);
  
ob_start();
  
woocommerce_product_loop_start();
  
while ( $loop->have_posts() ) : $loop->the_post();
wc_get_template_part( 'content', 'product' );
endwhile; 
  
woocommerce_product_loop_end();
  
woocommerce_reset_loop();
wp_reset_postdata();
  
return '<div class="woocommerce columns-' . $columns . '">' . ob_get_clean() . '</div>';
}

/*show published date of woocomerce product*/
add_action( 'woocommerce_single_product_summary','bloomer_echo_product_date',25 );

function bloomer_echo_product_date() {
if ( is_product() ) {
echo the_date('', '<span class="date_published">Published on: ', '</span>', false);
}
}
?>


**********
<?php 
/**
 * Change number of related products output
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 4; // 4 related products
	$args['columns'] = 2; // arranged in 2 columns
	return $args;
}
?>
