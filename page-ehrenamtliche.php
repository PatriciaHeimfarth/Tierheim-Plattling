<?php
get_header();
?>
<div class="main-wrap" role="main">
    <section id="animal-listing">
        <?php $args = array(
            'post_type' => 'person',
            'post_status' => 'publish',
            'posts_per_page' => 1000,
            'orderby' => 'title',
            'order' => 'ASC',
            'meta_key' => 'status',
            'meta_value' => 'unsalaried'
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
                        <?php if (!empty(get_post_field('post_content'))) {
                            echo get_post_field('post_content');
                        }
                        ?>

                    </div>
                </div>
        <?php
            }

        endwhile;

        ?>
    </section>

</div>
<?php get_footer() ?>