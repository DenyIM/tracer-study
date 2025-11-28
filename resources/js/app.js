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


// MODIFIKASI: Notification System
let notifications = [
    {
        id: 1,
        type: 'forum',
        title: 'Balasan Komentar',
        text: 'Siti Rahayu membalas komentar Anda di postingan "Tips Interview Kerja" dengan memberikan saran yang sangat bermanfaat untuk persiapan interview di perusahaan teknologi',
        time: '5 menit lalu',
        unread: true,
        icon: 'fas fa-comments'
    },
    {
        id: 2,
        type: 'verification',
        title: 'Verifikasi Diterima',
        text: 'Informasi lowongan kerja yang Anda submit untuk posisi Data Analyst di PT. Teknologi Indonesia telah diverifikasi dan diterima. Anda mendapatkan +50 Points untuk kontribusi ini!',
        time: '1 jam lalu',
        unread: true,
        icon: 'fas fa-check-circle'
    },
    {
        id: 3,
        type: 'consultation',
        title: 'Konsultasi Diproses',
        text: 'Permintaan konsultasi karir Anda dengan mentor dari industri teknologi sedang diproses. Tim kami akan menghubungi Anda via WhatsApp dalam 1-2 hari kerja untuk menjadwalkan sesi konsultasi',
        time: '3 jam lalu',
        unread: true,
        icon: 'fas fa-user-clock'
    },
    {
        id: 4,
        type: 'points',
        title: 'Points Bertambah',
        text: 'Anda mendapatkan 25 points karena aktif berpartisipasi di forum diskusi "Peluang Karir di Era Digital" hari ini. Teruslah berbagi pengalaman dan pengetahuan dengan alumni lainnya',
        time: '5 jam lalu',
        unread: true,
        icon: 'fas fa-coins'
    },
    {
        id: 5,
        type: 'verification',
        title: 'Verifikasi Ditolak',
        text: 'Informasi forum yang Anda submit tentang "Seminar Kewirausahaan" perlu revisi pada bagian tanggal dan waktu pelaksanaan. Silakan periksa detailnya di halaman submission dan submit ulang',
        time: '1 hari lalu',
        unread: false,
        icon: 'fas fa-exclamation-circle'
    },
    {
        id: 6,
        type: 'forum',
        title: 'Balasan Komentar',
        text: 'Ahmad Rizki membalas komentar Anda di postingan "Peluang Karir Data Science" dengan menambahkan informasi tentang sertifikasi yang direkomendasikan untuk pemula di bidang data science dan machine learning',
        time: '2 hari lalu',
        unread: false,
        icon: 'fas fa-comments'
    }
];

// Fungsi untuk memuat notifikasi
function loadNotifications() {
    const notificationList = document.getElementById('notificationList');
    const notificationBadge = document.getElementById('notificationBadge');
    const notificationCount = document.getElementById('notificationCount');

    // Hitung notifikasi yang belum dibaca
    const unreadCount = notifications.filter(notif => notif.unread).length;

    // Update badge dan count
    notificationBadge.textContent = unreadCount;
    notificationCount.textContent = unreadCount;

    // Kosongkan daftar notifikasi
    notificationList.innerHTML = '';

    if (notifications.length === 0) {
        // Tampilkan pesan jika tidak ada notifikasi
        notificationList.innerHTML = `
                    <div class="notification-empty">
                        <i class="far fa-bell"></i>
                        <p>Tidak ada notifikasi</p>
                    </div>
                `;
        return;
    }

    // Tambahkan notifikasi ke daftar
    notifications.forEach(notification => {
        const formattedText = notification.text;

        const notificationItem = document.createElement('a');
        notificationItem.className = `dropdown-item notification-item ${notification.unread ? 'unread' : ''}`;
        notificationItem.href = '#';
        notificationItem.innerHTML = `
                    <div class="notification-icon ${notification.type}">
                        <i class="${notification.icon}"></i>
                    </div>
                    <div class="notification-content">
                        <div class="notification-title">${notification.title}</div>
                        <div class="notification-text">${formattedText}</div>
                        <div class="notification-time">${notification.time}</div>
                    </div>
                `;

        // Tambahkan event listener untuk menandai sebagai sudah dibaca
        notificationItem.addEventListener('click', function (e) {
            e.preventDefault();
            markAsRead(notification.id);
        });

        notificationList.appendChild(notificationItem);
    });
}

// Fungsi untuk menandai notifikasi sebagai sudah dibaca
function markAsRead(notificationId) {
    const notification = notifications.find(n => n.id === notificationId);
    if (notification && notification.unread) {
        notification.unread = false;
        loadNotifications();
    }
}

// Fungsi untuk refresh notifikasi
function refreshNotifications() {
    const refreshBtn = document.getElementById('notificationRefreshBtn');

    // Tampilkan loading state
    refreshBtn.classList.add('loading');

    // Simulasi request ke server
    setTimeout(() => {
        // Tambahkan notifikasi baru (simulasi)
        const newNotification = {
            id: notifications.length + 1,
            type: 'forum',
            title: 'Komentar Baru',
            text: 'Budi Santoso mengomentari postingan Anda "Pengalaman Kerja di Startup Teknologi" dengan bertanya tentang tips menghadapi tantangan di lingkungan kerja yang dinamis dan cepat berubah seperti di startup',
            time: 'Baru saja',
            unread: true,
            icon: 'fas fa-comment'
        };

        // Tambahkan notifikasi baru di urutan teratas
        notifications.unshift(newNotification);

        // Muat ulang notifikasi
        loadNotifications();

        // Hapus loading state
        refreshBtn.classList.remove('loading');

        // Tampilkan toast/alert bahwa notifikasi telah diperbarui
        showToast('Notifikasi telah diperbarui', 'success');
    }, 1500);
}

// Fungsi untuk logout
function logoutUser() {
    // Simulasi proses logout
    showToast('Anda telah logout', 'info');

    // Redirect ke halaman login atau halaman lain setelah 2 detik
    setTimeout(() => {
        window.location.href = 'login.html'; // Ganti dengan URL halaman login yang sesuai
    }, 2000);
}

// Fungsi untuk menampilkan toast
function showToast(message, type = 'info') {
    // Buat elemen toast
    const toast = document.createElement('div');
    toast.className = `toast align-items-center text-white bg-${type === 'success' ? 'success' : 'info'} border-0 position-fixed top-0 end-0 m-3`;
    toast.style.zIndex = '9999';
    toast.innerHTML = `
                <div class="d-flex">
                    <div class="toast-body">
                        ${message}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                </div>
            `;

    // Tambahkan ke body
    document.body.appendChild(toast);

    // Inisialisasi dan tampilkan toast
    const bsToast = new bootstrap.Toast(toast);
    bsToast.show();

    // Hapus toast setelah ditutup
    toast.addEventListener('hidden.bs.toast', function () {
        document.body.removeChild(toast);
    });
}

// Event listener untuk tombol refresh
document.getElementById('notificationRefreshBtn').addEventListener('click', refreshNotifications);

// Event listener untuk dropdown notifikasi
document.getElementById('notificationDropdownBtn').addEventListener('click', function () {
    // Muat notifikasi setiap kali dropdown dibuka
    loadNotifications();
});

// Event listener untuk tombol logout
document.getElementById('logoutBtn').addEventListener('click', function (e) {
    e.preventDefault();
    logoutUser();
});

// Muat notifikasi saat halaman pertama kali dimuat
document.addEventListener('DOMContentLoaded', loadNotifications);

