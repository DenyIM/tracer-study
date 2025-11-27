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

// Inisialisasi AOS
AOS.init({
    duration: 800,
    once: true,
    offset: 100
});
