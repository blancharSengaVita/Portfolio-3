<?php

require_once(__DIR__ . '/Menus/PrimaryMenuWalker.php');
require_once(__DIR__ . '/Menus/PrimaryMenuItem.php');

//enleve gutenberg
add_filter('use_block_editor_for_post', '__return_false');

//pour ajouter des photos
add_theme_support( 'post-thumbnails' );

//Enregistrer un "type de ressource" (custom post type) pour les projets
register_post_type('project', [
    'label' => 'projets',
    'labels' => [
        'name' => 'projets',
        'singular_name' => 'projets',
    ],
    'description' => 'La ressource permettant de gérer les projets qui ont été effectués.',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-portfolio',
    'supports' => ['title','editor','thumbnail'],
    'rewrite' => ['slug' => 'projets'],
]);

// Récupérer les projets via une requête Wordpress
function get_projects($count = 20)
{
    // 1. on instancie l'objet WP_Query
    $projects = new WP_Query([
        'post_type' => 'project',
        'order_by' => 'date',
        'order' => 'ASC',
        'posts_per_page' => $count,
    ]);

    // 2. on retourne l'objet WP_Query
    return $projects;
}

//register_post_type('pages by admin', [
//    'label' => 'pages by admin',
//    'labels' => [
//        'name' => 'pages',
//        'singular_name' => 'page',
//    ],
//    'description' => 'La ressource permettant de gérer les pages qui ont été effectués.',
//    'public' => true,
//    'menu_position' => 6,
//    'menu_icon' => 'dashicons-portfolio',
//    'supports' => ['title','editor','thumbnail'],
//    'rewrite' => ['slug' => 'pages'],
//]);




register_nav_menu('landing', 'le menu de la page d\'accueil');
register_nav_menu('header', 'le menu du header');
register_nav_menu('footer', 'le menu du footer');

function dw_get_menu_items($location)
{
    $items = [];

    // Récupérer le menu qui correspond à l'emplacement souhaité
    $locations = get_nav_menu_locations();

    if(! ($locations[$location] ?? false)) {
        return $items;
    }

    $menu = $locations[$location];

    // Récupérer tous les éléments du menu en question
    $posts = wp_get_nav_menu_items($menu);

    // Traiter chaque élément de menu pour le transformer en objet
    foreach($posts as $post) {
        // Créer une instance d'un objet personnalisé à partir de $post
        $item = new PrimaryMenuItem($post);

        // Ajouter cette instance soit à $items (s'il s'agit d'un élément de niveau 0), soit en tant que sous-élément d'un item déjà existant.
        if(! $item->isSubItem()) {
            // Il s'agit d'un élément de niveau 0, on l'ajoute au tableau
            $items[] = $item;
            continue;
        }

        // Ajouter l'instance comme "enfant" d'un item existant
        foreach($items as $existing) {
            if(! $existing->isParentFor($item)) continue;

            $existing->addSubItem($item);
        }
    }
    // Retourner les éléments de menu de niveau 0
    return $items;
}

function dw_mix($path)
{
    $path = '/' . ltrim($path, '/');

    // Checker si le fichier demandé existe bien, sinon retourner NULL
    if(! realpath(__DIR__ . '/dist' . $path)) {
        return;
    }

    // Check si le fichier mix-manifest existe bien, sinon retourner le fichier sans cache-bursting
    if(! ($manifest = realpath(__DIR__ . '/dist/mix-manifest.json'))) {
        return get_stylesheet_directory_uri() . '/dist' . $path;
    }

    // Ouvrir le fichier mix-manifest et lire le JSON
    $manifest = json_decode(file_get_contents($manifest), true);

    // Check si le fichier demandé est bien présent dans le mix manifest, sinon retourner le fichier sans cache-bursting
    if(! array_key_exists($path, $manifest)) {
        return get_stylesheet_directory_uri() . '/dist' . $path;
    }

    // C'est OK, on génère l'URL vers la ressource sur base du nom de fichier avec cache-bursting.
    return get_stylesheet_directory_uri() . '/dist' . $manifest[$path];
}

//function wptuts_scripts_with_jquery() {
//    wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/script.js', array( 'jquery' ));
//}
//
//
//add_action( 'wp_enqueue_scripts', 'wp_custom_css_js' );
//
////function wp_custom_css_js (){
////    wp_enqueue_script()
////}
////
////add_action('wp_enqueue_scripts', 'wp_custom_css_js');
//
//function wp_custom_css_js() {
//    wp_enqueue_style( 'style', plugins_url( '/css/gallery.css' , __FILE__ ) );
//    wp_enqueue_script( 'custom-gallery', get_template_directory_uri.'.dist/js/script.js' );
//}
//
//do_action('admin_enqueue_scripts')