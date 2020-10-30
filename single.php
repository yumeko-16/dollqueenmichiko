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
          <h3 class="article__title"><?php the_title(); ?></h3>
          <time datetime="<?php the_time('Y-m-d'); ?>" class="article__time"><?php the_time('Y.m.d(D)'); ?></a></time>
          <div class="article__content">
            <?php the_content(); ?>
          </div>
          <?php comments_template(); ?>
        </article>
      <?php
        endwhile;
      endif;
      ?>
        <?php
          $cat = get_the_category();
          $cat_id = $cat[0]->cat_ID;
          $link = get_category_link($cat_id);
        ?>
        <div class="content__center">
          <a href="<?php echo $link; ?>" class="content__btn">BACK</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>