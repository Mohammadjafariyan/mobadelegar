ajax load more 
https://connekthq.com/plugins/ajax-load-more/docs/parameters/
<div class="col-lg-4 col-md-6 col-sm-12">

<article style="border:none" class="card p-w-card mt-2" id="post-<?php the_ID(); ?>" <?php post_class( $container_classes ); ?>>
<?php
/**
 * Template for post entry header
 *
 * @package Aquila
 */

$the_post_id   = get_the_ID();
$hide_title    = get_post_meta( $the_post_id, '_hide_page_title', true );
$heading_class = ( ! empty( $hide_title ) && 'yes' === $hide_title ) ? 'hide d-none' : '';

$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );

?>




<header class="entry-header ">
	<?php
	// Featured image
	if ( $has_post_thumbnail ) {
		?>
		<div class="entry-image mb-3">
			<a class="d-block" href="<?php echo esc_url( get_permalink() ); ?>">
				<figure class="img-container">

				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

				<img class="card-img-top" src="<?php echo  $image[0]  ?>" >
                    <div class="p-w-circle   rounded-pill " style="background-color: #fec311;opacity: 0.5">
                        <span class="badge ">
                            <?php  	aquila_posted_on();
                           ?>
                        </span>


                    </div>

                    </img>
					<?php

					
				/*	the_post_custom_thumbnail(
						$the_post_id,
						'featured-thumbnail',
						[
							'sizes' => '(max-width: 350px) 300px, 380px',
							'class' => 'attachment-featured-large size-featured-image'
						]
					) */
					?>
				</figure>
			</a>
		</div>
		<?php
	}else{
			?>
			<div class="entry-image mb-3">
				<a class="d-block" href="<?php echo esc_url( get_permalink() ); ?>">
					<figure class="img-container">
						
						<img class="card-img-top" src="<?php echo  get_stylesheet_directory_uri(). '/img/empty.jpg'  ?>" >
                        <div class="p-w-circle   rounded-pill " style="background-color: #fec311;opacity: 0.5">
                        <span class="badge ">
                            <?php  	aquila_posted_on();
                            ?>
                        </span>


                        </div>
                        </img>


                    </figure>
				</a>
			</div>
			<?php
	}

	// Title
	if ( is_single() || is_page() ) {
		printf(
			'<h1 class="page-title  ps-1 pe-1  card-title text-dark %1$s">%2$s</h1>',
			esc_attr( $heading_class ),
			wp_kses_post( get_the_title() )
		);
	} else {
		printf(
			'<h2 class="entry-title card-title ps-1 pe-1 post-card-title mb-3"><a class="text-dark" href="%1$s">%2$s</a></h2>',
			esc_url( get_the_permalink() ),
			wp_kses_post( get_the_title() )
		);
	}

	?>

</header>
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
					__( 'Continue reading %s <span class="meta-nav">→</span>', 'aquila' ),
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

</article>
</div>