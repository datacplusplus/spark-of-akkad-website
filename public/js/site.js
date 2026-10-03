// Mobile menu toggle
const toggle = document.querySelector('.nav__toggle');
const menu = document.getElementById('nav-menu');

if (toggle && menu) {
    toggle.addEventListener('click', () => {
        const open = menu.classList.toggle('open');
        toggle.setAttribute('aria-expanded', String(open));
    });
}

// Static site: send the contact form through WhatsApp
const waForm = document.querySelector('form[data-whatsapp]');

if (waForm) {
    waForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const data = new FormData(waForm);
        const service = waForm.querySelector('select[name="service"]');
        const lines = [
            'Hello Spark of Akkad!',
            `Name: ${data.get('name')}`,
            `Email: ${data.get('email')}`,
            data.get('phone') ? `Phone: ${data.get('phone')}` : null,
            `Service: ${service.options[service.selectedIndex].text}`,
            '',
            data.get('message'),
        ].filter((line) => line !== null);

        window.open(`https://wa.me/${waForm.dataset.whatsapp}?text=${encodeURIComponent(lines.join('\n'))}`, '_blank', 'noopener');
    });
}

// Briefly show the WhatsApp greeting bubble a few seconds after page load
const wa = document.querySelector('.wa-float');

if (wa) {
    setTimeout(() => wa.classList.add('show-bubble'), 3000);
    setTimeout(() => wa.classList.remove('show-bubble'), 9000);
}
