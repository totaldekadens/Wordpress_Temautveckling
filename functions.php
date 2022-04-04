
<?php 

include 'enqueue.php';


// Lägg till menyer
add_action('after_setup_theme', 'registrera_meny');

function registrera_meny() {
    register_nav_menu('socialmeny', 'Socialmeny');
    register_nav_menu('huvudmeny', 'Huvudmeny');
}


// Lägger till olika temasupports
add_theme_support('post-thumbnails');
add_theme_support('menus'); 
add_theme_support('widgets'); 




?>