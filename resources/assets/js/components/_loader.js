$(window).on('load', function(){
    $(window).css("overflow-y", "hidden");
    setTimeout(function () {
        $("#loader").fadeOut(1000, function () {
            $(window).css("overflow-y", "auto");
        });
    }, 0);
});