<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="POST">
    <input type="text" id="s" name="s" class="input" placeholder="buscar/" value="<?php the_search_query(); ?>">
    <input type="submit" value="OK">
</form>