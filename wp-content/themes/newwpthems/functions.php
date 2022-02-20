<?php 

add_action( 'acf/init', 'my_acf_init' );

add_filter( 'timber/context', 'add_to_context' );

    function add_to_context( $context ) {
        // So here you are adding data to Timber's context object, i.e...
        $context['foo'] = 'I am some other typical value set in your functions.php file, unrelated to the menu';

        // Now, in similar fashion, you add a Timber Menu and send it along to the context.
        $context['menu'] = new \Timber\Menu( 'Główne' );

        return $context;
    }


    // Load Composer dependencies.
    require_once __DIR__ . '/vendor/autoload.php';

    // Initialize Timber.
    new Timber\Timber();
    
    define('THEME_DIR', get_theme_root().'/'.get_template().'/');
    define('THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');

    require_once THEME_DIR.'libs/posttypes.php';
    require_once THEME_DIR.'libs/acf.php';

    $context['menu'] = new \Timber\Menu('Główne');
    add_theme_support( 'post-thumbnails' );


    register_sidebar( array(
        'name' => 'własny side bar',
        'id' => 'side-bar-1'
    ) );

    add_theme_support(
        'editor-font-sizes', 
        array(
            array(
                'name'      => __( 'Normal', 'newwpthems' ),
                'shortName' => __( 'N', 'newwpthems' ),
                'size'      => 14,
                'slug'      => 'normal'
            ),
            array(
                'name'      => __( 'Medium', 'newwpthems' ),
                'shortName' => __( 'M', 'newwpthems' ),
                'size'      => 18,
                'slug'      => 'medium'
            ),
            array(
                'name'      => __( 'Large', 'newwpthems' ),
                'shortName' => __( 'L', 'newwpthems' ),
                'size'      => 26,
                'slug'      => 'large'
            )
        )
    );

        //Include the comment reply Javascript
    add_action('wp_print_scripts', function(){
        if ( (!is_admin()) && is_singular() && comments_open() && get_option('thread_comments') ) wp_enqueue_script( 'comment-reply' );
    });