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
		  <div class="layout__col2 container border-top border-right">
				<div class="row no-gutters">
					<div class="col-sm-2 offset-sm-1 pt-5">
						<h4>Products</h4>
						<ul class="footer-list mt-3">
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
						</ul>
					</div>
					<div class="col-sm-2 pt-5">
						<h4>Company</h4>
						<ul class="footer-list mt-3">
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
							<li><a href="#">Lorem Ipsum</a></li>
						</ul>
					</div>
					<div class="col-sm-4 offset-sm-2 background-dotted-red border-left">
						<div class="pl-5 pr-5 pt-5 pb-5">
							<h4>Info & Support</h4>
							<a href="#" class="mt-2 btn btn-secondary">Contact Now</a>
							<h4 class="mt-4">Careers</h4>
							<a href="#" class="mt-2 btn btn-secondary">Contact Now</a>
						</div>
					</div>
					<div class="col-sm-1 border-left">
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
			<div class="layout__col2 container border-right">
				<div class="row no-gutters">
					<div class="col-sm-6 offset-sm-1 pt-3 pr-6">
						<ul class="footer-list footer-list--inline">
							<li>Ablerex Corporation</li>
							<li><a href="#">Private</a></li>
							<li><a href="#">Info</a></li>
							<li><a href="#">by Studio Up</a></li>
						</ul>
					</div>
					<div class="col-sm-4 background-dotted-red border-left">
						<div class="pt-2">
						</div>
					</div>
					<div class="col-sm-1 border-left">
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
