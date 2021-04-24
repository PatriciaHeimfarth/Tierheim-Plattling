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
            </div>
        </div>
    </section>

</div>
<?php get_footer() ?>