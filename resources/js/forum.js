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

// Like functionality
document.querySelectorAll('.like-btn').forEach(button => {
    button.addEventListener('click', function () {
        const icon = this.querySelector('i');
        const count = this.querySelector('span');

        if (this.classList.contains('liked')) {
            this.classList.remove('liked');
            icon.classList.remove('fas');
            icon.classList.add('far');
            if (count) {
                const currentCount = parseInt(count.textContent);
                count.textContent = currentCount - 1;
            }
        } else {
            this.classList.add('liked');
            icon.classList.remove('far');
            icon.classList.add('fas');
            if (count) {
                const currentCount = parseInt(count.textContent);
                count.textContent = currentCount + 1;
            }
        }
    });
});

// Post options functionality
document.querySelectorAll('.post-options button').forEach(button => {
    button.addEventListener('click', function (e) {
        e.stopPropagation();
        const menu = this.nextElementSibling;
        document.querySelectorAll('.post-options-menu').forEach(m => {
            if (m !== menu) m.classList.remove('active');
        });
        menu.classList.toggle('active');
    });
});

// Improved click outside handler
document.addEventListener('click', function (e) {
    // Close all menus when clicking outside
    document.querySelectorAll('.post-options-menu').forEach(menu => {
        if (!menu.contains(e.target) && !e.target.closest('.post-options button')) {
            menu.classList.remove('active');
        }
    });
});

// Bookmark post function
function bookmarkPost(postId) {
    const toast = new bootstrap.Toast(document.getElementById('bookmarkToast'));
    toast.show();

    document.querySelectorAll('.post-options-menu').forEach(menu => {
        menu.classList.remove('active');
    });
}

// MODIFIKASI: Comment Dialog Functionality
let currentPostId = null;

function openCommentDialog(postId) {
    currentPostId = postId;
    const dialog = document.getElementById('commentDialog');
    const commentBody = document.getElementById('commentBody');

    // Load comments based on postId
    commentBody.innerHTML = generateComments(postId);

    dialog.classList.add('active');
    document.getElementById('commentInput').focus();
}

function closeCommentDialog() {
    document.getElementById('commentDialog').classList.remove('active');
    document.getElementById('commentInput').value = '';
    currentPostId = null;
}

function sendComment() {
    const commentInput = document.getElementById('commentInput');
    const commentText = commentInput.value.trim();

    if (commentText === '') {
        alert('Silakan tulis komentar terlebih dahulu.');
        return;
    }

    const commentBody = document.getElementById('commentBody');
    const newComment = createCommentElement('DI', 'Deny Iqbal', commentText);

    commentBody.appendChild(newComment);
    commentInput.value = '';

    // Update comment count
    if (currentPostId) {
        const commentBtn = document.querySelector(`#${currentPostId} .comment-btn span`);
        if (commentBtn) {
            const currentCount = parseInt(commentBtn.textContent);
            commentBtn.textContent = currentCount + 1;
        }
    }

    // Scroll to the new comment
    commentBody.scrollTop = commentBody.scrollHeight;
}

function generateComments(postId) {
    // Sample comments data - in real app, this would come from backend
    const comments = {
        'post1': [
            { avatar: 'SR', name: 'Siti Rahayu', text: 'Wah menarik sekali! Apakah ada biaya pendaftaran untuk bootcamp ini?', time: '45 menit lalu' },
            { avatar: 'BS', name: 'Budi Santoso', text: 'Programnya berapa lama durasinya?', time: '30 menit lalu' },
            { avatar: 'MW', name: 'Maya Wijaya', text: 'Saya tertarik! Apakah tersedia modul pembelajaran online?', time: '15 menit lalu' }
        ],
        'post2': [
            { avatar: 'AR', name: 'Ahmad Rizki', text: 'Acara yang ditunggu-tunggu! Sudah daftar nih!', time: '2 jam lalu' },
            { avatar: 'RS', name: 'Rizki Setiawan', text: 'Bisa bawa keluarga tidak ya?', time: '1 jam lalu' },
            { avatar: 'DI', name: 'Deny Iqbal', text: 'Mantap! Siap datang dengan teman-teman angkatan 2018!', time: '30 menit lalu' }
        ]
    };

    let html = '';
    const postComments = comments[postId] || [];

    postComments.forEach(comment => {
        html += `
                    <div class="comment-item">
                        <div class="comment-avatar">${comment.avatar}</div>
                        <div class="comment-content">
                            <div class="comment-author">${comment.name}</div>
                            <div class="comment-text">${comment.text}</div>
                            <div class="comment-time">${comment.time}</div>
                        </div>
                    </div>
                `;
    });

    return html;
}

function createCommentElement(avatar, name, text) {
    const div = document.createElement('div');
    div.className = 'comment-item';
    div.innerHTML = `
                <div class="comment-avatar">${avatar}</div>
                <div class="comment-content">
                    <div class="comment-author">${name}</div>
                    <div class="comment-text">${text}</div>
                    <div class="comment-time">Baru saja</div>
                </div>
            `;
    return div;
}

// MODIFIKASI: Improved Report Functionality
document.querySelectorAll('input[name="reportReason"]').forEach(radio => {
    radio.addEventListener('change', function () {
        // Hide all detail sections
        document.querySelectorAll('.report-reason-details').forEach(detail => {
            detail.classList.remove('active');
        });

        // Show the selected detail section
        const detailsId = this.value + 'Details';
        const detailsElement = document.getElementById(detailsId);
        if (detailsElement) {
            detailsElement.classList.add('active');
        }
    });
});

function submitReport() {
    const selectedReason = document.querySelector('input[name="reportReason"]:checked');
    if (!selectedReason) {
        alert('Silakan pilih alasan pelaporan.');
        return;
    }

    let additionalInfo = '';
    const detailsElement = document.getElementById(selectedReason.value + 'Details');
    if (detailsElement && detailsElement.classList.contains('active')) {
        additionalInfo = detailsElement.querySelector('textarea').value.trim();
    }

    // In a real application, you would send this data to the server
    console.log('Report submitted:', {
        reason: selectedReason.value,
        additionalInfo: additionalInfo,
        postId: 'current-post-id' // You would get this from context
    });

    const toast = new bootstrap.Toast(document.getElementById('reportToast'));
    toast.show();

    const reportModal = bootstrap.Modal.getInstance(document.getElementById('reportModal'));
    reportModal.hide();

    // Reset form
    document.querySelectorAll('input[name="reportReason"]').forEach(radio => {
        radio.checked = false;
    });
    document.querySelectorAll('.report-reason-details').forEach(detail => {
        detail.classList.remove('active');
        detail.querySelector('textarea').value = '';
    });
}

// Close comment dialog when clicking outside
document.getElementById('commentDialog').addEventListener('click', function (e) {
    if (e.target === this) {
        closeCommentDialog();
    }
});

// Allow Enter key to send comment (with Shift+Enter for new line)
document.getElementById('commentInput').addEventListener('keydown', function (e) {
    if (e.key === 'Enter' && !e.shiftKey) {
        e.preventDefault();
        sendComment();
    }
});

// MODIFIKASI: Lightbox Functionality
let currentLightboxImages = [];
let currentLightboxIndex = 0;

function openLightbox(postId, imageIndex) {
    // Get all images from the post
    const post = document.getElementById(postId);
    const images = post.querySelectorAll('img');
    currentLightboxImages = Array.from(images).map(img => img.src);
    currentLightboxIndex = imageIndex;

    // Show the lightbox with the selected image
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCounter = document.getElementById('lightbox-counter');

    lightboxImg.src = currentLightboxImages[currentLightboxIndex];
    lightboxCounter.textContent = `${currentLightboxIndex + 1} / ${currentLightboxImages.length}`;
    lightbox.classList.add('active');

    // Prevent body scroll
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    const lightbox = document.getElementById('lightbox');
    lightbox.classList.remove('active');

    // Restore body scroll
    document.body.style.overflow = '';
}

function changeLightboxImage(direction) {
    currentLightboxIndex += direction;

    // Wrap around if needed
    if (currentLightboxIndex < 0) {
        currentLightboxIndex = currentLightboxImages.length - 1;
    } else if (currentLightboxIndex >= currentLightboxImages.length) {
        currentLightboxIndex = 0;
    }

    // Update the image and counter
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCounter = document.getElementById('lightbox-counter');

    lightboxImg.src = currentLightboxImages[currentLightboxIndex];
    lightboxCounter.textContent = `${currentLightboxIndex + 1} / ${currentLightboxImages.length}`;
}

// Close lightbox when clicking outside the image
document.getElementById('lightbox').addEventListener('click', function (e) {
    if (e.target === this) {
        closeLightbox();
    }
});

// Keyboard navigation for lightbox
document.addEventListener('keydown', function (e) {
    const lightbox = document.getElementById('lightbox');
    if (lightbox.classList.contains('active')) {
        if (e.key === 'Escape') {
            closeLightbox();
        } else if (e.key === 'ArrowLeft') {
            changeLightboxImage(-1);
        } else if (e.key === 'ArrowRight') {
            changeLightboxImage(1);
        }
    }
});

// MODIFIKASI: Navigate to Leaderboard
function navigateToLeaderboard() {
    // In a real application, this would navigate to the leaderboard page
    // For this example, we'll just show an alert
    alert('Mengarahkan ke halaman Leaderboard...');

    // In a real implementation, you would use:
    // window.location.href = '/leaderboard';
}