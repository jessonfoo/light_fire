<?php
function post_games() {
  $labels = array(
    'name'               => _x( 'Galleries', 'post type general name' ),
    'singular_name'      => _x( 'Galleries', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Gallery' ),
    'add_new_item'       => __( 'Add New Gallery' ),
    'edit_item'          => __( 'Edit Gallery' ),
    'new_item'           => __( 'New Gallery' ),
    'all_items'          => __( 'All Galleries' ),
    'view_item'          => __( 'View Gallery' ),
    'search_items'       => __( 'Search Galleries' ),
    'not_found'          => __( 'No galleries found' ),
    'not_found_in_trash' => __( 'No galleries found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Galleries'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds Gallies',
    'public'        => true,
    'menu_position' => 5,
    'rewrite' => array( 'slug' => 'galleries', 'with_front' => true, 'pages'=> true  ),
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
  );
  register_post_type( 'gallery', $args ); 
  flush_rewrite_rules( true );
}
add_action( 'init', 'post_games' );

add_filter('redirect_canonical','disable_redirect_gal');

function disable_redirect_gal( $redirect_url ) {
    if ( is_singular( 'gallery' ) ) {
    	$redirect_url = false;
    	return $redirect_url;
	}
}

//Takin It out for right Meow 
/*
function taxonomies_galleries() {
  $labels = array(
    'name'              => _x( 'Gallery Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Gallery Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Gallery Categories' ),
    'all_items'         => __( 'All Gallery Categories' ),
    'parent_item'       => __( 'Parent Gallery Category' ),
    'parent_item_colon' => __( 'Parent Gallery Category:' ),
    'edit_item'         => __( 'Edit Gallery Category' ), 
    'update_item'       => __( 'Update Gallery Category' ),
    'add_new_item'      => __( 'Add New Gallery Category' ),
    'new_item_name'     => __( 'New Gallery Category' ),
    'menu_name'         => __( 'Gallery Categories' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'gallery_category', 'gallery', $args );
}
add_action( 'init', 'taxonomies_galleries', 0 );
*/
/*
add_action( 'add_meta_boxes', 'product_price_box' );

add_action( 'add_meta_boxes', 'product_price_box' );

function product_price_box() {
    add_meta_box( 
        'product_price_box',
        __( 'Product Price', 'myplugin_textdomain' ),
        'product_price_box_content',
        'games',
        'side',
        'high'
    );
}

function product_price_box_content( $post ) {
  wp_nonce_field( plugin_basename( __FILE__ ), 'product_price_box_content_nonce' );
  echo '<label for="product_price"></label>';
  echo '<input type="text" id="product_price" name="product_price" placeholder="enter a price" />';
}

add_action( 'save_post', 'product_price_box_save' );
function product_price_box_save( $post_id ) {

  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
  return;

  if ( !wp_verify_nonce( $_POST['product_price_box_content_nonce'], plugin_basename( __FILE__ ) ) )
  return;

  if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
    return;
  } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
    return;
  }
  $product_price = $_POST['product_price'];
  update_post_meta( $post_id, 'product_price', $product_price );
}

/*
function post_members() {
  $labels = array(
    'name'               => _x( 'Members', 'post type general name' ),
    'singular_name'      => _x( 'Members', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Member' ),
    'edit_item'          => __( 'Edit Member' ),
    'new_item'           => __( 'New Member' ),
    'all_items'          => __( 'All Members' ),
    'view_item'          => __( 'View Members' ),
    'search_items'       => __( 'Search Members' ),
    'not_found'          => __( 'No members found' ),
    'not_found_in_trash' => __( 'No members found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Members'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our products and product specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'members', $args ); 
}
add_action( 'init', 'post_members' );

function post_galleries() {
  $labels = array(
    'name'               => _x( 'Galleries', 'post type general name' ),
    'singular_name'      => _x( 'Galleries', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Galleries' ),
    'edit_item'          => __( 'Edit Galleries' ),
    'new_item'           => __( 'New Galleries' ),
    'all_items'          => __( 'All Galleries' ),
    'view_item'          => __( 'View Galleries' ),
    'search_items'       => __( 'Search Galleries' ),
    'not_found'          => __( 'No Galleries found' ),
    'not_found_in_trash' => __( 'No Galleries found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Galleries'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Galleries specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );
  register_post_type( 'galleries', $args ); 
}
add_action( 'init', 'post_galleries' ); */


//Test I 

function post_test() {
  $labels = array(
    'name'               => _x( 'Testimonials', 'post type general name' ),
    'singular_name'      => _x( 'Testimonials', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Testimonial' ),
    'add_new_item'       => __( 'Add New Testimonial' ),
    'edit_item'          => __( 'Edit Testimonial' ),
    'new_item'           => __( 'New Testimonial' ),
    'all_items'          => __( 'All Testimonials' ),
    'view_item'          => __( 'View Testimonial' ),
    'search_items'       => __( 'Search Testimonials' ),
    'not_found'          => __( 'No Testimonials found' ),
    'not_found_in_trash' => __( 'No Testimonials found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Testimonials'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds Testimonials',
    'public'        => true,
    'menu_position' => 5,
    'rewrite' => array( 'slug' => 'testimonials', 'with_front' => true, 'pages'=> true  ),
    'supports'      => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'   => true,
  );
  register_post_type( 'testimonials', $args ); 
  flush_rewrite_rules( true );
}
add_action( 'init', 'post_test' );


?>