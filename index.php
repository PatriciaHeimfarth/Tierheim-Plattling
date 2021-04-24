<?php get_header(); ?>
<main class="wrap">
    <section class="content-area content-full-width">
        <h1>Aktuelles</h1>
        <div class="container">
            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <article class="article-loop">
                            <div class="col-sm">
                                <header>

                                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                </header>
                                <?php
                                add_image_size('single-feature', 400, 300, true);
                                the_post_thumbnail('single-feature');

                                ?>
                            </div>
                        </article>
                    <?php endwhile;
                else : ?>
                    <article>
                        <p>Entschuldigung, hier steht noch nichts ...</p>
                    </article>
                <?php endif; ?>
            </div>
        </div>
        <h1>Unser Tierheim</h1>
        <h1>Adoptieren und Helfen</h1>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <h2>Unsere Hunde</h2>
                    <img src="<?php echo get_template_directory_uri() ?>/images/hund.jpeg" alt="Unsere Hunde">
                    <button onclick="location.href='./hunde'">Zu den Hunden</button>
                </div>
                <div class="col-sm">
                    <h2>Unsere Katzen</h2>
                    <img src="<?php echo get_template_directory_uri() ?>/images/katze.jpeg" alt="Unsere Katzen">
                    <button onclick="location.href='./katzen'">Zu den Katzen</button>
                </div>
                <div class="col-sm">
                    <h2>Unsere Kleintiere</h2>
                    <img src="<?php echo get_template_directory_uri() ?>/images/kaninchen.jpeg" alt="Unsere Kleintiere">
                    <button>Zu den Kleintieren</button>
                </div>
                <div class="col-sm">
                    <h2>Erfolgreich vermittelt</h2>
                    <img src="<?php echo get_template_directory_uri() ?>/images/hund1.jpeg" alt="Unsere Vermittelten">
                    <button>Zu den Vermittlungen</button>
                </div>
                <div class="col-sm">
                    <h2>Hinweise zur Vermittlung</h2>
                    <img src="<?php echo get_template_directory_uri() ?>/images/katze1.jpeg" alt="Hinweise zur Vermittlung">
                    <button>Zu den Hinweisen</button>
                </div>
                <div class="col-sm">
                    <h2>Regenbogenland</h2>
                    <img src="<?php echo get_template_directory_uri() ?>/images/katze1.jpeg" alt="Hinweise zur Vermittlung">
                    <button>Zum Regenbogenland</button>
                </div>
            </div>
        </div>
        <div class="donation-div">
            <h2>Helfen Sie uns!</h2>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor .
        </div>
        <div class="infotext-div"></div>
        <div class="infotext-div"></div>
    </section><?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>