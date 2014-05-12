<form class="navbar-form navbar-left" role="search" method="get" id="search" class="search" action="<?php echo home_url('/'); ?>">
  <div class="form-group">
    <label class="sr-only" for="s"><?php _e('Suche nach:', 'cs-bootstrap'); ?></label>
    <input type="search" autocomplete="on" value="" name="s" id="s" class="form-control input-text" placeholder="<?php $searchquery = get_search_query(); if ($searchquery == '') {echo 'Suchbegriff eingeben...';} else {the_search_query();}?>">
    <button id="searchsubmit" type="submit" class="btn btn-default searchbutton"><?php _e('Suche', 'cs-bootstrap'); ?></button>
  </div>
</form>