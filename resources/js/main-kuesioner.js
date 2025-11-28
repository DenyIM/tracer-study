import './bootstrap';
import '../css/app.css';

// Import Bootstrap
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap';

// Import AOS dari npm (bukan CDN)
import AOS from 'aos';
import 'aos/dist/aos.css';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Simulasi progress update
document.querySelectorAll('.btn-primary-custom').forEach(button => {
    button.addEventListener('click', function () {
        // Simulasi membuka kuesioner
        alert('Membuka halaman kuesioner...');
    });
});

// Animasi untuk completed questionnaires
const completedCards = document.querySelectorAll('.completed');
completedCards.forEach(card => {
    card.addEventListener('mouseenter', function () {
        this.classList.add('pulse-animation');
    });

    card.addEventListener('mouseleave', function () {
        this.classList.remove('pulse-animation');
    });
});
