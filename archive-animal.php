<?php
get_header(); ?>

<div class="main-wrap" role="main">

    <section id="animal-listing">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="article-full">
                    <header>
                        <h2><?php the_title(); ?></h2>
                        By: <?php the_author(); ?>
                    </header>
                    <div class="column"">
	       <?php get_template_part('template-parts/animal-content', get_post_format()); ?>
	    </div>
                </article>
            <?php endwhile;
        else : ?>
            <article>
                <p>Leider gibt es noch keine Seiten ...</p>
            </article>
        <?php endif; ?>
    </section>

</div>

<?php get_footer(); ?>