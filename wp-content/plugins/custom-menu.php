<?php
   /*
   Plugin Name: MenuIsHere
   Description: a plugin to create custom menus
   Version: 1
   Author: Marius Andrei Talpos
   */
function my_custom_post_menu() {
  $labels = array(
    'name'               => _x( 'Menus', 'post type general name' ),
    'singular_name'      => _x( 'Menu', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'menu' ),
    'add_new_item'       => __( 'Add New Item' ),
    'edit_item'          => __( 'Edit Items' ),
    'new_item'           => __( 'New Items' ),
    'all_items'          => __( 'All Items' ),
    'view_item'          => __( 'View Item' ),
    'search_items'       => __( 'Search Items' ),
    'not_found'          => __( 'No items found' ),
    'not_found_in_trash' => __( 'No items found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Menus'
  );

  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds our Menus and Menu specific data',
    'public'        => true,
    'publicly_queryable' => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments', 'custom-field' ),
    'has_archive'   => true,
  );
  
  register_post_type( 'custom_menu', $args ); 
}
add_action( 'init' , 'my_custom_post_menu'); 

function my_updated_messages( $messages ) {
  global $post, $post_ID;
  $messages['custom_menu'] = array(
    0 => '', 
    1 => sprintf( __('Menu updated. <a href="%s">View Menu</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Menu updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Menu restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Menu published. <a href="%s">View Menu</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Menu saved.'),
    8 => sprintf( __('Menu submitted. <a target="_blank" href="%s">Preview Menu</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Menu scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Menu</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Menu draft updated. <a target="_blank" href="%s">Preview Menu</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_messages' );

function my_taxonomies_entree() {
  $labels = array(
    'name'              => _x( 'Item Categories', 'taxonomy general name' ),
    'singular_name'     => _x( 'Item Category', 'taxonomy singular name' ),
    'search_items'      => __( 'Search Item Categories' ),
    'all_items'         => __( 'All Item Categories' ),
    'parent_item'       => __( 'Parent Item Category' ),
    'parent_item_colon' => __( 'Parent Item Category:' ),
    'edit_item'         => __( 'Edit Item Category' ), 
    'update_item'       => __( 'Update Item Category' ),
    'add_new_item'      => __( 'Add New Item Category' ),
    'new_item_name'     => __( 'New Item Category' ),
    'menu_name'         => __( 'Item Categories' ),
  );
  $args = array(
    'labels'              => $labels,
    'hierarchical'        => true,
    'public'              => true,
    'publicly_queryable'  => true
  );
  register_taxonomy('entree_category', 'custom_menu', $args);
}
add_action( 'init', 'my_taxonomies_entree', 0 );

add_action( 'add_meta_boxes', 'entree_price_box' );
function entree_price_box() {
    add_meta_box( 
        'entree_price_box',
        __( 'Pricing', 'myplugin_textdomain' ),
        'entree_price_box_content',
        'custom_menu',
        'normal',
        'high'
    );
}
// change post type name to menu
// percentage off field with special checkbox
// multiple prices for each item
function entree_price_box_content( $post ) {
  $id = get_the_ID();
  $c = 0;
  // wp_nonce_field( plugin_basename( __FILE__ ), 'entree_price_box_content_nonce' );  
  ?>
  <div id="meta_inner">
  <?php

  $prices = get_post_meta($id, '_prices', true);
  // var_dump(count($prices));   
  if ( is_array($prices)) {
      foreach( $prices as $price ) {
        // var_dump($price);
        // var_dump(count($price));
        // var_dump($_price);
        if( isset($price['special'])){
          $checked = ( $price['special'] == 'special' ) ? 'checked' : null;
        }else{
          $checked = false;
        }
        // var_dump($price[count($prices)]['price_description']);
        // var_dump($checked);
        ?>
        <style>
          #meta_inner p input{
            max-width: 100px;
            margin: 10px;
          }
          .hidden{
            display: none
          }
        </style>
        <p class="priceMeta">Price Description <input type="text" name="prices[<?php echo $c; ?>][price_description]" value="<?php echo $price['price_description'] ?>" /> 
          -- Price: <input type="text" name="prices[<?php echo $c; ?>][price]" value="<?php echo $price['price'] ?>" /> 
          -- On Special: <input class="checkBox" name="prices[<?php echo $c; ?>][special]" type="checkbox" value="special" <?php if(isset($checked)){ echo $checked;} ?> >
          <span class="hidden"> -- Special Price<input type="text" name="prices[<?php echo $c; ?>][special_price]" value="<?php if(isset($price['special_price'])){echo $price['special_price'];}?>" /></span>
          <button class="remove button">Remove Price</button>
        </p>
        <span id="special_price"></span>
        <?php
        $c = $c + 1;     
      }
  }
  ?>
  <span id="here"></span>
  <button class="add button"><?php _e('Add Price'); ?></button>
  <script>
      var $ =jQuery.noConflict();
      $(document).ready(function() {
          var count = <?php echo $c; ?>;
          $(".add").click(function() {

              $('#here').append('<p> Price Description <input type="text" name="prices['+count+'][price_description]" value="" /> -- Price: <input type="text" name="prices['+count+'][price]" value="" />  -- On Special: <input class="checkBox" name="prices['+count+'][special]" type="checkbox" value="special"> <span class="hidden">-- Special Price<input type="text" name="prices['+count+'][special_price]" value=""/></span><button class="remove button">Remove Price</button></p>' );
              count = count + 1;              
              return false;
          });
          $(".remove").live('click', function() {
              $(this).parent().remove();
          });
          $(".checkBox").live('click', function(evt) {
              var specialPriceBox = evt.target.parentElement.getElementsByTagName('span')[0];
              specialPriceBox.classList.contains('hidden') ? specialPriceBox.classList.remove('hidden') : specialPriceBox.classList.add('hidden');
          })
      });
      </script>
  </div>
  <?php  
}

add_action( 'save_post', 'entree_price_box_save' );
function entree_price_box_save( $post_id ) {
  error_reporting(E_ALL ^ E_NOTICE);

  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
  return;

  // if ( !wp_verify_nonce( $_POST['entree_price_box_content_nonce'], plugin_basename( __FILE__ ) ) )
  // return;

  // if ( 'page' == $_POST['post_type'] ) {
  //   if ( !current_user_can( 'edit_page', $post_id ) )
  //   return;
  // } else {
  //   if ( !current_user_can( 'edit_post', $post_id ) )
  //   return;
  // }  
  if ( !isset( $_POST['prices'] ) ){
    delete_post_meta( $post_id, '_prices', $_POST['prices']);
  } ;
        // return;
  $entree_price = $_POST['prices'];
  // var_dump($entree_price);
  // die('hello2');
  update_post_meta( $post_id, '_prices', $entree_price );
}

