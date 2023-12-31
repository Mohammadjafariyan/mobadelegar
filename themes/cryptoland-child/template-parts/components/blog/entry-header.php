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
