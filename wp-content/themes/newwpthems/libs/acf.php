<?php 


function my_acf_init() {
    // Bail out if function doesn’t exist.
    if ( ! function_exists( 'acf_register_block' ) ) {
        return;
    }

    // Register a new block.
    acf_register_block( array(
        'name'            => 'przycisk',
        'title'           => __( 'Example Block', 'your-text-domain' ),
        'description'     => __( 'A custom example block.', 'your-text-domain' ),
        'render_callback' => 'my_acf_block_render_callback',
        'category'        => 'formatting',
        'icon'            => 'admin-comments',
        'keywords'        => array( 'example' ),
    ) );

    acf_register_block([
        'name'                => 'Block',
        'title'               => __('block'),
        'render_callback'     => function () {
            $context = Timber::context();
            $context['data'] = get_field('block');
            Timber::render("./templates/parts/block.twig", $context);
        },
        'category'            => 'formatting',
        'icon'                => 'admin-comments',
        'keywords'            => ['block'],
    ]);
}

?>