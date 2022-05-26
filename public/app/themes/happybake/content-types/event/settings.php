<?php

/**
 * Register custom post type and taxonomies
 */
add_action('init', function () {
    register_post_type('event', [
        'labels' => [
            'name' => __('Events', 'rig'),
            'singular_name' => __('Event', 'rig'),
        ],
        'public' => true,
        'delete_with_user' => false,
        'show_in_rest' => true,
        'supports' => ['editor', 'title', 'excerpt', 'thumbnail', 'custom-fields', 'revisions', 'comments'],
    ]);
});

/**
 * Use a custom template for single post
 */
add_filter('single_template', function ($template) {
    global $post;

    if ($post->post_type === 'event') {
        $template = __DIR__ . '/templates/single.php';
    }

    return $template;
});
