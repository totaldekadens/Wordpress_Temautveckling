
<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <?php get_search_form(); ?> <!-- Hämtar "searchform.php -->
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">

                <!-- Lägger till rubrik på listan med sidor (Widget)  -->
                <?php dynamic_sidebar('sidor-sidebar'); ?> 

                <!-- Lägger till en meny baserat på utvalda sidor (Meny). 
                När jag valde widget så kunde jag inte anpassa vilka sidor jag kunde välja. 
                Så det fick bli meny för att komma så nära original som möjligt då "undersidorna" inte är med i mockup.   -->
                <?php wp_nav_menu(array(  
                    'theme_location' => 'sidebar-sidor',
                    'menu_class' => 'menu',
                        )); ?> 
            <li>
             <!-- Lägger till en rubrik samt länk till Arkiv (Widget) -->   
            <?php dynamic_sidebar('arkiv-sidebar'); ?>
            </li>

            <li class="categories">
            <!-- Lägger till rubrik på listan med Kategorier (Widget)  -->    
            <?php dynamic_sidebar('category-sidebar'); ?>
                <?php 
                
                    /* Funkar ej nedan. Vill lägga till antalet för varje kategori */
                    $categories = get_categories();
      
                    for ($i=0; $i < count($categories); $i++) { 
                        $category = $categories[$i];
                        $count = $category->category_count;   
                    }

                    /* Lägger till en meny baserat på kategorier (Meny). Försökte med widget först, men fick inte det önskade utseendet jag ville ha med antal så som det är i original */
                     wp_nav_menu(array(
            		'theme_location' => 'sidebar-kategorier',
            		'menu_class' => 'menu',
                    'after' => ' ('.$count.')',
            			)); ?> 
            </li>
        </ul>
    </div>
</aside>