
<!-- Gör en pagination -->

<?php 
the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( 'Föregående'),
    'next_text' => __( 'Nästa' ),
    'class' => 'pagination',
) ); 
?>

