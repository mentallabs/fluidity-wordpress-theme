<?php

/**
 * Implements Customizer functionality.
 *
 * Add custom sections and settings to the Customizer.
 *
 * @package   fluidity-theme
 * @copyright Copyright (c) 2016, Mental Labs Co.
 * @license   GPL2+
 */
class Fluidity_Customizer {

    /**
     * Fluidity_Customizer constructor.
     *
     * @access public
     * @since  0.2
     * @return void

    public function __construct() {

        add_action( 'customize_register', array( $this, 'register_customize_sections' ) );

    }*/
}

/**
     * Add all sections and panels to the Customizer
     *
     * @param WP_Customize_Manager $wp_customize
     *
     * @access public
     * @since  0.2
     * @return void
     */
    function register_customize_sections( $wp_customize ) {

        //  =============================
        //  = Logo Upload               =
        //  =============================
        $wp_customize->add_setting('theme_logo');

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'theme_logo',
                array(
                    'label' => __('Upload Logo'),
                    'section' => 'title_tagline',
                    'settings' => 'theme_logo',
                )
            )
        );

        //  =============================
        //  = Header Settings           =
        //  =============================

        $wp_customize->add_panel('header_panel',array(
            'priority' => 60,
            'capability' => 'edit_theme_options',
            'title' => __('Header', 'fluidity'),
            'description' => __('Edit header options.', 'fluidity'),
        ));

        $wp_customize->add_section('header', array(
            'title' => __('Header Content', 'fluidity'),
            'priority' => 10,
            'capability' => 'edit_theme_options',
            'description' => 'Edit content of header section',
            'panel' => 'header_panel',
        ));

        $wp_customize->add_setting('header_bg', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_setting('header_h1');

        $wp_customize->add_setting('header_h3');

        $wp_customize->add_setting('header_slogan', array(
            'default' => 'FAST | SMOOTH | FLUID'
        ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'header_bg',
                array(
                    'label' => __('Header Image Upload'),
                    'section' => 'header',
                    'settings' => 'header_bg',
                    'priority' => 10,
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'header_h1',
                array(
                    'label' => __('Heading Text 1'),
                    'section' => 'header',
                    'settings' => 'header_h1',
                    'priority' => 20,
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'header_h3',
                array(
                    'label' => __('Tagline'),
                    'section' => 'header',
                    'settings' => 'header_h3',
                    'priority' => 30,
                )
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'header_slogan',
                array(
                    'label' => __('Slogan'),
                    'section' => 'header',
                    'settings' => 'header_slogan',
                    'priority' => 40,
                )
            )
        );

        //  =============================
        //  = Body Settings           =
        //  =============================

        $wp_customize->add_panel('body_panel', array(
            'priority' => 65,
            'capability' => 'edit_theme_options',
            'title' => __('Body', 'fluidity'),
            'description' => __('Edit body options.', 'fluidity'),
        ));

        //  =============================
        //  = Services Section Settings           =
        //  =============================

        $wp_customize->add_section('service_section', array(
            'title' => __('Services Content', 'fluidity'),
            'capability' => 'edit_theme_options',
            'description' => 'Edit content of services section',
            'panel' => 'body_panel',
        ));

        $wp_customize->add_setting('services_heading', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Services'
        ));

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'services_heading',
                array(
                    'label' => __('Heading'),
                    'section' => 'service_section',
                    'settings' => 'services_heading',
                    'priority' => 10,
                )
            ));

        $wp_customize->add_setting('services_subpara', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in dignissim mauris. Phasellus enim eros, porttitor nec mi mollis, placerat rutrum diam. Quisque sagittis molestie ante nec hendrerit.'
        ));

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'services_subpara',
                array(
                    'label' => __('Description'),
                    'section' => 'service_section',
                    'settings' => 'services_subpara',
                    'priority' => 20,
                    'type' => 'textarea',
                )
            ));

        $wp_customize->add_setting('services_img1', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'services_img1',
                array(
                    'label' => __('Upload Image 1'),
                    'section' => 'service_section',
                    'settings' => 'services_img1',
                    'priority' => 30,
                )
            ));

        $wp_customize->add_setting('featured_heading1', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Adobe Photoshop, Lightroom, Indesign'
        ));

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'featured_heading1',
                array(
                    'label' => __('Featured Heading 1'),
                    'section' => 'service_section',
                    'settings' => 'featured_heading1',
                    'priority' => 35,
                )
            ));

        $wp_customize->add_setting('services_img2', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'services_img2',
                array(
                    'label' => __('Upload Image 2'),
                    'section' => 'service_section',
                    'settings' => 'services_img2',
                    'priority' => 40,
                )
            ));

        $wp_customize->add_setting('featured_heading2', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Maintenance'
        ));

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'featured_heading2',
                array(
                    'label' => __('Featured Heading 2'),
                    'section' => 'service_section',
                    'settings' => 'featured_heading2',
                    'priority' => 45,
                )
            ));

        $wp_customize->add_setting('services_img3', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
        ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'services_img3',
                array(
                    'label' => __('Upload Image 3'),
                    'section' => 'service_section',
                    'settings' => 'services_img3',
                    'priority' => 50,
                )
            ));

        $wp_customize->add_setting('featured_heading3', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Fast'
        ));

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'featured_heading3',
                array(
                    'label' => __('Featured Heading 3'),
                    'section' => 'service_section',
                    'settings' => 'featured_heading3',
                    'priority' => 55,
                )
            ));


        $wp_customize->add_setting('service1_text', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in dignissim mauris. Phasellus enim eros, porttitor nec mi mollis, placerat rutrum diam. Quisque sagittis molestie ante nec hendrerit.'
        ));

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'service1_text',
                array(
                    'label' => __('Description of Service 1'),
                    'section' => 'service_section',
                    'settings' => 'service1_text',
                    'priority' => 35,
                    'type' => 'textarea',
                )
            ));

        $wp_customize->add_setting('service2_text', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in dignissim mauris. Phasellus enim eros, porttitor nec mi mollis, placerat rutrum diam. Quisque sagittis molestie ante nec hendrerit.'
        ));

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'service2_text',
                array(
                    'label' => __('Description of Service 2'),
                    'section' => 'service_section',
                    'settings' => 'service2_text',
                    'priority' => 45,
                    'type' => 'textarea',
                )
            ));

        $wp_customize->add_setting('service3_text', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in dignissim mauris. Phasellus enim eros, porttitor nec mi mollis, placerat rutrum diam. Quisque sagittis molestie ante nec hendrerit.'
        ));

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'service3_text',
                array(
                    'label' => __('Description of Service 3'),
                    'section' => 'service_section',
                    'settings' => 'service3_text',
                    'priority' => 55,
                    'type' => 'textarea',
                )
            ));


        //  =============================
        //  = Profile Section Settings           =
        //  =============================

        $wp_customize->add_section('profile_section', array(
            'title' => __('Profile Content', 'fluidity'),
            'capability' => 'edit_theme_options',
            'description' => 'Edit content of profile section',
            'panel' => 'body_panel',
        ));


        $wp_customize->add_setting('profile_heading', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'PROFILE'
        ));

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'profile_heading',
                array(
                    'label' => __('Heading'),
                    'section' => 'profile_section',
                    'settings' => 'profile_heading',
                    'priority' => 10,
                    'type' => 'text',
                )
            ));


        $wp_customize->add_setting('profile_img', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'http://fluidity.mentallabsco.com/wp-content/uploads/2016/09/businessman-1.png'
        ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'profile_img',
                array(
                    'label' => __('Upload Profile Photo'),
                    'section' => 'profile_section',
                    'settings' => 'profile_img',
                    'priority' => 20,
                )
            ));


        $wp_customize->add_setting('profile_desc', array(
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in dignissim mauris. Phasellus enim eros, porttitor nec mi mollis, placerat rutrum diam. Quisque sagittis molestie ante nec hendrerit.'
        ));

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'profile_desc',
                array(
                    'label' => __('Your Description'),
                    'section' => 'profile_section',
                    'settings' => 'profile_desc',
                    'priority' => 30,
                    'type' => 'textarea'
                )
            ));


        //  =============================
        //  = Portfolio Section Settings =
        //  =============================



        //  =============================
        //  = Theme Colours Settings - Header    =
        //  =============================

        $wp_customize->add_panel('theme_colours_panel', array(
            'priority' => 70,
            'capability' => 'edit_theme_options',
            'title' => __('Theme Colours', 'fluidity'),
            'description' => __('Edit theme colours.', 'fluidity'),
        ));


        $wp_customize->add_section('header_colours', array(
            'title' => __('Header Colour Options', 'fluidity'),
            'priority' => 10,
            'panel' => 'theme_colours_panel',
        ));

        //add FAB seeting
        $wp_customize->add_setting('btn_floating_colour', array(
            'default' => '#26a69a'
        ));

        //FAB colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_floating_colour', array(
            'label' => 'Floating Button Colour',
            'section' => 'header_colours',
            'settings' => 'btn_floating_colour',
        ) ) );

        //add FAB seeting
        $wp_customize->add_setting('btn_floating_hover', array(
            'default' => '#26a69a'
        ));

        //FAB hover colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_floating_hover', array(
            'label' => 'Floating Button Hover Colour',
            'section' => 'header_colours',
            'settings' => 'btn_floating_hover',
        ) ) );


        //add FAB icon seeting
        $wp_customize->add_setting('btn_floating_icon_colour', array(
            'default' => '#000000'
        ));

        //FAB icon colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_floating_icon_colour', array(
            'label' => 'Floating Button Icon Colour',
            'section' => 'header_colours',
            'settings' => 'btn_floating_icon_colour',
        ) ) );

        //add heading font colour seeting
        $wp_customize->add_setting('heading_font_colour', array(
            'default' => '#ffffff'
        ));

        //heading font colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_font_colour', array(
            'label' => 'Heading/Brand Font Colour',
            'section' => 'header_colours',
            'settings' => 'heading_font_colour',
        ) ) );


        //add slogan font colour seeting
        $wp_customize->add_setting('slogan_font_colour', array(
            'default' => '#ffffff'
        ));

        //slogan font colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slogan_font_colour', array(
            'label' => 'Slogan Font Colour',
            'section' => 'header_colours',
            'settings' => 'slogan_font_colour',
        ) ) );


        //add tagline font colour seeting
        $wp_customize->add_setting('tagline_font_colour', array(
            'default' => '#ffffff'
        ));

        //slogan font colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tagline_font_colour', array(
            'label' => 'Tagline Font Colour',
            'section' => 'header_colours',
            'settings' => 'tagline_font_colour',
        ) ) );

        //add nav background colour seeting
        $wp_customize->add_setting('nav_bg_colour', array(
            'default' => '#ffffff'
        ));

        //nav bg colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_bg_colour', array(
            'label' => 'Navbar Background Colour',
            'section' => 'header_colours',
            'settings' => 'nav_bg_colour',
        ) ) );


        //add nav list font colour seeting
        $wp_customize->add_setting('nav_list_colour', array(
            'default' => '#3aab8c'
        ));

        //nav list font colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_list_colour', array(
            'label' => 'Navbar List Items Font Colour',
            'section' => 'header_colours',
            'settings' => 'nav_list_colour',
        ) ) );

        //add nav list font hover colour seeting
        $wp_customize->add_setting('nav_list_hover_colour', array(
            'default' => '#2196F3'
        ));

        //nav list font colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'nav_list_hover_colour', array(
            'label' => 'Navbar List Items Font Hover Colour',
            'section' => 'header_colours',
            'settings' => 'nav_list_hover_colour',
        ) ) );


        //add menu icon colour seeting
        $wp_customize->add_setting('menu_icon_colour', array(
            'default' => '#3aab8c'
        ));

        //menu icon colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_icon_colour', array(
            'label' => 'Menu Icon Colour',
            'section' => 'header_colours',
            'settings' => 'menu_icon_colour',
            'description' => __('Shown on mobile devices when Navbar list does not have space.', 'fluidity'),
        ) ) );


        //add menu icon hover colour seeting
        $wp_customize->add_setting('menu_hover_colour', array(
            'default' => '#2196F3'
        ));

        //menu icon colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_hover_colour', array(
            'label' => 'Menu Icon Hover Colour',
            'section' => 'header_colours',
            'settings' => 'menu_hover_colour',
            'description' => __('Shown on mobile devices when Navbar list does not have space.', 'fluidity'),
        ) ) );


        //  =============================
        //  = Theme Colours Settings - Services    =
        //  =============================

        $wp_customize->add_section('section1_colours', array(
            'title' => __('Section 1 Colour Options', 'fluidity'),
            'priority' => 20,
            'panel' => 'theme_colours_panel',
        ));

        //add section 1 bg colour seeting
        $wp_customize->add_setting('section1_bg_colour', array(
            'default' => '#fff'
        ));

        //menu icon colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_bg_colour', array(
            'label' => 'Background Colour',
            'section' => 'section1_colours',
            'settings' => 'section1_bg_colour',
        ) ) );


        //add section 1 heading colour seeting
        $wp_customize->add_setting('section1_heading_colour', array(
            'default' => '#2196F3'
        ));

        //section 1 heading colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_heading_colour', array(
            'label' => 'Heading Colour',
            'section' => 'section1_colours',
            'settings' => 'section1_heading_colour',
        ) ) );


        //add section 1 sub paragraph colour seeting
        $wp_customize->add_setting('section1_subpara_colour', array(
            'default' => '#000000'
        ));

        //section 1 heading colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_subpara_colour', array(
            'label' => 'Paragraph Colour',
            'section' => 'section1_colours',
            'settings' => 'section1_subpara_colour',
        ) ) );


        //add section 1 featured colour seeting
        $wp_customize->add_setting('section1_featured_colour', array(
            'default' => '#000000'
        ));

        //section 1 featured colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_featured_colour', array(
            'label' => 'Featured Heading Colour',
            'section' => 'section1_colours',
            'settings' => 'section1_featured_colour',
        ) ) );


        //add section 1 featured para colour seeting
        $wp_customize->add_setting('section1_featuredpara_colour', array(
            'default' => '#000000'
        ));

        //section 1 featured para colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_featuredpara_colour', array(
            'label' => 'Featured Paragraph Colour',
            'section' => 'section1_colours',
            'settings' => 'section1_featuredpara_colour',
        ) ) );


        //section 1 featured colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_featured_colour', array(
            'label' => 'Featured Heading Colour',
            'section' => 'section1_colours',
            'settings' => 'section1_featured_colour',
        ) ) );



        //  =============================
        //  = Theme Colours Settings - Profile    =
        //  =============================

        $wp_customize->add_section('section2_colours', array(
            'title' => __('Section 2 Colour Options', 'fluidity'),
            'priority' => 25,
            'panel' => 'theme_colours_panel',
        ));

        //add section 2 bg colour seeting
        $wp_customize->add_setting('section2_bg_colour', array(
            'default' => '#3aab8c'
        ));

        //section 2 bg colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section2_bg_colour', array(
            'label' => 'Background Colour',
            'section' => 'section2_colours',
            'settings' => 'section2_bg_colour',
        ) ) );


        //add section 2 heading colour seeting
        $wp_customize->add_setting('section2_heading_colour', array(
            'default' => '#000000'
        ));

        //section 2 heading colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section2_heading_colour', array(
            'label' => 'Heading Colour',
            'section' => 'section2_colours',
            'settings' => 'section2_heading_colour',
        ) ) );

        //add section 2 para colour seeting
        $wp_customize->add_setting('section2_para_colour', array(
            'default' => '#ffffff'
        ));

        //section 2 para colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section2_para_colour', array(
            'label' => 'Paragraph Colour',
            'section' => 'section2_colours',
            'settings' => 'section2_para_colour',
        ) ) );



        //  =============================
        //  = Theme Colours Settings - Portfolio    =
        //  =============================

        $wp_customize->add_section('section3_colours', array(
            'title' => __('Section 3 Colour Options', 'fluidity'),
            'priority' => 30,
            'panel' => 'theme_colours_panel',
        ));

        //add section 3 bg colour seeting
        $wp_customize->add_setting('section3_bg_colour', array(
            'default' => '#0059c8'
        ));

        //section 3 bg colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section3_bg_colour', array(
            'label' => 'Background Colour',
            'section' => 'section3_colours',
            'settings' => 'section3_bg_colour',
        ) ) );


        //add section 3 heading colour seeting
        $wp_customize->add_setting('section3_heading_colour', array(
            'default' => '#000000'
        ));

        //section 3 heading colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section3_heading_colour', array(
            'label' => 'Heading Colour',
            'section' => 'section3_colours',
            'settings' => 'section3_heading_colour',
        ) ) );

        //add section 3 subhead colour seeting
        $wp_customize->add_setting('section3_subhead_colour', array(
            'default' => '#000000'
        ));

        //section 3 subhead colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section3_subhead_colour', array(
            'label' => 'Subheading Colour',
            'section' => 'section3_colours',
            'settings' => 'section3_subhead_colour',
        ) ) );

        //add section 3 button colour seeting
        $wp_customize->add_setting('section3_morebtn_colour', array(
            'default' => '#26a69a'
        ));

        //section 3 button colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section3_morebtn_colour', array(
            'label' => 'Button Colour',
            'section' => 'section3_colours',
            'settings' => 'section3_morebtn_colour',
        ) ) );


        //add btn seeting
        $wp_customize->add_setting('btn_hover', array(
            'default' => '#2bbbad'
        ));

        //btn hover colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'btn_hover', array(
            'label' => 'Button Hover Colour',
            'section' => 'section3_colours',
            'settings' => 'btn_hover',
        ) ) );


        //  =============================
        //  = Theme Colours Settings - Contact    =
        //  =============================

        $wp_customize->add_section('section4_colours', array(
            'title' => __('Section 4 Colour Options', 'fluidity'),
            'priority' => 35,
            'panel' => 'theme_colours_panel',
        ));

        //add section 4 bg colour seeting
        $wp_customize->add_setting('section4_bg_colour', array(
            'default' => 'rgba(0,0,0,.1)'
        ));

        //section 4 bg colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section4_bg_colour', array(
            'label' => 'Background Colour',
            'section' => 'section4_colours',
            'settings' => 'section4_bg_colour',
        ) ) );


        //add section 4 heading colour seeting
        $wp_customize->add_setting('section4_heading_colour', array(
            'default' => 'rgba(0,0,0,.1)'
        ));

        //section 4 heading colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section4_heading_colour', array(
            'label' => 'Heading Colour',
            'section' => 'section4_colours',
            'settings' => 'section4_heading_colour',
        ) ) );


        //add section 4 card colour seeting
        $wp_customize->add_setting('section4_card_colour', array(
            'default' => 'rgba(0,0,0,.1)'
        ));

        //section 4 card colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section4_card_colour', array(
            'label' => 'Contact Card Colour',
            'section' => 'section4_colours',
            'settings' => 'section4_card_colour',
        ) ) );


        //  =============================
        //  = Theme Colours Settings - Footer    =
        //  =============================

        $wp_customize->add_section('footer_colours', array(
            'title' => __('Footer Colour Options', 'fluidity'),
            'priority' => 40,
            'panel' => 'theme_colours_panel',
        ));

        //add section 3 bg colour seeting
        $wp_customize->add_setting('footer_bg_colour', array(
            'default' => '#0059c8'
        ));

        //section 3 bg colour picker control
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg_colour', array(
            'label' => 'Footer Colour',
            'section' => 'footer_colours',
            'settings' => 'footer_bg_colour',
        ) ) );
    }
    add_action('customize_register', 'register_customize_sections');

function fluidity_customizer_header_styles(){

    //  =============================
        //  = Theme Colours Settings - Header    =
        //  =============================

    //nav bg colour
    $nav_bg_colour = get_theme_mod('nav_bg_colour');

    if($nav_bg_colour != '#fff') :
    ?>
        <style type="text/css">
            nav {
                background-color: <?php echo $nav_bg_colour; ?>
            }
        </style>
    <?php
    endif;


    //nav list colour
    $nav_list_colour = get_theme_mod('nav_list_colour');

    if($nav_list_colour != '#3aab8c') :
    ?>
        <style type="text/css">
            #nav-mobile a {
                color: <?php echo $nav_list_colour; ?>
            }
        </style>
    <?php
    endif;

    //nav list hover colour
    $nav_list_hover_colour = get_theme_mod('nav_list_hover_colour');

    if($nav_list_hover_colour != '#2196F3') :
    ?>
        <style type="text/css">
            #nav-mobile a:hover {
                color: <?php echo $nav_list_hover_colour; ?>
            }
        </style>
    <?php
    endif;

    //menu icon colour
    $menu_icon_colour = get_theme_mod('menu_icon_colour');

    if($menu_icon_colour != '#3aab8c') :
    ?>
        <style type="text/css">
            #menu-icon {
                color: <?php echo $menu_icon_colour; ?>
            }
        </style>
    <?php
    endif;

    //menu hover colour
    $menu_hover_colour = get_theme_mod('menu_hover_colour');

    if($menu_hover_colour != '#2196F3') :
    ?>
        <style type="text/css">
            #menu-icon:hover {
                color: <?php echo $menu_hover_colour; ?>
            }
        </style>
    <?php
    endif;


    //heading colour
    $heading_font_colour = get_theme_mod('heading_font_colour');

    if($heading_font_colour != '#ffffff') :
    ?>
        <style type="text/css">
            #caps h1 {
                color: <?php echo $heading_font_colour; ?>
            }
        </style>
    <?php
    endif;

    //slogan colour
    $slogan_font_colour = get_theme_mod('slogan_font_colour');

    if($slogan_font_colour != '#ffffff') :
    ?>
        <style type="text/css">
            #caps h3 {
                color: <?php echo $slogan_font_colour; ?>
            }
        </style>
    <?php
    endif;

    //tagline colour
    $slogan_font_colour = get_theme_mod('tagline_font_colour');

    if($slogan_font_colour != '#ffffff') :
    ?>
        <style type="text/css">
            #caps h5 {
                color: <?php echo $slogan_font_colour; ?>
            }
        </style>
    <?php
    endif;

    //FAB colour
    $floating_btn_colour = get_theme_mod('btn_floating_colour');

    if($floating_btn_colour != '#26a69a') :
    ?>
        <style type="text/css">
            a.btn-floating, a.btn-large {
                background-color: <?php echo $floating_btn_colour; ?>
            }
        </style>
    <?php
    endif;

    //FAB hover colour
    $floating_btn_hover = get_theme_mod('btn_floating_hover');

    if($floating_btn_hover != '#26a69a') :
    ?>
        <style type="text/css">
            a.btn-floating:hover, a.btn-large:hover {
                background-color: <?php echo $floating_btn_hover; ?>
            }
        </style>
    <?php
    endif;

    //FAB icon colour
    $floating_btn_icon_colour = get_theme_mod('btn_floating_icon_colour');

    if($floating_btn_icon_colour != '#000000') :
    ?>
        <style type="text/css">
            i.large, i.material-icons {
                color: <?php echo $floating_btn_icon_colour; ?>
            }
        </style>
    <?php
    endif;


    //  =============================
        //  = Theme Colours Settings - Services    =
        //  =============================
    //section 1 bg colour
    $section1_bg_colour = get_theme_mod('section1_bg_colour');

    if($section1_bg_colour != '#fff') :
    ?>
        <style type="text/css">
            div#services {
                background: <?php echo $section1_bg_colour; ?>
            }
        </style>
    <?php
    endif;

    //section 1 heading colour
    $section1_heading_colour = get_theme_mod('section1_heading_colour');

    if($section1_heading_colour != '#2196F3') :
    ?>
        <style type="text/css">
            #services .blue-text {
                color: <?php echo $section1_heading_colour; ?>
            }
        </style>
    <?php
    endif;


    //section 1 subpara colour
    $section1_subpara_colour = get_theme_mod('section1_subpara_colour');

    if($section1_subpara_colour != '#000000') :
    ?>
        <style type="text/css">
            #note {
                color: <?php echo $section1_subpara_colour; ?>
            }
        </style>
    <?php
    endif;

    //section 1 featured colour
    $section1_featured_colour = get_theme_mod('section1_featured_colour');

    if($section1_featured_colour != '#000000') :
    ?>
        <style type="text/css">
            #featured-heading {
                color: <?php echo $section1_featured_colour; ?>
            }
        </style>
    <?php
    endif;

    //section 1 featuredpara colour
    $section1_featuredpara_colour = get_theme_mod('section1_featuredpara_colour');

    if($section1_featuredpara_colour != '#000000') :
    ?>
        <style type="text/css">
            #featured-paragraph {
                color: <?php echo $section1_featuredpara_colour; ?>
            }
        </style>
    <?php
    endif;


    //  =============================
        //  = Theme Colours Settings - Profile    =
        //  =============================
    //section 2 bg colour
    $section2_bg_colour = get_theme_mod('section2_bg_colour');

    if($section2_bg_colour != '#3aab8c') :
    ?>
        <style type="text/css">
            div#profile {
                background: <?php echo $section2_bg_colour; ?>
            }
        </style>
    <?php
    endif;

    //section 2 heading colour
    $section2_heading_colour = get_theme_mod('section2_heading_colour');

    if($section2_heading_colour != '##000000') :
    ?>
        <style type="text/css">
            #pro_heading {
                color: <?php echo $section2_heading_colour; ?>
            }
        </style>
    <?php
    endif;


    //section 2 subpara colour
    $section2_para_colour = get_theme_mod('section2_para_colour');

    if($section2_para_colour != '#ffffff') :
    ?>
        <style type="text/css">
            p#pro_desc {
                color: <?php echo $section2_para_colour; ?>
            }
        </style>
    <?php
    endif;


    //  =============================
        //  = Theme Colours Settings - Portfolio    =
        //  =============================

    //section 3 bg colour
    $section3_bg_colour = get_theme_mod('section3_bg_colour');

    if($section3_bg_colour != '#0059c8') :
    ?>
        <style type="text/css">
            div#portfolio {
                background: <?php echo $section3_bg_colour; ?>
            }
        </style>
    <?php
    endif;

    //section 3 heading colour
    $section3_heading_colour = get_theme_mod('section3_heading_colour');

    if($section3_heading_colour != '#000000') :
    ?>
        <style type="text/css">
            h1#portfolio-head {
                color: <?php echo $section3_heading_colour; ?>
            }
        </style>
    <?php
    endif;


    //section 3 subhead colour
    $section3_subhead_colour = get_theme_mod('section3_subhead_colour');

    if($section3_subhead_colour != '#000000') :
    ?>
        <style type="text/css">
            span#subhead {
                color: <?php echo $section3_subhead_colour; ?>
            }
        </style>
    <?php
    endif;

    //section 3 button colour
    $section3_morebtn_colour = get_theme_mod('section3_morebtn_colour');

    if($section3_morebtn_colour != '#26a69a') :
    ?>
        <style type="text/css">
            button.btn {
                background-color: <?php echo $section3_morebtn_colour; ?>
            }
        </style>
    <?php
    endif;

    //section 3 btn hover colour
    $btn_hover = get_theme_mod('btn_hover');

    if($btn_hover != '#26a69a') :
    ?>
        <style type="text/css">
            button.btn:hover {
                background-color: <?php echo $btn_hover; ?>
            }
        </style>
    <?php
    endif;


    //  =============================
        //  = Theme Colours Settings - Contact    =
        //  =============================

    $section4_bg_colour = get_theme_mod('section4_bg_colour');

    if($section4_bg_colour != '#000000') :
    ?>
        <style type="text/css">
            div#contact {
                background-color: <?php echo $section4_bg_colour; ?>
            }
        </style>
    <?php
    endif;


    $section4_heading_colour = get_theme_mod('section4_heading_colour');

    if($section4_heading_colour != '#000000') :
    ?>
        <style type="text/css">
            #contact-head {
                background-color: <?php echo $section4_heading_colour; ?>
            }
        </style>
    <?php
    endif;

    $section4_card_colour = get_theme_mod('section4_card_colour');

    if($section4_card_colour != '#ffffff') :
    ?>
        <style type="text/css">
            #contact-card.card {
                background-color: <?php echo $section4_card_colour; ?>
            }
        </style>
    <?php
    endif;

    //  =============================
        //  = Theme Colours Settings - Footer    =
        //  =============================
    //section 3 bg colour
    $footer_bg_colour = get_theme_mod('footer_bg_colour');

    if($footer_bg_colour != '#0059c8') :
    ?>
        <style type="text/css">
            footer {
                background-color: <?php echo $footer_bg_colour; ?>
            }
        </style>
    <?php
    endif;
}
add_action( 'wp_head', 'fluidity_customizer_header_styles' );
