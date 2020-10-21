<?php
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support( 'post-thumbnails' );


/**
 * 画像挿入時にwidthとheightを削除する
 */
add_filter('wp_img_tag_add_width_and_height_attr', '__return_false');