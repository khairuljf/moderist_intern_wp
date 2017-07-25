
<?php
get_header();
?>


<!-- Section: intro -->


<!-- /Section: intro -->

<!-- Section: boxes -->


                    <div class="container sliderbg paddingtop-100">
                        <div class="row">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <?php $slider=new WP_Query(array(
                                    'post_type'=>'slider',
                                )) ?>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <?php while($slider->have_posts()):$slider->the_post(); ?>
                                    <div class="item khairul">
                                        <div class="row">
                                            <div class="col-md-4 col-md-offset-2">
                                                <a href="<?php the_permalink();  ?>"><h1 class="slider-heading"><?php the_title(); ?></h1></a>
                                                <?php the_excerpt(); ?>
                                            </div>
                                            <div class="col-md-6">
                                                <?php the_post_thumbnail('portfolio-thum', array('class' => 'img-responsive')); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endwhile; ?>
                                    
                                    
                                </div>

                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>





<section id="boxes" class="home-section paddingtop-70 ">

    <div class="container">

        <div class="row text-center">
            <?php
            $services = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => '4'
                    ))
            ?>


            <?php while ($services->have_posts()):$services->the_post(); ?>

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
$portfolio = new Wp_Query(array(
    'post_type' => 'portfolio',
    'posts_per_page' => '12',
        ))
?>

            <?php while ($portfolio->have_posts()): $portfolio->the_post(); ?>

                <div class="col-sm-6 marginbot-30 col-md-4">
                    <div class="single-work text-center wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="work-content">
    <?php the_post_thumbnail('portfolio-thum', array('class' => 'img-responsive')); ?>
                            <div class="latest-content">
                            <?php the_content(); ?>
                            </div>
                        </div>
                    </div>

                </div>
<?php endwhile; ?>








        </div>
    </div>
</section>


<section id="partner" class="home-section paddingbot-60">
   
    <div class="container">
        <div class="row">
           
        </div>
    </div>
</section>



<?php get_footer(); ?>




