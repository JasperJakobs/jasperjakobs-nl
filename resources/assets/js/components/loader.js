$(window).load(function() {
    $(window).css("overflow-y", "hidden");
    $("#loader").fadeOut(1000, function () {
        $(window).css("overflow-y", "auto");
    });
});
