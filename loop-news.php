<h2 class="title news__title"><?php wp_title(''); ?></h2>
<div class="content">
  <ul class="group grooup--news">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
    ?>
    <li class="article article--news">
      <a href="<?php the_permalink(); ?>">
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d(D)'); ?></time>
        <h3><?php the_title(); ?></h3>
      </a>
    </li>
    <?php
      endwhile;
    else:
    ?>
      <?php if ( is_search() ) : ?>
        <p>検索結果はありませんでした。</p>
      <?php else : ?>
        <p>記事はありません。</p>
      <?php endif; ?>
    <?php endif; ?>

    <?php if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi(); } ?>
  </ul>
</div>