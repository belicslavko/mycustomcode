<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// SHORTCODE GENERATOR OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options       = array();

// -----------------------------------------
// Basic Shortcode Examples                -
// -----------------------------------------
$options[]     = array(
  'title'      => 'Basic Shortcode Examples',
  'shortcodes' => array(

    // begin: shortcode
    array(
      'name'      => 'mycustomcode',
      'title'     => 'mycustomcode',
      'fields'    => array(

        // shortcode option field
        array(
          'id'    => 'title',
          'type'  => 'text',
          'title' => 'Title',
        ),

        array(
          'id'    => 'id',
          'type'  => 'text',
          'title' => 'ID',
        ),



      ),
    ),
    // end: shortcode


  ),
);


CSFramework_Shortcode_Manager::instance( $options );
