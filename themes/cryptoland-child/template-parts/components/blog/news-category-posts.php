

<?php 

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'post_status' => array('publish', 'private'),
    'tax_query' => array(
      array(
        'taxonomy' => 'category',
        'field'    => 'slug',
        'terms'    => array('news') // These are the slugs of the categories you're interested in
      )
    )
  );
  
  
  $all_pages = new WP_Query($args);
  
  ?>
  <div class="d-flex justify-content-center">
  <?php 
  if ($all_pages) {
    while ($all_pages->have_posts()) {
      $all_pages->the_post(); ?>
      <div class="card p-4 col m-4 text-black d-flex justify-content-between align-items-center " style="background-color: #f6f6f6;box-shadow: 2px 3px 2px 3px rgba(194, 194, 194, 0.52);
;height:10vh">

      
        <a href="<?php echo get_page_link(get_the_ID()) ?>" class="text-black header-link"><?php the_title() ?></a>
        <small class="text-muted"><?php aquila_posted_on(); ?></small>

      </div>
  <?php
    }
  }
  
  wp_reset_postdata();
  
  ?>
  </div>