<h2 class="title news__title"><?php wp_title(''); ?></h2>
<div class="content">
  <ul class="group grooup--news">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) : the_post();
    ?>
    <li class="article article--news">
      <a href="<?php the_permalink(); ?>">
        <time datetime="<?php the_time('Y-m-d'); ?>" class="news__time"><?php the_time('Y.m.d(D)'); ?></time>
        <h3 class="article__heading"><?php the_title(); ?></h3>
      </a>
    </li>
    <?php
      endwhile;
    else:
    ?>
      <?php if ( is_search() ) : ?>
        <p class="article__not">検索結果はありませんでした。</p>
      <?php else : ?>
        <p class="article__not">記事はありません。</p>
      <?php endif; ?>
    <?php endif; ?>
  </ul>
  <?php
  $custom_wp_pagenavi = array(
    'wrapper_tag' => 'nav',
    'wrapper_class' => 'pagenavi'
  );
  if ( function_exists( 'wp_pagenavi' ) ) { wp_pagenavi($custom_wp_pagenavi); }
  ?>
</div>