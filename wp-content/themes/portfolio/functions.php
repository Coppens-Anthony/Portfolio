<?php

function dw_asset(string $file): string
{
    return get_template_directory_uri() . '/public/' . $file;
}
function urlIs($path): bool
{
    // Normaliser les chemins pour éviter les problèmes de slash final
    $currentPath = rtrim($_SERVER['REQUEST_URI'], '/');
    $checkPath = rtrim($path, '/');

    return $currentPath === $checkPath;
}

function base_path(string $path): string
{
    return get_template_directory() . '/' . $path;
}

// Disable Gutenberg on the back end.
add_filter( 'use_block_editor_for_post', '__return_false' );
// Disable Gutenberg for widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );
// Disable default front-end styles.
add_action( 'wp_enqueue_scripts', function() {
    // Remove CSS on the front end.
    wp_dequeue_style( 'wp-block-library' );
    // Remove Gutenberg theme.
    wp_dequeue_style( 'wp-block-library-theme' );
    // Remove inline global CSS on the front end.
    wp_dequeue_style( 'global-styles' );
}, 20 );


register_post_type('project', [
    'label' => 'Projets',
    'description' => 'Les projets réalisés',
    'menu_position' => 6,
    'has_archive' => true,
    'menu_icon' => 'dashicons-list-view',
    'public' => true,
    'rewrite' => [
        'slug' => 'projets',
    ],
    'supports' => ['title','excerpt','editor','thumbnail'],
]);