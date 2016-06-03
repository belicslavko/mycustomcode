<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();


$options[]    = array(
  'id'        => '_custom_mycustomcode_type',
  'title'     => 'My Custom Code Type',
  'post_type' => 'mycustomcode',
  'context'   => 'side',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_side',
      'fields' => array(

        array(
          'id'        => 'section_code_type',
          'type'      => 'image_select',
          'options'   => array(
            'js' => get_template_directory_uri() .'/images/js.gif',
            'css' => get_template_directory_uri() .'/images/css.gif',
            'html' => get_template_directory_uri() .'/images/html.gif',
          ),
          'default'   => 'html',
        ),       

      ),
    ),

  ),
);


$options[]    = array(
  'id'        => '_custom_mycustomcode_options',
  'title'     => 'My Custom Code Options',
  'post_type' => 'mycustomcode',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_options',
      'fields' => array(

        array(
          'id'             => 'position_select',
          'type'           => 'select',
          'title'          => 'Select positiond',
          'options'        => array(
            'header'         => 'Header',
            'footer'         => 'Footer',
          ),
          'dependency'   => array( 'section_code_type', '==', 'js' ),
        ),

        array(
          'id'    => 'code_js',
          'type'  => 'textarea',
          'title' => 'Code',
          'after' => 'Use code without <script></script>',
          'dependency'   => array( 'section_code_type', '==', 'js' ),
        ),        

        array(
          'id'    => 'code_css',
          'type'  => 'textarea',
          'title' => 'Code',
          'after' => 'Use code without <style></style>',
          'dependency'   => array( 'section_code_type', '==', 'css' ),
        ),

        array(
          'id'    => 'code_html',
          'type'  => 'textarea',
          'title' => 'Code',
          'dependency'   => array( 'section_code_type', '==', 'html' ),
        ),       

      ),
    ),

  ),
);

CSFramework_Metabox::instance( $options );
