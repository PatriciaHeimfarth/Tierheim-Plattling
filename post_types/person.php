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

  $species = get_post_meta($post->ID, 'species', true);
  $birthdate = get_post_meta($post->ID, 'birthdate', true);
  $character = get_post_meta($post->ID, 'character', true);
  $race = get_post_meta($post->ID, 'race', true);
  $castration = get_post_meta($post->ID, 'castration', true);
  $emergency = get_post_meta($post->ID, 'emergency', true);
  $dead = get_post_meta($post->ID, 'dead', true);
  $placetoplace = get_post_meta($post->ID, 'placetoplace', true);


  echo '<table class="form-table">
		<tbody>
			<tr>
				<th><label for="race">Rasse</label></th>
				<td><input type="text" id="race" name="race" value="' . esc_attr($race) . '" class="regular-text"></td>
            </tr>
            <tr>
				<th><label for="birthdate">Geburtsdatum</label></th>
				<td><input type="text" id="birthdate" name="birthdate" value="' . esc_attr($birthdate) . '" class="regular-text"></td>
			</tr>
			<tr>
				<th><label for="castration">Kastriert/Sterilisiert?</label></th>
				<td>
					<select id="castration" name="castration">
						<option value="">Auswählen ...</option>
						<option value="yes"' . selected('yes', $castration, false) . '>Ja</option>
						<option value="no"' . selected('no', $castration, false) . '>Nein</option>
					</select>
				</td>
            </tr>
            <tr>
				<th><label for="species">Tier-Art</label></th>
				<td>
					<select id="species" name="species">
						<option value="">Auswählen ...</option>
						<option value="cat"' . selected('cat', $species, false) . '>Katze</option>
            <option value="dog"' . selected('dog', $species, false) . '>Hund</option>
            <option value="smallperson"' . selected('smallperson', $species, false) . '>Kleintier</option>
					</select>
				</td>
            </tr>
            <tr>
				<th><label for="emergency">Notfall?</label></th>
				<td>
					<select id="emergency" name="emergency">
						<option value="">Auswählen ...</option>
						<option value="yes"' . selected('yes', $emergency, false) . '>Ja</option>
						<option value="no"' . selected('no', $emergency, false) . '>Nein</option>
					</select>
				</td>
            </tr>
            <tr>
				<th><label for="character">Charakter</label></th>
				<td>
					<select id="character" name="character">
						<option value="">Auswählen ...</option>
						<option value="nice"' . selected('nice', $character, false) . '>Freundlich</option>
                        <option value="complicated"' . selected('complicated', $character, false) . '>Schwierig</option>
                        <option value="playful"' . selected('playful', $character, false) . '>Verspielt</option>
					</select>
				</td>
      </tr>
      <tr>
      <th><label for="dead">Gestorben?</label></th>
      <td>
        <select id="dead" name="dead">
          <option value="">Auswählen ...</option>
          <option value="yes"' . selected('yes', $dead, false) . '>Ja</option>
          <option value="no"' . selected('no', $dead, false) . '>Nein</option>
        </select>
      </td>
          </tr>
          <tr>
          <th><label for="placetoplace">Platz-Zu-Platz-Vermittlung?</label></th>
          <td>
            <select id="placetoplace" name="placetoplace">
              <option value="">Auswählen ...</option>
              <option value="yes"' . selected('yes', $placetoplace, false) . '>Ja</option>
              <option value="no"' . selected('no', $placetoplace, false) . '>Nein</option>
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

  if (isset($_POST['species'])) {
    update_post_meta($post_id, 'species', sanitize_text_field($_POST['species']));
  } else {
    delete_post_meta($post_id, 'species');
  }
  if (isset($_POST['race'])) {
    update_post_meta($post_id, 'race', sanitize_text_field($_POST['race']));
  } else {
    delete_post_meta($post_id, 'race');
  }
  if (isset($_POST['birthdate'])) {
    update_post_meta($post_id, 'birthdate', sanitize_text_field($_POST['birthdate']));
  } else {
    delete_post_meta($post_id, 'birthdate');
  }
  if (isset($_POST['castration'])) {
    update_post_meta($post_id, 'castration', sanitize_text_field($_POST['castration']));
  } else {
    delete_post_meta($post_id, 'castration');
  }
  if (isset($_POST['character'])) {
    update_post_meta($post_id, 'character', sanitize_text_field($_POST['character']));
  } else {
    delete_post_meta($post_id, 'character');
  }
  if (isset($_POST['emergency'])) {
    update_post_meta($post_id, 'emergency', sanitize_text_field($_POST['emergency']));
  } else {
    delete_post_meta($post_id, 'emergency');
  }
  if (isset($_POST['dead'])) {
    update_post_meta($post_id, 'dead', sanitize_text_field($_POST['dead']));
  } else {
    delete_post_meta($post_id, 'dead');
  }
  if (isset($_POST['placetoplace'])) {
    update_post_meta($post_id, 'placetoplace', sanitize_text_field($_POST['placetoplace']));
  } else {
    delete_post_meta($post_id, 'placetoplace');
  }

  return $post_id;

  $person_meta['species'] =  $_POST['species'];
  $person_meta['birthdate'] =  $_POST['birthdate'];
  $person_meta['character'] =  $_POST['character'];
  $person_meta['race'] =  $_POST['race'];
  $person_meta['castration'] =  $_POST['castration'];
  $person_meta['emergency'] =  $_POST['emergency'];
  $person_meta['dead'] =  $_POST['dead'];
  $person_meta['placetoplace'] =  $_POST['placetoplace'];

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
