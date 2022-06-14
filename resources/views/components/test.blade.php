<section class="work section">
    <span class="section__subtitle">Werk</span>
    <h2 class="section__title">Projecten</h2>

    <div class="work__container container grid" id="macbook">
        <img id="macbook-img" src="https://www.apple.com/105/media/us/macbook-pro-14-and-16/2021/a1c5d17e-d8e4-4fa8-b70a-bc61bd266412/anim/hero-specs//large/large_0000.jpg" alt="1">
    </div>
</section>

<script type="application/javascript">
    const macbookImg = document.getElementById("macbook-img");

    const frameCount = 33;
    const currentFrame = index => (
        `https://www.apple.com/105/media/us/macbook-pro-14-and-16/2021/a1c5d17e-d8e4-4fa8-b70a-bc61bd266412/anim/hero-specs//large/large_${(index).toString().padStart(4, '0')}.jpg`
    );

    const images = []
    const macbook = {
        frame: 0
    };

    for (let i = 0; i < frameCount; i++) {
        const img = new Image();
        img.src = currentFrame(i);
        images.push(img);
    }

    let tl = gsap.timeline({
        scrollTrigger: {
            trigger: "#macbook",
            start: "center center",
            end: "bottom -600",
            markers: true,
            pin: "#macbook",
            scrub: true,
        },
    });

    tl.to(macbook, {
        frame: frameCount - 1,
        snap: "frame",
        ease: "none",
        onUpdate: render,
        duration: 10,
    })
        .to("#macbook", {
            ease: Sine.easeInOut,
            scale: 10,
            rotation: -10,
            duration: 10,
        })
        .to("#macbook", {
            opacity: 0,
            duration: 0,
            x: 10000,
        });

    images[0].onload = render;

    function render() {
        macbookImg.src = images[macbook.frame].src;
    }

</script>
