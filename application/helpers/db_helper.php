<?php
/**
 * Created by PhpStorm.
 * User: adityagupta
 * Date: 22/03/16
 * Time: 11:38 AM
 */
 function get_categories_h() {
     $CI = get_instance();
     $categories = $CI->product_model->get_categories();
     return $categories;
 }

function get_popular_h() {
    $CI = get_instance();
    $populars = $CI->product_model->get_popular();
    return $populars;
}