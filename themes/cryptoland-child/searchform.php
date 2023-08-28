<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$form = '<form dir="rtl" style="max-width:unset" role="search" method="get" id="custom-searchform" class="c-sidebar-1-search-form" action="' . home_url( '/' ) . '" >
    <button class="c-sidebar-1-search-button" id="searchsubmit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    <input  placeholder=" جستجو ..."  class="c-sidebar-1-search-field" type="text" value="' . get_search_query() . '" name="s" id="s" />
    <button class="c-sidebar-1-search-button" id="searchsubmit" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
    </form>';

echo $form;