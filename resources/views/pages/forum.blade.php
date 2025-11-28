<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum - Tracer Study UAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        
        .progress-section {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .progress {
            height: 8px;
            background-color: #e9ecef;
        }
        
        .progress-bar {
            background-color: var(--accent-yellow);
        }
        
        .category-filter {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .category-btn {
            border: none;
            background: none;
            padding: 8px 16px;
            border-radius: 20px;
            margin: 4px;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .category-btn:hover {
            background-color: var(--light-blue);
        }
        
        .category-btn.active {
            background-color: var(--primary-blue);
            color: white;
        }
        
        .info-box {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-left: 4px solid var(--accent-yellow);
        }
        
        .post-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: visible !important;
            z-index: 1;
        }
        
        .post-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            z-index: 10;
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
            font-weight: bold;
        }
        
        .post-actions button {
            border: none;
            background: none;
            color: #6c757d;
            transition: color 0.3s ease;
        }
        
        .post-actions button:hover {
            color: var(--primary-blue);
        }
        
        .post-actions button.liked {
            color: #e74c3c;
        }
        
        .notification-dropdown {
            width: 380px;
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
            background-color: #e6f0ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            flex-shrink: 0;
            color: var(--primary-blue);
            font-weight: bold;
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
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.4;
        }
        
        .notification-time {
            color: #8e9ba7;
            font-size: 12px;
        }
        
        .notification-divider {
            padding: 12px 20px;
            background-color: #f8f9fa;
            color: #8e9ba7;
            font-size: 14px;
            border-bottom: 1px solid #eaeaea;
        }
        
        .notification-footer {
            padding: 16px 20px;
            text-align: center;
            color: var(--primary-blue);
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.2s;
            border-radius: 0 0 12px 12px;
        }
        
        .notification-footer:hover {
            background-color: #f8f9fa;
        }
        
        .notification-item.unread {
            background-color: #f8f9fa;
            border-left: 3px solid var(--primary-blue);
        }
        
        .profile-dropdown {
            min-width: 200px;
        }
        
        .post-options {
            position: relative;
            z-index: 1000;
        }
        
        .post-options-menu {
            display: none;
            position: absolute;
            right: 0;
            top: 100%;
            background: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            z-index: 1001;
            min-width: 180px;
            margin-top: 5px;
        }
        
        .post-options-menu.active {
            display: block;
        }
        
        .post-option-item {
            display: block;
            width: 100%;
            text-align: left;
            border: none;
            background: none;
            padding: 10px 15px;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .post-option-item:hover {
            background: #f8f9fa;
        }
        
        .position-relative {
            position: relative !important;
            z-index: 1002;
        }
        
        .modal-content {
            border-radius: 12px;
            border: none;
        }
        
        .modal-header {
            border-bottom: 1px solid #eaeaea;
            padding: 15px 20px;
        }
        
        .modal-footer {
            border-top: 1px solid #eaeaea;
            padding: 15px 20px;
        }
        
        .toast {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
        }
        
        .post-image {
            width: 100%;
            border-radius: 12px;
            margin-top: 10px;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        
        .post-image:hover {
            transform: scale(1.02);
        }
        
        .post-images-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 5px;
            margin-top: 10px;
            margin-bottom: 10px;
            border-radius: 12px;
            overflow: hidden;
        }
        
        .post-images-grid img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            cursor: pointer;
            transition: transform 0.3s ease;
        }
        
        .post-images-grid img:hover {
            transform: scale(1.02);
        }
        
        .post-header-right {
            display: flex;
            align-items: center;
            gap: 10px;
            position: relative;
            z-index: 1000;
        }
        
        .post-category-badge {
            margin-right: 0;
            z-index: 1;
        }
        
        .podium-container {
            margin: 10px 0 20px 0;
            position: relative;
        }
        
        .podium {
            display: flex;
            justify-content: center;
            align-items: flex-end;
            gap: 15px;
            margin: 0 auto;
            position: relative;
        }
        
        .podium-place {
            text-align: center;
            position: relative;
        }
        
        .podium-2 {
            order: 1;
        }
        
        .podium-1 {
            order: 2;
        }
        
        .podium-3 {
            order: 3;
        }
        
        .podium-stand {
            background: linear-gradient(135deg, #e0e0e0, #f5f5f5);
            border-radius: 10px 10px 0 0;
            position: relative;
            box-shadow: 0 -5px 15px rgba(0,0,0,0.1);
        }
        
        .podium-1 .podium-stand {
            height: 120px; 
            background: linear-gradient(135deg, #ffd700, #ffed4e);
            width: 100px;
        }
        
        .podium-2 .podium-stand {
            height: 100px; 
            background: linear-gradient(135deg, #c0c0c0, #e8e8e8);
            width: 90px;
        }
        
        .podium-3 .podium-stand {
            height: 80px; 
            background: linear-gradient(135deg, #cd7f32, #e6a756);
            width: 90px;
        }
        
        .podium-content {
            position: absolute;
            top: -50px; 
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
        }
        
        .podium-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 3px solid white;
            margin: 0 auto 5px;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .podium-1 .podium-avatar {
            width: 60px;
            height: 60px;
            border: 4px solid #ffd700;
        }
        
        .crown {
            position: absolute;
            top: -25px; 
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.5rem;
            color: #ffd700;
            text-shadow: 0 2px 10px rgba(0,0,0,0.3);
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateX(-50%) translateY(0); }
            50% { transform: translateX(-50%) translateY(-5px); }
        }
        
        .podium-name {
            font-weight: bold;
            margin-bottom: 3px;
            color: var(--primary-blue);
            font-size: 0.8rem;
        }
        
        .podium-points {
            font-weight: 600;
            color: var(--primary-blue);
            background: rgba(255,255,255,0.9);
            padding: 3px 8px;
            border-radius: 20px;
            display: inline-block;
            margin-top: 3px;
            font-size: 0.7rem;
        }
        
        .place-badge {
            margin-top: 10px;
            font-weight: bold;
            color: var(--primary-blue);
            font-size: 0.8rem;
        }
        
        .comment-dialog {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9999;
            align-items: center;
            justify-content: center;
        }
        
        .comment-dialog.active {
            display: flex;
        }
        
        .comment-container {
            background: white;
            border-radius: 12px;
            width: 90%;
            max-width: 600px;
            max-height: 80vh;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        
        .comment-header {
            padding: 15px 20px;
            border-bottom: 1px solid #eaeaea;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .comment-body {
            flex: 1;
            overflow-y: auto;
            padding: 20px;
        }
        
        .comment-footer {
            padding: 15px 20px;
            border-top: 1px solid #eaeaea;
        }
        
        .comment-item {
            display: flex;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .comment-avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 0.8rem;
            margin-right: 10px;
            flex-shrink: 0;
        }
        
        .comment-content {
            flex: 1;
        }
        
        .comment-author {
            font-weight: bold;
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        
        .comment-text {
            font-size: 0.9rem;
            margin-bottom: 5px;
        }
        
        .comment-time {
            font-size: 0.7rem;
            color: #8e9ba7;
        }
        
        .comment-input {
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }
        
        .comment-input-field {
            flex: 1;
            border: 1px solid #eaeaea;
            border-radius: 20px;
            padding: 10px 15px;
            resize: none;
            font-size: 0.9rem;
            min-height: 40px;
            max-height: 120px;
        }
        
        .comment-send-btn {
            background: var(--primary-blue);
            color: white;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }
        
        .report-reason-details {
            display: none;
            margin-top: 10px;
        }
        
        .report-reason-details.active {
            display: block;
        }
        
        .report-textarea {
            min-height: 100px;
            resize: vertical;
        }
        
        .leaderboard-btn {
            margin-top: 15px;
            width: 100%;
            background-color: var(--primary-blue);
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 15px;
            font-weight: 500;
            transition: background-color 0.3s ease;
        }
        
        .leaderboard-btn:hover {
            background-color: var(--secondary-blue);
        }
        
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 10000;
            align-items: center;
            justify-content: center;
        }
        
        .lightbox.active {
            display: flex;
        }
        
        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
        }
        
        .lightbox-img {
            max-width: 100%;
            max-height: 90vh;
            border-radius: 8px;
        }
        
        .lightbox-close {
            position: absolute;
            top: -40px;
            right: 0;
            background: none;
            border: none;
            color: white;
            font-size: 2rem;
            cursor: pointer;
        }
        
        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: white;
            font-size: 2rem;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.3s ease;
        }
        
        .lightbox-nav:hover {
            background: rgba(255, 255, 255, 0.4);
        }
        
        .lightbox-prev {
            left: 20px;
        }
        
        .lightbox-next {
            right: 20px;
        }
        
        .lightbox-counter {
            position: absolute;
            bottom: -40px;
            left: 0;
            width: 100%;
            text-align: center;
            color: white;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <!-- Navigation Header -->
    <header class="sticky-top bg-white shadow-sm">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <!-- Logo -->
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
                            <a class="nav-link" href="#"><i class="fas fa-clipboard-list me-1"></i> Kuesioner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-crown me-1"></i> Leaderboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fas fa-comments me-1"></i> Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-chalkboard-teacher me-1"></i> Mentorship</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-briefcase me-1"></i> Lowongan Kerja</a>
                        </li>
                    </ul>
                    
                    <!-- Right Navigation -->
                    <div class="d-flex align-items-center">
                        <div class="dropdown me-3">
                            <button class="btn btn-outline-secondary position-relative" type="button" 
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bell"></i>
                                <span class="notification-badge">4</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end notification-dropdown">
                                <div class="notification-header">
                                    <span>Notifikasi</span>
                                    <div class="notification-count">4</div>
                                </div>
                                
                                <div class="notification-list">
                                    <a class="dropdown-item notification-item unread" href="#">
                                        <div class="notification-icon">M</div>
                                        <div class="notification-content">
                                            <div class="notification-title">Mentorship</div>
                                            <div class="notification-text">Kualifikasi Terbaru Lowongan Kerja</div>
                                            <div class="notification-time">5m ago</div>
                                        </div>
                                    </a>
                                    
                                    <a class="dropdown-item notification-item unread" href="#">
                                        <div class="notification-icon">M</div>
                                        <div class="notification-content">
                                            <div class="notification-title">Mentorship</div>
                                            <div class="notification-text">Lowongan baru untuk Teknik Informatika di Google Indonesia dengan persyaratan khusus untuk lulusan UAD</div>
                                            <div class="notification-time">1h ago</div>
                                        </div>
                                    </a>
                                    
                                    <a class="dropdown-item notification-item unread" href="#">
                                        <div class="notification-icon">M</div>
                                        <div class="notification-content">
                                            <div class="notification-title">Mentorship</div>
                                            <div class="notification-text">Deny Iqbal memposting event alumni baru untuk angkatan 2018-2020 di Yogyakarta</div>
                                            <div class="notification-time">2h ago</div>
                                        </div>
                                    </a>
                                    
                                    <a class="dropdown-item notification-item" href="#">
                                        <div class="notification-icon">M</div>
                                        <div class="notification-content">
                                            <div class="notification-title">Mentorship</div>
                                            <div class="notification-text">Membalas komentar Anda pada diskusi tentang peluang karir di bidang teknologi</div>
                                            <div class="notification-time">3h ago</div>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="notification-divider">2015</div>
                                
                                <div class="notification-footer">Lihat Semua Notifikasi</div>
                            </div>
                        </div>
                        
                        <!-- Profile Dropdown -->
                        <div class="dropdown">
                            <button class="btn btn-outline-primary d-flex align-items-center" type="button" 
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-avatar me-2">DI</div>
                                <span>Deny Iqbal</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end profile-dropdown">
                                <li><h6 class="dropdown-header">Profil Alumni</h6></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profil Saya</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Pengaturan</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-bookmark me-2"></i> Bookmark</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt me-2"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-3 mb-4">
                <div class="progress-section p-4 mb-4" data-aos="fade-right">
                    <div class="d-flex align-items-center mb-3">
                        <div class="user-avatar me-3">DI</div>
                        <div>
                            <h6 class="mb-0">Deny Iqbal</h6>
                            <small class="text-muted">Teknik Informatika 2018</small>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between mb-1">
                            <small>Progress Kuesioner</small>
                            <small class="fw-bold text-accent">94%</small>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 94%"></div>
                        </div>
                    </div>
                    <button class="btn btn-primary-custom btn-sm w-100">
                        Lanjutkan Kuesioner
                    </button>
                </div>
                
                <div class="category-filter p-4" data-aos="fade-right" data-aos-delay="100">
                    <h6 class="fw-bold mb-3">Kategori Forum</h6>
                    <div class="d-flex flex-wrap">
                        <button class="category-btn active">Semua</button>
                        <button class="category-btn">Seminar & Bootcamp</button>
                        <button class="category-btn">Event Alumni</button>
                        <button class="category-btn">Tanya Jawab Umum</button>
                        <button class="category-btn">Karir & Pekerjaan</button>
                        <button class="category-btn">Tips & Pengalaman</button>
                        <button class="category-btn">Diskusi Akademik</button>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="post-card p-4 mb-4" data-aos="fade-up" id="post1">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center">
                            <div class="user-avatar me-3">AD</div>
                            <div>
                                <h6 class="mb-0">Admin UAD</h6>
                                <small class="text-muted">Administrator · 1 jam lalu</small>
                            </div>
                        </div>
                        <div class="post-header-right">
                            <span class="badge bg-primary post-category-badge">Pengumuman</span>
                            <div class="post-options">
                                <button class="btn btn-sm btn-outline-secondary" id="postOptionsBtn1">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="post-options-menu" id="postOptionsMenu1">
                                    <button class="post-option-item" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        <i class="fas fa-flag me-2"></i> Laporkan
                                    </button>
                                    <button class="post-option-item" onclick="bookmarkPost('post1')">
                                        <i class="fas fa-bookmark me-2"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <p class="mb-3" id="postContent1">
                        📢 <strong>PENGUMUMAN PENTING</strong><br><br>
                        Pendaftaran Bootcamp Data Science UAD 2024 telah dibuka!<br><br>
                        Program ini terbuka untuk semua alumni UAD dengan latar belakang apapun. Bootcamp akan dilaksanakan secara hybrid dengan jadwal fleksibel.<br><br>
                        📅 <strong>Tanggal Penting:</strong><br>
                        - Pendaftaran: 1 - 30 Desember 2024<br>
                        - Seleksi: 2 - 5 Januari 2025<br>
                        - Kelas Dimulai: 10 Januari 2025<br><br>
                        🎯 <strong>Benefit:</strong><br>
                        - Sertifikat resmi UAD<br>
                        - Networking dengan praktisi industri<br>
                        - Peluang magang di perusahaan mitra<br><br>
                        Untuk informasi lebih lanjut dan pendaftaran, kunjungi: tracerstudy.uad.ac.id/bootcamp
                    </p>
                    
                    <div class="post-actions d-flex justify-content-between mt-3">
                        <div class="d-flex gap-3">
                            <button class="like-btn">
                                <i class="far fa-heart me-1"></i> <span>42</span>
                            </button>
                            <button class="comment-btn" onclick="openCommentDialog('post1')">
                                <i class="far fa-comment me-1"></i> <span>15</span>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="post-card p-4 mb-4" data-aos="fade-up" data-aos-delay="100" id="post2">
                    <div class="d-flex justify-content-between align-items-start mb-3">
                        <div class="d-flex align-items-center">
                            <div class="user-avatar me-3">AD</div>
                            <div>
                                <h6 class="mb-0">Admin UAD</h6>
                                <small class="text-muted">Administrator · 3 jam lalu</small>
                            </div>
                        </div>
                        <div class="post-header-right">
                            <span class="badge bg-primary post-category-badge">Event Alumni</span>
                            <div class="post-options">
                                <button class="btn btn-sm btn-outline-secondary" id="postOptionsBtn2">
                                    <i class="fas fa-ellipsis-h"></i>
                                </button>
                                <div class="post-options-menu" id="postOptionsMenu2">
                                    <button class="post-option-item" data-bs-toggle="modal" data-bs-target="#reportModal">
                                        <i class="fas fa-flag me-2"></i> Laporkan
                                    </button>
                                    <button class="post-option-item" onclick="bookmarkPost('post2')">
                                        <i class="fas fa-bookmark me-2"></i> Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <p class="mb-3">
                        🎉 <strong>REUNI AKBAR ALUMNI UAD 2024</strong><br><br>
                        Hai para alumni UAD! Kami dengan senang hati mengundang Anda untuk menghadiri Reuni Akbar Alumni UAD 2024.<br><br>
                        Acara ini akan menjadi momen spesial untuk bertemu kembali dengan teman-teman seangkatan, berbagi cerita, dan memperluas jaringan profesional.<br><br>
                        📍 <strong>Lokasi:</strong> Gedung Auditorium Kampus Utama UAD<br>
                        📅 <strong>Tanggal:</strong> Sabtu, 15 Desember 2024<br>
                        🕒 <strong>Waktu:</strong> 18.00 - 22.00 WIB<br><br>
                        Daftar segera melalui link di bio kami! Tempat terbatas untuk 500 peserta pertama.
                    </p>
                    
                    <div class="post-images-grid">
                        <img src="gambar1.png" alt="Poster Reuni UAD 2024" onclick="openLightbox('post2', 0)">
                        <img src="gambar2.png" alt="Detail Acara Reuni" onclick="openLightbox('post2', 1)">
                    </div>
                    
                    <div class="post-actions d-flex justify-content-between">
                        <div class="d-flex gap-3">
                            <button class="like-btn">
                                <i class="far fa-heart me-1"></i> <span>67</span>
                            </button>
                            <button class="comment-btn" onclick="openCommentDialog('post2')">
                                <i class="far fa-comment me-1"></i> <span>23</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="info-box p-4 mb-4" data-aos="fade-left">
                    <h6 class="fw-bold mb-3">Info Penting</h6>
                    <div class="mb-3">
                        <small class="text-primary fw-bold">📢 Pengumuman</small>
                        <p class="mb-1 small">Pendaftaran Bootcamp Data Science dibuka hingga 30 Desember 2024</p>
                    </div>
                    <div class="mb-3">
                        <small class="text-success fw-bold">🎯 Event</small>
                        <p class="mb-1 small">Reuni Akbar Alumni UAD 2024 akan diselenggarakan 15 Desember</p>
                    </div>
                    <div>
                        <small class="text-warning fw-bold">⚠️ Peringatan</small>
                        <p class="mb-0 small">Lengkapi kuesioner untuk akses fitur lengkap platform</p>
                    </div>
                </div>
                
                <div class="info-box p-4" data-aos="fade-left" data-aos-delay="100">
                    <h6 class="fw-bold mb-3">Top 3 Alumni Paling Aktif</h6><br><br>
                    
                    <div class="podium-container">
                        <div class="podium">
                            <div class="podium-place podium-2">
                                <div class="podium-stand">
                                    <div class="podium-content">
                                        <div class="podium-avatar">SR</div>
                                        <div class="podium-name">Siti Rahayu</div>
                                        <div class="podium-points">28,500</div>
                                    </div>
                                </div>
                                <div class="place-badge">2nd</div>
                            </div>
                            
                            <div class="podium-place podium-1">
                                <div class="crown">
                                    <i class="fas fa-crown"></i>
                                </div>
                                <div class="podium-stand">
                                    <div class="podium-content">
                                        <div class="podium-avatar">AR</div>
                                        <div class="podium-name">Ahmad Rizki</div>
                                        <div class="podium-points">32,000</div>
                                    </div>
                                </div>
                                <div class="place-badge">1st</div>
                            </div>
                            
                            <div class="podium-place podium-3">
                                <div class="podium-stand">
                                    <div class="podium-content">
                                        <div class="podium-avatar">BS</div>
                                        <div class="podium-name">Budi Santoso</div>
                                        <div class="podium-points">25,800</div>
                                    </div>
                                </div>
                                <div class="place-badge">3rd</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-center mt-3">
                        <small class="text-muted">Total points berdasarkan kontribusi di platform</small>
                    </div>
                    
                    <button class="leaderboard-btn" onclick="navigateToLeaderboard()">
                        <i class="fas fa-crown me-2"></i> Lihat Leaderboard Lengkap
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="comment-dialog" id="commentDialog">
        <div class="comment-container">
            <div class="comment-header">
                <h6 class="mb-0">Komentar</h6>
                <button type="button" class="btn-close" onclick="closeCommentDialog()"></button>
            </div>
            <div class="comment-body" id="commentBody">
                <!-- Comments will be loaded here -->
            </div>
            <div class="comment-footer">
                <div class="comment-input">
                    <div class="user-avatar">DI</div>
                    <textarea class="comment-input-field" placeholder="Tulis komentar..." id="commentInput"></textarea>
                    <button class="comment-send-btn" onclick="sendComment()">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="lightbox" id="lightbox">
        <button class="lightbox-close" onclick="closeLightbox()">
            <i class="fas fa-times"></i>
        </button>
        <button class="lightbox-nav lightbox-prev" onclick="changeLightboxImage(-1)">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="lightbox-nav lightbox-next" onclick="changeLightboxImage(1)">
            <i class="fas fa-chevron-right"></i>
        </button>
        <div class="lightbox-content">
            <img class="lightbox-img" id="lightbox-img" src="" alt="">
            <div class="lightbox-counter" id="lightbox-counter"></div>
        </div>
    </div>

    <div class="modal fade" id="reportModal" tabindex="-1" aria-labelledby="reportModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reportModalLabel">Laporkan Postingan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Mengapa Anda ingin melaporkan postingan ini?</p>
                    
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="reportReason" id="misinformation" value="misinformation">
                        <label class="form-check-label" for="misinformation">
                            <strong>Postingan mengandung misinformasi</strong><br>
                            <small class="text-muted">Informasi yang diberikan tidak akurat atau menyesatkan</small>
                        </label>
                    </div>
                    <div class="report-reason-details" id="misinformationDetails">
                        <label class="form-label small mt-2">Apa yang salah dengan informasi ini?</label>
                        <textarea class="form-control report-textarea" placeholder="Jelaskan bagian mana yang tidak akurat dan berikan informasi yang benar jika memungkinkan..."></textarea>
                    </div>
                    
                    <div class="form-check mb-2 mt-3">
                        <input class="form-check-input" type="radio" name="reportReason" id="cancelledEvent" value="cancelledEvent">
                        <label class="form-check-label" for="cancelledEvent">
                            <strong>Kegiatan/informasi sudah tidak berlaku</strong><br>
                            <small class="text-muted">Event sudah dibatalkan atau informasi sudah kedaluwarsa</small>
                        </label>
                    </div>
                    <div class="report-reason-details" id="cancelledEventDetails">
                        <label class="form-label small mt-2">Informasi tambahan:</label>
                        <textarea class="form-control report-textarea" placeholder="Berikan informasi tentang pembatalan atau perubahan yang terjadi..."></textarea>
                    </div>
                    
                    <div class="form-check mb-2 mt-3">
                        <input class="form-check-input" type="radio" name="reportReason" id="spam" value="spam">
                        <label class="form-check-label" for="spam">
                            <strong>Spam atau konten tidak relevan</strong><br>
                            <small class="text-muted">Postingan berisi konten yang tidak sesuai dengan forum</small>
                        </label>
                    </div>
                    
                    <div class="form-check mb-2 mt-3">
                        <input class="form-check-input" type="radio" name="reportReason" id="duplicate" value="duplicate">
                        <label class="form-check-label" for="duplicate">
                            <strong>Postingan duplikat</strong><br>
                            <small class="text-muted">Informasi yang sama sudah pernah diposting sebelumnya</small>
                        </label>
                    </div>
                    
                    <div class="form-check mb-2 mt-3">
                        <input class="form-check-input" type="radio" name="reportReason" id="other" value="other">
                        <label class="form-check-label" for="other">
                            <strong>Lainnya</strong><br>
                            <small class="text-muted">Alasan lain yang membantu admin menjaga kualitas informasi</small>
                        </label>
                    </div>
                    <div class="report-reason-details" id="otherDetails">
                        <label class="form-label small mt-2">Jelaskan alasan pelaporan:</label>
                        <textarea class="form-control report-textarea" placeholder="Jelaskan mengapa postingan ini perlu diperbaiki atau dihapus..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" onclick="submitReport()">Kirim Laporan</button>
                </div>
            </div>
        </div>
    </div>

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="bookmarkToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="fas fa-bookmark text-primary me-2"></i>
                <strong class="me-auto">Tersimpan</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Post berhasil disimpan.
            </div>
        </div>
        
        <div id="reportToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="fas fa-flag text-success me-2"></i>
                <strong class="me-auto">Laporan Dikirim</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Terima kasih! Laporan Anda telah dikirim ke admin.
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 600,
            once: true,
            offset: 100
        });

        // Like functionality
        document.querySelectorAll('.like-btn').forEach(button => {
            button.addEventListener('click', function() {
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
            button.addEventListener('click', function(e) {
                e.stopPropagation();
                const menu = this.nextElementSibling;
                document.querySelectorAll('.post-options-menu').forEach(m => {
                    if (m !== menu) m.classList.remove('active');
                });
                menu.classList.toggle('active');
            });
        });

        // Improved click outside handler
        document.addEventListener('click', function(e) {
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
            radio.addEventListener('change', function() {
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
        document.getElementById('commentDialog').addEventListener('click', function(e) {
            if (e.target === this) {
                closeCommentDialog();
            }
        });

        // Allow Enter key to send comment (with Shift+Enter for new line)
        document.getElementById('commentInput').addEventListener('keydown', function(e) {
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
        document.getElementById('lightbox').addEventListener('click', function(e) {
            if (e.target === this) {
                closeLightbox();
            }
        });
        
        // Keyboard navigation for lightbox
        document.addEventListener('keydown', function(e) {
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
    </script>
</body>
</html>