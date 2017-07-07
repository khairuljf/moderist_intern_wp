<?php


add_theme_support( 'title-tag' );



function wp_style() {
	

    wp_enqueue_style('zerogrid',get_template_directory_uri().'/css/bootstrap.min.css'); 
    wp_enqueue_style('style',get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('responsive',get_template_directory_uri().'/css/owl.carousel.css'); 
    wp_enqueue_style('responsive',get_template_directory_uri().'/css/owl.theme.css');  
    wp_enqueue_style('responsive',get_template_directory_uri().'/css/animate.css');  
    wp_enqueue_style( '_s-style', get_stylesheet_uri() );
    
    
    
    wp_enqueue_script('responsiveslides',get_template_directory_uri().'/js/jquery.min.js');
    wp_enqueue_script('responsiveslides',get_template_directory_uri().'js/bootstrap.min.js');
    wp_enqueue_script('responsiveslides',get_template_directory_uri().'/js/wow.min.js');
    wp_enqueue_script('responsiveslides',get_template_directory_uri().'/js/jquery.appear.js');
    wp_enqueue_script('responsiveslides',get_template_directory_uri().'js/stellar.js');
    wp_enqueue_script('responsiveslides',get_template_directory_uri().'js/owl.carousel.min.js');
    wp_enqueue_script('responsiveslides',get_template_directory_uri().'/js/custom.js');
    
    
    
    
    
    
}
add_action( 'wp_enqueue_scripts', 'wp_style' );

register_nav_menus(array(
    'primary'=>'header menu','modernist'
));


function modernist_widgets(){
    register_sidebar(array(
        
    ));
    
}

add_action('widgets_init','modernist_widgets')


?>