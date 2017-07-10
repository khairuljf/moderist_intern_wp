<?php


/*  for Website title    */

add_theme_support( 'title-tag' ); 
/*  Header text & imge  color    */
add_theme_support('custom-header');
/*  background color | image    */
add_theme_support('custom-background');
/*  Post image register    */
add_theme_support( 'post-thumbnails' );


/* style sheet & Script add function */

function wp_style() {
	
/*  style adding    */
  
    wp_register_style('zerogrid',get_template_directory_uri().'/css/bootstrap.min.css'); 
    wp_register_style( 'style', get_stylesheet_uri() );
    
    /*  script adding    */
    
    wp_register_script('jqueryfile',get_template_directory_uri().'/js/jquery.min.js');
    wp_register_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js');
    wp_register_script('my',get_template_directory_uri().'/js/myjs.js');
    
    
    
    
    wp_enqueue_script('jqueryfile');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('my');
    
    
    
    wp_enqueue_style('zerogrid');
     wp_enqueue_style('style');
}
add_action( 'wp_enqueue_scripts', 'wp_style' );


/*  Menu register    */
register_nav_menus(array(
    
    'primary'=>'modernist header menu',
    'footer'=>'modernist footer menu'
));




/*  Custom post type register    */
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


add_action('init','portfolio_post');


function slide_post(){
    register_post_type('slider',array(
        'labels'=>array(
            'name'=>'Slider',
            'add_new_item'=>'Add Slider & Content',
            'add_new'=>'Add more slider item',
            
        ),
        'public'=>true,
        'supports'=>array('title','editor','thumbnail'),
        'menu_icon'=>'dashicons-media-code',
        'menu_position'=>20,
        
        
        
        
    ));
    
    
    
}
add_action('init','slide_post');






/* custom photo size for portfolio_post  */
add_image_size('portfolio-thum', 360, 242, true);





function modernist_widget(){
    register_sidebar(array(
        'name'=>'Footer Sidebar',
        'id'=>'footer_widget',
        'description'=>'Add Footer Information',
        'before_widget'=>'<div class="col-sm-6 col-md-3"><div class="wow fadeInLeft" data-wow-delay="0.1s"><div class="widget">',
        'after_widget'=>'</div></div></div>',
        'before_title'=>'<h5>',
        'after_title'=>'</h5>',
    ));
    
}

add_action('widgets_init','modernist_widget');
        
        
        
 /* add redux framword*/       

 require_once 'lib/ReduxCore/framework.php';
 require_once 'lib/sample/sample-config.php';
        
        
        
        
        
        
        
        
        
        
        
        

?>