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
        '',
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
        'meteo_update'                 // Sanitize callback.
    );

    add_settings_section( 
        'meteo_section',                            // Section ID
        '',      // Title
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
    <h1>Bonjour</h1>
    <h2>Bienvenu sur le plugin météo<h2>
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

function key_api_field_markup() {
    ?>
    <input class="regular-text" type="text" name="key_api" value="<?php echo get_option('key_api') ?>">
    <?php
};

function city_id_field_markup() {
    ?>
    <input class="regular-text" type="text" name="id_city" value="<?php echo get_option('id_city') ?>">
    <?php
};

function widget_choice_field_markup() {
    ?>
    <select name="widget_choice">
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="15">15</option>
        <option value="21">21</option>
    </select>
    
    <?php
};

function meteo_update() {
    update_option('key_api',$_POST['key_api']);
    update_option('id_city',$_POST['id_city']);
    update_option('widget_choice',$_POST['widget_choice']);
}

function gets_meteo() {
    $arr = array();
    $arr[] = get_option('key_api');
    $arr[] = get_option('id_city');
    $arr[] = get_option('widget_choice');
    return $arr;
}

add_filter ('widget_text', 'shortcode_unautop');
add_filter ('widget_text', 'do_shortcode');
add_shortcode('meteo_shortcode','meteo_shortcode');

function meteo_shortcode() {
    return '<div id="openweathermap-widget-'.get_option('widget_choice').'"></div>';
}

wp_enqueue_script('script', plugins_url('script.js', __FILE__, array()));
wp_localize_script('script', 'meteoVar', gets_meteo());