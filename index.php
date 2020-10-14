<?php get_header(); ?>

<main class="main">
  <?php if (is_home()) : ?>
    <section class="section mv">
      <div class="section__inner">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/main.png" alt="メインビジュアル" class="mv__img">
      </div>
    </section>
    <section class="section news">
      <div class="section__inner">
        <h2 class="title">
          <span class="title__txt title__txt--en">NEWS</span>
          <span class="title__txt title__txt--jp">ニュース</span>
        </h2>
        <div class="news__list">
          <?php
          if ( have_posts() ) :
            while ( have_posts() ) : the_post();
          ?>
          <article class="news__article">
            <figure>
            <?php if ( has_post_thumbnail() ): ?>
              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'news__thumb')); ?></a>
            <?php else: ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage_180x180.png" alt="No Image" class="news__thumb"></a>
            <?php endif; ?>
            </figure>
            <div class="news__caption">
              <div class="news__categories">
              <?php the_category(); ?>
              </div>
              <time datetime="<?php the_time('Y-m-d'); ?>"><a href="<?php the_permalink(); ?>"><?php the_time('Y.m.d(D)'); ?></a></time>
              <h3 class="news__heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
          </article>
          <?php
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
</main>

<?php get_footer(); ?>