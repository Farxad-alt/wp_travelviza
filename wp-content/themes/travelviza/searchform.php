<form class="search-form d-flex search" style=" background-image: url(<?php bloginfo('template_url'); ?>/assets/img/search.png)" role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
	<input class="search-form__input form-control w-100" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="" autocomplete="off" />
	<!-- <button type="submit" id="searchsubmit">
	</button> -->
	<ul class="ajax-search"></ul>
</form>