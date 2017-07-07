<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>The Modernist</title>

        <!-- css 
        <link href="" rel="stylesheet" type="text/css">
        <link href="" rel="stylesheet" type="text/css" />
        <link href="" rel="stylesheet" media="screen" />
        <link href="" rel="stylesheet" media="screen" />
        <link href="" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet">


        <link id="bodybg" href="bodybg/bg1.css" rel="stylesheet" type="text/css" />
      
        <link id="t-colors" href="color/default.css" rel="stylesheet">
-->
<?php wp_head(); ?>
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">


        <div id="wrapper">

            
                <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">

                <div class="container navigation">

                    <div class="navbar-header page-scroll">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <h1>LOGO</h1>
                            
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                        <ul class="nav navbar-nav">
                            <?php
                            
                            wp_nav_menu(array(
                                'theme-location'=>'top menu',
                                'menu_id'=>'modernist'
                            ));
                                
                            ?>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>

            <!-- Section: intro -->
            <section id="testimonial" class="home-section2 paddingbot-60 parallax " data-stellar-background-ratio="0.5">

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
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail ">
                                <i class="fa fa-5x fa-html5" aria-hidden="true"></i>
                                <div class="caption">
                                    <h3>web design</h3>
                                    <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">

                                <i class="fa fa-5x fa fa-android br-green" aria-hidden="true"></i>
                                <div class="caption">
                                    <h3>Android apps</h3>
                                    <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <i class="fa fa-5x fa-wordpress" aria-hidden="true"></i>


                                <div class="caption">
                                    <h3>Any web Apps</h3>
                                    <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="thumbnail">
                                <i class="fa fa-5x fa-apple "></i>
                                <div class="caption">

                                    <h3>Apple apps</h3>
                                    <p>Vestassapede et donec ut est libe ros sus et eget sed eget quisq ueta habitur augue</p>

                                </div>
                            </div>
                        </div>
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
                        <div class="col-sm-6 marginbot-30 col-md-4">
                            <div class="single-work text-center wow fadeInDown" data-wow-delay="0.1s">
                                <div class="work-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/latest-work.jpg" alt="" class="img-responsive">
                                    <div class="latest-content">
                                        <h4>loren ipsum doron</h4>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6 marginbot-30 col-md-4 wow fadeInRight" data-wow-delay="0.1s">
                            <div class="single-work text-center">
                                <div class="work-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/latest-work.jpg" alt="" class="img-responsive">
                                    <div class="latest-content">
                                        <h4>loren ipsum doron</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="single-work text-center wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="work-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/latest-work.jpg" alt="" class="img-responsive">
                                    <div class="latest-content">
                                        <h4>loren ipsum doron</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="single-work text-center wow fadeInUp" data-wow-delay="0.1s">
                                <div class="work-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/latest-work.jpg" alt="" class="img-responsive">
                                    <div class="latest-content">
                                        <h4>loren ipsum doron</h4>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-6 col-md-4">
                            <div class="single-work text-center wow fadeInRight" data-wow-delay="0.1s">
                                <div class="work-content">
                                    <img src="<?php echo get_template_directory_uri() ?>/img/latest-work.jpg" alt="" class="img-responsive">
                                    <div class="latest-content">
                                        <h4>loren ipsum doron</h4>
                                    </div>
                                </div>
                            </div>

                        </div>





                    </div>
                </div>
            </section>	







            <footer>

                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="widget">
                                    <h5>from the blog</h5>
                                    <h4 >post title</h4>
                                    <p><span> admin</span>domainname.com</p>
                                    <p>
                                        Vestibulumaccumsan egestibulum eu justo convallis augue estas
                                        aenean elit intesque sed. Facilispede estibulum nulla orna
                                        nisl velit elit ac aliquat non tincidunt. Namjusto cras urna 
                                        urnaretra lor urna neque sed quis orci nulla.<br>
                                        <a href="#">Read More >></a>
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                <div class="widget">
                                    <h5>Quick Links</h5>
                                    <ul>
                                        <li><a href="#"> >> Lorem ipsum dolor sit</a></li>
                                        <li><a href="#"> >> Amet consectetur</a></li>
                                        <li><a href="#"> >> Praesent vel sem id</a></li>
                                        <li><a href="#"> >> Curabitur hendrerit est</a></li>
                                        <li><a href="#"> >> Aliquam eget erat nec sapien</a></li>
                                        <li><a href="#"> >> Cras id augue nunc</a></li>
                                        <li><a href="#"> >> Sed a nulla urna</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="widget">
                                    <h5>Latest Tweet</h5>
                                    <p>
                                        <span> @namehere</span> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoremut vitae doloreet 1 day ago


                                    </p>
                                    <p>
                                        <span> @namehere</span> Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoremut vitae doloreet 1 day ago
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="wow fadeInRight" data-wow-delay="0.1s">
                                <div class="widget">
                                    <h5>Contact Us</h5>
                                    <form>
                                        <input type="text" class="form-control" placeholder="Full Name">
                                        <input type="email"  class="form-control" placeholder="Email address">
                                        <input type="text"  class="form-control" placeholder="subject">
                                        <textarea rows="5"  class="form-control" cols="5"> Message</textarea>
                                        <input type="submit" value="SUBMIT">
                                    </form>

                                </div>
                            </div>

                        </div>



                    </div>	
                </div>




                <div class="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="text-left">
                                        <p>&copy;Copyright -2013 domain name-  All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="text-right">
                                        <p>Template by os template</p>
                                    </div>
                                </div>
                            </div>
                        </div>	
                    </div>
                </div>
            </footer>

        </div>
        <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

        <!-- Core JavaScript Files -->
        
<?php wp_footer(); ?>
    </body>

</html>
