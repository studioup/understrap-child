<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>
<footer>
	<div class="main-section">
		<div class="layout">
		  <div class="layout__col1 border-top">
		  </div>
		  <div class="layout__col2 container border-top border-right hidden-xs-border-right">
				<div class="row no-gutters">
					<div class="col-lg-2 offset-lg-1 col-sm-3 pt-5">
						<h4>Products</h4>
						<ul class="footer-list mt-3">
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
						</ul>
					</div>
					<div class="col-lg-2 col-sm-3 pt-5">
						<h4>Company</h4>
						<ul class="footer-list mt-3">
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
						</ul>
					</div>
					<div class="col-lg-4 offset-lg-2 col-sm-5 background-pattern-red border-left hidden-xs-border-left">
						<div class="pl-5 pr-5 pt-5 pb-5">
							<h4>Info & Support</h4>
							<a href="<?php echo get_permalink( get_page_by_path( 'contacts-support' ) ); ?>" class="mt-2 btn btn-secondary">Contact Now</a>
							<h4 class="mt-4">Careers</h4>
							<a href="<?php echo get_permalink( get_page_by_path( 'careers' ) ); ?>" class="mt-2 btn btn-secondary">Contact Now</a>
						</div>
					</div>
					<div class="col-sm-1 border-left hidden-xs-down">
						<div class="pt-5"></div>
					</div>
				</div>
		  </div>
		  <div class="layout__col3 border-top">
		  </div>
		</div>
		<div class="layout">
			<div class="layout__col1">
			</div>
			<div class="layout__col2 container border-right hidden-xs-border-right">
				<div class="row no-gutters">
					<div class="col-lg-6 offset-lg-1 col-sm-6 pt-3 pr-0 pr-sm-3 pr-md-6">
						<ul class="footer-list footer-list--inline">
							<li>Ablerex Corporation</li>
							<li><a href="#">Private</a></li>
							<li><a href="#">Info</a></li>
							<li><a href="#">by Studio Up</a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-sm-5 background-pattern-red border-left hidden-xs-down">
						<div class="pt-2">
						</div>
					</div>
					<div class="col-sm-1 border-left hidden-xs-down">
						<div class="pt-2"></div>
					</div>
				</div>
			</div>
			<div class="layout__col3">
			</div>
		</div>
	</div>
</footer>



</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
