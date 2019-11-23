<?php
/**
 * Plugin Name:     PDG - HBH Farm Search
 * Description:     Custom plugin for Farmers Veteran Coalition to add a HBH farm search tool
 * Author:          Treighton @ Page Design Group
 * Text Domain:     PDG_hbh
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         PDG_hbh
 */

if ( ! defined( 'WPINC' ) ) {
	die();
}

include __DIR__ . '/includes/custom_post_type/class-custom-post-type.php';

/**
 * This is an example of how to create a post type using the CPT factory
 */

$news = new Custom_Post_Type( 'News' );
$news->add_taxonomy( 'News Type' );
// $meetings = new Custom_Post_Type('Meetings');
