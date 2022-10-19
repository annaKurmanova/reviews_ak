<?php
/**
 *@package reviews_ak
 */

/**
 * Plugin Name: reviews_ak
 * Plusgin URI: https://github.com/annaKurmanova/reviews_ak/tree/master
 * Description: custom reviews plugin
 * Version: 1.0.0
 * Author: Anna Kurmanova
 * Author URI: https://github.com/annaKurmanova/reviews_ak/tree/master
 * License: GPLv2 or later
 * Text Domain: reviews_ak
 */

if(!defined('ABSPATH')) {
  die;
}

class ReviewsAK {
  function activate(){
//generate a custom post type
  }

  function deactivate() {

  }

  function uninstall() {
    // delete cpt
  }


}


// instance of class

if(class_exists('ReviewsAK')) {
  $reviewsAk = new ReviewsAK();
}


// activate
register_activation_hook(__FILE__, array($reviewsAk, 'activate'));

// deactivate
register_deactivation_hook(__FILE__, array($reviewsAk, 'deactivate'));

// uninstall
