$(document).ready(function() {
    $(window).scroll(function() {
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 55) {
            $(".header-3").addClass("menu-fixed");
        } else {
            $(".header-3").removeClass("menu-fixed");
        }
    });
});