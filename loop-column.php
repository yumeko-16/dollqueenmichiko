<h2 class="title column__title"><?php wp_title(''); ?></h2>
<ul class="group">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
  ?>
  <li class="article">
    <a href="<?php the_permalink(); ?>" class="article__link">
      <figure class="article__figure">
      <?php if ( has_post_thumbnail() ): ?>
        <?php the_post_thumbnail('thumbnail', array('class' => 'article__thumb')); ?>
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage_180x180.png" alt="No Image" class="article__thumb">
      <?php endif; ?>
      </figure>
      <div class="article__caption">
        <time datetime="<?php the_time('Y-m-d'); ?>" class="article__time"><?php the_time('Y.m.d(D)'); ?></time>
        <h3 class="article__heading"><?php the_title(); ?></h3>
      </div>
    </a>
  </li>
  <?php
    endwhile;
  else:
  ?>
    <?php if ( is_search() ) : ?>
      <div class="content">
        <p class="article__not">検索結果はありませんでした。</p>
      </div>
    <?php else : ?>
      <div class="content">
        <p class="article__not">記事はありません。</p>
      </div>
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
<div class="content__center">
  <a href="<?php echo home_url(); ?>" class="content__btn">HOME</a>
</div>