<?php

$postTitleError = '';

if (isset($_POST['submitted']) && isset( $_POST['post_nonce_field'] )
 && wp_verify_nonce( $_POST['post_nonce_field'], 'post_nonce' )) {

    if (trim($_POST['name']) === '') {
        $postTitleError = 'Bitte einen Namen eingeben.';
        $hasError = true;
    }
}
$missing_animal = array(
    'post_title' => wp_strip_all_tags($_POST['name']),
    'post_type' => 'missing',
    'post_status' => 'pending'
);

$post_id = wp_insert_post($missing_animal);
?>
<?php
get_header();
?>
<div class="main-wrap" role="main">

    <form action="" id="MissingForm" method="POST">

        <fieldset>
            <label for="name"><?php _e('Missing Name:', 'framework') ?></label>
            <input type="text" value="<?php if (isset($_POST['name'])) echo $_POST['name']; ?>" name="name" id="name" class="required" />
        </fieldset>


        <fieldset>
            <input type="hidden" name="submitted" id="submitted" value="true" />
            <?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>
            <button type="submit"><?php _e('Add Missing', 'framework') ?></button>
        </fieldset>

    </form>

</div>
<?php if ($postTitleError != '') { ?>
    <span class="error"><?php echo $postTitleError; ?></span>
    <div class="clearfix"></div>
<?php } 
if ( $post_id ) {
    wp_redirect( home_url() );
    exit;
}
?>

<?php get_footer() ?>