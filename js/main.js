$hamburger = $(".hamburger");
$hamburger.on("click", () => {
    $hamburger.toggleClass("is-active");
});

$(".nav-item").hover(function () {
    $(this).children().addClass('show');
}, function () {
    $(this).children().removeClass('show');
});