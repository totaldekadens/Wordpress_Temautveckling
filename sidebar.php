<!-- Dubbelkolla denna -->
<div id="sidebar-primary" class="sidebar">
    <?php dynamic_sidebar(); ?>
</div>
<!--  -->
<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <form id="searchform" class="searchform">
                    <div>
                        <label class="screen-reader-text">Sök efter:</label> <!-- Syns ej -->
                        <input type="text" />
                        <input type="submit" value="Sök" />
                    </div>
                </form>
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">
                <h2>Sidor</h2>

                <?php wp_nav_menu(array(
            		'theme_location' => 'sidebar-sidor',
            		'menu_class' => 'menu',
            			)); ?> 

            <li>
                <h2>Arkiv</h2>
                <?php wp_nav_menu(array(
            		'theme_location' => 'sidebar-arkiv',
            		'menu_class' => 'menu',
            			)); ?> 
            </li>
            <li class="categories">
                <h2>Kategorier</h2>
                <?php 
                
                /* Funkar ej nedan. Kika! */

                $category = get_category($id);
                $count = $category->category_count;
                
                wp_nav_menu(array(
            		'theme_location' => 'sidebar-kategorier',
            		'menu_class' => 'menu',
                    'after' => ' ('.$count.')',
            			)); ?> 
            </li>
        </ul>
    </div>
</aside>