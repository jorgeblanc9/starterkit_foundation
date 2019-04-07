<?php

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
 
function my_before_main_content() {
    echo '<!-- Contenedor Woocommerce foundation -->';
    echo '<div class="grid-container"><div class="grid-x"><div class="cell small-12">';
}
add_action( 'woocommerce_before_main_content', 'my_before_main_content' );
 
function my_after_main_content() {
    echo '</div></div></div>';
    echo '<!--  Fin Contenedor Woocommerce foundation -->';
}
add_action( 'woocommerce_after_main_content', 'my_after_main_content' );
 

// Eliminar los CSS de WooCommerce uno por uno
add_filter( 'woocommerce_enqueue_styles', 'woocommerce_dequeue_styles' );
function woocommerce_dequeue_styles( $enqueue_styles ) {
	unset( $enqueue_styles['woocommerce-general'] );	// Remove the gloss
	unset( $enqueue_styles['woocommerce-layout'] ); // Remove the layout
	unset( $enqueue_styles['woocommerce-smallscreen'] );	// Remove the smallscreen optimisation
	return $enqueue_styles;
}
 
// Eliminar todos los CSS de WooCommerce de golpe
add_filter( 'woocommerce_enqueue_styles', '__return_false' );
 