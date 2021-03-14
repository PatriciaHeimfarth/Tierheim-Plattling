<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="animal-<?php the_ID(); ?>">
        <?php
        $prename = get_post_meta($post->ID, 'character', true);
        $lastname = get_post_meta($post->ID, 'race', true); ?>
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
                                        <?php echo "Vorname"; ?>
                                    </td>
                                    <td>
                                        <?php echo $prename; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php echo "Nachname"; ?>
                                    </td>
                                    <td>
                                        <?php echo $lastname; ?>
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
