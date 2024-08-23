<?php
/*
Plugin Name: Webspeed CARDS
Version: 1.0
Plugin URI: https://www.hjemmesider.dk
Description: WordPress plugin til at vise "Cards"
Author: Morten Andersen
Text Domain: cards-domain
Author URI: https://www.hjemmesider.dk
*/

// CSS
add_action('wp_enqueue_scripts', 'webspeed_card_register_plugin_styles');

  function webspeed_card_register_plugin_styles() {
    wp_register_style('webspeed-card-style', plugins_url('webspeed-card/css/style.css'));
    wp_enqueue_style('webspeed-card-style');
	}

if (class_exists('ACF')) {
  require_once ('files/acf.php');
  require_once ('files/gutenberg.php');
  require_once ('files/forside.php');
}