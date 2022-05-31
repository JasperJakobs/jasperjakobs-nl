$(window).on('load', function(){
    $('body').css("overflow-y", "hidden");
    setTimeout(function () {
        $('body').css("overflow-y", "auto");
        $("#loader").fadeOut(1000);
    }, 2000);
});
