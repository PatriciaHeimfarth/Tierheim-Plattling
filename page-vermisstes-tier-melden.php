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
    wp_redirect(get_permalink($pid));
    exit;
}

?>


<div class="main-wrap" role="main">

    <form id="new_missing" name="new_missing" method="POST" action="">
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
            <label for="missing-image">Bild</label>
            <br>
            <input type="file" name="missing-image" id="missing-image" value="" />
            <p align="right"><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>

            <input type="hidden" name="action" value="new_missing" />
            <?php wp_nonce_field('new_missing'); ?>

        </fieldset>

    </form>

</div>

<?php get_footer() ?>