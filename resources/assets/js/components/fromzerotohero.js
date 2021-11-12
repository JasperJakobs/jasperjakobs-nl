gsap.utils.toArray(".comparisonSection").forEach(section => {
    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: section,
            start: "top top",
            end: () => "+=" + 3000,
            scrub: true,
            pin: true
        },
        defaults: {ease: "none"}
    });
    tl.fromTo(section.querySelector(".afterImage"), { xPercent: -100, x: 0}, {xPercent: 0})
        .fromTo(section.querySelector(".afterImage img"), {xPercent: 100, x: 0}, {xPercent: 0}, 0);
});
