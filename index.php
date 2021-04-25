<?php get_header(); ?>
<main class="wrap">
    <section class="content-area content-full-width">
        <h1 class="text-center">Aktuelles</h1>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="text-center container">
                    <article class="article-loop">
                        <div class="row">
                            <div class="col">
                                <header>
                                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                                </header>
                                <?php
                                add_image_size('single-feature', 800, 600, true);
                                the_post_thumbnail('large');
                                ?>
                            </div>
                        </div>
                    </article>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
                </div>
            <?php endwhile;
        else : ?>
            <article>
                <p>Entschuldigung, hier steht noch nichts ...</p>
            </article>
        <?php endif; ?>
        <div class="jumbotron">
            <h1 class="text-center">Unser Tierheim</h1>
            <h1 class="text-center">Adoptieren und Helfen</h1>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Unsere Hunde</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <img style="width: 33%" class="img-thumbnail img-fluid" src="<?php echo get_template_directory_uri() ?>/images/hund.jpeg" alt="Unsere Hunde">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="button" class="btn btn-success" onclick="location.href='./hunde'">Zu den Hunden</button>
                    </div>
                </div>

                </br>
                </br>
                </br>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Unsere Katzen</h2>
                        <img style="width: 33%" class="img-thumbnail img-fluid" src="<?php echo get_template_directory_uri() ?>/images/katze.jpeg" alt="Unsere Katzen">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-success" onclick="location.href='./katzen'">Zu den Katzen</button>
                            </div>
                        </div>
                    </div>
                </div>
                </br>
                </br>
                </br>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Unsere Kleintiere</h2>
                        <img style="width: 33%" class="img-thumbnail img-fluid" src="<?php echo get_template_directory_uri() ?>/images/kaninchen.jpeg" alt="Unsere Kleintiere">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-success">Zu den Kleintieren</button>
                            </div>
                        </div>
                    </div>
                </div>
                </br>
                </br>
                </br>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Erfolgreich vermittelt</h2>
                        <img style="width: 33%" class="img-thumbnail img-fluid" src="<?php echo get_template_directory_uri() ?>/images/hund1.jpeg" alt="Unsere Vermittelten">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-success">Zu den Vermittlungen</button>
                            </div>
                        </div>
                    </div>
                </div>
                </br>
                </br>
                </br>
                <div class="row">
                    <div class="col">
                        <h2 class="text-center">Hinweise zur Vermittlung</h2>
                        <img style="width: 33%" class="img-thumbnail img-fluid" src="<?php echo get_template_directory_uri() ?>/images/katze1.jpeg" alt="Hinweise zur Vermittlung">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-success">Zu den Hinweisen</button>
                            </div>
                        </div>
                    </div>
                </div>
                </br>
                </br>
                </br>
                <div class="row">
                    <div class="col">
                        <h2>Regenbogenland</h2>
                        <img style="width: 33%" class="img-thumbnail img-fluid" src="<?php echo get_template_directory_uri() ?>/images/katze1.jpeg" alt="Hinweise zur Vermittlung">
                        <div class="row">
                            <div class="col">
                                <button type="button" class="btn btn-success">Zum Regenbogenland</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="donation-div">
            <h2 class="text-center">Helfen Sie uns!</h2>
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor .
        </div>
        <div class="infotext-div"></div>
        <div class="infotext-div"></div>
    </section><?php get_sidebar(); ?>

</main>

<?php get_footer(); ?>