require('./bootstrap');

require('./components/navbar');
require('./components/loader');
require('./components/fromzerotohero');

document.querySelectorAll('.button').forEach(button => button.innerHTML = '<div><span>' + button.textContent.trim().split('').join('</span><span>') + '</span></div>');
