<?php

// Регистрируем поддержку логотипа (выполняется один раз)
function my_theme_setup() {
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 150,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' ); // <- обязательно!

// Подключаем стили и скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
    // Bootstrap CSS
    wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3' );
    
    // Font Awesome CSS
    wp_enqueue_style( 'font-awesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '6.5.2' );
    
    // Ваш стиль (подключаем ПОСЛЕ Bootstrap)
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array('bootstrap-css'), '1.0' );
    wp_enqueue_style( 'menu', get_template_directory_uri() . '/assets/css/menu.css', array('bootstrap-css'), '1.0' );
    // Bootstrap JS (оставьте один)
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true );
}
// Регистрация меню
function my_theme_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'textdomain' ),
    ) );
}
//Добволение карусели 
function my_theme_enqueue_swiper() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
}
remove_action('your_theme_entry_footer', 'your_theme_print_meta');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_swiper');

add_action( 'after_setup_theme', 'my_theme_menus' );
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');
?>