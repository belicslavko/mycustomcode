<?php

function add_mycustomcode_scripts() {

    $posts = get_posts(array( 'post_type' => 'mycustomcode', 'posts_per_page' => -1 ));

    wp_enqueue_style( 'mycustomcode-style',  plugin_dir_path(__FILE__).'/css/mycustomcode-css.css');

    wp_enqueue_script( 'mycustomcode-script-header', plugin_dir_path(__FILE__).'/js/mycustomcode-script-header.js');

    wp_enqueue_script( 'mycustomcode-script-footer', plugin_dir_path(__FILE__).'/js/mycustomcode-script-footer.js', false, false, true);

    foreach ($posts as $post){

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




}
add_action( 'wp_enqueue_scripts', 'add_mycustomcode_scripts' );