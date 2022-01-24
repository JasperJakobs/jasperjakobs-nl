$(window).load(function() {
    $(window).css("overflow-y", "hidden");
    setTimeout(function () {
        $("#loader").fadeOut(1000, function () {
            $(window).css("overflow-y", "auto");
            //
            // var timeline = new TimelineMax();
            // timeline.from(".wave_left", 1, {y:-500, autoAlpha: 0, ease: "power1", zIndex: -1},0)
            //     .from(".wave_right", 1, {y:500, autoAlpha:0, ease: "power1", zIndex: -1}, 0);
        });
    }, 0);

});
