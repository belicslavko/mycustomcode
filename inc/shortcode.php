<?php

// [mycustomcode title="Code" id="1"]
function mycustomcode_shortcode_func( $atts ) {

    if(empty($atts['id'])){
        return true;
    }

    $post = get_post($atts['id']);

    $meta_side = get_post_meta( $post->ID, '_custom_mycustomcode_type', true );
    $meta_options = get_post_meta( $post->ID, '_custom_mycustomcode_options', true );

    if($meta_side['section_code_type'] == 'js'){}

    switch ($meta_side['section_code_type']){
        case 'js':
            if(!empty($meta_options['code_js'])) {
                wp_add_inline_script('mycustomcode-script-'.$meta_options['position_select'], $meta_options['code_js']);
            }
            break;
        case 'css';
            if(!empty($meta_options['code_css'])) {
                wp_add_inline_style('mycustomcode-style', $meta_options['code_css']);
            }
            break;
    }

}
add_shortcode( 'mycustomcode', 'mycustomcode_shortcode_func' );