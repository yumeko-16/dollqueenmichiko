<?php get_header(); ?>

<section class="section">
  <div class="section__inner">
    <h2 class="title">
      <span class="title__txt title__txt--en">NEWS</span>
      <span class="title__txt title__txt--jp">ニュース</span>
    </h2>
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
    ?>
    <article class="article" <?php post_class('entry'); ?>>
      <?php the_category(); ?>
      <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d(D)'); ?></a></time>
      <h3><span><?php the_title(); ?></span></h3>
      <?php the_content(); ?>
      <nav class="article__nav">
        <span><?php previous_post_link('%link'); ?></span>
        <span><?php next_post_link('%link'); ?></span>
      </nav>
    </article>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</section>

  <?php get_footer(); ?>