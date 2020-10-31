<section class="comments">
<?php
$comment_form_args = array(
  'fields'              => array(
      'author' => '<dl class="comments__unit">' . '<dt class="comments__label" for="author">' . __('Name') . ($req ? ' <span class="required">*</span>' : '') . '</dt> ' .
      '<dd class="comments__input">' . '<input id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' />' . '</dl>',
      'email'  => '',
      'url'    => '',
  ),
  'comment_field'       => '<dl class="comments__unit">' . '<dt class="comments__label">' . _x('Comment', 'noun') . '</dt>' . '<dd class="comments__textarea">' . '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' . '</textarea>' . '</dd>' . '</dl>',
  'title_reply'         => 'コメント投稿フォーム',
  'logged_in_as'        => '',
  'comment_notes_after' => '',
  'label_submit'        => '送信',
);
comment_form( $comment_form_args );
if ( have_comments() ) :
?>
  <p><?php comments_number('コメントはありません。', 'コメントが1件あります。', 'コメントが%件あります。'); ?></p>
  <ol class="commentlist">
    <?php
    $wp_list_comments_args = array(
      'avatar_size' => '50'
    );
    wp_list_comments( $wp_list_comments_args );
    ?>
  </ol>
<?php
  $paginate_comments_links_args = array(
    'prev_text' => '前のコメントページ',
    'next_text' => '次のコメントページ',
  );
  paginate_comments_links( $paginate_comments_links_args );
endif;
?>
</section>