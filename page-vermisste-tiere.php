<?php
get_header();
?>
<div class="main-wrap" role="main">
    <section id="animal-listing">
        <?php $args = array(
            'post_type' => 'missing',
            'post_status' => 'publish',
            'posts_per_page' => 1000,
            'orderby' => 'title',
            'order' => 'ASC'

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
                        $name = get_post_meta($post->ID, 'missing-name', true);
                        echo 'Name: ' . $name; ?>
                        <br>
                        <br>
                        <?php
                        $date = get_post_meta($post->ID, 'missing-date', true);
                        echo 'Vermisst seit: ' . $date; ?>
                        <br>
                        <br>
                        <?php
                        $missingin = get_post_meta($post->ID, 'missing-location', true);
                        echo 'Vermisst in: ' . $missingin; ?>
                        <br>
                        <br>
                        <?php
                        $specials = get_post_meta($post->ID, 'missing-specials', true);
                        echo 'Besondere Merkmale: ' . $specials; ?>
                        <br>
                        <br>
                        <?php
                        $description = get_post_meta($post->ID, 'missing-description', true);
                        echo 'Beschreibung: ' . $description; ?>
                         <br>
                        <br>
                        <?php
                        $email = get_post_meta($post->ID, 'missing-email', true);
                        echo 'E-Mail: ' . $email; ?>

                    </div>
                </div>
        <?php
            }

        endwhile;

        ?>
    </section>

</div>
<?php get_footer() ?>

 
