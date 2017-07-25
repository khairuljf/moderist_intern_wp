<?php


/*  for Website title    */

add_theme_support( 'title-tag' ); 
/*  Header text & imge  color    */
add_theme_support('custom-header');
/*  background color | image    */
add_theme_support('custom-background');
/*  Post image register    */
add_theme_support( 'post-thumbnails' );

add_theme_support('comments');


/* style sheet & Script add function */

function wp_style() {
	
/*  style adding    */
  
    wp_register_style('zerogrid',get_template_directory_uri().'/css/bootstrap.min.css'); 
    wp_register_style('animate',get_template_directory_uri().'/css/animate.css'); 
    wp_register_style( 'style', get_stylesheet_uri() );
    
    /*  script adding    */
    
    wp_register_script('jqueryfile',get_template_directory_uri().'/js/jquery.min.js');
    wp_register_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js');
    wp_register_script('wow',get_template_directory_uri().'/js/wow.min.min.js');
    wp_register_script('my',get_template_directory_uri().'/js/myjs.js');
    
    
    
    
    wp_enqueue_script('jqueryfile');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('wow');
    wp_enqueue_script('my');
   

    
    
    
    
    wp_enqueue_style('zerogrid');
    wp_enqueue_style('animate');
    
     wp_enqueue_style('style');
}
add_action( 'wp_enqueue_scripts', 'wp_style' );


function script_admin(){
    
    
    wp_register_script('btnscript',get_template_directory_uri().'/js/upload.js');
    wp_enqueue_script('btnscript');
    wp_enqueue_script('thickbox');
    wp_enqueue_script('media-upload');
    wp_enqueue_style('thickbox');
    
}


add_action('admin_enqueue_scripts','script_admin');

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
                'supports'=>array('title', 'editor','thumbnail','author'),
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






        
        
        
 /* add redux framword*/       

 require_once 'lib/ReduxCore/framework.php';
 require_once 'lib/sample/sample-config.php';
 
 
 /* readmore function*/
 
 function readmore($limit){
  $content= explode(" ", get_the_content()); 
    $limitation= array_slice($content,0, $limit);
echo implode(" ", $limitation) ;
};





function modernist_widget(){
    register_sidebar(array(
        'name'=>'Footer Sidebar',
        'id'=>'footer_widget',
        'description'=>'Add Footer Information',
        'before_widget'=>'<div class="col-sm-6 col-md-3"><div class="wow fadeInLeft" data-wow-delay="0.1s"><div class="widget">',
        'before_title'=>'<h5>',
        'after_title'=>'</h5>',
        'after_widget'=>'</div></div></div>',
    ));
    
    add_action('widgets_init','modernist_widget');
    
}

class  new_widget extends WP_Widget{
    
    public function __construct() {
        parent:: __construct('new_widget','a new widget',array(
            'description'=>'This is new widget for test'
        ));
    }
    
    public function widget($args,$instance){
        $title_data= $instance['widget_title'];
        
        echo $args['before_widget'].$args['before_title'].$title_data.$args['before_title'].$args['after_widget'];
    }
    
    public function form($instance){
        $title_data= $instance['widget_title'];
        ?>


<label for="<?php echo $this->get_field_id('widget_title'); ?>">Title</label>
    
    <input type="text" name="<?php echo $this->get_field_name('widget_title'); ?>" id="<?php echo $this->get_field_id('widget_title'); ?>" value="<?php echo $title_data ?>">
        
    
   <?php  }
    
}

function register_new_widget(){
    register_widget('new_widget');
    
}

add_action('widgets_init','register_new_widget');
        
        
        
        
        /* new widget */
        
        
        
 class image_widget extends WP_Widget{
    
     
     public function __construct()
         {
       
        parent::__construct( 'image_widget', ' Image widget', $widget_ops );

          }
 
    public function widget($args,$instance){
         $image =$instance['image'];
     echo $args['before_widget'].$args['before_title']."hello".$args['after_title'].$args['after_widget'];
     echo '<div class="widget_img"><img  src="'.$image.'"></div>';
    
     
     
   
     
    }
 
 public function form($instance){
        $title=$instance['title'];
        $image =$instance['image'];
        
     ?>
    <p>
        <label for="<?php echo $title; ?>">Title</label>
    </p>
    <P>
        <input type="text" name="<?php echo $this->get_field_name('title') ?>" value="<?php echo $title; ?>" id="<?php echo $this->get_field_id('title'); ?>">
    </P>
    
    
    <P>
        <input type="text" class="image1" name="<?php echo $this->get_field_name('image') ?>" value="<?php echo $image ?>" id="<?php echo $this->get_field_id('image'); ?>">
    </P>
    
    <button class="imgupload">Select/Upload</button>
    
    <p>
    
    </p>
    
    
     
  <?php
  }




 }
 
 function image_sidebar(){
     register_widget('image_widget');
 }
 
 
 add_action('widgets_init','image_sidebar');
        
 
 class about_me extends WP_Widget{
     
     public function __construct() {
         parent:: __construct('about_me','A about me widget',array(
             'description'=>'You can add yourself with your photo',
         ));
     }
     
     function widget($args, $instance){
         
     }
     
     function form($instance){
         
         
         
     }
 
     
 }
 
 
 function about_me_widget(){
     register_widget('about_me');
     
 }
 
 add_action('widgets_init','about_me_widget');
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
?>