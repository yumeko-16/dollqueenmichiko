<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php if ( !is_home() ) { wp_title(' | ', true, 'right'); } ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Noto+Sans+JP:wght@700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
  <script src="<?php echo get_template_directory_uri(); ?>/js/anime.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/common.js" defer></script>
  <!--[if lt IE 9]>
  <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <script src="https://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
  <![endif]-->
  <?php
  wp_enqueue_script('doll-common', get_template_directory() . '/js/common.js');
  wp_head();
  ?>
</head>

<body>
  <div class="wrap">
    <header class="header">
      <div class="header__bar"></div>
      <div class="header__inner">
        <div class="header__logo">
          <h1><a href="<?php echo home_url() ?>" class="header__img"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="人形作家 みちこ"></a></h1>
        </div>
        <nav>
          <?php
          $args = array(
            'menu' => 'global-navigation',
            'menu_class' => 'header__global-nav',
            'container' => false,
          );
          wp_nav_menu($args);
          ?>
        </nav>
        <nav class="header__sp-nav">
          <ul>
            <li class="header__sp-item">
              <a href="/">
                <span class="header__nav-txt header__nav-txt--en">HOME</span>
                <span class="header__nav-txt header__nav-txt--jp">ホーム</span>
              </a>
            </li>
            <li class="header__sp-item">
              <a href="">
                <span class="header__nav-txt header__nav-txt--en">NEWS</span>
                <span class="header__nav-txt header__nav-txt--jp">ニュース</span>
              </a>
            </li>
            <li class="header__sp-item">
              <a href="">
                <span class="header__nav-txt header__nav-txt--en">DOLL</span>
                <span class="header__nav-txt header__nav-txt--jp">作品</span>
              </a>
            </li>
            <li class="header__sp-item">
              <a href="">
                <span class="header__nav-txt header__nav-txt--en">CONTACT</span>
                <span class="header__nav-txt header__nav-txt--jp">お問い合わせ</span>
              </a>
            </li>
          </ul>
        </nav>
        <div id="js-burger" class="header__burger">
          <div class="header__burger-inner">
            <span class="header__burger-line header__burger-line--1"></span>
            <span class="header__burger-line header__burger-line--2"></span>
            <span class="header__burger-line header__burger-line--3"></span>
          </div>
        </div>
      </div>
    </header>