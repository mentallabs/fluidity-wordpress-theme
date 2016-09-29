    <?php /* Template Name: HomePage */ ?>

        <?php get_header(); ?>

        <div id="services" data-section-name="false" class="scrollify-section center scrollspy">
            <div id="" class="row center">
                <div class="col s12 m12 l12">
                    <div class="row center">
                       <?php
                            // check to see if the text exists and add it to the page
                            if ( get_theme_mod( 'services_heading' ) ) : ?>

                            <h1 class="blue-text"> <?php echo get_theme_mod( 'services_heading' ); ?> </h1>

                        <?php endif; ?>
                   </div>

                    <div class="row">
                        <div id="note" class="flow-text col s12 m12 l12">
                            <?php
                                // check to see if the text exists and add it to the page
                                if ( get_theme_mod( 'services_subpara' ) ) : ?>

                                <?php echo get_theme_mod( 'services_subpara' ); ?>

                            <?php endif; ?>
                        </div>
                    </div>

                    <div style="padding-top:50px;" class="row center">
                        <div class="col s12 m4">
                            <div id="img1" class="circular-image">

                                <?php
                                    // check to see if the text exists and add it to the page
                                    if ( get_theme_mod( 'services_img1' ) ) : ?>

                                    <img class="responsive-img" src="<?php echo get_theme_mod( 'services_img1' ); ?>">

                                <?php endif; ?>

                                <div style="padding-bottom:30px;" class="row">
                                    <div class="col s12 m12 l12">
                                        <span id="featured-heading" style="font-weight: 500;" class="flow-text">
                                            <?php
                                                // check to see if the text exists and add it to the page
                                                if ( get_theme_mod( 'featured_heading1' ) ) : ?>

                                                <?php echo get_theme_mod( 'featured_heading1' ); ?>

                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div id="text1" class="col s12 m12 l12">
                                        <p id="featured-paragraph">
                                            <?php
                                                // check to see if the text exists and add it to the page
                                                if ( get_theme_mod( 'service1_text' ) ) : ?>

                                                <?php echo get_theme_mod( 'service1_text' ); ?>

                                            <?php endif; ?>
                                        </p>
                                    </div><!--text1-->
                                </div>
                            </div><!--img1-->
                        </div>

                        <div class="col s12 m4">
                            <div id="img2" class="circular-image">
                                <?php
                                    // check to see if the text exists and add it to the page
                                    if ( get_theme_mod( 'services_img2' ) ) : ?>

                                    <img class="responsive-img" src="<?php echo get_theme_mod( 'services_img2' ); ?>">

                                <?php endif; ?>

                                <div style="padding-bottom:30px;" class="row">
                                    <div class="col s12 m12 l12">
                                        <span id="featured-heading" style="font-weight: 500;" class="flow-text">
                                            <?php
                                                // check to see if the text exists and add it to the page
                                                if ( get_theme_mod( 'featured_heading2' ) ) : ?>

                                                <?php echo get_theme_mod( 'featured_heading2' ); ?>

                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div id="text2" class="col s12 m12 l12">
                                        <p id="featured-paragraph">
                                            <?php
                                                // check to see if the text exists and add it to the page
                                                if ( get_theme_mod( 'service2_text' ) ) : ?>

                                                <?php echo get_theme_mod( 'service2_text' ); ?>

                                            <?php endif; ?>
                                        </p>
                                    </div><!--text2-->
                                </div>
                            </div><!--img2-->
                        </div>

                        <div class="col s12 m4">
                            <div id="img3" class="circular-image">
                                <?php
                                    // check to see if the text exists and add it to the page
                                    if ( get_theme_mod( 'services_img3' ) ) : ?>

                                    <img class="responsive-img" src="<?php echo get_theme_mod( 'services_img3' ); ?>">

                                <?php endif; ?>

                                <div style="padding-bottom:30px;" class="row">
                                    <div class="col s12 m12 l12">
                                        <span id="featured-heading" style="font-weight: 500;" class="flow-text">
                                            <?php
                                                // check to see if the text exists and add it to the page
                                                if ( get_theme_mod( 'featured_heading3' ) ) : ?>

                                                <?php echo get_theme_mod( 'featured_heading3' ); ?>

                                            <?php endif; ?>
                                        </span>
                                    </div>
                                </div>

                                <div class="row">
                                    <div id="text3" class="col s12 m12 l12">
                                        <p id="featured-paragraph">
                                            <?php
                                                // check to see if the text exists and add it to the page
                                                if ( get_theme_mod( 'service3_text' ) ) : ?>

                                                <?php echo get_theme_mod( 'service3_text' ); ?>

                                            <?php endif; ?>
                                        </p>
                                    </div><!--text3-->
                                </div>
                            </div><!--img3-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="profile" class="scrollify-section scrollspy">
            <div id="top" class="row ">
                <div class="col s12">
                    <div class="container">
                        <div class="row">
                            <h1 id="pro_heading" class="center">
                                    <?php
                                        // check to see if the text exists and add it to the page
                                        if ( get_theme_mod( 'profile_heading' ) ) : ?>

                                        <?php echo get_theme_mod( 'profile_heading' ); ?>

                                    <?php endif; ?>
                            </h1>

                            <div class="row">
                                <div id="profile-pic" class="center circular-image col s12">
                                    <?php
                                        // check to see if the text exists and add it to the page
                                        if ( get_theme_mod( 'profile_img' ) ) : ?>

                                        <img class="responsive-img" src="<?php echo get_theme_mod( 'profile_img' ); ?>">

                                    <?php endif; ?>
                                </div>
                            </div>

                            <div style="padding: 30px 0 30px 0;" class="">
                                <p id="pro_desc" class="col s12 m12 l12">
                                   <?php
                                        // check to see if the text exists and add it to the page
                                        if ( get_theme_mod( 'profile_desc' ) ) : ?>

                                        <?php echo get_theme_mod( 'profile_desc' ); ?>

                                    <?php endif; ?>
                                </p>
                            </div>


                            <div id="social-icons" class="row">
                                <div class="center circular-image col s12">
                                    <ul>
                                        <li style="padding: 10px;">

                                        </li>

                                        <li style="padding: 10px;">
                                            <?php if ( is_active_sidebar( 'social-widget' ) ) : ?>
                                                <div class="widget-area">
                                                    <?php dynamic_sidebar( 'social-widget' ); ?>
                                                </div><!-- #primary-sidebar -->
                                            <?php endif; ?>
                                        </li>

                                        <li style="padding: 10px;">

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="padding: 20px;" id="portfolio" class="scrollify-section center scrollspy">
               <div class="row">
                    <h1 id="portfolio-head" class="center">PORTFOLIO</h1>
                    <span id="subhead">LATEST PROJECTS</span>
                </div>

                <div id="top" class="row center">
                    <div class="col s12">
                        <div class="container">
                            <div style="padding-top: 20px;" class="row">
                                <div id="featured" class="col s12 m12 l12">
                                    <?php if ( is_active_sidebar( 'featured-widget' ) ) : ?>
                                        <div class="widget-area">
                                            <?php dynamic_sidebar( 'featured-widget' ); ?>
                                        </div><!-- #primary-sidebar -->
                                    <?php endif; ?>
                                </div>
                            </div>
                            <button data-target="viewmorePortfolio" class="btn modal-trigger waves-effect waves-light">View More</button>
                        </div>
                    </div>
                </div>
        </div>

        <div id="viewmorePortfolio" class="modal">
            <div class="modal-content">
               <div class="row">
                   <a id="close" class="btn-floating btn-large waves-effect modal-action modal-close waves-light right"><i class="large material-icons">close</i></a>
               </div>

                <div class="container">
                    <div class="row">
                        <span id="modal-heading">Portfolio - My Works</span>
                    </div>

                    <div class="row">
                        <?php if ( is_active_sidebar( 'portfolio-widget' ) ) : ?>
                            <div class="widget-area">
                                <?php dynamic_sidebar( 'portfolio-widget' ); ?>
                            </div><!-- #primary-sidebar -->
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact" class="scrollify-section center scrollspy">
            <div style="padding-left: 10px; padding-right:10px;" id="top" class="row center">
                <div class="col s12">
                    <div class="container">
                        <h1 id="contact-head" class="center black-text">CONTACT ME</h1>

                        <div class="container col s12 m12 l12">
                            <!--Contact-->
                            <div id="contact-card" class="card">
                                <div class="card-content">
                                    <?php if ( is_active_sidebar( 'contact-widget' ) ) : ?>
                                        <div class="widget-area">
                                            <?php dynamic_sidebar( 'contact-widget' ); ?>
                                        </div><!-- #primary-sidebar -->
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



<?php get_footer(); ?>
