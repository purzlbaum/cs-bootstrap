<?php

if(! function_exists('cs_bootstrap_entry_meta')) {
  function cs_bootstrap_entry_meta() {
    $categoriesList = get_the_category_list( __( ', ', 'cs-bootstrap' ) );

    $entryMeta = ''
      . '<ul>'
      .   '<li class="date updated"><time class="entry-date" datetime="' . get_the_time('d.m.Y G:i') . '">' . get_the_time('d.m.Y') . __(' um ', 'cs-bootstrap') . get_the_time('G:i') . __(' Uhr', 'cs-bootstrap') . '</time></li>'
      .   '<li class="category-list">' . $categoriesList . '</li>'
      . '</ul>';

    echo $entryMeta;
  }
}

