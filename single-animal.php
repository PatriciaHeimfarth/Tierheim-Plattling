<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="animal-<?php the_ID(); ?>">
        <?php
        $character = get_post_meta($post->ID, 'character', true);
        $race = get_post_meta($post->ID, 'race', true);
        $in_shelter_since = get_post_meta($post->ID, 'in_shelter_since', true);
        $castration = get_post_meta($post->ID, 'castration', true); 
        $birthdate = get_post_meta($post->ID, 'birthdate', true); ?>
        <div class="row column" id="animal-header">
            <h1 class="animal-detail-title"><?php the_title(); ?></h1>
        </div>
        <div class="animal-detail-div" role="main">
            <div class="entry-content">
                <div class="row">
                    <div>
                        <?php if (has_post_thumbnail()) : ?>
                            <img class="animal-detail-image" src="<?php the_post_thumbnail_url('full'); ?>" />
                        <?php endif; ?>
                    </div>
                    <div>
                        <table>
                            <thead>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <?php echo "Rasse"; ?>
                                    </td>
                                    <td>
                                        <?php echo $race; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo "Geburtsdatum"; ?>
                                    </td>
                                    <td>
                                        <?php echo $birthdate; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo "Charakter"; ?>
                                    </td>
                                    <td>
                                        <?php echo $character; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo "Kastriert / Sterilisiert?"; ?>
                                    </td>
                                    <td>
                                        <?php echo $castration; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo "Im Tierheim seit "; ?>
                                    </td>
                                    <td>
                                        <?php echo $in_shelter_since; ?>
                                    </td>
                                </tr>
                            </tbody>


                        </table>
                    </div>
                </div>
                <h3>Beschreibung</h3>
                <div class="animal-detail-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </article>
<?php endwhile; ?>

<?php get_footer();
