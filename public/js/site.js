// Mobile menu toggle
const toggle = document.querySelector('.nav__toggle');
const menu = document.getElementById('nav-menu');

if (toggle && menu) {
    toggle.addEventListener('click', () => {
        const open = menu.classList.toggle('open');
        toggle.setAttribute('aria-expanded', String(open));
    });
}

// Briefly show the WhatsApp greeting bubble a few seconds after page load
const wa = document.querySelector('.wa-float');

if (wa) {
    setTimeout(() => wa.classList.add('show-bubble'), 3000);
    setTimeout(() => wa.classList.remove('show-bubble'), 9000);
}
