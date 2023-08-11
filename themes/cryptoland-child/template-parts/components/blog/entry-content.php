<?php
/**
 * Template for entry content.
 *
 * To be used inside WordPress The Loop.
 *
 * @package Aquila
 */

?>


<div class="card-body row align-content-around ">
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
		<div class="truncate-4 card-title " style="color:rgb(148 151 148)">
			<?php aquila_the_excerpt( 200 ); ?>
		</div>

		<div class="card-text " >
		<?php
	//	echo aquila_excerpt_more();

		?>

            <?php
            /**
             * Template for entry footer.
             *
             * To be used inside of WordPress The Loop.
             *
             * @package Aquila
             */

            $the_post_id   = get_the_ID();
            $article_terms = wp_get_post_terms( $the_post_id, [ 'category', 'post_tag' ] );

            if ( empty( $article_terms ) || ! is_array( $article_terms ) ) {
                return;
            }

            ?>

            <div class="row justify-content-end  ">

                <div class="col">
                    <?php
                    echo aquila_excerpt_more();

                    ?> </div>
                <div class=" col p-w-wrap">
                    <?php
                    foreach ( $article_terms as $key => $article_term ) {
                        ?>
                        <a style="color:rgb(148 151 148)" class="p-w-card-title  ms-1 me-1" href="<?php echo esc_url( get_term_link( $article_term ) ); ?>">
                            <small>	#<?php echo esc_html( $article_term->name ); ?> </small>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div>



        </div>

        <?php
	}

	?>
	
</div>
