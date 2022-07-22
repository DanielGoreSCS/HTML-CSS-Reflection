$hamburger = $(".hamburger");
$wrapper = $(".wrapper");
$wrapperFade = $(".fade-wrapper");
$hamburger.on("click", () => {
    $hamburger.toggleClass("is-active");
    $(".sidebar").toggleClass("show");
    $wrapperFade.toggleClass("show slideLeft");
    $wrapper.toggleClass("slideLeft");
    $("body").css({"overflow":"hidden"});
    $wrapper.css({"overflow":"scroll"});
});
$wrapperFade.on("click", () => {
    $hamburger.toggleClass("is-active");
    $(".sidebar").toggleClass("show");
    $wrapperFade.toggleClass("show slideLeft");
    $wrapper.toggleClass("slideLeft");
    $("body").removeAttr("style");
    $wrapper.removeAttr("style");
});

$(".nav-item").hover(function () {
    $(this).children().addClass('show');
}, function () {
    $(this).children().removeClass('show');
});

$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        margin: 100,
        items: 8,
        autoWidth: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        loop: true
    });
  });