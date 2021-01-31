<?php
get_header();
?>
<div class="main-wrap" role="main">
    <section id="animal-listing">
        <?php $args = array(
            'post_type' => 'animal',
            'post_status' => 'publish',
            'posts_per_page' => 1000,
            'orderby' => 'title',
            'order' => 'ASC',
            'meta_query' => array(
                'relation' => 'AND',
                array(
                    'key'   => 'species',
                    'value' => 'cat'
                ),
                array(
                    'key'   => 'dead',
                    'value' => 'no'
                )
            )

        );

        $loop = new WP_Query($args);

        while ($loop->have_posts()) : $loop->the_post();
            if (has_post_thumbnail()) {     ?>
                <div class="animal-list-format-div">
                    <div class="infos-above-animal-image-div"><?php the_title(); ?></div>
                    <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('full'); ?>
                    </a>
                    <div class="infos-below-animal-image-div">

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
                </div>
        <?php
            }

        endwhile;

        ?>
    </section>

</div>
<?php get_footer() ?>