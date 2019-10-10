<form class="form-inline" role="search" method="get" action="<?php echo home_url('/'); ?>">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" 
    aria-label="Search" value="<?php echo get_search_query(); ?>" name="s" title="Search">
    <button class="btn btn-outline-info continue-reading my-2 my-sm-0" type="submit">Search</button>
</form>