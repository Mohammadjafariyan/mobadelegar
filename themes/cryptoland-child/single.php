<?php

// theme header
get_header();


?>
    <!-- Index before code -->
    <style>
        .header {
            background-color: #1f2641;
            height: 62px !important;
        }
    </style>


    <div id="cryptoland-index" class="cryptoland-index" style="margin-top: 50px">
        <!-- Index general div -->


        <br/>
        <div id="blog-page-container" class="mt-4">
            <div class="grid container-fluid" style="width:90%">
                <div class="row row-xs-middle">

                    <div class="col-3  ">

                        <?php get_search_form(); ?>


                       <ul>

                           <?php
                           get_template_part('template-parts/content/single-categories');
                           ?>
                       </ul>

                    </div>

                    <div class="col-9">

                        <?php


                        /* Start the Loop */
                        while (have_posts()) :
                            the_post();

                            get_template_part('template-parts/content/content-single');

                            if (is_attachment()) {
                                // Parent post navigation.
                                the_post_navigation(
                                    array(
                                        /* translators: %s: Parent post link. */
                                        'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone'), '%title'),
                                    )
                                );
                            }

                            // If comments are open or there is at least one comment, load up the comment template.
                            if (comments_open() || get_comments_number()) {
                                comments_template();
                            }

                            // Previous/next post navigation.

                            /*the_post_navigation(
                                array(
                                        'class' =>'row',
                                    'next_text' => '<div class="col meta-nav">' . $twentytwentyone_next_label . $twentytwentyone_next . '</div><div class="post-title">%title</div>',
                                    'prev_text' => '<div class="col meta-nav">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</div><div class="post-title">%title</div>',
                                )
                            );*/
                            get_template_part('template-parts/components/single-post-navigation');


                        endwhile; // End of the loop.


                        ?>
                    </div>


                    <br/>


                    <!-- Right sidebar -->

                    <div class="row justify-content-center ">

                        <?php $categories_list = get_the_category_list(','); ?>
                        <?php echo do_shortcode('[ajax_load_more category="' . $categories_list . '" no_results_text="با متن جستجو ، عنوان یا موضوع انتخاب شده مقاله ای یافت نشد" transition_container_classes="row" scroll="false" post_type="post, portfolio" posts_per_page="6" button_label="مشاهده بیشتر"]') ?>

                        <?php


                        /*	$index         = 0;
                            $no_of_columns = 3;

                            while ( have_posts() ) : the_post();

                                if ( 0 === $index % $no_of_columns ) {
                                    ?>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <?php
                                }

                                get_template_part( 'template-parts/content' );

                                $index ++;

                                if ( 0 !== $index && 0 === $index % $no_of_columns ) {
                                    ?>
                        </div>
                        <?php
                                }

                            endwhile;
                            ?>


                    </div>

                    <?php
                            if (($cryptoland_blog_layout) == 'right-sidebar' || ($cryptoland_blog_layout) == '') {
                                cryptoland_inner_page_sidebars();
                            }
                            ?>


                    <div class="row justify-content-center">
                        <div class="col">
                            <?php
                            get_template_part('inc/helpers/template-tags.php');

                            aquila_pagination();
                            ?>



                        </div>
                        */ ?>

                        <br/>

                        <h3 class="hrr"> آخرین اخبار
                        </h3>
                        <?php get_template_part('template-parts/components/blog/news-category-posts');
                        ?>

                        <br/>
                        <br/>
                        <h3 class="hrr"> مقالات توکن های بهادار

                        </h3>
                        <?php get_template_part('template-parts/components/blog/news-category-special-posts');
                        ?>


                        <h3 class="hrr"> آخرین وبینار های آکادمی مزدکس


                        </h3>
                        <?php get_template_part('template-parts/components/blog/news-category-special-2-posts');
                        ?>


                        <h3 class="hrr"> لغت نامه کریپتو
                        </h3>
                        <?php get_template_part('template-parts/components/blog/news-category-posts');
                        ?>

                    </div>


                </div>
                <!--End row -->
            </div>
            <!--End container -->
        </div>
        <!--End #blog -->

    </div>
    <!--End index general div -->


    <br/>
    <br/>
    <br/>

    <style>
        .subscribeform p {
        }
    </style>
    <div class="container-fluid p-4 subscribeEmailPanel text-center">
        <h3 class="mb-4 ">دریافت رایگان ماهنامه مزدکس
        </h3>

        <h4 class="m-4 "><b>هرماه، جمع بندی و تحلیل اخبار و روندهای جدید بازار را دریافت کنید.
            </b></h4>
        <?php
        if (substr($_SERVER['REMOTE_ADDR'], 0, 4) == '127.'
            || $_SERVER['REMOTE_ADDR'] == '::1') {
            echo do_shortcode('[contact-form-7 id="2011" title="ثبت نام در ایمیل"]');

        } else {
            echo do_shortcode('[contact-form-7 id="1a2cdbc" title="ثبت نام در ایمیل"]');

        } ?>

    </div>


<?php

// blog index page layout after action area, you can use this function for your custom codes
do_action("cryptoland_after_index");

// theme footer
get_footer();

?>