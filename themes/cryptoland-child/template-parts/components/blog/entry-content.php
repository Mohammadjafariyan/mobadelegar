<?php
/**
 * Template for entry content.
 *
 * To be used inside WordPress The Loop.
 *
 * @package Aquila
 */

?>


<div class="card-body">
	<?php
	if ( is_single() ) {
		the_content(
			sprintf(
				wp_kses(
				/* translators: %s: Name of current post. */
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'aquila' ),
					[
						'span' => [
							'class' => [],
						],
					]
				),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			)
		);

		wp_link_pages(
			[
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'aquila' ),
				'after'  => '</div>',
			]
		);

	} else {
		?>
		<div class="truncate-4 card-title">
			<?php aquila_the_excerpt( 200 ); ?>
		</div>

		<div class="card-text">
		<?php
		echo aquila_excerpt_more();

		?> </div> <?php
	}

	?>
	
</div>