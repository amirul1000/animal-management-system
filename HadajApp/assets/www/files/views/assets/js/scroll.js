var onScrollHandler = function(){
 
window.clearTimeout(self.scrollTimeout);
 
var onDelay = function(){
   var scrollTop = jQuery(window).scrollTop();
   var windowHeight = jQuery(window).height();
   var scrollHeight = jQuery(document).height();
   var scrollBottom = scrollHeight - scrollTop - windowHeight;
 
   console.log("scrollBottom = " + scrollBottom);
 
   if(scrollBottom < 50)
      jQuery(window).trigger("onScrollBottom");
   };
   self.scrollTimeout = window.setTimeout(onDelay, 500);
};
 
$(function() {
   jQuery(window).scroll(onScrollHandler);
});