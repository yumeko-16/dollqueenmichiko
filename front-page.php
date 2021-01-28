<?php get_header(); ?>

<main class="main">
  <section class="section">
    <p>
      <img src="<?php echo get_template_directory_uri(); ?>/images/home/main-sp.jpg" alt="メインビジュアル" class="mv__img sp-display">
      <img src="<?php echo get_template_directory_uri(); ?>/images/home/main-pc.jpg" alt="メインビジュアル" class="mv__img pc-display">
    </p>
  </section>

  <section class="section">
    <div class="section__inner">
      <h2 class="title news__title">NEWS</h2>
      <div class="content">
        <ul class="group group--news">
        <?php
        $args = array(
          'category_name' => 'news',
          'posts_per_page' => 4
        );
        $the_query = new WP_Query($args);
        if ($the_query -> have_posts()) :
          while ($the_query -> have_posts()) : $the_query -> the_post();
        ?>
          <li class="article article--news">
            <a href="<?php the_permalink(); ?>">
              <time datetime="<?php the_time('Y-m-d'); ?>" class="news__time"><?php the_time('Y.m.d(D)'); ?></time>
              <h3 class="article__heading"><?php the_title(); ?></h3>
            </a>
          </li>
          <?php endwhile; ?>
        </ul>
        <?php else : ?>
          <li class="article__not"><?php echo "記事はまだありません。"; ?></li>
        </ul>
        <?php endif; ?>

        <?php
        // 指定したカテゴリーの ID を取得
        $category_id = get_cat_ID('NEWS');
        // このカテゴリーの URL を取得
        $category_link = get_category_link($category_id);
        ?>

        <div class="content__center">
          <a href="<?php echo esc_url($category_link); ?>" title="NEWS" class="content__btn">VIEW MORE</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="section__inner clearfix">
      <h2 class="title profile__title">PROFILE</h2>
      <div class="profile__wrap-img"><img src="<?php echo get_template_directory_uri(); ?>/images/home/profile.jpg" alt="プロフィール" class="profile__img"></div>
      <div class="profile__introduction">
        <h4 class="profile__name">前野 美智子</h4>
        <div class="profile__txt">
          <p>人形作家。</p>
          <p>2018年1月に自身初の個展で作品を発表。</p>
          <p>孫に頼まれドールハウスを作ったことをきっかけに、人形作りの楽しさに気付き、それ以後本格的に人形作りに取り組みだす。</p>
          <p>物を無駄にしたくないという想いから、あえて古着の布地を使い、味のある作品を生み出すことを心掛けている。</p>
          <p>物語を想像させるような独自の世界観によって、見てくれる人に感動を届ける作品をこれからも創り続けていく。</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="section__inner">
      <h2 class="title doll__title">DOLL</h2>
      <ul class="group">
      <?php
      $args = array(
        'category_name' => 'doll',
        'posts_per_page' => 4
      );
      $the_query = new WP_Query($args);
      if ($the_query -> have_posts()) :
        while ($the_query -> have_posts()) : $the_query -> the_post();
      ?>
        <li class="article">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('thumbnail', array('class' => 'article__thumb')); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage_180x180.png" alt="No Image" class="article__thumb">
              <?php endif; ?>
            </figure>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d(D)'); ?></time>
            <h3><?php the_title(); ?></h3>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php else : ?>
        <li class="article__not"><?php echo "記事はまだありません。"; ?></li>
      </ul>
      <?php endif; ?>

      <?php
      // 指定したカテゴリーの ID を取得
      $category_id = get_cat_ID('DOLL');
      // このカテゴリーの URL を取得
      $category_link = get_category_link($category_id);
      ?>

      <div class="content__center">
        <a href="<?php echo esc_url($category_link); ?>" title="DOLL" class="content__btn">VIEW MORE</a>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="section__inner">
      <h2 class="title column__title">COLUMN</h2>
      <ul class="group">
      <?php
      $args = array(
        'category_name' => 'column',
        'posts_per_page' => 4
      );
      $the_query = new WP_Query($args);
      if ($the_query -> have_posts()) :
        while ($the_query -> have_posts()) : $the_query -> the_post();
      ?>
        <li class="article">
          <a href="<?php the_permalink(); ?>">
            <figure>
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('thumbnail', array('class' => 'article__thumb')); ?>
              <?php else : ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage_180x180.png" alt="No Image" class="article__thumb">
              <?php endif; ?>
            </figure>
            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d(D)'); ?></time>
            <h3><?php the_title(); ?></h3>
          </a>
        </li>
        <?php endwhile; ?>
      </ul>
      <?php else : ?>
        <li class="article__not"><?php echo "記事はまだありません。"; ?></li>
      </ul>
      <?php endif; ?>

      <?php
      // 指定したカテゴリーの ID を取得
      $category_id = get_cat_ID('COLUMN');
      // このカテゴリーの URL を取得
      $category_link = get_category_link($category_id);
      ?>

      <div class="content__center">
        <a href="<?php echo esc_url($category_link); ?>" title="COLUMN" class="content__btn">VIEW MORE</a>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>