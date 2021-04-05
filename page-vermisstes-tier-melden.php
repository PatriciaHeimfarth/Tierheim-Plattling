<?php

$postTitleError = '';

if (isset($_POST['submitted'])) {

    if (trim($_POST['name']) === '') {
        $postTitleError = 'Bitte einen Namen eingeben.';
        $hasError = true;
    }
}

$missing_animal = array(
    'post_title' => wp_strip_all_tags($_POST['name']),
    'post_content' => 'test',
    'post_type' => 'missing',
    'post_status' => 'pending',
    'meta_input' => array(
        'name' => wp_strip_all_tags($_POST['name'])
    )
);
$post_id = wp_insert_post($missing_animal);
add_post_meta($post_id, 'name', $_POST['name'], false);


?>
<?php
get_header();
?>
<div class="main-wrap" role="main">

    <form action="" name="new_missing" id="MissingForm" method="POST">

        <fieldset>
            <label for="name"><?php _e('Missing Name:', 'framework') ?></label>
            <input type="text" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" name="name" id="name" class="required" />
        </fieldset>


        <fieldset>
            <input type="hidden" name="submitted" name="action" value="true" />
            <button type="submit"><?php _e('Add Missing', 'framework') ?></button>
        </fieldset>

    </form>

</div>

<?php get_footer() ?>