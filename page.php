<?php get_header(); ?>
<main class="wrap">
  <section class="content-area content-thin">
    <div class="page-div">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <article class="article-full">
            <header>
              <h2><?php the_title(); ?></h2>
            </header>
            <?php the_content(); ?>
          </article>
        <?php endwhile;
      else : ?>
        <article>
          <p>Leider gibt es noch keine Seiten ...</p>
        </article>
      <?php endif; ?>
    </div>
  </section><?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>