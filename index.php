<?php get_header(); ?>
<main class="wrap">
    <section class="content-area content-thin">
        <h1>Aktuelles</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="article-loop">
                    <header>
                        <h2><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                    </header>
                    <?php 
                    add_image_size( 'single-feature', 400, 300, true );
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
    </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>