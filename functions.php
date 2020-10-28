<?php
/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support( 'post-thumbnails' );

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support( 'menus' );

/**
 * 画像挿入時にwidthとheightを削除する
 */
add_filter('wp_img_tag_add_width_and_height_attr', '__return_false');

/**
 * コメントフォームの「名前」「メールアドレス」「ウェブサイト」を削除
 */
add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields( $args ) {
  $args['author'] = ''; //「名前」を削除
  $args['email'] = ''; //「メールアドレス」を削除
  $args['url'] = ''; //「ウェブサイト」を削除
  return $args;
}
// 「メールアドレスが公開されることはありません。 * が付いている欄は必須項目です」の文言を削除
add_filter("comment_form_defaults", "my_comment_notes_before");
function my_comment_notes_before($defaults)
{
  $defaults['comment_notes_before'] = '';
  return $defaults;
}