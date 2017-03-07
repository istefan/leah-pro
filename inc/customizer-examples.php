<?php
/**
 * Customizer Control Examples.
 *
 * @package Leah
 */

/* ---------------------------------------------------------------------------------------------------
    Examples
--------------------------------------------------------------------------------------------------- */

// Text
$options[] = array( 'title'             => __( 'Text Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_id',
                    'id'                => 'leah_text',
                    'default'           => 'Default value',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// Textarea
$options[] = array( 'title'             => __( 'Textarea Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_id',
                    'id'                => 'leah_textarea',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => 'esc_textarea',
                    'type'              => 'control' );

// Color
$options[] = array( 'title'             => __( 'Color Picker Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_id',
                    'id'                => 'leah_color',
                    'default'           => '#BADA55',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Radio
$options[] = array( 'title'             => __( 'Radio Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_id',
                    'id'                => 'leah_radio',
                    'default'           => 'value2',
                    'option'            => 'radio',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        'value1' => __( 'Choice 1', 'leah' ),
                        'value2' => __( 'Choice 2', 'leah' ),
                        'value3' => __( 'Choice 3', 'leah' ),
                    ),
                    'type'              => 'control' );

// Checkbox
$options[] = array( 'title'             => __( 'Checkbox Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_id',
                    'id'                => 'leah_checkbox',
                    'default'           => '', // 1 for checked
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Select
$options[] = array( 'title'             => __( 'Select Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_id',
                    'id'                => 'leah_select',
                    'default'           => 'value2',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        'value1' => __( 'Choice 1', 'leah' ),
                        'value2' => __( 'Choice 2', 'leah' ),
                        'value3' => __( 'Choice 3', 'leah' ),
                    ),
                    'type'              => 'control' );

// Image Upload
$options[] = array( 'title'             => __( 'Image Upload Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_id',
                    'id'                => 'leah_image',
                    'default'           => '',
                    'option'            => 'image',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );

// File Upload
$options[] = array( 'title'             => __( 'File Upload Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_id',
                    'id'                => 'leah_file',
                    'default'           => '',
                    'option'            => 'file',
                    'sanitize_callback' => '',
                    'type'              => 'control' );


// URL
$options[] = array( 'title'             => __( 'URL Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_2',
                    'id'                => 'leah_url',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );

// Email
$options[] = array( 'title'             => __( 'Email Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_2',
                    'id'                => 'leah_email',
                    'default'           => '',
                    'option'            => 'email',
                    'sanitize_callback' => 'sanitize_email',
                    'type'              => 'control' );

// Password
$options[] = array( 'title'             => __( 'Password Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_2',
                    'id'                => 'leah_password',
                    'default'           => '',
                    'option'            => 'password',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// number
$options[] = array( 'title'             => __( 'number Field (px)', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_2',
                    'id'                => 'leah_number',
                    'default'           => 70,
                    'option'            => 'number',
                    'sanitize_callback' => '',
                    'input_attrs'       => array(
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                        'class' => 'example-class',
                    ),
                    'type'              => 'control' );

// Pages
$options[] = array( 'title'             => __( 'Pages Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_3',
                    'id'                => 'leah_pages',
                    'default'           => 0,
                    'option'            => 'pages',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Categories
$options[] = array( 'title'             => __( 'Categories Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_3',
                    'id'                => 'leah_categories',
                    'default'           => 0,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Tags
$options[] = array( 'title'             => __( 'Tags Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_3',
                    'id'                => 'leah_tags',
                    'default'           => '',
                    'option'            => 'tags',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Post Types
$options[] = array( 'title'             => __( 'Post Types Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_3',
                    'id'                => 'leah_post_types',
                    'default'           => '',
                    'option'            => 'post_types',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Posts
$options[] = array( 'title'             => __( 'Posts Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_3',
                    'id'                => 'leah_posts',
                    'default'           => '',
                    'option'            => 'posts',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Users
$options[] = array( 'title'             => __( 'Users Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_3',
                    'id'                => 'leah_users',
                    'default'           => '',
                    'option'            => 'users',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Menus
$options[] = array( 'title'             => __( 'Menus Field', 'leah' ),
                    'description'       => '',
                    'section'           => 'leah_section_3',
                    'id'                => 'leah_menus',
                    'default'           => '',
                    'option'            => 'menus',
                    'sanitize_callback' => '',
                    'type'              => 'control' );


             