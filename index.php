
<?php
    get_header();
?>
            <!-- Section: intro -->
            <section id="testimonial" style="background:<?php header_image(); ?>"  class="home-section2 paddingbot-60 parallax " data-stellar-background-ratio="0.5">

                <div class="carousel-reviews broun-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="row">
                                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">

                                        <div class="carousel-inner">
                                            <div class="item active">

                                                <div class="col-md-6 col-sm-6 hidden-xs">
                                                    <div class="slider-content">
                                                        <h1>Cursus penati saccum nulla.</h1>
                                                        <p>
                                                            Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat adipiscinia pellentum leo.
                                                        </p>
                                                        <a href="#">Read More Here ></a>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 col-sm-6 hidden-sm hidden-xs">
                                                    <img src="<?php echo get_template_directory_uri() ?>/img/slider-item.png" class="img-responsive ">

                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="col-md-6 col-sm-6 hidden-xs">
                                                    <div class="slider-content">
                                                        <h1>Cursus penati saccum nulla.</h1>
                                                        <p>
                                                            Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat adipiscinia pellentum leo.
                                                        </p>
                                                         <a href="#">Read More Here ></a>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 col-sm-6 hidden-sm hidden-xs">
                                                    <img src="<?php echo get_template_directory_uri() ?>/img/slider-item.png" class="img-responsive ">

                                                </div>

                                            </div>


                                        </div>

                                        <a class="left carousel-control" href="#carousel-reviews" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-reviews" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        
            <!-- /Section: intro -->

            <!-- Section: boxes -->
            <section id="boxes" class="home-section ">

                <div class="container">

                    <div class="row text-center">
                        <?php
                        
                            $services=new WP_Query(array(
                                'post_type'=>'service',
                                'posts_per_page'=>'4'
                           
                            ))
                        
                        ?>
                        <?php while ( $services->have_posts()):$services->the_post(); ?>

                        <div class="col-sm-6 col-md-3">
                             <div class="thumbnail ">
                                <?php the_post_thumbnail(); ?>
                                <div class="caption">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_content(); ?></p>

                                </div>
                            </div>
                            
                        </div>
                        
                        <?php endwhile; ?>
                        
                       
                    </div>
                </div>

            </section>
            <!-- /Section: boxes -->





            <section id="partner" class="home-section paddingbot-60">	


                <div class="container">
                    <div class="row">
                        <div class="latest-work marginbot-30 text-center">
                            <span class="latest-bg">latest work</span>
                        </div>
                        
                        <?php
                            $portfolio= new Wp_Query(array(
                                'post_type'=>'portfolio',
                                'posts_per_page'=>'6',
                            ))
                        ?>
                        
                        <?php while(have_posts()):the_post(); ?>

                        <div class="col-sm-6 marginbot-30 col-md-4">
                            <div class="single-work text-center wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="work-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/latest-work.jpg" alt="" class="img-responsive">
                                    <div class="latest-content">
                                        <h4>loren ipsum doron</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <?php endwhile; ?>
                        

                        





                    </div>
                </div>
            </section>	


<?php get_footer(); ?>




            