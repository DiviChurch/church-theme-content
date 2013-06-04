<?php
/**
 * Register Taxonomies
 *
 * @package    Church_Content_Manager
 * @subpackage Functions
 * @copyright  Copyright (c) 2013, churchthemes.com
 * @link       https://github.com/churchthemes/church-content-manager
 * @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * @since      0.5
 */

// No direct access
if ( ! defined( 'ABSPATH' ) ) exit;

/**********************************
 * SERMON TAXONOMIES
 **********************************/

/**
 * Category
 */
 
add_action( 'init', 'ccm_register_taxonomy_sermon_category' ); // category taxonomy
 
function ccm_register_taxonomy_sermon_category() {

	// Arguments
	$args = array(
		'labels' => array(
			'name' 							=> _x( 'Sermon Categories', 'taxonomy general name', 'church-content-manager' ),
			'singular_name'					=> _x( 'Sermon Category', 'taxonomy singular name', 'church-content-manager' ),
			'search_items' 					=> _x( 'Search Categories', 'sermons', 'church-content-manager' ),
			'popular_items' 				=> _x( 'Popular Categories', 'sermons', 'church-content-manager' ),
			'all_items' 					=> _x( 'All Categories', 'sermons', 'church-content-manager' ),
			'parent_item' 					=> null,
			'parent_item_colon' 			=> null,
			'edit_item' 					=> _x( 'Edit Category', 'sermons', 'church-content-manager' ), 
			'update_item' 					=> _x( 'Update Category', 'sermons', 'church-content-manager' ),
			'add_new_item' 					=> _x( 'Add Category', 'sermons', 'church-content-manager' ),
			'new_item_name' 				=> _x( 'New Category', 'sermons', 'church-content-manager' ),
			'separate_items_with_commas' 	=> _x( 'Separate categories with commas', 'sermons', 'church-content-manager' ),
			'add_or_remove_items' 			=> _x( 'Add or remove categories', 'sermons', 'church-content-manager' ),
			'choose_from_most_used' 		=> _x( 'Choose from the most used categories', 'sermons', 'church-content-manager' ),
			'menu_name' 					=> _x( 'Categories', 'sermon menu name', 'church-content-manager' )
		),
		'hierarchical'	=> true, // category-style instead of tag-style
		'public' 		=> ccm_taxonomy_supported( 'sermons', 'ccm_sermon_category' ),
		'rewrite' 		=> array(
			'slug' 			=> 'sermon-category',
			'with_front' 	=> false,
			'hierarchical' 	=> true
		)
	);
	$args = apply_filters( 'ccm_taxonomy_sermon_category_args', $args ); // allow filtering

	// Registration
	register_taxonomy(
		'ccm_sermon_category',
		'ccm_sermon',
		$args
	);

}

/**
 * Tag
 */
 
add_action( 'init', 'ccm_register_taxonomy_sermon_tag' ); // tag taxonomy
 
function ccm_register_taxonomy_sermon_tag() {

	// Arguments
	$args = array(
		'labels' => array(
			'name' 							=> _x( 'Sermon Tags', 'taxonomy general name', 'church-content-manager' ),
			'singular_name'					=> _x( 'Sermon Tag', 'taxonomy singular name', 'church-content-manager' ),
			'search_items' 					=> _x( 'Search Tags', 'sermons', 'church-content-manager' ),
			'popular_items' 				=> _x( 'Popular Tags', 'sermons', 'church-content-manager' ),
			'all_items' 					=> _x( 'All Tags', 'sermons', 'church-content-manager' ),
			'parent_item' 					=> null,
			'parent_item_colon' 			=> null,
			'edit_item' 					=> _x( 'Edit Tag', 'sermons', 'church-content-manager' ), 
			'update_item' 					=> _x( 'Update Tag', 'sermons', 'church-content-manager' ),
			'add_new_item' 					=> _x( 'Add Tag', 'sermons', 'church-content-manager' ),
			'new_item_name' 				=> _x( 'New Tag', 'sermons', 'church-content-manager' ),
			'separate_items_with_commas' 	=> _x( 'Separate tags with commas', 'sermons', 'church-content-manager' ),
			'add_or_remove_items' 			=> _x( 'Add or remove tags', 'sermons', 'church-content-manager' ),
			'choose_from_most_used' 		=> _x( 'Choose from the most used tags', 'sermons', 'church-content-manager' ),
			'menu_name' 					=> _x( 'Tags', 'sermon menu name', 'church-content-manager' )
		),
		'hierarchical'	=> false, // tag style instead of category style
		'public' 		=> ccm_taxonomy_supported( 'sermons', 'ccm_sermon_tag' ),
		'rewrite' 		=> array(
			'slug' 			=> 'sermon-tag',
			'with_front'	=> false,
			'hierarchical' 	=> true
		)
	);
	$args = apply_filters( 'ccm_taxonomy_sermon_tag_args', $args ); // allow filtering

	// Registration
	register_taxonomy(
		'ccm_sermon_tag',
		'ccm_sermon',
		$args
	);

}

/**
 * Speaker
 */

add_action( 'init', 'ccm_register_taxonomy_sermon_speaker' ); // speaker taxonomy
 
function ccm_register_taxonomy_sermon_speaker() {

	// Arguments
	$args = array(
		'labels' => array(
			'name' 							=> _x( 'Sermon Speakers', 'taxonomy general name', 'church-content-manager' ),
			'singular_name'					=> _x( 'Sermon Speaker', 'taxonomy singular name', 'church-content-manager' ),
			'search_items' 					=> _x( 'Search Speakers', 'sermons', 'church-content-manager' ),
			'popular_items' 				=> _x( 'Popular Speakers', 'sermons', 'church-content-manager' ),
			'all_items' 					=> _x( 'All Speakers', 'sermons', 'church-content-manager' ),
			'parent_item' 					=> null,
			'parent_item_colon' 			=> null,
			'edit_item' 					=> _x( 'Edit Speaker', 'sermons', 'church-content-manager' ), 
			'update_item' 					=> _x( 'Update Speaker', 'sermons', 'church-content-manager' ),
			'add_new_item' 					=> _x( 'Add Speaker', 'sermons', 'church-content-manager' ),
			'new_item_name' 				=> _x( 'New Speaker', 'sermons', 'church-content-manager' ),
			'separate_items_with_commas' 	=> _x( 'Separate speakers with commas', 'sermons', 'church-content-manager' ),
			'add_or_remove_items' 			=> _x( 'Add or remove speakers', 'sermons', 'church-content-manager' ),
			'choose_from_most_used' 		=> _x( 'Choose from the most used speakers', 'sermons', 'church-content-manager' ),
			'menu_name' 					=> _x( 'Speakers', 'sermon menu name', 'church-content-manager' )
		),
		'hierarchical'	=> true, // category-style instead of tag-style
		'public' 		=> ccm_taxonomy_supported( 'sermons', 'ccm_sermon_speaker' ),
		'rewrite' 		=> array(
			'slug' 			=> 'sermon-speaker',
			'with_front' 	=> false,
			'hierarchical' 	=> true
		)
	);
	$args = apply_filters( 'ccm_taxonomy_sermon_speaker_args', $args ); // allow filtering

	// Registration
	register_taxonomy(
		'ccm_sermon_speaker',
		'ccm_sermon',
		$args
	);

}

/**********************************
 * PERSON TAXONOMIES
 **********************************/

/**
 * Group
 */

add_action( 'init', 'ccm_register_taxonomy_person_group' );
 
function ccm_register_taxonomy_person_group() {

	// Arguments
	$args = array(
		'labels' => array(
			'name' 							=> _x( 'People Groups', 'taxonomy general name', 'church-content-manager' ),
			'singular_name'					=> _x( 'People Group', 'taxonomy singular name', 'church-content-manager' ),
			'search_items' 					=> _x( 'Search Groups', 'people', 'church-content-manager' ),
			'popular_items' 				=> _x( 'Popular Groups', 'people', 'church-content-manager' ),
			'all_items' 					=> _x( 'All Groups', 'people', 'church-content-manager' ),
			'parent_item' 					=> null,
			'parent_item_colon' 			=> null,
			'edit_item' 					=> _x( 'Edit Group', 'people', 'church-content-manager' ), 
			'update_item' 					=> _x( 'Update Group', 'people', 'church-content-manager' ),
			'add_new_item' 					=> _x( 'Add Group', 'people', 'church-content-manager' ),
			'new_item_name' 				=> _x( 'New Group', 'people', 'church-content-manager' ),
			'separate_items_with_commas' 	=> _x( 'Separate groups with commas', 'people', 'church-content-manager' ),
			'add_or_remove_items' 			=> _x( 'Add or remove groups', 'people', 'church-content-manager' ),
			'choose_from_most_used' 		=> _x( 'Choose from the most used groups', 'people', 'church-content-manager' ),
			'menu_name' 					=> _x( 'Groups', 'people menu name', 'church-content-manager' )
		),
		'hierarchical'	=> true, // category-style instead of tag-style
		'public' 		=> ccm_taxonomy_supported( 'people', 'ccm_person_group' ),
		'rewrite' 		=> array(
			'slug' 			=> 'people-group',
			'with_front' 	=> false,
			'hierarchical' 	=> true
		)
	);
	$args = apply_filters( 'ccm_taxonomy_person_group_args', $args ); // allow filtering

	// Registration
	register_taxonomy(
		'ccm_person_group',
		'ccm_person',
		$args
	);

}
