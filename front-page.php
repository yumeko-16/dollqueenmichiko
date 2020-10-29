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

  <section class="section">
    <div class="section__inner clearfix">
      <h2 class="title profile__title">PROFILE</h2>
      <div class="profile__wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/profile.jpg" alt="プロフィール" class="profile__img"></div>
      <div class="profile__introduction">
        <h4 class="profile__name">前野 美智子</h4>
        <p>
          2017年6月28日に日本デビュー。<br>
          50代を中心とした圧倒的な支持でデビューから2年連続の紅白歌合戦にも出演を果たす。<br>
          さらに2019年春には日本デビューしてからの夢であった、ドームツアーを実施。<br>
          勢い止まらず、11月20日（水）にJAPAN 2nd ALBUM『&TWICE』をリリース！<br>
          オリコン週間アルバムランキングで初週売上12.4万枚で初登場1位を獲得。5/13付で韓国7thミニアルバム『FANCY YOU』が獲得して以来、通算5作目の1位となり、「海外⼥性アーティストのアルバム1位獲得作品数」が歴代2位タイとなった。<br>
          2019年年末には「第70回紅白歌合戦」にも3年連続で出場。
        </p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>