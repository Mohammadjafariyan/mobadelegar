<?php
/**
 * Content template
 *
 * @package aquila
 */

$container_classes = !empty( $args['container_classes'] ) ? $args['container_classes'] : 'mb-5';

?>

<article style="border:none" class="card p-w-card mt-2" id="post-<?php the_ID(); ?>" <?php post_class( $container_classes ); ?>>
	<?php
	get_template_part( 'template-parts/components/blog/entry-header' );
	//get_template_part( 'template-parts/components/blog/entry-meta' );
	get_template_part( 'template-parts/components/blog/entry-content' );
	get_template_part( 'template-parts/components/blog/entry-footer' );
	?>

</article>


