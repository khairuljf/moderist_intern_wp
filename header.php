<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        

            <?php
            
            global $redux_demo;
            
            ?>
     
        


<?php wp_head(); ?>
    </head>
    <body id="page-top" <?php body_class(); ?> data-spy="scroll" data-target=".navbar-custom">


        <div id="wrapper">

            
                <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

                <div class="container navigation">

                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="<?php bloginfo('home'); ?>">
                            <img src="<?php echo $redux_demo['set_logo']['url']; ?>" class="img-responsive" style="width: 60px; height: 60px;">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                        <?php
                            wp_nav_menu(array(
                                'theme_location'=>'primary',
                            ))
                        
                        ?>
                        <div class="nav navbar-nav">
                            
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>