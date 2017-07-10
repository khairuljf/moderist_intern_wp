<footer>

                <div class="container">
                    <div class="row">
                        <?php dynamic_sidebar('footer_widget'); ?>
                    </div>
                    	
                </div>




                <div class="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="wow fadeInLeft" data-wow-delay="0.1s">
                                    <div class="text-left">
                                        <?php global $redux_demo ?>
                                        <p><?php echo $redux_demo['footer_left'] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6">
                                <div class="wow fadeInRight" data-wow-delay="0.1s">
                                    <div class="text-right">
                                        <p><?php echo $redux_demo['footer_right'] ?></p>
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
        <script>
        jQuery(document).ready(function {
            jQuery(body).css('display', 'none');
          });
        </script>
<?php wp_footer(); ?>
    </body>

</html>
