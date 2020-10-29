<?php get_header(); ?>

<main class="main">
  <section class="section">
    <div class="section__inner">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home/main.jpg" alt="メインビジュアル" class="mv__img">
    </div>
  </section>

  <?php
  $categorys = array(1);
  for ($i = 0; $i < count($categorys); $i++) :
  ?>
  <section class="section">
    <div class="section__inner">
      <h2 class="title news__title"><?php echo esc_html(get_catname($categorys[$i])); ?></h2>
      <div class="content">
        <ul class="group group--news">
        <?php
        query_posts('showposts=4&cat='.$categorys[$i]);
        if (have_posts()) :
          while (have_posts()) : the_post();
        ?>
          <li class="article article--news">
            <a href="<?php the_permalink() ?>">
              <time datetime="<?php the_time('Y-m-d'); ?>" class="news__time"><?php the_time('Y.m.d(D)'); ?></time>
              <h3 class="article__heading"><?php the_title(); ?></h3>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php else: ?>
          <li><?php echo esc_html(get_catname($categorys[$i]))."はまだありません。"; ?></li>
        </ul>
        <?php endif; ?>

        <?php
        // 指定したカテゴリーの ID を取得
        $category_id = get_cat_ID( 'NEWS' );
        // このカテゴリーの URL を取得
        $category_link = get_category_link( $category_id );
        ?>

        <div class="content__center">
          <a href="<?php echo esc_url( $category_link ); ?>" title="NEWS" class="content__btn">VIEW MORE</a>
        </div>
      </div>
    </div>
  </section>
  <?php endfor; ?>

  <?php
  $categorys = array(4);
  for ($i = 0; $i < count($categorys); $i++) :
  ?>
  <section class="section">
    <div class="section__inner">
      <h2 class="title doll__title"><?php echo esc_html(get_catname($categorys[$i])); ?></h2>
      <ul class="group">
      <?php
      query_posts('showposts=4&cat='.$categorys[$i]);
      if (have_posts()) :
        while (have_posts()) : the_post();
      ?>
        <li class="article">
          <a href="<?php the_permalink() ?>">
            <figure>
            <?php if ( has_post_thumbnail() ): ?>
              <?php the_post_thumbnail('thumbnail', array('class' => 'article__thumb')); ?>
            <?php else: ?>
              <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage_180x180.png" alt="No Image" class="article__thumb">
            <?php endif; ?>
            </figure>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d(D)'); ?></time>
            <h3><?php the_title(); ?></h3>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php else: ?>
        <li><?php echo esc_html(get_catname($categorys[$i]))."はまだありません。"; ?></li>
      </ul>
      <?php endif; ?>

      <?php
      // 指定したカテゴリーの ID を取得
      $category_id = get_cat_ID( 'DOLL' );
      // このカテゴリーの URL を取得
      $category_link = get_category_link( $category_id );
      ?>

      <div class="content__center">
        <a href="<?php echo esc_url( $category_link ); ?>" title="DOLL" class="content__btn">VIEW MORE</a>
      </div>
    </div>
  </section>
  <?php endfor; ?>
</main>

<?php get_footer(); ?>