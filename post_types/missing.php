<?php


function register_missing_post_type()
{
  $labels = array(
    'name'                  => __('Vermisste Tiere'),
    'singular_name'         => __('Vermisstes Tier'),
    'add_new'               => __('Ein neues vermisstes Tier hinzufügen'),
    'add_new_item'          => __('Ein neues vermisstes Tier hinzufügen'),
    'edit_item'             => __('Das unten ausgewählte Tier verändern:'),
    'new_item'              => __('Ein vermisstes Tier hinzufügen'),
    'view_item'             => __('Das vermisste Tier anzeigen'),
    'view_items'             => __('Zeige alle Tiere'),
    'search_items'          => __('Suche nach einem vermissten Tier'),
    'not_found'             => __('Nicht gefunden'),
    'not_found_in_trash'    => __('Im Papierkorb nicht gefunden'),
    'parent_item_colon'     => __('Tiere ...'),
    'all_items'             => __('Alle Tiere anzeigen'),
    'archives'              => __('Tier-Archiv'),
    'attributes'            => __('Tier-Eigenschaften'),
    'insert_into_item'      => __('Zum vermissten Tier hinzufügen'),
    'uploaded_to_this_item' => __('Zum vermissten Tier hinzugefügt'),
    'featured_image'        => __('Bild'),
    'set_featured_image'    => __('Bild für das vermisste Tier festlegen'),
    'remove_featured_image' => __('Bild löschen'),
    'use_featured_image'    => __('Als Bild verwenden'),
    'menu_name'             => __('Vermisste Tiere anzeigen und bearbeiten'),
  );

  $supports = array(
    'title',
    'editor',
    'excerpt',
    //'author',
    'thumbnail',
    //'trackbacks',
    //'custom-fields',
    //'revisions',
    'page-attributes',
    'comments'
  );

  $args = array(
    'labels' => $labels,
    'hierarchical' => false,
    'description' => __('Persons', "TRANSLATION_CONST"),

    'supports' => $supports,
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-card',
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'capability_type' => 'post',
    'rewrite' => true,
    'supports' => array('title', 'editor', 'thumbnail')
  );

  register_post_type('missing', $args);
}
add_action('init', 'register_missing_post_type');

add_action("admin_init", "admin_init_missing");


function admin_init_missing()
{
  add_meta_box("missingmeta", "Weitere Informationen", "missingmeta", "missing", "advanced", "core");
}

function missingmeta()
{
  global $post;

  wp_nonce_field(basename(__FILE__), 'missing_fields');

  $name = get_post_meta($post->ID, 'name', true);
 

  echo '<table class="form-table">
    <tbody>
      <tr>		
				<th><label for="name">Name</label></th>
				<td><input type="text" id="name" name="name" value="' . esc_attr($name) . '" class="regular-text"></td>
      </tr>	
     
		</tbody>
	</table>';
}

function wpt_save_missing_meta($post_id, $post)
{

  if (!current_user_can('edit_post', $post_id)) {
    return $post_id;
  }

  if (isset($_POST['name'])) {
    update_post_meta($post_id, 'name', sanitize_text_field($_POST['name']));
  } else {
    delete_post_meta($post_id, 'name');
  }
  
  
  return $post_id;

  $missing_meta['name'] =  $_POST['name'];
 
 

  foreach ($missing_meta as $key => $value) :

    if ('revision' === $post->post_type) {
      return;
    }

    if (get_post_meta($post_id, $key, false)) {
      update_post_meta($post_id, $key, $value);
    } else {
      add_post_meta($post_id, $key, $value);
    }

    if (!$value) {
      delete_post_meta($post_id, $key);
    }

  endforeach;
}
add_action('save_post', 'wpt_save_missing_meta', 1, 2);
