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

<div class="entry-footer  align-self-end  ">
	<?php
	foreach ( $article_terms as $key => $article_term ) {
		?>
		<a class="p-w-card-title badge bg-warning  ms-1 me-1" href="<?php echo esc_url( get_term_link( $article_term ) ); ?>">
			<small>	<?php echo esc_html( $article_term->name ); ?> </small>
		</a>
		<?php
	}
	?>
</div>
