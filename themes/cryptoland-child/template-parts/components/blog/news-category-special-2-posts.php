

<?php 

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'post_status' => array('publish', 'private'),
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => array('specialposts2') // These are the slugs of the categories you're interested in
      )
    )
  );
  
  
  $all_pages = new WP_Query($args);
  
  ?>
  <div class="row  justify-content-center">
  <?php 
  if ($all_pages) {
    while ($all_pages->have_posts()) {
      $all_pages->the_post(); ?>
      <div class="card p-4 col-5 m-4  " style="background-color: #f6f6f6;box-shadow: 2px 3px 2px 3px rgba(194, 194, 194, 0.52);
;">

<?php 
$the_post_id   = get_the_ID();
$hide_title    = get_post_meta( $the_post_id, '_hide_page_title', true );
$heading_class = ( ! empty( $hide_title ) && 'yes' === $hide_title ) ? 'hide d-none' : '';

$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );

?>
						<img class="card-img-top" src="<?php echo  get_stylesheet_directory_uri(). '/img/empty.jpg'  ?>" >


<div class="card-body text-black d-flex flex-column-reverse justify-content-between align-items-center">
<small class="text-muted"><?php aquila_posted_on(); ?></small>

<a href="<?php echo get_page_link(get_the_ID()) ?>" class="text-black header-link"><?php the_title() ?></a>

    </div>
      
      </div>
  <?php
    }
  }
  
  wp_reset_postdata();
  
  ?>
  </div>
  


  <?php
    // Get the ID of a given category
    $category_id = get_category_by_slug( 'news' );

    // Get the URL of this category
    $category_link = get_category_link( $category_id );
?>

<!-- Print a link to this category -->

<small class="" style="text-align: center;">
<a style="border-bottom: 2px dashed #fec311 !important;" href="<?php echo esc_url( $category_link ); ?>" class="link" title="مشاهده مقالات توکن بهادار ">
مشاهده مقالات توکن بهادار 

<i class="fa fa-arrow-left"></i>
</a>
</small>