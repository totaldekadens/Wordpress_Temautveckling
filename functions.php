
<?php 

include 'enqueue.php';



// Lägger till olika temasupports
add_theme_support('post-thumbnails');
add_theme_support('menus'); 
add_theme_support('widgets'); 





// Registrerar och lägger till menyer
function registrera_meny() {
    register_nav_menu('huvudmeny', 'Huvudmeny');
    register_nav_menu('sidebar-sidor', 'Sidebar-Sidor');
    register_nav_menu('sidebar-kategorier', 'Sidebar-Kategorier');
    register_nav_menu('sidebar-sibling', 'Sidebar-Sibling');
}

add_action('after_setup_theme', 'registrera_meny');





// Lägger till och registrerar widgets (sidebars)
function my_register_sidebars() {
   
    register_sidebar( array(
        'name' => 'footer-social',
        'id' => 'footer-social',
        'class' => 'social',
    ));

    register_sidebar( array(
        'name' => 'footer-kontakt',
        'id' => 'footer-kontakt',
    ));

    register_sidebar( array(
        'name' => 'footer-om',
        'id' => 'footer-om',
    ));

    register_sidebar( array(
        'name' => 'footer-copyright',
        'id' => 'footer-copyright',
    ));
    

    register_sidebar( array(
        'name' => 'arkiv-sidebar',
        'id' => 'arkiv_sidebar',
    ));

    register_sidebar( array(
        'name' => 'category-sidebar',
        'id' => 'category_sidebar',
    ));
    register_sidebar( array(
        'name' => 'sidor-sidebar',
        'id' => 'sidor_sidebar',
        'before' => '<div>',
        'after' => '</div>'
    ));

}

add_action( 'widgets_init', 'my_register_sidebars' );


?>