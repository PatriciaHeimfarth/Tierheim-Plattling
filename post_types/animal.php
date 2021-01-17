<?php
define("TRANSLATION_CONST", "TC");

function register_animal_post_type()
{
    $labels = array(
        'name'                  => __('Tiere'),
        'singular_name'         => __('Tier'),
        'add_new'               => __('Ein neues Tier hinzufügen'),
        'add_new_item'          => __('Ein neues Tier hinzufügen'),
        'edit_item'             => __('Das unten ausgewählte Tier verändern:'),
        'new_item'              => __('Ein Tier hinzufügen'),
        'view_item'             => __('Das Tier anzeigen'),
        'view_items'             => __('Zeige alle Tiere'),
        'search_items'          => __('Suche nach einem Tier'),
        'not_found'             => __('Nicht gefunden'),
        'not_found_in_trash'    => __('Im Papierkorb nicht gefunden'),
        'parent_item_colon'     => __('Tiere ...'),
        'all_items'             => __('Alle Tiere anzeigen'),
        'archives'              => __('Tier-Archiv'),
        'attributes'            => __('Tier-Eigenschaften'),
        'insert_into_item'      => __('Zum Tier hinzufügen'),
        'uploaded_to_this_item' => __('Zum Tier hinzugefügt'),
        'featured_image'        => __('Bild'),
        'set_featured_image'    => __('Bild für das Tier festlegen'),
        'remove_featured_image' => __('Bild löschen'),
        'use_featured_image'    => __('Als Bild verwenden'),
        'menu_name'             => __('Tiere anzeigen und bearbeiten'),
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
        'description' => __('Animals', TRANSLATION_CONST),
        
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
        'supports' => array('title', 'editor', 'thumbnail' )
    );

    register_post_type('animal', $args);
   
}
add_action('init', 'register_animal_post_type');

add_action("admin_init", "admin_init");
 

function admin_init()
{
    add_meta_box("animalmeta", "Weitere Informationen", "animalmeta", "animal", "advanced", "core");
}

function animalmeta() {
	global $post;

	wp_nonce_field( basename( __FILE__ ), 'animal_fields' );

    $species = get_post_meta( $post->ID, 'species', true );
    $birthdate = get_post_meta( $post->ID, 'birthdate', true );
	 

    echo '<table class="form-table">
		<tbody>
			<tr>
				<th><label for="birthdate">Geburtsdatum</label></th>
				<td><input type="text" id="birthdate" name="birthdate" value="' . esc_attr( $birthdate ) . '" class="regular-text"></td>
			</tr>
			<tr>
				<th><label for="species">Tier-Art</label></th>
				<td>
					<select id="species" name="species">
						<option value="">Auswählen ...</option>
						<option value="cat"' . selected( 'cat', $species, false ) . '>Katze</option>
						<option value="dog"' . selected( 'dog', $species, false ) . '>Hund</option>
					</select>
				</td>
			</tr>
		</tbody>
	</table>';
}

function wpt_save_animal_meta( $post_id, $post ) {

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return $post_id;
    }
    
	if( isset( $_POST[ 'species' ] ) ) {
		update_post_meta( $post_id, 'species', sanitize_text_field( $_POST[ 'species' ] ) );
	} else {
		delete_post_meta( $post_id, 'species' );
	}
	if( isset( $_POST[ 'birthdate' ] ) ) {
		update_post_meta( $post_id, 'birthdate', sanitize_text_field( $_POST[ 'birthdate' ] ) );
	} else {
		delete_post_meta( $post_id, 'birthdate' );
	}
 
	return $post_id;
    
    $animal_meta['species'] =  $_POST['species'] ;
    $animal_meta['birthdate'] =  $_POST['birthdate'] ;

	foreach ( $animal_meta as $key => $value ) :

		if ( 'revision' === $post->post_type ) {
			return;
		}

		if ( get_post_meta( $post_id, $key, false ) ) {
			update_post_meta( $post_id, $key, $value );
		} else {
			add_post_meta( $post_id, $key, $value);
		}

		if ( ! $value ) {
			delete_post_meta( $post_id, $key );
		}

	endforeach;

}
add_action( 'save_post', 'wpt_save_animal_meta', 1, 2 );
