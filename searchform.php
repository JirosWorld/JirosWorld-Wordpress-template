<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
	<input type="search" class="search-form-control" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" title="Search" />
	<input type="image" src="<?php bloginfo('template_directory'); ?>img/icon-search.png" alt="Search" title="Search" class="search-submit"  width="45" height="45"/>
</form>
<!-- dit is de zoek-veld vormgeving pagina -->