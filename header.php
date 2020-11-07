<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="Doll, Writter, MICHIKO, 人形, 作家, 前野美智子">
  <meta name="description" content="人形作家前野美智子のWebサイト。創作人形で表現する独自の世界観を覗いてください。">
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
  <meta name="google-site-verification" content="h39whFYYbbl1RpERy9_nKsd1w0E66pf213tGprpb1M4" />
</head>

<body>
  <div class="wrap">
    <header class="header">
      <div class="header__bar"></div>
      <div class="header__inner">
        <h1><a href="<?php echo home_url() ?>" class="header__logo"><img class="header__img" src="<?php echo get_template_directory_uri(); ?>/images/common/logo.png" alt="Doll Writter MICHIKO"></a></h1>
        <nav class="header__nav">
          <?php
          $args = array(
            'menu' => 'global-navigation',
            'menu_class' => 'header__global-nav',
            'container' => false,
          );
          wp_nav_menu($args);
          ?>
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