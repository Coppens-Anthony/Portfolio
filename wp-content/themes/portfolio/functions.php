<?php


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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

function allow_svg_upload($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'allow_svg_upload');

add_theme_support('post-thumbnails', ['project']);

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

add_image_size('desc', 450, 450);

register_nav_menu('header', 'Le menu de navigation principal en haut de la page');
register_nav_menu('footer', 'Le menu de navigation de fin de page');

function dw_get_navigation_links(string $location): array
{
    $locations = get_nav_menu_locations();

    if (!isset($locations[$location])) {
        return [];
    }

    $nav_id = $locations[$location];

    $nav = wp_get_nav_menu_items($nav_id);

    $links = [];

    foreach ($nav as $post) {
        $link = new stdClass();
        $link->href = $post->url;
        $link->label = $post->title;

        $links[] = $link;
    }
    return $links;
}

register_post_type('contact_message', [
    'label' => 'Messages de contact',
    'description' => 'Les envois de formulaire via la page de contact',
    'menu_position' => 10,
    'menu_icon' => 'dashicons-email',
    'public' => false,
    'show_ui' => true,
    'has_archive' => false,
    'supports' => ['title','editor'],
]);

add_action('admin_post_dw_submit_contact_form', 'dw_handle_contact_form');
add_action('admin_post_nopriv_dw_submit_contact_form', 'dw_handle_contact_form');

require_once(__DIR__.'/forms/ContactForm.php');

function dw_handle_contact_form()
{
    $form = (new \DW_Theme\Forms\ContactForm())
        ->rule('lastname', 'required')
        ->rule('firstname', 'required')
        ->rule('email', 'required')
        ->rule('email', 'email')
        ->rule('subject', 'required')
        ->rule('message', 'required')
        ->sanitize('lastname', 'sanitize_text_field')
        ->sanitize('firstname', 'sanitize_text_field')
        ->sanitize('email', 'sanitize_text_field')
        ->sanitize('subject', 'sanitize_text_field')
        ->sanitize('message', 'sanitize_textarea_field');

    return $form->handle($_POST);
}