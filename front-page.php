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
        <h2 class="title">NEWS</h2>
        <?php get_template_part('loop', 'news'); ?>
        <?php echo the_category(); ?>
      </div>
    </section>
  <?php endif; ?>
</main>

<?php get_footer(); ?>