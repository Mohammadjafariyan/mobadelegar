<?php

	// theme header
	get_header();

	//404 page metaboxes settings
	$cryptoland_404_layout = ot_get_option( 'cryptoland_404_layout' );

	//  error page action area, you can use this function for your custom codes
	do_action("cryptoland_before_404");

?>

<div id="cryptoland-404" class="cryptoland-404">  <!-- 404 page general div -->

	<!-- HERO SECTION -->
	<?php cryptoland_hero_section(); ?>

	<div id="error-page-container" class="bg-white c-section -space-large">
		<div class="grid container">
			<div class="row row-xs-middle">

				<!-- Right sidebar -->
				<?php if( ( $cryptoland_404_layout ) == 'right-sidebar' ) { ?>
				<div class="col-lg-8  col-md-8 col-sm-12 posts content-error">

				<!-- left sidebar -->
				<?php } elseif( ( $cryptoland_404_layout ) == 'left-sidebar') { ?>
				<?php cryptoland_inner_page_sidebars(); ?>
				<div class="col-lg-8  col-md-8 col-sm-12 posts content-error">

				<!-- Sidebar none -->
				<?php } elseif( ( $cryptoland_404_layout ) == 'full-width'  || ( $cryptoland_404_layout ) == '') { ?>
				<div class="full-width-index col-md-10 offset-2 col-lg-8 content-error text-center">
				<?php } ?>

					<h3 class="black"><?php esc_html_e( 'Hmm, we could not find what you are looking for.', 'cryptoland' ); ?></h3>
					<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'cryptoland' ); ?></p>

					<div class="search-form-page-container">
						<?php get_search_form(); ?>
					</div>


				</div><!-- End sidebar + content -->

				<!-- Right sidebar -->
				<?php if( ( $cryptoland_404_layout ) == 'right-sidebar') { ?>
					<?php cryptoland_inner_page_sidebars();  ?>
				<?php	} ?>

			</div><!-- End row -->
		</div><!-- End container -->
	</div><!-- End div #blog-post -->

</div> <!-- End 404 page general div -->

<?php
	do_action("cryptoland_after_404");
	get_footer();
?>
