jQuery(document).ready(function() {

  jQuery('body').addClass('js');

  var $menu = jQuery('#side-menu'),
    $menulink = jQuery('.side-menu-link'),
    $navigation = jQuery('.navigation'),
    $body = jQuery('body');

  $menulink.click(function() {
    $menulink.toggleClass('active');
    $navigation.toggleClass('active');
    $body.toggleClass('active');
    return false;
  });
});