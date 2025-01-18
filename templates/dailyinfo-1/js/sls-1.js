$(document).scroll(function(e){
  var scrollAmount = $(window).scrollTop();
  var documentHeight = $(document).height();
  var windowHeight = $(window).height();

  var scrollPercent = (scrollAmount / (documentHeight - windowHeight)) * 100;
  var roundScroll = Math.round(scrollPercent);
  
  $(".scroll").css("width", (scrollPercent + '%'));
  $("").text("Scroll Percentage: " + roundScroll + '%');
});
