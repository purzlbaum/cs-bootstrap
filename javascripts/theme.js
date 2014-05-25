jQuery(document).ready(function() {
  themeFunctions = new themeFunctions();
  themeFunctions.init();
});

jQuery(document).resize(function() {
  themeFunctions = new themeFunctions();
  themeFunctions.init();
  self.additionalStyling();
});

function themeFunctions(){
  /**
   *
   * @var themeFunctions
   */
  var self = this;

  this.init = function(){
    self.carouselInit();
    self.initFancyBox();
    self.initFitVids();
    self.additionalStyling();
  }

  /*
   *
   * Initialize Bootstrap Carousel
   *
   * */
  self.carouselInit = function() {
    jQuery('.carousel').carousel();
  }

  /*
   *
   * Initialize fancyBox
   *
   * */
  this.initFancyBox = function(){
    jQuery('img.alignleft, img.aligncenter, img.alignright').fancybox({
      padding: '0px'
    });

    jQuery('img.alignleft, img.aligncenter, img.alignright').click( function() {
      jQuery('body').toggleClass('fancybox-active');
    });
  }

  /*
   *
   * Initialize fitVids.js
   *
   * */
  this.initFitVids = function(){
    jQuery('.entry-content').fitVids();
  }

  /*
   *
   * Style elements via jQuery
   *
   * */
  self.additionalStyling = function(){

  }
}