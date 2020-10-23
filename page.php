<?php get_header(); ?>

<main class="main">
  <section class="section">
    <div class="section__inner">
      <h2 class="title"><?php wp_title(''); ?></h2>
      <div class="content">
        <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
        ?>
          <article>
            <?php the_content(); ?>
          </article>
        <?php
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>