<?php
/**
 * The template for displaying search forms in Underscores.me
 *
 * @package understrap
 */

?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<div class="input-group">
    <input type="hidden" name="post_type" value="product" />
		<input class="field nav__search-input form-control" id="s" name="s" type="search"
			placeholder="<?php esc_attr_e( "Search in 'Products'", 'understrap' ); ?>">
	</div>
</form>
