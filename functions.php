<?php

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support('post-thumbnails');

/**
 * カスタムメニュー機能を使用可能にする
 */
add_theme_support('menus');

/**
 * 画像挿入時にwidthとheightを削除する
 */
add_filter('wp_img_tag_add_width_and_height_attr', '__return_false');

/**
 * コメントフォームの「メールアドレス」「ウェブサイト」を削除
 */
add_filter('comment_form_default_fields', 'my_comment_form_default_fields');
function my_comment_form_default_fields($args) {
  $args['email'] = ''; // 「メールアドレス」を削除
  $args['url'] = ''; //「ウェブサイト」を削除
  return $args;
}
// 「メールアドレスが公開されることはありません。 * が付いている欄は必須項目です」の文言を削除
add_filter("comment_form_defaults", "my_comment_notes_before");
function my_comment_notes_before($defaults) {
  $defaults['comment_notes_before'] = '';
  return $defaults;
}
// コメント入力欄の表示順を変更する
add_filter('comment_form_fields', 'wp34731_move_comment_field_to_bottom');
function wp34731_move_comment_field_to_bottom($fields) {
  $comment_field = $fields['comment'];
  unset($fields['comment']);
  $fields['comment'] = $comment_field;

  return $fields;
}
