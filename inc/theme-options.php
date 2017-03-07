<?php
/**
 * Customizer Controls - Theme Options.
 *
 * @package Acelin
 */

// User access level
$capability = 'edit_theme_options';

/**
 * Here we will set the options we are going to have in the customizer.
 */
$options = array(); // If you delete this line, the sky will fall down! So you better don't.

/* ---------------------------------------------------------------------------------------------------
    Panels
--------------------------------------------------------------------------------------------------- */

// Theme Options
$options[] = array( 'title'             => __( 'Theme Options', 'leah' ),
                    'description'       => '',
                    'id'                => 'leah_theme_options',
                    'priority'          => 28,
                    'theme_supports'    => '',
                    'type'              => 'panel' );


/* ---------------------------------------------------------------------------------------------------
    Front Page
--------------------------------------------------------------------------------------------------- */

// Front Page - Section
$options[] = array( 'title'             => __( 'Front Page', 'leah' ),
                    'description'       => '',
                    'panel'             => 'leah_theme_options',
                    'id'                => 'leah_fp_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Front Page Sections
$options[] = array( 'title'             => __( 'Number of Front Page Sections', 'leah' ),
                    'description'       => __( 'Each section will be populated with the content of the selected page.', 'leah' ),
                    'section'           => 'leah_fp_options',
                    'id'                => 'leah_fp_sections',
                    'default'           => '4',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        '1' => __( '1 Section', 'leah' ),
                        '2' => __( '2 Sections', 'leah' ),
                        '3' => __( '3 Sections', 'leah' ),
                        '4' => __( '4 Sections', 'leah' ),
                        '5' => __( '5 Sections', 'leah' ),
                        '6' => __( '6 Sections', 'leah' ),
                        '7' => __( '7 Sections', 'leah' ),
                        '8' => __( '8 Sections', 'leah' ),
                        '9' => __( '9 Sections', 'leah' ),
                        '10' => __( '10 Sections', 'leah' ),
                    ),
                    'type'              => 'control' );

// Front Page Section Pages
$front_page_sections = get_theme_mod( 'leah_fp_sections', 4 );
for ( $i = 1; $i < $front_page_sections + 1; $i++ ) { 

    $options[] = array( 'title'             => __( 'Front Page Section', 'leah' ) . ' ' . $i,
                        'description'       => '',
                        'section'           => 'leah_fp_options',
                        'id'                => 'leah_fp_section_' . $i,
                        'default'           => 0,
                        'option'            => 'pages',
                        'sanitize_callback' => '',
                        'type'              => 'control' );

}

/* ---------------------------------------------------------------------------------------------------
    Site Footer
--------------------------------------------------------------------------------------------------- */

// Site Footer - Section
$options[] = array( 'title'             => __( 'Site Footer', 'leah' ),
                    'description'       => '',
                    'panel'             => 'leah_theme_options',
                    'id'                => 'leah_footer_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Footer Widgets
$options[] = array( 'title'             => __( 'Footer Widgets', 'leah' ),
                    'description'       => __( 'The number of widgets in the footer.', 'leah' ),
                    'section'           => 'leah_footer_options',
                    'id'                => 'leah_footer_widgets',
                    'default'           => '3',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        '0' => __( 'No footer widgets', 'leah' ),
                        '1' => __( '1 Footer Widget', 'leah' ),
                        '2' => __( '2 Footer Widgets', 'leah' ),
                        '3' => __( '3 Footer Widgets', 'leah' ),
                        '4' => __( '4 Footer Widgets', 'leah' ),
                    ),
                    'type'              => 'control' );

// Footer Credits
$options[] = array( 'title'             => __( 'Footer Credits', 'leah' ),
                    'description'       => __( 'This will replace the default footer credits', 'leah' ),
                    'section'           => 'leah_footer_options',
                    'id'                => 'leah_footer_credits',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => 'esc_textarea',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Portfolio
--------------------------------------------------------------------------------------------------- */

// Site Footer - Section
$options[] = array( 'title'             => __( 'Portfolio', 'leah' ),
                    'description'       => '',
                    'panel'             => 'leah_theme_options',
                    'id'                => 'leah_portfolio_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Portfolio Page Title
$options[] = array( 'title'             => __( 'Portfolio Page Title', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_portfolio_options',
                    'id'                => 'leah_portfolio_title',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// Portfolio Page Description
$options[] = array( 'title'             => __( 'Portfolio Page Description', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_portfolio_options',
                    'id'                => 'leah_portfolio_text',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Portfolio Post Columns
$options[] = array( 'title'             => __( 'Portfolio Post Columns', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_portfolio_options',
                    'id'                => 'leah_portfolio_cols',
                    'default'           => 2,
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        '1' => __( '1 Column', 'leah' ),
                        '2' => __( '2 Columns', 'leah' ),
                        '3' => __( '3 Columns', 'leah' ),
                        '4' => __( '4 Columns', 'leah' ),
                    ),
                    'type'              => 'control' );

// Portfolio Posts / Page
$options[] = array( 'title'             => __( 'Portfolio Posts / Page', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_portfolio_options',
                    'id'                => 'leah_portfolio_posts',
                    'default'           => 12,
                    'option'            => 'number',
                    'sanitize_callback' => '',
                    'input_attrs'       => array(
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                    ),
                    'type'              => 'control' );

// Display title on Portfolio archive page.
$options[] = array( 'title'             => __( 'Display title on Portfolio archive page.', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_portfolio_options',
                    'id'                => 'leah_portfolio_show_title',
                    'default'           => '1',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Display excerpt on Portfolio archive page.
$options[] = array( 'title'             => __( 'Display excerpt on Portfolio archive page.', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_portfolio_options',
                    'id'                => 'leah_portfolio_excerpt',
                    'default'           => '',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Slug
$options[] = array( 'title'             => __( 'Portfolio Slug', 'leah' ),
                    'description'       => __( 'This is helpful for search engines. Example: use books if you showcase your books. Note: If you change the slug, you need to go to Settings > Permalinks and save the changes again.', 'leah' ),
                    'section'           => 'leah_portfolio_options',
                    'id'                => 'leah_portfolio_slug',
                    'default'           => 'portfolio',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Custom Scripts
--------------------------------------------------------------------------------------------------- */

// Custom Scripts - Section
$options[] = array( 'title'             => __( 'Custom Scripts', 'leah' ),
                    'description'       => '',
                    'panel'             => 'leah_theme_options',
                    'id'                => 'leah_scripts_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Header Scripts
$options[] = array( 'title'             => __( 'Header Scripts', 'leah' ),
                    'description'       => __( 'This code will output immediately before the closing </head> tag in the document source.', 'leah' ),
                    'section'           => 'leah_scripts_options',
                    'id'                => 'leah_header_scripts',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Footer Scripts
$options[] = array( 'title'             => __( 'Footer Scripts', 'leah' ),
                    'description'       => __( 'This code will output immediately before the closing </body> tag in the document source.', 'leah' ),
                    'section'           => 'leah_scripts_options',
                    'id'                => 'leah_footer_scripts',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );
