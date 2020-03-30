<form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
    <input type="text" name="s" class="form-control header-search__input" value="<?php the_search_query(); ?>"
           placeholder="<?php _e( 'Enter phrase for search', 'mehan' ); ?>">
</form>