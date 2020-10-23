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
        <?php get_template_part('loop', 'news'); ?>
        <div>
          <?php
          wp_list_categories( $args );
          ?>
        </div>
      </div>
    </section>
  <?php endif; ?>
</main>

<?php get_footer(); ?>