<?php
add_action('wp_enqueue_scripts',function(){
  wp_enqueue_style('manan-child', get_stylesheet_directory_uri().'/style.css', array('sp-core-style'), '1.0.0' );
  wp_enqueue_style( 'manan', get_stylesheet_directory_uri() .'/assets/css/manan.css', array( 'manan-child' ), time() );
});

//Add google Comfortaa text font
add_filter( 'sp_list_google_fonts', function( $fonts ){

    $fonts[] =array(
      'slug'	=> 'roboto',
      'name'	=> 'Roboto Slab',
      'url'	  => 'Roboto+Slab'
  );
  return $fonts;
} );
