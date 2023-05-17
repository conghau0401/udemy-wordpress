<?php

/**
* Functions and definitions
*
* @link https://developer.wordpress.org/themes/basics/theme-functions/
*
* @package Fancy Lab
*/

function fancy_lab_scripts() {
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.3.1', 'all' );
    wp_enqueue_style( 'fancy-lab-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    //sử dụng filemtime để bỏ qua cache
}
//wp_enqueue_scripts để thêm js và css vào site
add_action( 'wp_enqueue_scripts', 'fancy_lab_scripts' );

function fancy_lab_cofig() {
    //tạo mới menu trong dashboard
    register_nav_menus(
        array(
            'fancy_lab_main_menu' => 'Fancy Lab Main Menu',
            'fancy_lab_footer_menu' => 'Fancy Lab Footer Menu'
        )
    );
}
//after_setup_theme hiển thị những elements sau khi được tùy chỉnh và lưu trong admin
add_action( 'after_setup_theme', 'fancy_lab_cofig', 0 );
