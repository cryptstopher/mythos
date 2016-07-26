<?php
if( ! function_exists( 'hpl_create_post_type' ) ) :
	function hpl_create_post_type() {
		$labels = array(
			'name' => 'Work',
			'singular_name' => 'Works',
			'add_new' => 'Add work',
			'all_items' => 'All works',
			'add_new_item' => 'Add work',
			'edit_item' => 'Edit work',
			'new_item' => 'New work',
			'view_item' => 'View work',
			'search_items' => 'Search works',
			'not_found' => 'No works found',
			'not_found_in_trash' => 'No works found in trash',
			'parent_item_colon' => 'Parent work',
			//'menu_name' => default to 'name'
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => array('slug' => 'works'),
			'capability_type' => 'page',
			'hierarchical' => true,
			'supports' => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
				//'author',
				//'trackbacks',
				//'custom-fields',
				//'comments',
				'revisions',
				//'page-attributes', // (menu order, hierarchical must be true to show Parent option)
				'post-formats',
			),
			'menu_position' => 4,
			'exclude_from_search' => false,
			//'register_meta_box_cb' => 'hpl_add_post_type_metabox',
			'menu_icon'   => 'dashicons-book-alt',
			'taxonomies' => array( 'category', 'post_tag' ),
		);
		register_post_type( 'hpl', $args );
		//flush_rewrite_rules();
		register_taxonomy( 'hpl_locales', // register custom taxonomy - category
			'hpl',
			array(
				'rewrite' => array('slug' => 'locales'),
				'hierarchical' => true,
				'show_admin_column' => true,
				'labels' => array(
					'name' => 'Locales',
					'singular_name' => 'Locale',
					'menu_name' => __( 'Locales' ),
					'all_items' => __( 'All Locales' ),
					'edit_item' => __( 'Edit Locales' ),
					'view_item' => __( 'View Locales' ),
					'update_item' => __( 'Update Locale' ),
					'add_new_item' => __( 'Add New Locale' ),
					'new_item_name' => __( 'New Locale' ),
					'parent_item' => __( 'Parent Locale' ),
					'parent_item_colon' => __( 'Parent Locale:' ),
					'search_items' => __( 'Search Locales' ),
					'popular_items' => __( 'Popular Locales' ),
					'not_found' => __( 'No Locales? You need these.' )
				)
			)
		);
		register_taxonomy( 'hpl_characters', // register custom taxonomy - category
			'hpl',
			array(
				'rewrite' => array('slug' => 'characters'),
				'hierarchical' => true,
				'show_admin_column' => true,
				'labels' => array(
					'name' => 'Characters',
					'singular_name' => 'Character',
					'menu_name' => __( 'Characters' ),
					'all_items' => __( 'All Characters' ),
					'edit_item' => __( 'Edit Characters' ),
					'view_item' => __( 'View Characters' ),
					'update_item' => __( 'Update Character' ),
					'add_new_item' => __( 'Add New Character' ),
					'new_item_name' => __( 'New Character' ),
					'parent_item' => __( 'Parent Character' ),
					'parent_item_colon' => __( 'Parent Character:' ),
					'search_items' => __( 'Search Characters' ),
					'popular_items' => __( 'Popular Characters' ),
					'not_found' => __( 'No Characters? You need these.' )
				)
			)
		);
		register_taxonomy( 'hpl_monsters', // register custom taxonomy - category
			'hpl',
			array(
				'rewrite' => array('slug' => 'monsters'),
				'hierarchical' => true,
				'show_ui' => true,
				'show_in_menu' => true,
				'show_in_nav_menus' => true,
				'show_admin_column' => true,
				'labels' => array(
					'name' => 'Monsters',
					'singular_name' => 'Monster',
					'menu_name' => __( 'Monsters' ),
					'all_items' => __( 'All Monsters' ),
					'edit_item' => __( 'Edit Monsters' ),
					'view_item' => __( 'View Monsters' ),
					'update_item' => __( 'Update Monster' ),
					'add_new_item' => __( 'Add New Monster' ),
					'new_item_name' => __( 'New Monster' ),
					'parent_item' => __( 'Parent Monster' ),
					'parent_item_colon' => __( 'Parent Monster:' ),
					'search_items' => __( 'Search Monsters' ),
					'popular_items' => __( 'Popular Monsters' ),
					'not_found' => __( 'No Monsters? Consider adding some jelly things.' )
				)
			)
		);
register_taxonomy( 'hpl_genre', // register custom taxonomy - category
			'hpl',
			array(
				'rewrite' => array('slug' => 'genres'),
				'hierarchical' => true,
				'show_admin_column' => true,
				'labels' => array(
					'name' => 'Genres',
					'singular_name' => 'Genre',
					'menu_name' => __( 'Genres' ),
					'all_items' => __( 'All Genres' ),
					'edit_item' => __( 'Edit Genres' ),
					'view_item' => __( 'View Genres' ),
					'update_item' => __( 'Update Genre' ),
					'add_new_item' => __( 'Add New Genre' ),
					'new_item_name' => __( 'New Genre' ),
					'parent_item' => __( 'Parent Genre' ),
					'parent_item_colon' => __( 'Parent Genre:' ),
					'search_items' => __( 'Search Genres' ),
					'popular_items' => __( 'Popular Genres' ),
					'not_found' => __( 'No Genres.' )
				)
			)
		);
		register_taxonomy( 'hpl_mythos', // register custom taxonomy - category
			'hpl',
			array(
				'rewrite' => array('slug' => 'mythos'),
				'hierarchical' => false,
				'show_admin_column' => true,
				'labels' => array(
					'name' => 'Mythos',
					'singular_name' => 'Mythos',
					'menu_name' => __( 'Mythos' ),
					'all_items' => __( 'All Mythos' ),
					'edit_item' => __( 'Edit Mythos' ),
					'view_item' => __( 'View Mythos' ),
					'update_item' => __( 'Update Mythos' ),
					'add_new_item' => __( 'Add New Mythos' ),
					'new_item_name' => __( 'New Mythos' ),
					'parent_item' => __( 'Parent Mythos' ),
					'parent_item_colon' => __( 'Parent Mythos:' ),
					'search_items' => __( 'Search Mythos' ),
					'popular_items' => __( 'Popular Mythos' ),
					'not_found' => __( 'No Mythos yet? Ok. Write more and they will come.' )
				)
			)
		);
		register_taxonomy( 'hpl_tag', // register custom taxonomy - tag
			'hpl',
			array(
				'rewrite' => array('slug' => 'flavors'),
				'hierarchical' => false,
				'show_admin_column' => true,
				'labels' => array(
					'name' => 'Mis en scene',
					'singular_name' => 'Mis en scene',
					'add_new_item' => __( 'Add new mis en scene' ),
					'separate_items_with_commas' => __('Separate Mis en scene tags with commas'),
					'choose_from_most_used' => __( 'Choose from most used' ),
				)
			)
		);
	}
	add_action( 'init', 'hpl_create_post_type' );
endif; // end of function_exists()
?>