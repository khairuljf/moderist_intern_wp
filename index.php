
<?php
get_header();
?>


<!-- Section: intro -->


<!-- /Section: intro -->

<!-- Section: boxes -->

                    <div class="container paddingtop-70">
                        <div class="row">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="..." alt="...">
                                        <div class="carousel-caption">
                                            ...
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="..." alt="...">
                                        <div class="carousel-caption">
                                            ...
                                        </div>
                                    </div>
                                    ...
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



<?php get_footer(); ?>




