<?php
get_header();
?>
<div role="main">
    <section id="animal-listing">
        <?php $args = array(
            'post_type' => 'animal',
            'post_status' => 'publish',
            'posts_per_page' => 1000,
            'orderby' => 'title',
            'order' => 'ASC',
            'meta_key' => 'emergency',
            'meta_value' => 'yes'
        );

        $loop = new WP_Query($args); ?>
        <div class="container">
            <div class="row">
                <?php while ($loop->have_posts()) : $loop->the_post();
                    if (has_post_thumbnail()) {     ?>
                        <div class="col-sm">
                            <h2><?php the_title(); ?></h2>
                            <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium'); ?>
                            </a>
                            <div>
                                <?php
                                $race = get_post_meta($post->ID, 'race', true);
                                echo 'Rasse: ' . $race; ?>
                                <br>
                                <br>
                                <?php
                                $birthdate = get_post_meta($post->ID, 'birthdate', true);
                                echo 'Geburtsdatum: ' . $birthdate; ?>
                                <br>
                                <br>
                                <?php
                                $character = get_post_meta($post->ID, 'character', true);
                                echo 'Charakter: ' . $character; ?>
                                <br>
                                <br>
                                <?php
                                $in_shelter_since = get_post_meta($post->ID, 'in_shelter_since', true);
                                echo 'Im Tierheim seit: ' . $in_shelter_since; ?>
                                <br>
                                <br>
                                <?php
                                $castration = get_post_meta($post->ID, 'castration', true);
                                echo 'Kastriert?: ' . $castration; ?>
                            </div>
                            <br>
                            <br>
                            <br>
                        </div>
                <?php
                    }

                endwhile;

                ?>
            </div>
        </div>
    </section>

</div>
<?php get_footer() ?>