<?php
get_header();
?>

<?php

if ('POST' == $_SERVER['REQUEST_METHOD'] && !empty($_POST['action']) &&  $_POST['action'] == "new_missing") {
    if (isset($_POST['missing-name'])) {
        $missingname =  $_POST['missing-name'];
    } else {
        echo 'Bitte einen Namen eingeben!';
    }
    $missing_animal = array(
        'post_title' => $missingname,
        'post_content' => 'test',
        'post_type' => 'missing',
        'post_status' => 'pending',
       
    );
    $pid = wp_insert_post($missing_animal);

    if (!function_exists('wp_generate_attachment_metadata')){
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php');
    }
     if ($_FILES) {
        foreach ($_FILES as $file => $array) {
            if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                return "upload error : " . $_FILES[$file]['error'];
            }
            $attach_id = media_handle_upload( $file, $pid );
        }   
    }
    if ($attach_id > 0){
  
        update_post_meta($pid,'_thumbnail_id',$attach_id);
    }



    wp_redirect(get_permalink($pid));
    exit;
}

?>


<div class="main-wrap" role="main">

    <form id="new_missing" name="new_missing" method="POST" action="" enctype="multipart/form-data">
        <fieldset>
            <label for="missing-name">Name</label>
            <br>
            <input type="text" name="missing-name" id="missing-name" value="" />
            <br>
            <br>
            <br>
            <label for="missing-date">Vermisst seit</label>
            <br>
            <input type="date" name="missing-date" id="missing-date" value="" />
            <br>
            <br>
            <br>
            <label for="missing-location">Ort</label>
            <br>
            <input type="text" name="missing-location" id="missing-location" value="" />
            <br>
            <br>
            <br>
            <label for="missing-specials">Besondere Kennzeichen</label>
            <br>
            <input type="text" name="missing-specials" id="missing-specials" value="" />
            <br>
            <br>
            <br>
            <label for="missing-description">Beschreibung</label>
            <br>
            <textarea name="missing-description" id="missing-description" value=""></textarea>
            <br>
            <br>
            <br>
            <label for="missing-email">E-Mail</label>
            <br>
            <input type="email" name="missing-email" id="missing-email" value="" />
            <br>
            <br>
            <br>
            <label for="thumbnail">Bild</label>
            <br>
            <input type="file" name="thumbnail" id="thumbnail" value="" />
            <p align="right"><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>

            <input type="hidden" name="action" value="new_missing" />
            <?php wp_nonce_field('new_missing'); ?>

        </fieldset>

    </form>

</div>

<?php get_footer() ?>