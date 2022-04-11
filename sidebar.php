
<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <?php dynamic_sidebar('searchform') ?>
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">
                <?php dynamic_sidebar('sidebar-del-1'); ?> <!-- Lägger till rubrik samt en lista av alla sidor (inkl. undersidorna) (Widget)  -->
                
                
                
                <!-- Alternativ med widget och meny om man vill att det skall se ut exakt som mockup.  -->
                <!----------------------------------------------------------------------------------->
                <!-- Rubrik "Sidor" (Widget) -->
                <?php /* dynamic_sidebar('sidor-sidebar-rubrik'); */ ?> 

                <!-- Lägger till en meny baserat på utvalda sidor (Meny). --> 
                <?php /* wp_nav_menu(array(  
                    'theme_location' => 'sidebar-sidor',
                    'menu_class' => 'menu',
                        ));  */?> 
                <!----------------------------------------------------------------------------------->
            </li>
            <li>
                <?php dynamic_sidebar('sidebar-del-2'); ?> <!-- Lägger till en rubrik samt länk till Arkiv (Widget) -->   
            </li>
            <li class="categories">
                <?php dynamic_sidebar('sidebar-del-3'); ?> <!-- Lägger till rubrik samt en lista med Kategorier (Widget)  -->   
            </li>
        </ul>
    </div>
</aside>