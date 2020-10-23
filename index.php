<?php get_header(); ?>

<main class="main">
  <section class="section">
    <div class="section__inner">
      <h2 class="title"><?php wp_title(''); ?></h2>
      <?php get_template_part('loop', 'news'); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>