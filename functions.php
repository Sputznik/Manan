<?php

add_action('wp_enqueue_scripts',function(){

	//wp_enqueue_style('manan-child', get_stylesheet_directory_uri().'/style.css', array(''), '1.0.0' );

	wp_enqueue_style( 'manan', get_stylesheet_directory_uri() .'/assets/css/manan.css', array( 'sp-core-style' ), '1.0.6' );
});


//Add Woocommerce Theme Support
function man_add_woocommerce_support() {
  add_theme_support( 'woocommerce', array(
  	'thumbnail_image_width' => 150,
  	'single_image_width'    => 300,
    'product_grid'          => array(
        'default_rows'    => 3,
        'min_rows'        => 2,
        'max_rows'        => 8,
        'default_columns' => 4,
        'min_columns'     => 2,
        'max_columns'     => 5,
    ),
  ) );
}
add_action( 'after_setup_theme', 'man_add_woocommerce_support' );


//Add google Comfortaa text font
add_filter( 'sp_list_google_fonts', function( $fonts ){

  $fonts[] =array(
    'slug'	=> 'roboto',
    'name'	=> 'Roboto Slab',
    'url'	  => 'Roboto+Slab'
  );
  return $fonts;
} );

// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
   return '… <a href="'. get_permalink($post->ID) . '">' . 'Read More &raquo;' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');
