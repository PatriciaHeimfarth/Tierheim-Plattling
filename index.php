<?php get_header(); ?>
<main class="wrap">
    <section class="content-area content-full-width">
        <h1>Aktuelles</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="article-loop">
                    <header>
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    </header>
                    <?php
                    add_image_size('single-feature', 400, 300, true);
                    the_post_thumbnail('single-feature');

                    ?>
                    <?php the_excerpt(); ?>
                </article>
            <?php endwhile;
        else : ?>
            <article>
                <p>Entschuldigung, hier steht noch nichts ...</p>
            </article>
        <?php endif; ?>
        <h1>Unser Tierheim</h1>
        <h1>Adoptieren und Helfen</h1>
        <div class="animal-div">
            <div class="animal-content-div">
                <h2>Unsere Hunde</h2>
                <img src="<?php echo get_template_directory_uri() ?>/images/hund.jpeg" alt="Unsere Hunde">
                <button>Zu den Hunden</button>
            </div>
            <div class="animal-content-div">
                <h2>Unsere Katzen</h2>
                <img src="<?php echo get_template_directory_uri() ?>/images/katze.jpeg" alt="Unsere Katzen">
                <button>Zu den Katzen</button>
            </div>
            <div class="animal-content-div">
                <h2>Unsere Kleintiere</h2>
                <img src="<?php echo get_template_directory_uri() ?>/images/kaninchen.jpeg" alt="Unsere Kleintiere">
                <button>Zu den Kleintieren</button>
            </div>
            <div class="animal-content-div">
                <h2>Erfolgreich vermittelt</h2>
                <img src="<?php echo get_template_directory_uri() ?>/images/hund1.jpeg" alt="Unsere Vermittelten">
                <button>Zu den Vermittlungen</button>
            </div>
        </div>
    </section><?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>