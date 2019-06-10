<?php
/*
 INCLUDING CSS AND JS
*/

function tutorialsetup(){
     wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), microtime(), 'all');
     wp_enqueue_style('maincss', get_template_directory_uri() . '/css/main.css', array(), microtime(), 'all');
     wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', array(), microtime(), true);
     wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'tutorialsetup',);


/*
 THEME SUPPORT
*/

function tutorial_init(){
add_theme_support('menus');
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

/*
 MENU REGISTER
*/

register_nav_menu('primary', 'Main Navigation');
register_nav_menu('secondary', 'Footer Navigation');
register_nav_menu('secondary2' , 'Footer Navigation2');
register_nav_menu('secondary3' , 'Footer Navigation3');
}

add_action('init', 'tutorial_init');

/*
CUSTOM POST TYPE
*/

function tutorial_cpt (){

     $lables = array(
        'name' =>'Features',
        'singular_name' => 'Feature',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'new_item' => 'New Project',
        'view_item' => 'View Project',
        'search_items' => 'Search Projects',
        'not_found' => 'Nothing found',
        'not_found_in_trash' => 'Nothing found in Trash',
        'parent_item_colon' => ''
     );
     $args = array(
          'labels' => $lables,
          'public' => true,
          'has_archive' => true,
          'publicly_queryable' => true,
          'query_var' => true,
          'rewrite' => array('slug' => 'feature'),
          'capability' => '',
          'hierarchical' => false,
          'supports' => array(
               'title',
               'editor',
               'thumbnail',
               'revisions',
               'custom-fields',
          ),
          'taxonomies' => array('category', 'post_tag'),
          'menu_position' => 6,
          'exclude_from_search' => false,
     );
     register_post_type('features', $args);
}
add_action('init','tutorial_cpt');

function tutorial_cpt_screenshots (){

     $lables = array(
        'name' =>'Screenshots',
        'singular_name' => 'Screenshot',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'new_item' => 'New Project',
        'view_item' => 'View Project',
        'search_items' => 'Search Projects',
        'not_found' => 'Nothing found',
        'not_found_in_trash' => 'Nothing found in Trash',
        'parent_item_colon' => ''
     );
     $args = array(
          'labels' => $lables,
          'public' => true,
          'has_archive' => true,
          'publicly_queryable' => true,
          'query_var' => true,
          'rewrite' => array('slug' => 'feature'),
          'capability' => '',
          'hierarchical' => false,
          'supports' => array(
               'title',
               'editor',
               'thumbnail',
               'revisions',
               'custom-fields',
          ),
          'taxonomies' => array('category', 'post_tag'),
          'menu_position' => 6,
          'exclude_from_search' => false,
     );
     register_post_type('screenshots', $args);
}
add_action('init','tutorial_cpt_screenshots');
