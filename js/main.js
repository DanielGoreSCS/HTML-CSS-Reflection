$hamburger = $(".hamburger");
$wrapper = $(".wrapper");
$wrapperFade = $(".fade-wrapper");
//lazy fix to cookie bg will change later
let toggle = 0;
$hamburger.on("click", () => {
    $hamburger.toggleClass("is-active");
    $(".sidebar").toggleClass("show");
    $wrapperFade.toggleClass("show slideLeft");
    $wrapper.toggleClass("slideLeft");
    $("body").css({"overflow":"hidden"});
    $wrapper.css({"overflow":"scroll"});
    toggle = 1;
});
$wrapperFade.on("click", () => {
    if (toggle != 0) {
        $hamburger.toggleClass("is-active");
        $(".sidebar").toggleClass("show");
        $wrapperFade.toggleClass("show slideLeft");
        $wrapper.toggleClass("slideLeft");
        $("body").removeAttr("style");
        $wrapper.removeAttr("style");
        toggle = 0;
    }
});

$(".nav-item").hover(function () {
    $(this).children().addClass('show');
}, function () {
    $(this).children().removeClass('show');
});

//Sticky
var lastScrollTop = 0;
$header = $("header");
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st < lastScrollTop){
       // upscroll code
       $header.addClass("sticky-top slideDown");
   } else {
      // downscroll code
      $header.addClass("slideUp");
      setTimeout(() => $header.removeClass("sticky-top slideDown slideUp"),400);
   }
   lastScrollTop = st;
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

//cookie popup
const cookieStorage = {
    getItem: (key) => {
        const cookies = document.cookie
            .split(';')
            .map(cookie => cookie.split('='))
            .reduce((acc, [key, value]) => ({...acc, [key.trim()]: value}), {});
        return cookies[key];
    },
    setItem: (key, value) => {
        document.cookie = `${key}=${value}`;
    },
};

const storageType = cookieStorage;
const consentPropertyName = 'jdc_consent';

const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
    const consentPopup = $("#consent-popup");
    const acceptBtn = $("#accept");

    const acceptFn = event => {
        saveToStorage(storageType);
        consentPopup.addClass("d-none");
        $wrapperFade.removeClass("show darken");
        $("body").removeAttr("style");
        $wrapper.removeAttr("style");
    }

    acceptBtn.on("click", acceptFn);

    if(shouldShowPopup()) {
        consentPopup.removeClass("d-none");
        $wrapperFade.addClass("show darken");
        $("body").css({"overflow":"hidden"});
        $wrapper.css({"overflow":"scroll"});
    }
}