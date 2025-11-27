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

// MODIFIKASI: Form submission handling untuk Forum
document.getElementById('forumForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Simulate form submission
    const submitButton = this.querySelector('button[type="submit"]');
    const originalText = submitButton.innerHTML;

    // Show loading state
    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Mengirim...';
    submitButton.disabled = true;

    // Simulate API call
    setTimeout(() => {
        // Show success message
        document.getElementById('forumSuccessMessage').style.display = 'block';

        // Reset form
        this.reset();

        // Reset button
        submitButton.innerHTML = originalText;
        submitButton.disabled = false;

        // Scroll to success message
        document.getElementById('forumSuccessMessage').scrollIntoView({
            behavior: 'smooth'
        });
    }, 2000);
});

// MODIFIKASI: Form submission handling untuk Job
document.getElementById('jobForm').addEventListener('submit', function (e) {
    e.preventDefault();

    // Simulate form submission
    const submitButton = this.querySelector('button[type="submit"]');
    const originalText = submitButton.innerHTML;

    // Show loading state
    submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Mengirim...';
    submitButton.disabled = true;

    // Simulate API call
    setTimeout(() => {
        // Show success message
        document.getElementById('jobSuccessMessage').style.display = 'block';

        // Reset form
        this.reset();

        // Reset button
        submitButton.innerHTML = originalText;
        submitButton.disabled = false;

        // Scroll to success message
        document.getElementById('jobSuccessMessage').scrollIntoView({
            behavior: 'smooth'
        });
    }, 2000);
});

// Simulate current user highlighting in pagination
document.querySelectorAll('.page-link').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        alert('Fitur pagination sedang dikembangkan. Pada implementasi nyata, baris peringkat Anda akan selalu ditampilkan di setiap halaman.');
    });
});