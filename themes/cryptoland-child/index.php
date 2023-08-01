<?php

// theme header
get_header();

//Index Settings
$cryptoland_blog_layout = ot_get_option('cryptoland_blog_layout');

// blog index page layout before action area, you can use this function for your custom codes
do_action("cryptoland_before_index");

wp_enqueue_style( 'bootstrap' );

/* Register & Enqueue scripts. */

wp_enqueue_script( 'bootstrap');

?> <!-- Index before code -->

<div id="cryptoland-index" class="cryptoland-index"> <!-- Index general div -->

    <!-- theme hero section -->
    <?php cryptoland_hero_section(); ?>

    <div id="blog-page-container" class="blog-classic c-section -space-large">
        <div class="grid container">
            <div class="row row-xs-middle">


                <?php get_search_form(); ?>


                <div class="c-blog-3-item-inner">

                    <div class="c-blog-3-info">
                        <h3 class="">
                        <?php $categories = get_categories();


                        foreach ($categories as $category) {

                            echo '
                            <button type="button" class="btn btn-outline-primary">

                            
                            <a rel="category tag" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></button>';

                            if (next($categories)) {
                                echo ' - ';
                            }
                        }
                        ?>
                        </h3>
                    </div>


                </div>
                <br/>
                <!-- Right sidebar -->
                <?php if (($cryptoland_blog_layout) == 'right-sidebar' || ($cryptoland_blog_layout) == ''){ ?>
                <div class="col col-lg-8  col-md-8 col-sm-12 posts">

                    <!-- Left sidebar -->
                    <?php } elseif (($cryptoland_blog_layout) == 'left-sidebar') {
                    cryptoland_inner_page_sidebars(); ?>
                    <div class="col col-lg-8  col-md-8 col-sm-12 posts">

                        <!-- Sidebar none -->
                        <?php } elseif (($cryptoland_blog_layout) == 'full-width') { ?>
                        <div class="full-width-index col col-md-10 col-lg-8">
                            <?php }

                            if (have_posts()) :

                                while (have_posts()) : the_post();
                                    cryptoland_post_format();
                                endwhile;

                                echo '<div class="u-space"></div>';

                                cryptoland_post_pagination();

                            else :

                                get_template_part('content', 'none');

                            endif;
                            ?>

                        </div>

                        <?php
                        if (($cryptoland_blog_layout) == 'right-sidebar' || ($cryptoland_blog_layout) == '') {
                            cryptoland_inner_page_sidebars();
                        }
                        ?>

                    </div><!--End row -->
                </div><!--End container -->
            </div><!--End #blog -->

        </div> <!--End index general div -->


        <?php

        // blog index page layout after action area, you can use this function for your custom codes
        do_action("cryptoland_after_index");

        // theme footer
        get_footer();

        ?>
