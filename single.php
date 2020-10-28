<?php get_header(); ?>

<main class="main">
  <section class="section">
    <div class="section__inner">
      <div class="content">
      <?php
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
        <article <?php post_class('entry'); ?>>
          <h3><span><?php the_title(); ?></span></h3>
          <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d(D)'); ?></a></time>
          <?php the_content(); ?>

          <?php comments_template(); ?>

          <nav>
            <span><?php previous_post_link('%link'); ?></span>
            <span><?php next_post_link('%link'); ?></span>
          </nav>
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