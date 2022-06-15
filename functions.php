<?php

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles() {
    // affiche la liste des feuilles de style qui seront chargées
    // $wp_styles = wp_styles();
    // var_dump($wp_styles->queue);
    // affiche des infos détaillées sur chaque feuille de style
    // foreach( $wp_styles->queue as $handle ) {
    //     var_dump($wp_styles->registered[$handle]);
    // }

    // chargement de la feuille de style du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    // chargement de la feuille de style du thème enfant
    wp_enqueue_style('child-style', get_stylesheet_directory_uri().'/style.css', ['parent-style']);
}

// demande à Wordpress de lancer la fonction `my_theme_enqueue_styles` durant le démarrage de l'application
// PHP_INT_MAX est le niveau de priorité, plus ce nombre est grand et moins la priorité est élevée
// le niveau de priorité par défaut est 10
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', PHP_INT_MAX);

