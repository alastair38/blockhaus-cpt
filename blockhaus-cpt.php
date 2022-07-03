<?php
/*
Plugin name: Blockhaus Custom Post Types
Description: Custom post types for this website. Deactivating this plugin will disable all post types except for pages and posts.
Text Domain: blockhaus
*/

// Register Custom Post Type Story
function create_story_cpt() {

	$labels = array(
		'name' => _x( 'Stories', 'Post Theme General Name', 'blockhaus' ),
		'singular_name' => _x( 'Story', 'Post Theme Singular Name', 'blockhaus' ),
		'menu_name' => _x( 'Stories', 'Admin Menu text', 'blockhaus' ),
		'name_admin_bar' => _x( 'Story', 'Add New on Toolbar', 'blockhaus' ),
		'archives' => __( 'Story Archives', 'blockhaus' ),
		'attributes' => __( 'Story Attributes', 'blockhaus' ),
		'parent_item_colon' => __( 'Parent Story:', 'blockhaus' ),
		'all_items' => __( 'All Stories', 'blockhaus' ),
		'add_new_item' => __( 'Add New Story', 'blockhaus' ),
		'add_new' => __( 'Add New', 'blockhaus' ),
		'new_item' => __( 'New Story', 'blockhaus' ),
		'edit_item' => __( 'Edit Story', 'blockhaus' ),
		'update_item' => __( 'Update Story', 'blockhaus' ),
		'view_item' => __( 'View Story', 'blockhaus' ),
		'view_items' => __( 'View Stories', 'blockhaus' ),
		'search_items' => __( 'Search Story', 'blockhaus' ),
		'not_found' => __( 'Not found', 'blockhaus' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'blockhaus' ),
		'featured_image' => __( 'Featured Image', 'blockhaus' ),
		'set_featured_image' => __( 'Set featured image', 'blockhaus' ),
		'remove_featured_image' => __( 'Remove featured image', 'blockhaus' ),
		'use_featured_image' => __( 'Use as featured image', 'blockhaus' ),
		'insert_into_item' => __( 'Insert into Story', 'blockhaus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Story', 'blockhaus' ),
		'items_list' => __( 'Stories list', 'blockhaus' ),
		'items_list_navigation' => __( 'Stories list navigation', 'blockhaus' ),
		'filter_items_list' => __( 'Filter Stories list', 'blockhaus' ),
	);
	$rewrite = array(
		'slug' => 'stories',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'Story', 'blockhaus' ),
		'description' => __( '', 'blockhaus' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-image',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
    'template'              => array(
      array(
          'core/pattern',
          array(
              'slug' => 'blockhaus/blockhaus-quote-with-image',
          ),
      ),
  ),
  
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'story', $args );

}
add_action( 'init', 'create_story_cpt', 0 );

// Register Taxonomy Story Theme
function create_story_theme_tax() {

	$labels = array(
		'name'              => _x( 'Story Themes', 'taxonomy general name', 'blockhaus' ),
		'singular_name'     => _x( 'Story Theme', 'taxonomy singular name', 'blockhaus' ),
		'search_items'      => __( 'Search Story Themes', 'blockhaus' ),
		'all_items'         => __( 'All Story Themes', 'blockhaus' ),
		'parent_item'       => __( 'Parent Story Theme', 'blockhaus' ),
		'parent_item_colon' => __( 'Parent Story Theme:', 'blockhaus' ),
		'edit_item'         => __( 'Edit Story Theme', 'blockhaus' ),
		'update_item'       => __( 'Update Story Theme', 'blockhaus' ),
		'add_new_item'      => __( 'Add New Story Theme', 'blockhaus' ),
		'new_item_name'     => __( 'New Story Theme Name', 'blockhaus' ),
		'menu_name'         => __( 'Story Theme', 'blockhaus' ),
	);
	$rewrite = array(
		'slug' => 'theme',
		'with_front' => true,
		'hierarchical' => false,
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Taxonomy for the story custom post type', 'blockhaus' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'rewrite' => $rewrite,
	);
	register_taxonomy( 'story_theme', array('story'), $args );

}
add_action( 'init', 'create_story_theme_tax' );


// Register Custom Post Type Project
function create_project_cpt() {

	$labels = array(
		'name' => _x( 'Projects', 'Post Theme General Name', 'blockhaus' ),
		'singular_name' => _x( 'Project', 'Post Theme Singular Name', 'blockhaus' ),
		'menu_name' => _x( 'Projects', 'Admin Menu text', 'blockhaus' ),
		'name_admin_bar' => _x( 'Project', 'Add New on Toolbar', 'blockhaus' ),
		'archives' => __( 'Project Archives', 'blockhaus' ),
		'attributes' => __( 'Project Attributes', 'blockhaus' ),
		'parent_item_colon' => __( 'Parent Project:', 'blockhaus' ),
		'all_items' => __( 'All Projects', 'blockhaus' ),
		'add_new_item' => __( 'Add New Project', 'blockhaus' ),
		'add_new' => __( 'Add New', 'blockhaus' ),
		'new_item' => __( 'New Project', 'blockhaus' ),
		'edit_item' => __( 'Edit Project', 'blockhaus' ),
		'update_item' => __( 'Update Project', 'blockhaus' ),
		'view_item' => __( 'View Project', 'blockhaus' ),
		'view_items' => __( 'View Projects', 'blockhaus' ),
		'search_items' => __( 'Search Project', 'blockhaus' ),
		'not_found' => __( 'Not found', 'blockhaus' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'blockhaus' ),
		'featured_image' => __( 'Featured Image', 'blockhaus' ),
		'set_featured_image' => __( 'Set featured image', 'blockhaus' ),
		'remove_featured_image' => __( 'Remove featured image', 'blockhaus' ),
		'use_featured_image' => __( 'Use as featured image', 'blockhaus' ),
		'insert_into_item' => __( 'Insert into Project', 'blockhaus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Project', 'blockhaus' ),
		'items_list' => __( 'Projects list', 'blockhaus' ),
		'items_list_navigation' => __( 'Projects list navigation', 'blockhaus' ),
		'filter_items_list' => __( 'Filter Projects list', 'blockhaus' ),
	);
	$rewrite = array(
		'slug' => 'projects',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'Project', 'blockhaus' ),
		'description' => __( '', 'blockhaus' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-clipboard',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		// 'template' => array(	
		// array( 'core/group', array(), array(
		// 	array( 'core/paragraph', array(
		// 			'placeholder' => 'Add story details...',
		// 			'className' => 'pub-details'
		// 	) )
	
		// 	) )
		// ),
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'create_project_cpt', 0 );

// Register Custom Post Type Project
function create_resource_cpt() {

	$labels = array(
		'name' => _x( 'Resources', 'Post Theme General Name', 'blockhaus' ),
		'singular_name' => _x( 'Resource', 'Post Theme Singular Name', 'blockhaus' ),
		'menu_name' => _x( 'Resources', 'Admin Menu text', 'blockhaus' ),
		'name_admin_bar' => _x( 'Resource', 'Add New on Toolbar', 'blockhaus' ),
		'archives' => __( 'Resource Archives', 'blockhaus' ),
		'attributes' => __( 'Resource Attributes', 'blockhaus' ),
		'parent_item_colon' => __( 'Parent Resource:', 'blockhaus' ),
		'all_items' => __( 'All Resources', 'blockhaus' ),
		'add_new_item' => __( 'Add New Resource', 'blockhaus' ),
		'add_new' => __( 'Add New', 'blockhaus' ),
		'new_item' => __( 'New Resource', 'blockhaus' ),
		'edit_item' => __( 'Edit Resource', 'blockhaus' ),
		'update_item' => __( 'Update Resource', 'blockhaus' ),
		'view_item' => __( 'View Resource', 'blockhaus' ),
		'view_items' => __( 'View Resources', 'blockhaus' ),
		'search_items' => __( 'Search Resource', 'blockhaus' ),
		'not_found' => __( 'Not found', 'blockhaus' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'blockhaus' ),
		'featured_image' => __( 'Featured Image', 'blockhaus' ),
		'set_featured_image' => __( 'Set featured image', 'blockhaus' ),
		'remove_featured_image' => __( 'Remove featured image', 'blockhaus' ),
		'use_featured_image' => __( 'Use as featured image', 'blockhaus' ),
		'insert_into_item' => __( 'Insert into Resource', 'blockhaus' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Resource', 'blockhaus' ),
		'items_list' => __( 'Resources list', 'blockhaus' ),
		'items_list_navigation' => __( 'Resources list navigation', 'blockhaus' ),
		'filter_items_list' => __( 'Filter Resources list', 'blockhaus' ),
	);
	$rewrite = array(
		'slug' => 'resources',
		'with_front' => true,
		'pages' => true,
		'feeds' => true,
	);
	$args = array(
		'label' => __( 'Resource', 'blockhaus' ),
		'description' => __( '', 'blockhaus' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-media-document',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		// 'template' => array(	
		// array( 'core/group', array(), array(
		// 	array( 'core/paragraph', array(
		// 			'placeholder' => 'Add story details...',
		// 			'className' => 'pub-details'
		// 	) )
	
		// 	) )
		// ),
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => $rewrite,
	);
	register_post_type( 'resource', $args );

}
add_action( 'init', 'create_resource_cpt', 0 );


// Register Taxonomy Story Theme
function create_content_authors_tax() {

	$labels = array(
		'name'              => _x( 'Authors', 'taxonomy general name', 'blockhaus' ),
		'singular_name'     => _x( 'Author', 'taxonomy singular name', 'blockhaus' ),
		'search_items'      => __( 'Search Authors', 'blockhaus' ),
		'all_items'         => __( 'All Authors', 'blockhaus' ),
		'parent_item'       => __( 'Parent Author', 'blockhaus' ),
		'parent_item_colon' => __( 'Parent Author:', 'blockhaus' ),
		'edit_item'         => __( 'Edit Author', 'blockhaus' ),
		'update_item'       => __( 'Update Author', 'blockhaus' ),
		'add_new_item'      => __( 'Add New Author', 'blockhaus' ),
		'new_item_name'     => __( 'New Author Name', 'blockhaus' ),
		'menu_name'         => __( 'Author', 'blockhaus' ),
	);
	$rewrite = array(
		'slug' => 'content-author',
		'with_front' => true,
		'hierarchical' => false,
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Content author taxonomy', 'blockhaus' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => false,
		'show_in_quick_edit' => true,
		'show_admin_column' => true,
		'show_in_rest' => true,
		'rewrite' => $rewrite,
	);
	register_taxonomy( 'content_authors', array('post', 'story', 'resource', 'project'), $args );

}
add_action( 'init', 'create_content_authors_tax' );

// Modify excerpt for publications archive

// function blockhaus_modify_publication_excerpt() {
 
// 	global $post;
	 
// 	$blocks = parse_blocks( $post->post_content );

	
	 
// 	foreach ( $blocks as $block ) {

// 			// story meta block name
// 			if ( 'acf/story-meta' === $block['blockName'] ) {
// 					//$content .= apply_filters( 'the_content', render_block( $block ) );
				
// 					 // echo render_block($block);
			 
				
// 				echo apply_filters( 'the_content', render_block( $block ) );
					 
// 				 break;
					 
// 			}
			 
// 	}
	 
// }

// function blockhaus_change_publication_posts_per_page( $query ) {
 
//  if( $query->is_main_query() && !is_admin() && is_post_type_archive( 'story' ) ) {
// 	 $query->set( 'posts_per_page', '10' );
//  }

// }
// add_action( 'pre_get_posts', 'blockhaus_change_publication_posts_per_page' );