<?php 
add_action( 'init', 'hpletter_create_post_type' );
function hpletter_create_post_type() {
  register_post_type( 'hpl_letter',
    array(
      'labels' => array(
        'name' => __( 'letters' ),
        'singular_name' => __( 'letter' ),
        'add_new' => 'Add letter',
		'all_items' => 'All letters',
		'add_new_item' => 'Add letter',
		'edit_item' => 'Edit letter',
		'new_item' => 'New letter',
		'view_item' => 'View letter',
		'search_items' => 'Search letters',
		'not_found' => 'No letters found',
		'not_found_in_trash' => 'No letters found in trash',
		'parent_item_colon' => 'Parent letter',
      ),
      'taxonomies' => array( 'category', 'post_tag' ),
      'public' => true,
      'rewrite' => array('slug' => 'letters'),
      'has_archive' => true,
      'show_in_menu' => true,
      'menu_position' => 3,
      'menu_icon'   => 'dashicons-archive',
      'supports' => array('title','editor','thumbnail'),
    )
  );
  flush_rewrite_rules();
}
?>