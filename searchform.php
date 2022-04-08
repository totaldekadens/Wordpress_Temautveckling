<form role="search" action="<?php echo esc_url( home_url('/')); ?>" method="GET" id="searchform" class="searchform">
    <div>
        <label class="screen-reader-text" for="s" >Sök efter:</label> <!-- Visas ej just nu -->
        <input name="s" id="s" type="text" value="<?php the_search_query(); ?>" />
        <input type="submit" value="Sök" />
    </div>
</form>
