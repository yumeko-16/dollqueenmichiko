<?php get_header(); ?>

<main class="main">
  <section class="section">
    <div class="section__inner">
      <h2 class="title"><?php wp_title(''); ?></h2>
      <?php if ( is_category('news') ): ?>
        <?php get_template_part('loop', 'news'); ?>
      <?php elseif( is_category('doll') ): ?>
        <?php get_template_part('loop', 'doll'); ?>
      <?php endif; ?>
      <div id="post-<?php the_ID(); ?>"></div>
    </div>
  </section>
</main>

<?php get_footer(); ?>