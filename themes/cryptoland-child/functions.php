<?php
/**
 * Theme functions and definitions.
 * This child theme was generated by Merlin WP.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

/*
 * If your child theme has more than one .css file (eg. ie.css, style.css, main.css) then
 * you will have to make sure to maintain all of the parent theme dependencies.
 *
 * Make sure you're using the correct handle for loading the parent theme's styles.
 * Failure to use the proper tag will result in a CSS file needlessly being loaded twice.
 * This will usually not affect the site appearance, but it's inefficient and extends your page's loading time.
 *
 * @link https://codex.wordpress.org/Child_Themes
 */
function cryptoland_child_enqueue_styles() {
    wp_enqueue_style( 'cryptoland-style' , get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'cryptoland-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'cryptoland-style' ),
        wp_get_theme()->get('Version')
    );
}

add_action(  'wp_enqueue_scripts', 'cryptoland_child_enqueue_styles' );


function mj_kh_search_form( $form ) {

    $form = '<form style="max-width:unset" role="search" method="get" id="custom-searchform" class="c-sidebar-1-search-form" action="' . home_url( '/' ) . '" >
    <input class="c-sidebar-1-search-field" type="text" value="' . get_search_query() . '" name="s" id="s" />
    <button class="c-sidebar-1-search-button" id="searchsubmit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </div>
    </form>';


    /*
     *
     * <form class="c-sidebar-1-search-form" role="search" method="get" id="custom-searchform" action="https://mobadelegar.com/">
			<input class="c-sidebar-1-search-field" type="text" value="" placeholder="جستجو برای ..." name="s" id="s">
			<button class="c-sidebar-1-search-button" id="searchsubmit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
		</form>
     * */
    return $form;
}

add_filter( 'get_search_form', 'mj_kh_search_form', 100 );

//=====================================================================================================================
add_action( 'wp_enqueue_scripts', 'mj_kh_enqueue_frontend_assets', 10 );
function mj_kh_enqueue_frontend_assets(){
    wp_register_style( 'custom-style', get_stylesheet_directory_uri() . '/css/custom-style.css' );

        wp_register_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css' );
        wp_register_style( 'bootstrap-rtl', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.rtl.min.css' );
        wp_register_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js',array( 'jquery' ) );
}

//=====================================================================================================================