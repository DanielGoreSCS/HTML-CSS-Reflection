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

//Accordion
$accordion = $(".accordion");
$accordionHidden = $(".accordion-hidden");
$accordion.on("click", () => {
    if ($accordionHidden.css("display") == "none") {
        $accordionHidden.css("display", "block");
    }
    else {
        $accordionHidden.css("display", "none");
    }
    
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

//Add error border and error message
function setError (i) {
    $($form[i]).css({"border": "solid 1px red", "margin-top": "0"});
}
//Remove error border and error message
function removeError (i) {
    $($form[i]).removeAttr("style");
}

//Check if form field is valid
function validateForm(event) {
    $form = $(".form-control");
    const emailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    let errorCount = 0;
    for (let i = 0; i < $form.length; i++) {
        if ($form[i].classList.contains("required")) {
            //If form field empty
            if ($form[i].value === "") {
                //Call setError
                if ($($form[i]).attr("id") === "contact-name" || $($form[i]).attr("id") === "contact-phone"
                || $($form[i]).attr("id") === "contact-email" || $($form[i]).attr("id") === "contact-subject"
                || $($form[i]).attr("id") === "contact-message") {
                    errorCount += 1;
                    setError(i);
                }
                
            }
            else if ($($form[i]).attr("id") === "contact-email") {
                if (emailRegex.test($form[i].value) !== true) {
                    //Call setError
                    errorCount += 1;
                    if ($form[i].validationMessage !== "") {
                        setError(i, $form[i].validationMessage);
                    }
                    else {
                        setError(i);
                    }
                }
                else {
                    removeError(i);
                }
            }
            else {
                removeError(i);
            }
        }
    }
    if (errorCount === 0) {
        // for (let i = 0; i < $form.length; i++) {
        //     $form[i].value = "";
        // }
        alert("The form was submitted successfully.");
        //submits form
        $(".contact-form").submit();
    }
    console.log(errorCount);
}

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