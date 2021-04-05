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
        'meta_input' => array(
            'name' => 'test' //wp_strip_all_tags($_POST['name'])
        )
    );
    // add_post_meta($missing_animal, 'name', $_POST['name'], false);
    $pid = wp_insert_post($missing_animal);
    wp_redirect(get_permalink($pid));
    exit;
}

?>


<div class="main-wrap" role="main">

    <form id="new_missing" name="new_missing" method="POST" action="">
        <fieldset>
            <label for="missing-name">Name</label>
            <input type="text" name="missing-name" id="missing-name" value="" />
        </fieldset>


        <fieldset>
            <p align="right"><input type="submit" value="Publish" tabindex="6" id="submit" name="submit" /></p>

            <input type="hidden" name="action" value="new_missing" />
            <?php wp_nonce_field('new_missing'); ?>

        </fieldset>

    </form>

</div>

<?php get_footer() ?>