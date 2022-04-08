<form action="/" method="GET" id="searchform" class="searchform">
    <div>
        <label class="screen-reader-text">Sök efter:</label> <!-- Visas ej just nu -->
        <input name="s" type="text" value="<?php the_search_query(); ?>" />
        <input type="submit" value="Sök" />
    </div>
</form>
