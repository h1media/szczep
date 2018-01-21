<form id="search_form" role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="input-group">
		<input class="search-field form-control" type="search" placeholder="<?php echo esc_attr_x( 'Szukaj', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
		<div class="input-group-btn">
			<button type="submit" class="search-submit icon-magnifier btn" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"></button>
		</div>
	</div>
</form>