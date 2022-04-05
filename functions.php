
<?php 

include 'enqueue.php';


// Lägg till menyer
add_action('after_setup_theme', 'registrera_meny');

function registrera_meny() {
    register_nav_menu('socialmeny', 'Socialmeny');
    register_nav_menu('huvudmeny', 'Huvudmeny');
    register_nav_menu('sidebar-sidor', 'Sidebar-Sidor');
    register_nav_menu('sidebar-arkiv', 'Sidebar-Arkiv');
    register_nav_menu('sidebar-kategorier', 'Sidebar-Kategorier');
    register_nav_menu('sibling-left', 'Sibling-right');
    register_nav_menu('sibling-right', 'Sibling-left');
}


// Lägger till olika temasupports
add_theme_support('post-thumbnails');
add_theme_support('menus'); 
add_theme_support('widgets'); 


// Lägger till widgets (sidebars)
function my_register_sidebars() {
   
    register_sidebar( array(
        'name' => 'primary_sidebar',
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="secondary" class="col-xs-12 col-md-3">',
        'after_widget'  => '</aside>',
    ));

    register_sidebar( array(
        'name' => 'sibling_sidebar-left',
        'id' => 'sidebar-left',
        'before_widget' => '<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">',
        'after_widget'  => '</aside>',
    ));

    register_sidebar( array(
        'name' => 'sibling_sidebar-right',
        'id' => 'sidebar-right',
        'before_widget' => '<aside id="secondary" class="col-xs-12 col-md-3">',
        'after_widget'  => '</aside>',
    ));
}

add_action( 'widgets_init', 'my_register_sidebars' );

dynamic_sidebar(); // Behövs den här?

?>