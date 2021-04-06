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

  $missingname = get_post_meta($post->ID, 'missing-name', true);
  $missingdate = get_post_meta($post->ID, 'missing-date', true);
  $missinglocation = get_post_meta($post->ID, 'missing-location', true);
  $missingspecials = get_post_meta($post->ID, 'missing-specials', true);
  $missingdescription = get_post_meta($post->ID, 'missing-description', true);
  $missingemail = get_post_meta($post->ID, 'missing-email', true);
  $missingimage = get_post_meta($post->ID, 'missing-image', true);


  echo '<table class="form-table">
    <tbody>
      <tr>		
				<th><label for="missing-name">Name</label></th>
				<td><input type="text" id="missing-name" name="missing-name" value="' . esc_attr($missingname) . '" class="regular-text"></td>
      </tr>	
      <tr>		
				<th><label for="missing-date">Vermisst seit</label></th>
				<td><input type="date" id="missing-date" name="missing-date" value="' . esc_attr($missingdate) . '" class="regular-text"></td>
          </tr>
          <tr>		
          <th><label for="missing-location">Vermisst seit</label></th>
          <td><input type="text" id="missing-location" name="missing-location" value="' . esc_attr($missinglocation) . '" class="regular-text"></td>
        </tr>	
        <tr>	
        <th><label for="missing-specials">Vermisst seit</label></th>
        <td><input type="text" id="missing-specials" name="missing-specials" value="' . esc_attr($missingspecials) . '" class="regular-text"></td>
        </tr>	
        <tr>	
        <th><label for="missing-description">Vermisst seit</label></th>
        <td><input type="text" id="missing-description" name="missing-description" value="' . esc_attr($missingdescription) . '" class="regular-text"></td>
      </tr>	
      <tr>	
      <th><label for="missing-email">Vermisst seit</label></th>
      <td><input type="email" id="missing-email" name="missing-email" value="' . esc_attr($missingemail) . '" class="regular-text"></td>
      </tr>	
      <tr>	
      <th><label for="missing-image">Vermisst seit</label></th>
      <td><input type="file" id="missing-image" name="missing-image" value="' . esc_attr($missingimage) . '" class="regular-text"></td>
      </tr>	  
		</tbody>
	</table>';
}

function wpt_save_missing_meta($post_id, $post)
{

  if (!current_user_can('edit_post', $post_id)) {
    return $post_id;
  }

  if (isset($_POST['missing-name'])) {
    update_post_meta($post_id, 'missing-name', sanitize_text_field($_POST['missing-name']));
  } else {
    delete_post_meta($post_id, 'missing-name');
  }
  if (isset($_POST['missing-date'])) {
    update_post_meta($post_id, 'missing-date', sanitize_text_field($_POST['missing-date']));
  } else {
    delete_post_meta($post_id, 'missing-date');
  }
  if (isset($_POST['missing-location'])) {
    update_post_meta($post_id, 'missing-location', sanitize_text_field($_POST['missing-location']));
  } else {
    delete_post_meta($post_id, 'missing-location');
  }
  if (isset($_POST['missing-specials'])) {
    update_post_meta($post_id, 'missing-specials', sanitize_text_field($_POST['missing-specials']));
  } else {
    delete_post_meta($post_id, 'missing-specials');
  }
  if (isset($_POST['missing-description'])) {
    update_post_meta($post_id, 'missing-description', sanitize_text_field($_POST['missing-description']));
  } else {
    delete_post_meta($post_id, 'missing-description');
  }
  if (isset($_POST['missing-email'])) {
    update_post_meta($post_id, 'missing-email', sanitize_text_field($_POST['missing-email']));
  } else {
    delete_post_meta($post_id, 'missing-email');
  }
  if (isset($_POST['missing-image'])) {
    update_post_meta($post_id, 'missing-image', sanitize_text_field($_POST['missing-image']));
  } else {
    delete_post_meta($post_id, 'missing-image');
  }


  return $post_id;

  $missing_meta['missing-name'] =  $_POST['missing-name'];
  $missing_meta['missing-date'] =  $_POST['missing-date'];
  $missing_meta['missing-location'] =  $_POST['missing-location'];
  $missing_meta['missing-specials'] =  $_POST['missing-specials'];
  $missing_meta['missing-description'] =  $_POST['missing-description'];
  $missing_meta['missing-email'] =  $_POST['missing-email'];
  $missing_meta['missing-image'] =  $_POST['missing-image'];



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
