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