<?php
// Funções do tema Data Palacio Portfolio

function datapalacio_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
}
add_action('after_setup_theme', 'datapalacio_theme_support');

function datapalacio_register_assets() {
    wp_enqueue_style('datapalacio-style', get_stylesheet_uri(), [], '1.0');
}
add_action('wp_enqueue_scripts', 'datapalacio_register_assets');

function datapalacio_register_menus() {
    register_nav_menus([
        'main_menu' => __('Menu Principal', 'datapalacio-portfolio'),
        'footer_menu' => __('Menu do Rodapé', 'datapalacio-portfolio'),
    ]);
}

add_action('init', 'datapalacio_register_menus');

// Suporte a widgets
function datapalacio_widgets_init() {
    register_sidebar([
        'name'          => __('Sidebar Principal', 'datapalacio-portfolio'),
        'id'            => 'sidebar-1',
        'description'   => __('Adicione widgets aqui.', 'datapalacio-portfolio'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
    register_sidebar([
        'name'          => __('Rodapé', 'datapalacio-portfolio'),
        'id'            => 'footer-1',
        'description'   => __('Área de widgets do rodapé.', 'datapalacio-portfolio'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'datapalacio_widgets_init');
