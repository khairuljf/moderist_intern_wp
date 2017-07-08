<?php


add_theme_support( 'title-tag' );
add_theme_support('custom-header');
add_theme_support('custom-background');
add_theme_support( 'post-thumbnails' );




function wp_style() {
	

    wp_enqueue_style('zerogrid',get_template_directory_uri().'/css/bootstrap.min.css'); 
    wp_enqueue_style('style',get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
    wp_enqueue_style('responsive',get_template_directory_uri().'/css/owl.carousel.css'); 
    wp_enqueue_style('owl.carousel',get_template_directory_uri().'/css/owl.theme.css');  
    wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css');  
    wp_enqueue_style( '_s-style', get_stylesheet_uri() );
    
    
    
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery.min.js');
    wp_enqueue_script('bootstrap',get_template_directory_uri().'js/bootstrap.min.js');
    wp_enqueue_script('wowjs',get_template_directory_uri().'/js/wow.min.js');
    wp_enqueue_script('appear',get_template_directory_uri().'/js/jquery.appear.js');
    wp_enqueue_script('stellar',get_template_directory_uri().'js/stellar.js');
    wp_enqueue_script('owl.carousel',get_template_directory_uri().'js/owl.carousel.min.js');
    wp_enqueue_script('customjs',get_template_directory_uri().'/js/custom.js');
    
    
    
    
    
    
}
add_action( 'wp_enqueue_scripts', 'wp_style' );

register_nav_menus(array(
    'primary'=>'modernist header menu',
    'footer'=>'modernist footer menu'
));


function modernist_widgets(){
    register_sidebar(array(
        
    ));
    
}

add_action('widgets_init','modernist_widgets');


function new_post(){
    
    register_post_type('service',
            array(
                'labels'=>array(
                    'name'=>'SERVICE',
                    'singular_name'=>'hello',
                    'add_new_item'=> 'Add New Service',
                    
                ),
                'public'=> true,
                'supports'=>array('title', 'editor','thumbnail',),
                'new_item' =>'add new service',
                'menu_position' => 20,
                'menu_icon'=>'dashicons-admin-page',
                
    ));
    
}

add_action('init','new_post');


function portfolio_post(){
    register_post_type('portfolio',array(
        'labels'=>array(
            'name'=>'Portfolio',
            'add_new_item'=>'Add New Portfolio',
            'add_new'=>'Add More Portfolio',
        ),
         'supports'=>array('title', 'editor','thumbnail'),
        'public'=>true,
        'menu_icon'   => 'dashicons-portfolio',
        'menu_position' => 20,
    ));
    
}


add_action('init','portfolio_post')

/*



function portfolio_post(){
    register_post_type('portfolio',    array('portfolio', array(
        'labels'=>array(
            'name'=>'Portfolio',
            'add_net_item'=>'Add New Portfolio',
        ),
        'public'=>'true',
        'menu_icon'   => 'dashicons-portfolio'
        
    ));
    
);
}

add_action('init','portfolio_post')

*/

?>