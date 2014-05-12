<?php

/* Customized Kommentare */
function cs_bootstrap_custom_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
  <div id="comment-<?php comment_ID(); ?>" class="clearfix">
    <div class="commentleft">
      <div class="comment-author vcard">
        <?php $comment_author = get_comment_author_url(); ?>
        <a href="<?php echo $comment_author; ?>">
          <?php echo get_avatar($comment,$size='60',$default='' ); ?>
        </a>
      </div>
    </div>
    <?php if ($comment->comment_approved == '0') : ?>
      <em><?php _e('Your comment is awaiting moderation.') ?></em>
      <br />
    <?php endif; ?>
    <div class="commentblock">
      <div class="comment-meta commentmetadata">
        <div class="commentauthor">
          <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
        </div>
        <div class="comment-date">
          <?php echo get_comment_date('d.m.Y, H:i'); ?>
        </div>
      </div>
      <?php comment_text(); ?>
      <div class="reply">
        <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
      </div>
      <div class="commentpermalink">
        <?php printf('<a href="%1$s">Permalink zum Kommentar</a>', esc_url( get_comment_link( $comment->comment_ID ) )); ?>
      </div>
      <div class="clear"></div>
    </div>
  </div>
<?php
}