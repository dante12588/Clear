<?php 

    add_action( 'init', 'init_post_types' );

    function init_post_types(){
        $coin_args = array(
            'labels' => array(
                'name' => 'monety',
                'singular_name' => 'monety',
                'add_new' => 'dodaj nową',

            ),
            'public' => true,
            'show_ui' => true,
            'menu_position' => 5,
            'show_in_rest' => true,
            'supports' => array(
                'excerpt',
                'title',
                'editor',
                'thumbnail',
            ),
        );

        register_post_type( 'monety', $coin_args );
    }

?>