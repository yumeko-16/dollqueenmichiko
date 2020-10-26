<?php get_header(); ?>

<main class="main">
  <section class="section">
    <div class="section__inner">
      <h2 class="title">404 Not Found</h2>
      <div class="content">
        <p>お探しのページが見つかりませんでした。</p>
        <p>申し訳ございませんが、<a href="<?php echo home_url('/'); ?>">こちらのリンク</a>からトップページにお戻りください。</p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>