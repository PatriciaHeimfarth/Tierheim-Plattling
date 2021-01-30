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
            'meta_key' => 'emergency',
            'meta_value' => 'yes'

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
                        $birthdate = get_post_meta($post->ID, 'birthdate', true);
                        echo 'Geburtsdatum: ' . $birthdate; ?>

                    </div>
                </div>
        <?php
            }

        endwhile;

        ?>
    </section>

</div>
<?php get_footer() ?>