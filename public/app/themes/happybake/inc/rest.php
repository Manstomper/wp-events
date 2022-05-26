<?php

/**
 * Custom REST API endpoint for querying multiple post types
 */
function rig_rest_posts(\WP_REST_Request $request)
{
    $perPage = (int) $request->get_param('perPage');

    if ($perPage < 1 || $perPage > 100) {
        $perPage = 6;
    }

    $args = [
        'post_status' => 'publish',
        'ignore_sticky_posts' => true,
        'post_type' => $request->get_param('postType') ?? 'post',
        'posts_per_page' => $perPage,
        'orderby' => $request->get_param('orderBy') ?? 'date',
        'order' => $request->get_param('order') ?? 'DESC',
    ];

    $page = $request->get_param('page');
    $postTypes = $request->get_param('postTypes');
    $taxQuery = $request->get_param('taxQuery');
    $metaQuery = $request->get_param('metaQuery');

    if ($page) {
        $args['offset'] = $args['posts_per_page'] * ($page - 1);
    }

    if ($postTypes) {
        $args['post_type'] = $postTypes;
    }

    if ($taxQuery) {
        $args['tax_query'] = [[
            'taxonomy' => $taxQuery['taxonomy'],
            'field' => $taxQuery['field'],
            'terms' => $taxQuery['terms'],
        ]];
    }

    if ($metaQuery) {
        $args['meta_key'] = $metaQuery['metaKey'];
        $args['meta_value'] = $metaQuery['metaValue'];
    }

    $q = new \WP_Query($args);

    $results = [
        'foundPosts' => $q->found_posts,
        'posts' => [],
    ];

    $taxonomy = $request->get_param('taxonomy');

    while ($q->have_posts()) {
        $q->the_post();

        if ($taxonomy) {
            $terms = get_the_terms(get_the_ID(), $taxonomy);

            if ($terms && !is_wp_error($terms)) {
                foreach ($terms as &$term) {
                    $term = $term->name;
                }
            } else {
                $terms = [];
            }
        }

        $results['posts'][] = [
            'id' => get_the_ID(),
            'title' => get_the_title(),
            'date' => get_the_date(),
            'excerpt' => has_excerpt() ? get_the_excerpt() : '',
            'link' => get_the_permalink(),
            'terms' => $terms ?? [],
        ];
    }

    wp_reset_postdata();

    return rest_ensure_response($results);
}

add_action('rest_api_init', function () {
    register_rest_route('rig', '/posts', [
        'methods' => 'POST',
        'callback' => 'rig_rest_posts',
        'permission_callback' => '__return_true',
    ]);
});
