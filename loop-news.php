<div class="group">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
  ?>
  <article class="article">
    <figure>
    <?php if ( has_post_thumbnail() ): ?>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'article__thumb')); ?></a>
    <?php else: ?>
      <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage_180x180.png" alt="No Image" class="article__thumb"></a>
    <?php endif; ?>
    </figure>
    <div class="article__caption">
      <div class="article__categories">
      <?php the_category(); ?>
      </div>
      <time datetime="<?php the_time('Y-m-d'); ?>"><a href="<?php the_permalink(); ?>"><?php the_time('Y.m.d(D)'); ?></a></time>
      <h3 class="article__heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </div>
  </article>
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
</div>