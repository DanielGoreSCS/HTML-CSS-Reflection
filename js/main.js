$hamburger = $(".hamburger");
$wrapper = $(".wrapper");
$wrapperFade = $(".fade-wrapper");
//lazy fix to cookie bg will change later
let toggle = 0;
$hamburger.on("click", () => {
    $hamburger.toggleClass("is-active");
    $(".sidebar").addClass("show");
    $wrapperFade.addClass("show slideLeft");
    $wrapper.addClass("slideLeft");
    $("body").css({"overflow":"hidden"});
    $wrapper.css({"overflow":"scroll"});
    toggle = 1;
});
$wrapperFade.on("click", () => {
    if (toggle != 0) {
        $hamburger.removeClass("is-active");
        
        $wrapperFade.addClass("slideRight");
        $wrapper.addClass("slideRight");
        setTimeout(() => {
            $(".sidebar").removeClass("show");
            $wrapperFade.removeClass("show slideLeft slideRight");
            $wrapper.removeClass("show slideLeft slideRight");
            $("body").removeAttr("style");
            $wrapper.removeAttr("style");
        }, 400)
        
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
$stickyHeader = $("#sticky-header");
//$header = $("header");
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if(st==0) {
        //hide sticky
        $stickyHeader.addClass("d-none");
   }else if (st < lastScrollTop){
       // upscroll code
       $stickyHeader.removeClass("d-none");
       $stickyHeader.addClass("sticky-top slideDown");
   } else {
      // downscroll code
      $stickyHeader.addClass("slideUp");
      setTimeout(() => {$stickyHeader.removeClass("sticky-top slideDown slideUp");
        $stickyHeader.addClass("d-none");
    },400);
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
const storageType = localStorage;
const consentPropertyName = 'jdc_consent';

const shouldShowPopup = () => !storageType.getItem(consentPropertyName);
const saveToStorage = () => storageType.setItem(consentPropertyName, true);

window.onload = () => {
    const consentPopup = $("#consent-popup");
    const acceptBtn = $("#accept");
    const cookieSettings = $(".cookie-settings");
    const settingsBtn = $("#cookie-settings");
    const acceptBtn2 = $("#Accept2");
    const cancelBtn = $("#Cancel");

    const acceptFn = event => {
        saveToStorage(storageType);
        consentPopup.addClass("d-none");
        cookieSettings.addClass("d-none");
        $wrapperFade.removeClass("show darken");
        $("body").removeAttr("style");
        $wrapper.removeAttr("style");
    }

    acceptBtn.on("click", acceptFn);
    acceptBtn2.on("click", acceptFn);
    
    settingsBtn.on("click", () => {
        cookieSettings.css({"display":"block"})
        consentPopup.addClass("d-none");

    });

    cancelBtn.on("click", () => {
        cookieSettings.css({"display":"none"})
        consentPopup.removeClass("d-none");
    });

    if(shouldShowPopup()) {
        consentPopup.removeClass("d-none");
        $wrapperFade.addClass("show darken");
        $("body").css({"overflow":"hidden"});
        $wrapper.css({"overflow":"scroll"});
    }

    //cookie toggle buttons
    const functionalCookieOn = $("#cookie--enable1");
    const functionalCookieOff = $("#cookie--disable1");
    const analyticCookieOn = $("#cookie--enable2");
    const analyticCookieOff = $("#cookie--disable2");

    const functionalCookieToggle = event => {
        functionalCookieOn.toggleClass("btn-light web-des");
        functionalCookieOff.toggleClass("btn-light web-des");
    }

    const analyticCookieToggle = event => {
        analyticCookieOn.toggleClass("btn-light web-des");
        analyticCookieOff.toggleClass("btn-light web-des");
    }

    functionalCookieOn.on("click", functionalCookieToggle);
    functionalCookieOff.on("click", functionalCookieToggle);
    analyticCookieOn.on("click", analyticCookieToggle);
    analyticCookieOff.on("click", analyticCookieToggle);
}