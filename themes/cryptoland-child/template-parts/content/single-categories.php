<?php
$the_post_id = get_the_ID();

$categories = get_categories(array('number' => 10));
$postcategories = wp_get_post_categories($the_post_id, ['fields' => 'all']);

$dublicate = array();
foreach ($postcategories as $item) {
    $dublicate[] = $item->term_id; //Push each number iteratively.

}
foreach ($categories as $item) {

    if (!in_array($item->term_id, $dublicate)) {
        $postcategories[] = $item; //Push each number iteratively.
        $dublicate[] = $item->term_id; //Push each number iteratively.
    }
}

showCategories($postcategories);
function showCategories($categories)
{
    foreach ($categories as $category) {

        echo '<li><a class="blg-men-cat" rel="category tag" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';

      /*  if (next($categories)) {
            echo ' <span></span> ';
        }*/
    }
}