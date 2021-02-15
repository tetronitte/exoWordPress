<?php
/**
 * @package Météo
 * @version 1.0.0
 */
/*
Plugin Name: Plugin Météo
Plugin URI: 
Description: Plugin de météo
Author: tetronitte
Version: 1.0.0
Author URI: 
*/

//m7O^7gvZEb$lrKnRmQ  password wordpress

add_action('admin_menu','add_menu');

function add_menu() {
    add_menu_page(
        'Bonjour',
        'Widget Météo',
        'manage_options',
        'widget_meteo',
        'meteo_markup',
        '',
        25
    );
}

add_action('admin_init','meteo_setting' );

function meteo_setting() {
    register_setting( 
        'setting',                     // Settings group.
        'meteo_setting',               // Setting name
        'meteo_update'                         // Sanitize callback.
    );

    add_settings_section( 
        'meteo_section',                            // Section ID
        'Bienvenue sur votre plugin de météo',      // Title
        '',                                         // Callback or empty string
        'meteo_settings_page'                       // Page to display the section in.
    );

    add_settings_field( 
        'key_api',                      // Field ID
        'Entrez votre clé API',         // Title
        'key_api_field_markup',         // Callback to display the field
        'meteo_settings_page',          // Page
        'meteo_section'                 // Section
    );

    add_settings_field( 
        'id_city',                      // Field ID
        'Entrez l\'id de la ville',     // Title
        'city_id_field_markup',         // Callback to display the field
        'meteo_settings_page',          // Page
        'meteo_section'                 // Section
    );

    add_settings_field( 
        'widget_choice',                // Field ID
        'Choisissez votre widget',      // Title
        'widget_choice_field_markup',   // Callback to display the field
        'meteo_settings_page',          // Page
        'meteo_section'                 // Section
    );
}

function meteo_markup() {
    ?>
    <div class="wrap">
        <h1><?php echo esc_html(get_admin_page_title()); ?></h1>
        <form action="options.php" method="POST">
            <?php
            settings_fields('setting'); //Group name setting
            do_settings_sections('meteo_settings_page');
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function key_api_field_markup($args) {
    ?>
    <input class="regular-text" type="text" name="key_api" value="5480d49a7f1c8320ddad411236174aaf">
    <?php
};

function city_id_field_markup($args) {
    ?>
    <input class="regular-text" type="text" name="id_city" value="3037854">
    <?php
};

function widget_choice_field_markup($args) {
    ?>
    <input class="regular-text" type="text" name="widget_choice" value="openweathermap-widget-11">
    <?php
};

function meteo_update() {
    update_option('key_api',$_POST['key_api']);
    update_option('id_city',$_POST['id_city']);
    update_option('widget_choice',$_POST['widget_choice']);
}

add_shortcode('meteo_shortcode','shortcode');
function shortcode() {
    $return = '<div id="openweathermap-widget-11"></div>';
}

wp_enqueue_script('script.js');