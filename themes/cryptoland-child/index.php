<?php

// theme header
get_header();

//Index Settings
$cryptoland_blog_layout = ot_get_option('cryptoland_blog_layout');

// blog index page layout before action area, you can use this function for your custom codes
do_action("cryptoland_before_index");

wp_enqueue_style( 'blg-custom-style' );
wp_enqueue_style( 'bootstrap' );
wp_enqueue_style( 'bootstrap-rtl' );

/* Register & Enqueue scripts. */

wp_enqueue_script( 'bootstrap-js');

?> <!-- Index before code -->

<div id="cryptoland-index" class="cryptoland-index"> <!-- Index general div -->

    <!-- theme hero section -->
    <?php cryptoland_hero_section(); ?>

    <div id="blog-page-container" class="blog-classic c-section -space-large">
        <div class="grid container">
            <div class="row row-xs-middle">


                <?php get_search_form(); ?>


                <br/>
                <div class="c-blog-3-item-inner">

                    <div class="c-blog-3-info ">
                        <h5 class="">
                        <?php $categories = get_categories();


                        foreach ($categories as $category) {

                            echo '<a class="blg-men-cat" rel="category tag" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';

                            if (next($categories)) {
                                echo ' <span></span> ';
                            }
                        }
                        ?>
                        </h5>
                    </div>


                </div>
                <br/>


                <?php
/*
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 5,
                );

                $category = get_the_category();

                $arr_posts = new WP_Query( $args );

                if ( $arr_posts->have_posts() ) :

                    while ( $arr_posts->have_posts() ) :
                        $arr_posts->the_post();
                        */?><!--
                        <article id="post-<?php /*the_ID(); */?>" <?php /*post_class(); */?>>
                            <?php
/*                            if ( has_post_thumbnail() ) :
                                the_post_thumbnail();
                            endif;
                            */?>
                            <header class="entry-header">
                                <h1 class="entry-title"><?php /*the_title(); */?></h1>
                            </header>
                            <div class="entry-content">
                                <?php /*the_excerpt(); */?>
                                <a href="<?php /*the_permalink(); */?>">Read More</a>
                            </div>
                        </article>
                    --><?php
/*                    endwhile;
                    wp_reset_postdata();
                endif;
                */?>



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


                            ?>
                                    <article id="post-<?php /*the_ID(); */?>" <?php /*post_class(); */?>>
                                        <?php
                                                                    if ( has_post_thumbnail() ) :
                                                                        the_post_thumbnail();
                                                                    endif;
                                                                    ?>
                                        <header class="entry-header">
                                            <h1 class="entry-title"><?php  the_title(); ?></h1>
                                        </header>
                                        <div class="entry-content">
                                            <?php the_content(); ?>
                                            <a href="<?php /*the_permalink(); */?>">Read More</a>
                                        </div>
                                    </article>

                            <?php
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
