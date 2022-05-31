console.clear();

const canvas = document.getElementById("hero-lightpass");
const context = canvas.getContext("2d");

canvas.width = 1158;
canvas.height = 770;

const frameCount = 33;
const currentFrame = index => (
    `https://www.apple.com/105/media/us/macbook-pro-14-and-16/2021/a1c5d17e-d8e4-4fa8-b70a-bc61bd266412/anim/hero-specs//large/large_${(index).toString().padStart(4, '0')}.jpg`
);

const images = []
const airpods = {
    frame: 0
};

for (let i = 0; i < frameCount; i++) {
    const img = new Image();
    img.src = currentFrame(i);
    images.push(img);
}

gsap.to(airpods, {
    frame: frameCount - 1,
    snap: "frame",
    ease: "none",
    scrollTrigger: {
        scrub: 0.5
    },
    onUpdate: render // use animation onUpdate instead of scrollTrigger's onUpdate
});

images[0].onload = render;

function render() {
    context.clearRect(0, 0, canvas.width, canvas.height);
    context.drawImage(images[airpods.frame], 0, 0);
}
