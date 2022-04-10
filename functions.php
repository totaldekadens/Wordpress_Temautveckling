
<?php 

// Inkluderar 'enqueue.php' i 'functions.php'
include 'enqueue.php';



// Lägger till olika supportfunktioner till ditt tema
add_theme_support('post-thumbnails');
add_theme_support('menus'); 
add_theme_support('widgets'); 





// Registrerar och lägger till menyer
function registrera_meny() {
    register_nav_menu('huvudmeny', 'Huvudmeny');
    register_nav_menu('sidebar-sidor', 'Sidebar-Sidor'); // Används om man vill att det skall se exakt ut som mockup. Se vidare kommentar i "sidebar.php" 
    register_nav_menu('sidebar-sibling', 'Sidebar-Sibling'); 
}

add_action('after_setup_theme', 'registrera_meny');





// Lägger till och registrerar widgets (sidebars)
function my_register_sidebars() {
  
    register_sidebar( array(
        'name' => 'footer-del-1',
        'id' => 'footer-del-1',
    ));

    register_sidebar( array(
        'name' => 'footer-del-2',
        'id' => 'footer-del-2',
    ));

    register_sidebar( array(
        'name' => 'footer-del-3',
        'id' => 'footer-del-3',
        'class' => 'social',
    ));

    register_sidebar( array(
        'name' => 'footer-copyright',
        'id' => 'footer-copyright',
    ));
    
    register_sidebar( array(
        'name' => 'sidebar-del-1',
        'id' => 'sidebar-del-1',
    ));

    register_sidebar( array(
        'name' => 'sidebar-del-2',
        'id' => 'sidebar-del-2',
    ));

    register_sidebar( array(
        'name' => 'sidebar-del-3',
        'id' => 'sidebar-del-3',
    ));

    // Används om man vill att det skall se exakt ut som mockup. Se vidare kommentar i "sidebar.php"
    register_sidebar( array(
        'name' => 'sidor-sidebar-rubrik',
        'id' => 'sidor_sidebar-rubrik',

    ));

    register_sidebar( array(
        'name' => 'contact-form',
        'id' => 'contact-form',

    ));

    // Searchform alt.2
    register_sidebar( array(
        'name' => 'searchform-title',
        'id' => 'searchform-title',
    ));

    // Searchform alt.1
    register_sidebar( array(
        'name' => 'searchform',
        'id' => 'searchform',

    ));

}

add_action( 'widgets_init', 'my_register_sidebars' );


?>