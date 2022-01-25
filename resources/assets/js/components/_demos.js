let mixitup = require('mixitup');

let mixer = mixitup('.demos__container', {
    selectors: {
        target: '.demos__card'
    },
    animation: {
        duration: 300
    }
});

const linkDemo = document.querySelectorAll('.demos__item');

function activeDemo() {
    linkDemo.forEach(l => l.classList.remove('active-link'));
    this.classList.add('active-link');
}

linkDemo.forEach(l => l.addEventListener('click', activeDemo));
