<!-- =====================================
    	==== Start Blog -->




    	<section class="blog section-padding" id="CurrentOpportunities" data-scroll-index="4" style="padding-bottom: 100px;">
            <div class="container">
                <div class="row">

                    <div class="section-head col-sm-12">
                        <h4>
                            <span>Our</span><br>
                            Work
                        </h4>
                    </div>

                    <div class="owl-carousel owl-theme">
                      <?php
                        if( have_rows('jobs', 'options') ):
                            while ( have_rows('jobs', 'options') ) : the_row(); ?>
                            <div class="col-lg-12" style="margin-bottom: 3em;">
                                <div class="item text-center mb-md50">
                                <a href="<?php the_sub_field('file'); ?>" target="_blank">
                                    <div class="post-img">
                                        <img src="<?php the_sub_field('job_image'); ?>" alt="">
                                    </div>
                                    <div class="content">
                                        <h5><?php the_sub_field('job_title'); ?></h5>
                                    </div>
                                </a>
                                </div>
                            </div>

                                <?php

                            endwhile;
                          else :
                        endif;
                      ?>
                    </div>
                </div>
            </div>
        </section>
    	<!-- End Blog ====
    	======================================= -->
