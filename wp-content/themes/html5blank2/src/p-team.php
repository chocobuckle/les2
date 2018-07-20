
         <!-- =====================================
        ==== Start Team -->
        <section class="team" id="OurPeople" style="padding-top: 100px;" data-scroll-index="1">
            <div class="container" style="width: 90%">
                <div class="row">

                    <div class="section-head col-sm-12">
                        <h4>
                            <span>About</span><br>
                            Us
                        </h4>
                    </div>


                        <?php
                        if( have_rows('member',  'options')):
                            while ( have_rows('member', 'options')) : the_row();
                                $picture_teammember = get_sub_field('picture_teammember', 'option');
                                $picture_teammember_colored = get_sub_field('picture_teammember_colored', 'option');
                                $name = get_sub_field('name', 'option');
                                $position_title = get_sub_field('position_title', 'option');
                                $description = get_sub_field('description', 'option');
                                ?>
                                <div class="titem text-center col-md-6" style="display: flex; flex-direction: column;">
                                    <div style="border-bottom: 2px solid #312884; margin-bottom: 5em; flex-grow: 1; display: flex; flex-direction: column;">
                                      <div class="team-img" style="margin: 0 auto; flex-grow: 0; border: 0.6em solid; border-color: rgba(48, 41, 125, 0.17);">
                                          <!-- <img src="<?php echo $picture_teammember ?>" alt=""> -->
                                          <img src="<?php echo $picture_teammember_colored ?>" alt="">
                                      </div>
                                      <div class="info" style="flex-grow: 1; display: flex; flex-direction: column;">
                                          <h6 style="flex-grow: 0;"><?php echo $name ?></h6>
                                          <span style="flex-grow: 0;"><?php echo $position_title ?></span>
                                          <div style="display: flex; flex-direction: column; justify-content: space-between; flex-grow: 1;">
                                            <p><?php echo $description ?></p>
                                            <div class="social">
                                                <?php if( have_rows('social',  'options')):
                                                    while ( have_rows('social',  'options')) : the_row();
                                                    $linkedin = get_sub_field('linkedin', 'option');
                                                    $telephone = get_sub_field('telephone', 'option');
                                                    $mobile = get_sub_field('mobile', 'option');
                                                    $email = get_sub_field('email', 'option');
                                                    ?>
                                                    <br>
                                                    <div class="contact-wrapper">
                                                      <div class="contact-ph-wrapper">
                                                        <p class="contact-ph">T: <?php echo $telephone ?></p>
                                                        <?php
                                                          if ($name !== 'Caroline Devlin') {
                                                            echo '<p class="contact-ph">M: '.$mobile.'</p>';
                                                          }
                                                        ?>
                                                      </div>
                                                      <div class="contact-social-wrapper">
                                                        <?php
                                                         echo '<a class="contact-social" target="_blank" style="margin: 0; width: 100%;" href="/lansdowne/wp-content/uploads/2018/06/'.$name.'.vcf?>"><img src="/lansdowne/wp-content/themes/html5blank2/images/vCard-button.png" /></a>';
                                                        ?>
                                                        <a class="contact-social" target="_blank" style="width: 100%;" href="<?php echo $linkedin ?>"><img src="/lansdowne/wp-content/themes/html5blank2/images/linkedin-button.png" /></a>
                                                      </div>
                                                    </div>
                                                    <!-- <a href="mailto:<?php echo $email ?>"></a> -->
                                                <?php endwhile;
                                                    else :
                                                        // no rows found
                                                    endif;
                                                ?>
                                            </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            <?php endwhile;
                                else :
                                    // no rows found
                                endif;
                            ?>


                </div>
            </div>
        </section>

        <!-- End Team ====
        ======================================= -->
