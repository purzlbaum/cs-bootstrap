<div name="comments" id="comments">
  <?php if (have_comments()) {
    $args = array(
      'type' => 'comment',
      'post_id' => $post->ID
    );
    if (count(get_comments($args)) > 0) {
      echo '<h3>' . __('Kommentare', 'cs-bootstrap') . '</h3>';
      echo '<ol class="commentlist">';
      $args = array(
        'type' => 'comment',
        'callback' => 'cs_bootstrap_custom_comments',
      );
      wp_list_comments($args);
      echo '</ol>';
    }

    $args = array(
      'type' => 'pings',
      'post_id' => $post->ID
    );
    if (count(get_comments($args)) > 0) {
      echo '<div id="trackbacks">';
      echo '<h3>' . __('Ping- und Trackbacks', 'cs-bootstrap') . '<span id="toggle">+</span></h3>';
      echo '<ol class="commentlist">';
      $args = array(
        'type' => 'pings',
        'callback' => 'cs_bootstrap_custom_comments',
      );
      wp_list_comments($args);
      echo '</ol>';
      echo '</div>';
    }

    $args = array(
      'type' => 'trackbacks',
      'post_id' => $post->ID
    );
    if (count(get_comments($args)) > 0) {
      echo '<ol class="trackbackslist">';
      $args = array(
        'type' => 'trackbacks',
        'callback' => 'cs_bootstrap_custom_comments',
      );
      wp_list_comments($args);
      echo '</ol>';
    }

  } else {
    echo '<h3>' . __('Keine Reaktionen', 'cs-bootstrap') . '</h3>';
    echo '<p>' . __('Es sind noch keine Kommentare vorhanden. Du hast etwas Spannendes zu sagen? Trage einfach deinen Namen, deine E-Mail Adresse (wird nicht veröffentlicht) und sofern vorhanden, deine Webseite in das Kommentarformular ein und kommentiere.', 'cs-bootstrap') . '</p>';
  }
  ?>
</div>

<div class="comment">
  <?php comment_form(array(
    'title_reply' => __('Kommentar verfassen', 'cs-bootstrap'),
    'title_reply_to' => __('Kommentar verfassen', 'cs-bootstrap'),
    'comment_notes_before' => __('<div id="required-explain">* erforderlich</div>', 'cs-bootstrap'),
    'comment_notes_after' => '',
    'label_submit' => __('absenden', 'cs-bootstrap'),
    'fields' =>  array(
      'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '<span class="required">*</span></label> '.'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
      'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '<span class="required">*</span></label> '.'<input id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
      'url'    => '<p class="comment-form-url"><label for="url">' . __( 'Website' ) . '</label>' .
      '<input id="url" name="url" type="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
    )

  ));
  ?>
</div>