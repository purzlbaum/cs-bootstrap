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
    $('.carousel').carousel();
  }

  /*
   *
   * Initialize fancyBox
   *
   * */
  this.initFancyBox = function(){
    $("a img").fancybox({
      padding: '10px'
    });
  }

  /*
   *
   * Initialize fitVids.js
   *
   * */
  this.initFitVids = function(){
    $(".entry-content").fitVids();
  }

  /*
   *
   * Style elements via jQuery
   *
   * */
  self.additionalStyling = function(){

  }
}