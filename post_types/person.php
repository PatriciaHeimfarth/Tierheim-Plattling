<?php


function register_person_post_type()
{
  $labels = array(
    'name'                  => __('Personen'),
    'singular_name'         => __('Person'),
    'add_new'               => __('Eine neue Person hinzufügen'),
    'add_new_item'          => __('Eine neue Person hinzufügen'),
    'edit_item'             => __('Die unten ausgewählte Person verändern:'),
    'new_item'              => __('Eine Person hinzufügen'),
    'view_item'             => __('Die Person anzeigen'),
    'view_items'             => __('Zeige alle Personem'),
    'search_items'          => __('Suche nach einer Person'),
    'not_found'             => __('Nicht gefunden'),
    'not_found_in_trash'    => __('Im Papierkorb nicht gefunden'),
    'parent_item_colon'     => __('Personen ...'),
    'all_items'             => __('Alle Personen anzeigen'),
    'archives'              => __('Person-Archiv'),
    'attributes'            => __('Person-Eigenschaften'),
    'insert_into_item'      => __('Zur Person hinzufügen'),
    'uploaded_to_this_item' => __('Zur Person hinzugefügt'),
    'featured_image'        => __('Bild'),
    'set_featured_image'    => __('Bild für die Person festlegen'),
    'remove_featured_image' => __('Bild löschen'),
    'use_featured_image'    => __('Als Bild verwenden'),
    'menu_name'             => __('Personen anzeigen und bearbeiten'),
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

  register_post_type('person', $args);
}
add_action('init', 'register_person_post_type');

add_action("admin_init", "admin_init");


function admin_init()
{
  add_meta_box("personmeta", "Weitere Informationen", "personmeta", "person", "advanced", "core");
}

function personmeta()
{
  global $post;

  wp_nonce_field(basename(__FILE__), 'person_fields');

  $prename = get_post_meta($post->ID, 'prename', true);
  $lastname = get_post_meta($post->ID, 'lastname', true);
  $entrydate = get_post_meta($post->ID, 'entrydate', true);
  $status = get_post_meta($post->ID, 'status', true);

  echo '<table class="form-table">
    <tbody>
      <tr>		
				<th><label for="prename">Vorname</label></th>
				<td><input type="text" id="prename" name="prename" value="' . esc_attr($prename) . '" class="regular-text"></td>
      </tr>	
      <tr>		
				<th><label for="lastname">Nachname</label></th>
				<td><input type="text" id="lastname" name="lastname" value="' . esc_attr($lastname) . '" class="regular-text"></td>
      </tr>
      <tr>		
				<th><label for="entrydate">Eintrittsdatum</label></th>
				<td><input type="date" id="entrydate" name="entrydate" value="' . esc_attr($entrydate) . '" class="regular-text"></td>
      </tr>		 
      <tr>
      <th><label for="status">Status</label></th>
      <td>
        <select id="status" name="status">
          <option value="">Auswählen ...</option>
          <option value="unsalaried"' . selected('unsalaried', $status, false) . '>Ehrenamtlich</option>
          <option value="employee"' . selected('employee', $status, false) . '>Mitarbeiter</option>
        </select>
      </td>
      </tr>
		</tbody>
	</table>';
}

function wpt_save_person_meta($post_id, $post)
{

  if (!current_user_can('edit_post', $post_id)) {
    return $post_id;
  }

  if (isset($_POST['prename'])) {
    update_post_meta($post_id, 'prename', sanitize_text_field($_POST['prename']));
  } else {
    delete_post_meta($post_id, 'prename');
  }
  if (isset($_POST['lastname'])) {
    update_post_meta($post_id, 'lastname', sanitize_text_field($_POST['lastname']));
  } else {
    delete_post_meta($post_id, 'lastname');
  }
  if (isset($_POST['entrydate'])) {
    update_post_meta($post_id, 'entrydate', sanitize_text_field($_POST['entrydate']));
  } else {
    delete_post_meta($post_id, 'entrydate');
  }
  if (isset($_POST['status'])) {
    update_post_meta($post_id, 'status', sanitize_text_field($_POST['status']));
  } else {
    delete_post_meta($post_id, 'status');
  }


  return $post_id;

  $person_meta['prename'] =  $_POST['prename'];
  $person_meta['lastname'] =  $_POST['lastname'];
  $person_meta['entrydate'] =  $_POST['entrydate'];
  $person_meta['status'] =  $_POST['status'];
 

  foreach ($person_meta as $key => $value) :

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
add_action('save_post', 'wpt_save_person_meta', 1, 2);
