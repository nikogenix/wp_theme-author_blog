<?php

/**
 * Plugin Name: Form Plugin
 * Description: A plugin for handling contact forms | Credit: YouTube@MrDigitalAU
 * Version: 0.1
 * Text Domain: options-plugin
 */

if (!defined("ABSPATH")) {
    die();
}

if (!class_exists('FormPlugin')) {
    class FormPlugin
    {
        public function __construct()
        {
            define('PLUGIN_PATH', plugin_dir_path(__FILE__));
            define('PLUGIN_URL', plugin_dir_url(__FILE__));
            require_once PLUGIN_PATH . 'vendor/autoload.php';

            $this->initialise();

            add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);

        }

        public function initialise()
        {
            include_once PLUGIN_PATH . 'includes/utilities.php';
            include_once PLUGIN_PATH . 'includes/options-page.php';
            include_once PLUGIN_PATH . 'includes/contact-form.php';
        }

        public function enqueue_styles()
        {
            wp_enqueue_style('form-plugin-styles', PLUGIN_URL . 'includes/css/contact-form.css', [], '1.0.0', 'all');
        }

    }

    $formPlugin = new FormPlugin;
}