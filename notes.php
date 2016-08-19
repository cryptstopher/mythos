<?php 
add_action( 'init', 'hpl_note_create_post_type' );
function hpl_note_create_post_type() {
  register_post_type( 'hpl_note',
    array(
      'labels' => array(
        'name' => __( 'Notes' ),
        'singular_name' => __( 'Note' ),
        'add_new' => 'Add note',
		'all_items' => 'All notes',
		'add_new_item' => 'Add note',
		'edit_item' => 'Edit note',
		'new_item' => 'New note',
		'view_item' => 'View note',
		'search_items' => 'Search notes',
		'not_found' => 'No notes found',
		'not_found_in_trash' => 'No notes found in trash',
		'parent_item_colon' => 'Parent note',
      ),
      'taxonomies' => array( 'hpl_locales', 'category', 'post_tag', 'hpl_tag', 'hpl_characters', 'hpl_mythos', 'hpl_monsters' ),
      'public' => true,
      'rewrite' => array('slug' => 'notes'),
      'has_archive' => true,
      'show_in_menu' => true,
      'menu_position' => 2,
      'menu_icon'   => 'dashicons-edit',
      'supports' => array('excerpt','title','editor','excerpt','thumbnail','revisions','post-formats'),
    )
  );
  flush_rewrite_rules();
}
?>