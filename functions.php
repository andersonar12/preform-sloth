<?php 
require_once get_template_directory() . '/header-footer-grid/loader.php';

// Agregar scripts y estilos aquí
function add_custom_scripts_and_styles() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2');

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap', array(), null);

    // Enqueue Choices CSS
    wp_enqueue_style('choices', 'https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css', array(), null);

    // Enqueue React.js
    wp_enqueue_script('react', 'https://unpkg.com/react@18/umd/react.production.min.js', array(), '18.0', true);
    wp_enqueue_script('react-dom', 'https://unpkg.com/react-dom@18/umd/react-dom.production.min.js', array(), '18.0', true);

    // Enqueue Choices.js
    wp_enqueue_script('choices', 'https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js', array(), null, true);

    // Enqueue Babel
    wp_enqueue_script('babel', 'https://unpkg.com/babel-standalone@6.26.0/babel.min.js', array(), '6.26.0', true);
}

add_action('wp_enqueue_scripts', 'add_custom_scripts_and_styles');