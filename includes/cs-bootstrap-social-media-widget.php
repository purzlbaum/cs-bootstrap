<?php

class cs_bootstrap_social_media_widget extends WP_Widget {

  function cs_bootstrap_social_media_widget() {
    $widget_ops = array('description' => 'Verlinken Sie Ihre Social Media Profile' , 'cs-bootstrap');

    parent::WP_Widget(false, __('Social Media Links Widget', 'cs-bootstrap'),$widget_ops);
  }

  function widget($args, $instance) {
    extract( $args );
    $title = $instance['title'];
    $facebook = $instance['facebook'];
    $twitter = $instance['twitter'];
    $instagram = $instance['instagram'];
    $googleplus = $instance['googleplus'];
    $flickr = $instance['flickr'];
    $newsletter = $instance['newsletter'];
    $github = $instance['github'];
    $youtube = $instance['youtube'];
    $vimeo = $instance['vimeo'];
    $pinterest = $instance['pinterest'];
    $linkedin = $instance['linkedin'];
    $dribble = $instance['dribble'];
    $rss = $instance['rss'];
    $rsscomments = $instance['rsscomments'];
    $target = $instance['target'];


    echo $before_widget; ?>
    <?php if($title != '')
      echo '<h3 class="widget-title">'.$title.'</h3>'; ?>

    <ul class="social-links">
      <?php
      if($facebook != '' && $target != ''){
        echo '<li><a href="'.$facebook.'" class="genericon genericon-facebook" title="Facebook" target="_blank"></a></li>';
      } elseif($facebook != '') {
        echo '<li><a href="'.$facebook.'" class="genericon genericon-facebook" title="Facebook"></a></li>';
      }

      if($twitter != '' && $target != ''){
        echo '<li><a href="'.$twitter.'" class="genericon genericon-twitter" title="Twitter" target="_blank"></a></li>';
      } elseif($twitter != '') {
        echo '<li><a href="'.$twitter.'" class="genericon genericon-twitter" title="Twitter"></a></li>';
      }


      if($instagram != '' && $target != ''){
        echo '<li><a href="'.$instagram.'" class="genericon genericon-instagram" title="Instagram" target="_blank"></a></li>';
      } elseif($twitter != '') {
        echo '<li><a href="'.$instagram.'" class="genericon genericon-instagram" title="Instagram"></a></li>';
      }

      if($googleplus != '' && $target != ''){
        echo '<li><a href="'.$googleplus.'" class="genericon genericon-googleplus" title="Google+" target="_blank"></a></li>';
      } elseif($googleplus != '') {
        echo '<li><a href="'.$googleplus.'" class="genericon genericon-googleplus" title="Google+"></a></li>';
      }

      if($flickr != '' && $target != ''){
        echo '<li><a href="'.$flickr.'" class="genericon genericon-flickr" title="Flickr" target="_blank"></a></li>';
      } elseif($flickr != '') {
        echo '<li><a href="'.$flickr.'" class="genericon genericon-flickr" title="Flickr"></a></li>';
      }

      if($newsletter != '' && $target != ''){
        echo '<li><a href="'.$newsletter.'" class="genericon genericon-mail" title="Newsletter" target="_blank"></a></li>';
      } elseif($newsletter != '') {
        echo '<li><a href="'.$newsletter.'" class="genericon genericon-mail" title="Newsletter"></a></li>';
      }

      if($github != '' && $target != ''){
        echo '<li><a href="'.$github.'" class="genericon genericon-github" title="github" target="_blank"></a></li>';
      } elseif($github != '') {
        echo '<li><a href="'.$github.'" class="genericon genericon-github" title="github"></a></li>';
      }

      if($youtube != '' && $target != ''){
        echo '<li><a href="'.$youtube.'" class="genericon genericon-youtube" title="YouTube" target="_blank"></a></li>';
      } elseif($youtube != '') {
        echo '<li><a href="'.$youtube.'" class="genericon genericon-youtube" title="YouTube"></a></li>';
      }
      ?>
      <?php if($vimeo != '' && $target != ''){
        echo '<li><a href="'.$vimeo.'" class="genericon genericon-vimeo" title="Vimeo" target="_blank"></a></li>';
      } elseif($vimeo != '') {
        echo '<li><a href="'.$vimeo.'" class="genericon genericon-vimeo" title="Vimeo"></a></li>';
      }

      if($pinterest != '' && $target != ''){
        echo '<li><a href="'.$pinterest.'" class="genericon genericon-pinterest" title="Pinterest" target="_blank"></a></li>';
      } elseif($pinterest != '') {
        echo '<li><a href="'.$pinterest.'" class="genericon genericon-pinterest" title="Pinterest"></a></li>';
      }

      if($linkedin != '' && $target != ''){
        echo '<li><a href="'.$linkedin.'" class="genericon genericon-linkedin" title="LinkedIn" target="_blank"></a></li>';
      } elseif($linkedin != '') {
        echo '<li><a href="'.$linkedin.'" class="genericon genericon-linkedin" title="LinkedIn"></a></li>';
      }

      if($dribble != '' && $target != ''){
        echo '<li><a href="'.$dribble.'" class="genericon genericon-dribble" title="Dribble" target="_blank"></a></li>';
      } elseif($dribble != '') {
        echo '<li><a href="'.$dribble.'" class="genericon genericon-dribble" title="Dribble"></a></li>';
      }

      if($rss != '' && $target != ''){
        echo '<li><a href="'.$rss.'" class="genericon genericon-feed" title="RSS Feed" target="_blank"></a></li>';
      } elseif($rss != '') {
        echo '<li><a href="'.$rss.'" class="genericon genericon-feed" title="RSS Feed"></a></li>';
      }

      if($rsscomments != '' && $target != ''){
        echo '<li><a href="'.$rsscomments.'" class="genericon genericon-feed" title="RSS Kommentare" target="_blank"></a></li>';
      } elseif($rsscomments != '') {
        echo '<li><a href="'.$rsscomments.'" class="genericon genericon-feed" title="' . __('RSS Kommentare', 'cs-bootstrap') . '"></a></li>';
      }

      ?>
    </ul><!-- end .sociallinks -->
    <div class="clear"></div>
    <?php
    echo $after_widget;
  }

  function update($new_instance, $old_instance) {
    return $new_instance;
  }

  function form($instance) {
    $title = esc_attr($instance['title']);
    $twitter = esc_attr($instance['twitter']);
    $instagram = esc_attr($instance['instagram']);
    $facebook = esc_attr($instance['facebook']);
    $googleplus = esc_attr($instance['googleplus']);
    $flickr = esc_attr($instance['flickr']);
    $newsletter = esc_attr($instance['newsletter']);
    $github = esc_attr($instance['github']);
    $youtube = esc_attr($instance['youtube']);
    $vimeo = esc_attr($instance['vimeo']);
    $pinterest = esc_attr($instance['pinterest']);
    $foursquare = esc_attr($instance['foursquare']);
    $linkedin = esc_attr($instance['linkedin']);
    $dribble = esc_attr($instance['dribble']);
    $rss = esc_attr($instance['rss']);
    $rsscomments = esc_attr($instance['rsscomments']);
    $target = esc_attr($instance['target']);

    ?>

    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Titel:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('facebook'); ?>" value="<?php echo $facebook; ?>" class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('twitter'); ?>" value="<?php echo $twitter; ?>" class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('instagram'); ?>"><?php _e('Instagram URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('instagram'); ?>" value="<?php echo $instagram; ?>" class="widefat" id="<?php echo $this->get_field_id('instagram'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('googleplus'); ?>"><?php _e('Google+ URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('googleplus'); ?>" value="<?php echo $googleplus; ?>" class="widefat" id="<?php echo $this->get_field_id('googleplus'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('flickr'); ?>"><?php _e('Flickr URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('flickr'); ?>" value="<?php echo $flickr; ?>" class="widefat" id="<?php echo $this->get_field_id('flickr'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('newsletter'); ?>"><?php _e('Newsletter URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('newsletter'); ?>" value="<?php echo $newsletter; ?>" class="widefat" id="<?php echo $this->get_field_id('newsletter'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('github'); ?>"><?php _e('Github URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('github'); ?>" value="<?php echo $github; ?>" class="widefat" id="<?php echo $this->get_field_id('github'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('YouTube URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('youtube'); ?>" value="<?php echo $youtube; ?>" class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('vimeo'); ?>"><?php _e('Vimeo URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('vimeo'); ?>" value="<?php echo $vimeo; ?>" class="widefat" id="<?php echo $this->get_field_id('vimeo'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e('Pinterest URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('pinterest'); ?>" value="<?php echo $pinterest; ?>" class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linkedin URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('linkedin'); ?>" value="<?php echo $linkedin; ?>" class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('dribble'); ?>"><?php _e('Dribble URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('dribble'); ?>" value="<?php echo $dribble; ?>" class="widefat" id="<?php echo $this->get_field_id('dribble'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('rss'); ?>"><?php _e('RSS-Feed URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('rss'); ?>" value="<?php echo $rss; ?>" class="widefat" id="<?php echo $this->get_field_id('rss'); ?>" />
    </p>

    <p>
      <label for="<?php echo $this->get_field_id('rsscomments'); ?>"><?php _e('RSS Kommentar URL:','cs-bootstrap'); ?></label>
      <input type="text" name="<?php echo $this->get_field_name('rsscomments'); ?>" value="<?php echo $rsscomments; ?>" class="widefat" id="<?php echo $this->get_field_id('rsscomments'); ?>" />
    </p>

    <p>
      <input class="checkbox" type="checkbox" <?php checked( $instance['target'], true ); ?> id="<?php echo $this->get_field_id('target'); ?>" name="<?php echo $this->get_field_name('target'); ?>" <?php checked( $target, 'on' ); ?>> <?php _e('Alle Links in einem neuen Fenster öffnen.', 'cs-bootstrap'); ?></input>
    </p>

  <?php
  }
}

register_widget('cs_bootstrap_social_media_widget');