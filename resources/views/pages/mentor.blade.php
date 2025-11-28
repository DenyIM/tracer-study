<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentorship - Tracer Study UAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #003366;
            --secondary-blue: #3b82f6;
            --light-blue: #dbeafe;
            --accent-yellow: #fab300;
            --light-yellow: #fef3c7;
        }
        
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .main-content {
            flex: 1;
        }
        
        .bg-primary-custom {
            background-color: var(--primary-blue) !important;
        }
        
        .bg-light-blue {
            background-color: var(--light-blue) !important;
        }
        
        .text-accent {
            color: var(--accent-yellow) !important;
        }
        
        /* Navbar Styles */
.navbar-brand {
    font-weight: 700;
}

.nav-link {
    font-weight: 500;
    transition: color 0.3s ease;
}

.nav-link:hover {
    color: var(--accent-yellow) !important;
}

.nav-link.active {
    color: var(--accent-yellow) !important;
    font-weight: 600;
}

/* Notification Badge */
.notification-badge {
    position: absolute;
    top: -5px;
    right: -5px;
    background: #dc3545;
    color: white;
    border-radius: 50%;
    width: 18px;
    height: 18px;
    font-size: 0.7rem;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Notification Dropdown Styles */
.notification-dropdown {
    width: 400px;
    max-height: 500px;
    overflow-y: auto;
    padding: 0;
    border: none;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    border-radius: 12px;
}

.notification-header {
    background-color: var(--primary-blue);
    color: white;
    padding: 16px 20px;
    font-weight: 600;
    font-size: 18px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 12px 12px 0 0;
}

.notification-count {
    background-color: #ff4757;
    color: white;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    font-weight: bold;
}

.notification-refresh-btn {
    background: transparent;
    border: none;
    color: white;
    font-size: 1rem;
    cursor: pointer;
    padding: 5px;
    border-radius: 50%;
    width: 32px;
    height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color 0.2s;
}

.notification-refresh-btn:hover {
    background-color: rgba(255, 255, 255, 0.2);
}

.notification-refresh-btn.loading i {
    animation: spin 1s linear infinite;
}

.notification-list {
    padding: 0;
}

.notification-item {
    padding: 16px 20px;
    border-bottom: 1px solid #eaeaea;
    display: flex;
    transition: background-color 0.2s;
    cursor: pointer;
    text-decoration: none;
    color: inherit;
}

.notification-item:hover {
    background-color: var(--light-blue);
    text-decoration: none;
    color: inherit;
}

.notification-item:last-child {
    border-bottom: none;
}

.notification-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 12px;
    flex-shrink: 0;
    font-weight: bold;
}

/* Different icon colors for different notification types */
.notification-icon.forum {
    background-color: #e6f0ff;
    color: var(--primary-blue);
}

.notification-icon.verification {
    background-color: #e6f7ff;
    color: #1890ff;
}

.notification-icon.consultation {
    background-color: #f6ffed;
    color: #52c41a;
}

.notification-icon.points {
    background-color: #fff7e6;
    color: #fa8c16;
}

.notification-content {
    flex: 1;
    min-width: 0;
}

.notification-title {
    font-weight: 600;
    margin-bottom: 4px;
    color: #2c3e50;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.notification-text {
    color: #5a6c7d;
    font-size: 14px;
    margin-bottom: 6px;
    line-height: 1.4;
    white-space: normal;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    max-height: none;
}

.notification-time {
    color: #8e9ba7;
    font-size: 12px;
}

.notification-item.unread {
    background-color: #f8f9fa;
    border-left: 3px solid var(--primary-blue);
}

.notification-empty {
    padding: 40px 20px;
    text-align: center;
    color: #8e9ba7;
}

.notification-empty i {
    font-size: 2rem;
    margin-bottom: 10px;
    color: #d9d9d9;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

.user-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 600;
    font-size: 14px;
    border: 2px solid white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.user-avatar-large {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 600;
    font-size: 20px;
    border: 3px solid white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
}

.profile-dropdown {
    width: 240px;
    border: none;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    border-radius: 12px;
    padding: 0;
}

.profile-header {
    padding: 16px 20px;
    background-color: var(--primary-blue);
    color: white;
    border-radius: 12px 12px 0 0;
    display: flex;
    align-items: center;
}

.profile-info {
    margin-left: 12px;
}

.profile-name {
    font-weight: 600;
    font-size: 16px;
    margin-bottom: 2px;
}

.profile-role {
    font-size: 12px;
    opacity: 0.8;
}

.profile-menu {
    padding: 8px 0;
}

.profile-menu .dropdown-item {
    padding: 10px 20px;
    display: flex;
    align-items: center;
    transition: background-color 0.2s;
}

.profile-menu .dropdown-item:hover {
    background-color: var(--light-blue);
}

.profile-menu .dropdown-item i {
    width: 20px;
    margin-right: 10px;
    text-align: center;
}

        .mentorship-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            border: 2px solid transparent;
        }
        
        .mentorship-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .mentorship-header {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            padding: 30px;
            text-align: center;
        }
        
        .mentorship-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
        }
        
        .form-section {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 5px;
        }
        
        .form-label {
            font-weight: 600;
            color: var(--primary-blue);
            margin-bottom: 10px;
        }
        
        .form-control, .form-select {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 12px 15px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.2rem rgba(0, 51, 102, 0.25);
        }
        
        .radio-group {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .radio-option {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .radio-option:hover {
            border-color: var(--primary-blue);
            background-color: var(--light-blue);
        }
        
        .radio-option.selected {
            border-color: var(--primary-blue);
            background-color: var(--light-blue);
        }
        
        .radio-option input {
            margin-right: 10px;
        }
        
        .btn-mentor {
            background: linear-gradient(135deg, var(--accent-yellow), #ffc107);
            border: none;
            color: #000;
            font-weight: 600;
            padding: 15px 30px;
            border-radius: 8px;
            transition: all 0.3s ease;
            font-size: 1.1rem;
        }
        
        .btn-mentor:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(251, 176, 0, 0.4);
        }
        
        .footer {
            background-color: var(--primary-blue);
            color: white;
            padding: 20px 0;
            margin-top: 5px;
            text-align: center;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .pulse-animation {
            animation: pulse 2s infinite;
        }
        
        .success-message {
            display: none;
            background: linear-gradient(135deg, #28a745, #20c997);
            color: white;
            padding: 20px;
            border-radius: 12px;
            text-align: center;
            margin-top: 20px;
        }
        
        .menu-selection {
            margin-bottom: 30px;
        }
        
        .menu-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 25px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            height: 100%;
        }
        
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            border-color: var(--primary-blue);
        }
        
        .menu-card.active {
            border-color: var(--primary-blue);
            background-color: var(--light-blue);
        }
        
        .menu-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            margin: 0 auto 15px;
        }
        
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Navigation Header -->
    <header class="sticky-top bg-white shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="#">
                    <img src="{{ asset('logo-tracer-study.png') }}" 
                         style="width: 150px; height: auto;" 
                         class="img-fluid rounded">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <!-- Main Navigation -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/nav-kuesioner"><i class="fas fa-clipboard-list me-1"></i> Kuesioner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nav-leaderboard"><i class="fas fa-crown me-1"></i> Leaderboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nav-forum"><i class="fas fa-comments me-1"></i> Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="nav-mentor"><i class="fas fa-chalkboard-teacher me-1"></i> Mentorship</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nav-lowongan"><i class="fas fa-briefcase me-1"></i> Lowongan Kerja</a>
                        </li>
                    </ul>
                    
                    <!-- Right Navigation -->
                    <div class="d-flex align-items-center">
                        <!-- Create Post Button (Visible after Kuesioner 3) -->
                        <button class="btn btn-warning btn-sm me-2" style="display: none;">
                            <i class="fas fa-plus-circle me-1"></i> Posting
                        </button>
                        
                        <!-- MODIFIKASI: Notification Dropdown - IMPROVED -->
                        <div class="dropdown me-3">
                            <button class="btn btn-outline-secondary position-relative" type="button" 
                                    data-bs-toggle="dropdown" aria-expanded="false" id="notificationDropdownBtn">
                                <i class="fas fa-bell"></i>
                                <span class="notification-badge" id="notificationBadge">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end notification-dropdown">
                                <div class="notification-header">
                                    <span>Notifikasi</span>
                                    <div class="d-flex align-items-center">
                                        <button class="notification-refresh-btn me-2" id="notificationRefreshBtn" title="Muat Ulang Notifikasi">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                        <div class="notification-count" id="notificationCount">5</div>
                                    </div>
                                </div>
                                
                                <div class="notification-list" id="notificationList">
                                    <!-- Notifikasi akan dimuat di sini -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="dropdown">
                            <button class="btn btn-outline-primary d-flex align-items-center" type="button" 
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-avatar me-2">DI</div>
                                <span>Deny Iqbal</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end profile-dropdown">
                                <li>
                                    <div class="profile-header">
                                        <div class="user-avatar-large">DI</div>
                                        <div class="profile-info">
                                            <div class="profile-name">Deny Iqbal</div>
                                            <div class="profile-role">Teknik Informatika 2018</div>
                                        </div>
                                    </div>
                                </li>
                                <li class="profile-menu">
                                    <a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profil Saya</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Pengaturan</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-bookmark me-2"></i> Bookmark</a>
                                    <hr class="dropdown-divider">
                                    <a class="dropdown-item" href="/logout" id="logoutBtn"><i class="fas fa-sign-out-alt me-2"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <div class="container py-5">
            <div class="mentorship-card mb-5" data-aos="fade-up">
                <div class="mentorship-header">
                    <div class="mentorship-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h1 class="fw-bold mb-3">Layanan Mentorship Alumni</h1>
                    <p class="lead mb-0">Konsultasi karir dan pengembangan diri dengan mentor berpengalaman</p>
                </div>
                <div class="p-4">
                    <div class="row">
                        <div class="col-md-8 mx-auto text-center">
                            <p class="mb-4">Pilih jenis mentorship yang sesuai dengan kebutuhan Anda dan isi kuesioner untuk membantu kami menghubungkan Anda dengan mentor yang tepat.</p>
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                Data pribadi Anda (Nama, NIM, Program Studi, Tahun Lulus, Email) sudah terisi otomatis dari database.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-selection" data-aos="fade-up" data-aos-delay="100">
                <h3 class="fw-bold mb-4 text-center" style="color: var(--primary-blue);">Pilih Jenis Mentorship</h3>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="menu-card active" id="careerMenu">
                            <div class="menu-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Mentorship Karir</h4>
                            <p class="mb-0">Konsultasi untuk pengembangan karir, persiapan kerja, dan perencanaan karir di perusahaan/instansi</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="menu-card" id="businessMenu">
                            <div class="menu-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h4 class="fw-bold mb-3">Mentorship Bisnis</h4>
                            <p class="mb-0">Konsultasi untuk pengembangan usaha, perencanaan bisnis, dan strategi kewirausahaan</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-6" data-aos="fade-right">
                    <div class="mentorship-card p-4 h-100">
                        <div class="text-center">
                            <i class="fas fa-clock text-primary-custom fa-2x mb-3"></i>
                            <h5 class="fw-bold mb-3">Proses Mentorship</h5>
                            <p>Setelah mengirim kuesioner, Anda akan:</p>
                            <ol class="text-start">
                                <li>Mendapat konfirmasi email dalam 24 jam</li>
                                <li>Dihubungkan dengan mentor yang sesuai</li>
                                <li>Jadwal sesi konsultasi akan diatur</li>
                                <li>Konsultasi via Zoom/WA sesuai kesepakatan</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <div class="mentorship-card p-4 h-100">
                        <div class="text-center">
                            <i class="fas fa-user-tie text-primary-custom fa-2x mb-3"></i>
                            <h5 class="fw-bold mb-3">Keuntungan Mentorship</h5>
                            <ul class="text-start">
                                <li>Konsultasi dengan praktisi berpengalaman</li>
                                <li>Bimbingan karir yang terpersonalisasi</li>
                                <li>Networking dengan alumni sukses</li>
                                <li>Insight industri terkini</li>
                                <li>Dukungan pengembangan karir jangka panjang</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="user-info-card" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4 class="fw-bold mb-2">Informasi Alumni</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="mb-1"><strong>Nama:</strong> Deny Iqbal</p>
                                <p class="mb-1"><strong>NIM:</strong> 2018100001</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-1"><strong>Program Studi:</strong> Teknik Informatika</p>
                                <p class="mb-1"><strong>Tahun Lulus:</strong> 2022</p>
                            </div>
                        </div>
                        <p class="mb-0 mt-2"><strong>Email:</strong> deny.iqbal@alumni.uad.ac.id</p>
                    </div>
                    <div class="col-md-4 text-md-end">
                        <div class="user-avatar mx-auto mx-md-0">
                            DI
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-section" id="careerForm" data-aos="fade-up" data-aos-delay="200">
                <h3 class="fw-bold mb-4 text-center" style="color: var(--primary-blue);">Kuesioner Mentorship Karir</h3>
                
                <form id="careerMentorshipForm">
                    <div class="mb-4">
                        <label class="form-label">1. Jenis Bidang Karier yang diinginkan (Bagi yang merencanakan untuk bekerja di Perusahaan/Instansi)</label>
                        <div class="radio-group">
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="HRD" required>
                                HRD
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="Marketing">
                                Marketing
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="Produksi">
                                Produksi
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="QC/QA">
                                QC/QA
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="RnD">
                                RnD
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="Keuangan dan Administrasi">
                                Keuangan dan Administrasi
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="IT">
                                IT
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="Hukum dan Advokasi">
                                Hukum dan Advokasi
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="Tenaga Pendidik">
                                Tenaga Pendidik
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="Kesehatan">
                                Kesehatan
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="Pariwisata">
                                Pariwisata
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="career_field" value="other_career">
                                Yang lain:
                                <input type="text" class="form-control ms-2 d-inline-block" style="width: 400px;" placeholder="Sebutkan bidang lain" id="other_career_field" disabled>
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">2. No WhatsApp</label>
                        <input type="tel" class="form-control" name="whatsapp" placeholder="Contoh: 6281234567890" required>
                        <div class="form-text">Pastikan nomor WhatsApp aktif untuk komunikasi dengan mentor</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">3. Perihal yang ingin dikonsultasikan</label>
                        <textarea class="form-control" name="consultation_topic" rows="5" placeholder="Jelaskan secara detail topik atau masalah yang ingin dikonsultasikan dengan mentor..." required></textarea>
                        <div class="form-text">Semakin detail penjelasan Anda, semakin tepat mentor yang akan kami rekomendasikan</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Informasi Tambahan (Opsional)</label>
                        <textarea class="form-control" name="additional_info" rows="3" placeholder="Tambahkan informasi lain yang menurut Anda penting untuk diketahui mentor..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-5">
                        <button type="submit" class="btn-mentor btn-lg pulse-animation">
                            <i class="fas fa-paper-plane me-2"></i> Kirim via Email
                        </button>
                    </div>
                </form>

                <div class="success-message" id="careerSuccessMessage">
                    <i class="fas fa-check-circle fa-3x mb-3"></i>
                    <h4 class="fw-bold mb-2">Permintaan Mentorship Karir Berhasil Dikirim!</h4>
                    <p class="mb-0">Kami akan menghubungi Anda melalui email dalam 1-2 hari kerja.</p>
                </div>
            </div>

            <div class="form-section hidden" id="businessForm" data-aos="fade-up" data-aos-delay="200">
                <h3 class="fw-bold mb-4 text-center" style="color: var(--primary-blue);">Kuesioner Mentorship Bisnis</h3>
                
                <form id="businessMentorshipForm">
                    <div class="mb-4">
                        <label class="form-label">1. Jenis Usaha yang direncanakan (Bagi yang ingin menjadi entrepreneur)</label>
                        <div class="radio-group">
                            <label class="radio-option">
                                <input type="radio" name="business_type" value="Kuliner" required>
                                Kuliner
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="business_type" value="Kesehatan">
                                Kesehatan
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="business_type" value="IT">
                                IT
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="business_type" value="Pendidikan">
                                Pendidikan
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="business_type" value="Pertanian dan Peternakan">
                                Pertanian dan Peternakan
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="business_type" value="Jasa dan akomodasi">
                                Jasa dan akomodasi
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="business_type" value="Kesenian, hiburan, dan rekreasi">
                                Kesenian, hiburan, dan rekreasi
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="business_type" value="other_business">
                                Yang lain:
                                <input type="text" class="form-control ms-2 d-inline-block" style="width: 400px;" placeholder="Sebutkan jenis usaha lain" id="other_business_type" disabled>
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">2. No WhatsApp</label>
                        <input type="tel" class="form-control" name="whatsapp" placeholder="Contoh: 6281234567890" required>
                        <div class="form-text">Pastikan nomor WhatsApp aktif untuk komunikasi dengan mentor</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">3. Perihal yang ingin dikonsultasikan</label>
                        <textarea class="form-control" name="consultation_topic" rows="5" placeholder="Jelaskan secara detail topik atau masalah yang ingin dikonsultasikan dengan mentor..." required></textarea>
                        <div class="form-text">Semakin detail penjelasan Anda, semakin tepat mentor yang akan kami rekomendasikan</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">Informasi Tambahan (Opsional)</label>
                        <textarea class="form-control" name="additional_info" rows="3" placeholder="Tambahkan informasi lain yang menurut Anda penting untuk diketahui mentor..."></textarea>
                    </div>

                    <div class="text-center mt-5">
                        <button type="submit" class="btn-mentor btn-lg pulse-animation">
                            <i class="fas fa-paper-plane me-2"></i> Kirim via Email
                        </button>
                    </div>
                </form>

                <div class="success-message" id="businessSuccessMessage">
                    <i class="fas fa-check-circle fa-3x mb-3"></i>
                    <h4 class="fw-bold mb-2">Permintaan Mentorship Bisnis Berhasil Dikirim!</h4>
                    <p class="mb-0">Kami akan menghubungi Anda melalui email dalam 1-2 hari kerja.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p class="mb-0">&copy; 2025 Tracer Study Universitas Ahmad Dahlan.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Menu Selection
        document.getElementById('careerMenu').addEventListener('click', function() {
            document.getElementById('careerMenu').classList.add('active');
            document.getElementById('businessMenu').classList.remove('active');
            document.getElementById('careerForm').classList.remove('hidden');
            document.getElementById('businessForm').classList.add('hidden');
        });

        document.getElementById('businessMenu').addEventListener('click', function() {
            document.getElementById('businessMenu').classList.add('active');
            document.getElementById('careerMenu').classList.remove('active');
            document.getElementById('businessForm').classList.remove('hidden');
            document.getElementById('careerForm').classList.add('hidden');
        });

        // Handle radio button interactions
        function setupRadioButtons(formId) {
            const form = document.getElementById(formId);
            if (!form) return;
            
            form.querySelectorAll('input[type="radio"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    // Remove selected class from all options in this form
                    form.querySelectorAll('.radio-option').forEach(option => {
                        option.classList.remove('selected');
                    });
                    
                    // Add selected class to parent of checked radio
                    if (this.checked) {
                        this.parentElement.classList.add('selected');
                    }
                    
                    // Handle "other" input fields
                    if (this.name === 'career_field' && this.value === 'other_career') {
                        document.getElementById('other_career_field').disabled = false;
                        document.getElementById('other_career_field').focus();
                    } else if (this.name === 'career_field') {
                        document.getElementById('other_career_field').disabled = true;
                        document.getElementById('other_career_field').value = '';
                    }
                    
                    if (this.name === 'business_type' && this.value === 'other_business') {
                        document.getElementById('other_business_type').disabled = false;
                        document.getElementById('other_business_type').focus();
                    } else if (this.name === 'business_type') {
                        document.getElementById('other_business_type').disabled = true;
                        document.getElementById('other_business_type').value = '';
                    }
                });
            });
        }

        // Setup radio buttons for both forms
        setupRadioButtons('careerMentorshipForm');
        setupRadioButtons('businessMentorshipForm');

        // Form submission for career form
        document.getElementById('careerMentorshipForm').addEventListener('submit', function(e) {
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
                document.getElementById('careerSuccessMessage').style.display = 'block';
                
                // Reset form
                this.reset();
                this.querySelectorAll('.radio-option').forEach(option => {
                    option.classList.remove('selected');
                });
                document.getElementById('other_career_field').disabled = true;
                
                // Reset button
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
                
                // Scroll to success message
                document.getElementById('careerSuccessMessage').scrollIntoView({ 
                    behavior: 'smooth' 
                });
            }, 2000);
        });

        // Form submission for business form
        document.getElementById('businessMentorshipForm').addEventListener('submit', function(e) {
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
                document.getElementById('businessSuccessMessage').style.display = 'block';
                
                // Reset form
                this.reset();
                this.querySelectorAll('.radio-option').forEach(option => {
                    option.classList.remove('selected');
                });
                document.getElementById('other_business_type').disabled = true;
                
                // Reset button
                submitButton.innerHTML = originalText;
                submitButton.disabled = false;
                
                // Scroll to success message
                document.getElementById('businessSuccessMessage').scrollIntoView({ 
                    behavior: 'smooth' 
                });
            }, 2000);
        });

        // WhatsApp number formatting
        document.querySelectorAll('input[type="tel"]').forEach(input => {
            input.addEventListener('input', function(e) {
                let value = e.target.value.replace(/\D/g, '');
                if (value.startsWith('0')) {
                    value = '62' + value.substring(1);
                }
                e.target.value = value;
            });
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

    </script>
</body>
</html>