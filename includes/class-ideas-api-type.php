<?php

/**
 * The file to handle the Custom Post Type
 *
 * @link       http://enriquechavez.co
 * @since      1.0.0
 *
 * @package    Ideas_Api
 * @subpackage Ideas_Api/includes
 */

/**
 * The class to handle the Custom Post Type Creation.
 *
 * @package    Ideas_Api
 * @subpackage Ideas_Api/includes
 * @author     Enrique Chavez <noone@tmeister.net>
 */
class Ideas_Api_Type {

	/**
 	 * Create the custom post type
 	 *
 	 * @since 1.0.0
 	 * @access public
 	 */
 	public function create_custom_type(){

 		$labels = array(
			'name'                		=> _x( 'Ideas','ideas_api' ),
			'singular_name'       		=> _x( 'Idea','ideas_api' ),
			'menu_name'           		=> __( 'Ideas', 'ideas_api' ),
			'parent_item_colon'   		=> __( 'Parent Idea:', 'ideas_api' ),
			'all_items'           		=> __( 'All Ideas', 'ideas_api' ),
			'view_item'           		=> __( 'View Idea', 'ideas_api' ),
			'add_new_item'        		=> __( 'Add New Idea', 'ideas_api' ),
			'add_new'             		=> __( 'New Idea', 'ideas_api' ),
			'edit_item'           		=> __( 'Edit Idea', 'ideas_api' ),
			'update_item'         		=> __( 'Update Idea', 'ideas_api' ),
			'search_items'        		=> __( 'Search Ideas', 'ideas_api' ),
			'not_found'           		=> __( 'No Ideas found', 'ideas_api' ),
			'not_found_in_trash'  		=> __( 'No Ideas found in Trash', 'ideas_api' ),
		);
		$args = array(
			'label'               		=> __( 'Ideas', 'ideas_api' ),
			'description'         		=> __( 'Create ideas', 'ideas_api' ),
			'labels'              		=> $labels,
			'supports'            		=> array( 'editor','title'),
			'public'              		=> false,
			'menu_icon'					=> 'dashicons-lightbulb',
			'publicly_queryable'		=> true,
 			'show_ui' 					=> true,
			'query_var' 				=> true,
			'can_export' 				=> true,
			'has_archive'				=> false,
			'capability_type' 			=> 'post'
		);
		register_post_type( 'ideas-api', apply_filters('idea_factory_type_args', $args ) );

 	}

}
