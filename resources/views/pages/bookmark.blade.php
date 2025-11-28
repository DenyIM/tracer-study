<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookmark - Tracer Study UAD</title>
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
        
        /* Profile Dropdown Styles */
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
        
        .point-badge {
            background: linear-gradient(135deg, var(--accent-yellow), #ffc107);
            color: #000;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            display: inline-flex;
            align-items: center;
            margin-top: 5px;
        }
        
        .point-menu-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #f8f9fa;
            border-bottom: 1px solid #eaeaea;
        }
        
        .point-info {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .point-value {
            font-weight: 600;
            color: var(--primary-blue);
        }
        
        /* Bookmark Page Styles */
        .bookmark-header {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            padding: 40px 0;
            margin-bottom: 30px;
        }
        
        .bookmark-tabs {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin-bottom: 25px;
            overflow: hidden;
        }
        
        .nav-tabs {
            border-bottom: none;
            padding: 0 20px;
        }
        
        .nav-tabs .nav-link {
            border: none;
            padding: 15px 20px;
            font-weight: 600;
            color: #6c757d;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .nav-tabs .nav-link.active {
            color: var(--primary-blue);
            background: transparent;
        }
        
        .nav-tabs .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: var(--primary-blue);
            border-radius: 3px 3px 0 0;
        }
        
        .tab-content {
            padding: 20px;
        }
        
        /* Bookmark Card Styles */
        .bookmark-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            margin-bottom: 20px;
            overflow: hidden;
            border: 2px solid transparent;
        }
        
        .bookmark-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            border-color: var(--light-blue);
        }
        
        .bookmark-header-card {
            padding: 20px;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .bookmark-body {
            padding: 20px;
        }
        
        .bookmark-footer {
            padding: 15px 20px;
            background: #f8f9fa;
            border-top: 1px solid #eaeaea;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .post-actions {
            display: flex;
            gap: 15px;
        }
        
        .post-actions button {
            border: none;
            background: none;
            color: #6c757d;
            transition: color 0.3s ease;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .post-actions button:hover {
            color: var(--primary-blue);
        }
        
        .post-actions button.liked {
            color: #e74c3c;
        }
        
        .remove-bookmark-btn {
            background: none;
            border: none;
            color: #dc3545;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            padding: 5px;
        }
        
        .remove-bookmark-btn:hover {
            color: #c82333;
            transform: scale(1.1);
        }
        
        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #6c757d;
        }
        
        .empty-state i {
            font-size: 3rem;
            margin-bottom: 15px;
            color: #dee2e6;
        }
        
        /* Job Card Styles */
        .company-logo {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1rem;
        }
        
        .job-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin: 12px 0;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #6c757d;
            font-size: 0.85rem;
        }
        
        .skills-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-top: 12px;
        }
        
        .skill-tag {
            background: var(--light-blue);
            color: var(--primary-blue);
            padding: 3px 10px;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        .salary-badge {
            background: var(--light-yellow);
            color: #856404;
            padding: 4px 12px;
            border-radius: 15px;
            font-weight: 600;
            font-size: 0.8rem;
        }
        
        .deadline-badge {
            background: #ffe6e6;
            color: #dc3545;
            padding: 4px 10px;
            border-radius: 15px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        
        /* Footer Styles */
        .footer {
            background-color: var(--primary-blue);
            color: white;
            padding: 20px 0;
            margin-top: 5px;
            text-align: center;
        }
        
        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-out;
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
                            <a class="nav-link" href="/nav-kuesioner"><i class="fas fa-clipboard-list me-1"></i> Kuesioner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nav-leaderboard"><i class="fas fa-crown me-1"></i> Leaderboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nav-forum"><i class="fas fa-comments me-1"></i> Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nav-mentor"><i class="fas fa-chalkboard-teacher me-1"></i> Mentorship</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nav-lowongan"><i class="fas fa-briefcase me-1"></i> Lowongan Kerja</a>
                        </li>
                    </ul>
                    
                    <div class="d-flex align-items-center">
                        <button class="btn btn-warning btn-sm me-2" style="display: none;">
                            <i class="fas fa-plus-circle me-1"></i> Posting
                        </button>
                        
                        <!-- Notification Dropdown -->
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
                                <li class="point-menu-item">
                                    <div class="point-info">
                                        <i class="fas fa-coins text-warning"></i>
                                        <span class="point-value">15.250</span>
                                    </div>
                                    <small class="text-muted">Points</small>
                                </li>
                                <li class="profile-menu">
                                    <!-- MODIFIKASI: Profil Saya dipindah ke bawah point -->
                                    <a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profil Saya</a>
                                    <!-- MODIFIKASI: Hapus menu Point Saya -->
                                    <a class="dropdown-item active" href="nav-bookmark"><i class="fas fa-bookmark me-2"></i> Bookmark</a>
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
        <!-- Bookmark Header -->
        <div class="bookmark-header" data-aos="fade-down">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="display-5 fw-bold mb-3">Bookmark Saya</h1>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="hero-icon">
                            <i class="fas fa-bookmark" style="font-size: 6rem; opacity: 0.8;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Bookmark Tabs -->
            <div class="bookmark-tabs" data-aos="fade-up">
                <ul class="nav nav-tabs" id="bookmarkTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="forum-tab" data-bs-toggle="tab" data-bs-target="#forum" type="button" role="tab" aria-controls="forum" aria-selected="true">
                            <i class="fas fa-comments me-2"></i> Forum
                            <span class="badge bg-primary ms-2">8</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="jobs-tab" data-bs-toggle="tab" data-bs-target="#jobs" type="button" role="tab" aria-controls="jobs" aria-selected="false">
                            <i class="fas fa-briefcase me-2"></i> Lowongan Kerja
                            <span class="badge bg-primary ms-2">5</span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="bookmarkTabsContent">
                    <!-- Forum Bookmarks Tab -->
                    <div class="tab-pane fade show active" id="forum" role="tabpanel" aria-labelledby="forum-tab">
                        <div class="row">
                            <!-- Bookmarked Post 1 -->
                            <div class="col-lg-6 mb-4 fade-in">
                                <div class="bookmark-card">
                                    <div class="bookmark-header-card">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="user-avatar me-3">AD</div>
                                                <div>
                                                    <h6 class="mb-0">Admin UAD</h6>
                                                    <small class="text-muted">Administrator · 1 jam lalu</small>
                                                </div>
                                            </div>
                                            <button class="remove-bookmark-btn" onclick="removeBookmark('post1', 'forum')">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="bookmark-body">
                                        <h6 class="fw-bold mb-2">Pendaftaran Bootcamp Data Science UAD 2024</h6>
                                        <p class="mb-3 small text-muted">Pendaftaran Bootcamp Data Science UAD 2024 telah dibuka! Program ini terbuka untuk semua alumni UAD dengan latar belakang apapun.</p>
                                        
                                        <div class="post-actions">
                                            <button class="like-btn">
                                                <i class="far fa-heart"></i> <span>42</span>
                                            </button>
                                            <button class="comment-btn">
                                                <i class="far fa-comment"></i> <span>15</span>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="bookmark-footer">
                                        <span class="badge bg-primary">Pengumuman</span>
                                        <small class="text-muted">Disimpan 2 hari lalu</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Bookmarked Post 2 -->
                            <div class="col-lg-6 mb-4 fade-in">
                                <div class="bookmark-card">
                                    <div class="bookmark-header-card">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="user-avatar me-3">AD</div>
                                                <div>
                                                    <h6 class="mb-0">Admin UAD</h6>
                                                    <small class="text-muted">Administrator · 3 jam lalu</small>
                                                </div>
                                            </div>
                                            <button class="remove-bookmark-btn" onclick="removeBookmark('post2', 'forum')">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="bookmark-body">
                                        <h6 class="fw-bold mb-2">REUNI AKBAR ALUMNI UAD 2024</h6>
                                        <p class="mb-3 small text-muted">Hai para alumni UAD! Kami dengan senang hati mengundang Anda untuk menghadiri Reuni Akbar Alumni UAD 2024.</p>
                                        
                                        <div class="post-actions">
                                            <button class="like-btn">
                                                <i class="far fa-heart"></i> <span>67</span>
                                            </button>
                                            <button class="comment-btn">
                                                <i class="far fa-comment"></i> <span>23</span>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="bookmark-footer">
                                        <span class="badge bg-primary">Event Alumni</span>
                                        <small class="text-muted">Disimpan 1 hari lalu</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Empty State (akan muncul jika tidak ada bookmark) -->
                            <!--
                            <div class="col-12">
                                <div class="empty-state">
                                    <i class="far fa-bookmark"></i>
                                    <h5>Belum ada bookmark forum</h5>
                                    <p>Simpan postingan forum yang menarik untuk dilihat kembali nanti.</p>
                                    <a href="nav-forum" class="btn btn-primary mt-2">
                                        <i class="fas fa-comments me-2"></i> Jelajahi Forum
                                    </a>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
                    
                    <!-- Job Bookmarks Tab -->
                    <div class="tab-pane fade" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                        <div class="row">
                            <!-- Bookmarked Job 1 -->
                            <div class="col-lg-6 mb-4 fade-in">
                                <div class="bookmark-card">
                                    <div class="bookmark-header-card">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="company-logo me-3">BI</div>
                                                <div>
                                                    <h6 class="mb-0">Data Analyst</h6>
                                                    <p class="text-muted mb-0">Bank Indonesia</p>
                                                </div>
                                            </div>
                                            <button class="remove-bookmark-btn" onclick="removeBookmark('job1', 'jobs')">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="bookmark-body">
                                        <div class="job-meta">
                                            <div class="meta-item">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>Jakarta Pusat – On-site</span>
                                            </div>
                                            <div class="meta-item">
                                                <i class="fas fa-briefcase"></i>
                                                <span>Full Time</span>
                                            </div>
                                            <div class="meta-item">
                                                <i class="fas fa-clock"></i>
                                                <span>1-2 tahun</span>
                                            </div>
                                        </div>
                                        
                                        <p class="mb-3 small text-muted">Analisis data keuangan dan ekonomi untuk mendukung pengambilan keputusan strategis di bank sentral.</p>
                                        
                                        <div class="skills-tags">
                                            <span class="skill-tag">Python</span>
                                            <span class="skill-tag">SQL</span>
                                            <span class="skill-tag">Tableau</span>
                                            <span class="skill-tag">Statistics</span>
                                        </div>
                                    </div>
                                    
                                    <div class="bookmark-footer">
                                        <div class="d-flex gap-3">
                                            <div class="salary-badge">💰 8–12 juta</div>
                                            <div class="deadline-badge">
                                                <i class="fas fa-hourglass-end me-1"></i> 15 Des 2025
                                            </div>
                                        </div>
                                        <small class="text-muted">Disimpan 3 hari lalu</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Bookmarked Job 2 -->
                            <div class="col-lg-6 mb-4 fade-in">
                                <div class="bookmark-card">
                                    <div class="bookmark-header-card">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="company-logo me-3" style="background: linear-gradient(135deg, #28a745, #20c997);">TP</div>
                                                <div>
                                                    <h6 class="mb-0">UI/UX Designer</h6>
                                                    <p class="text-muted mb-0">Tokopedia</p>
                                                </div>
                                            </div>
                                            <button class="remove-bookmark-btn" onclick="removeBookmark('job2', 'jobs')">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="bookmark-body">
                                        <div class="job-meta">
                                            <div class="meta-item">
                                                <i class="fas fa-map-marker-alt"></i>
                                                <span>Jakarta – Remote</span>
                                            </div>
                                            <div class="meta-item">
                                                <i class="fas fa-briefcase"></i>
                                                <span>Full Time</span>
                                            </div>
                                            <div class="meta-item">
                                                <i class="fas fa-clock"></i>
                                                <span>3-5 tahun</span>
                                            </div>
                                        </div>
                                        
                                        <p class="mb-3 small text-muted">Mendesain pengalaman pengguna yang luar biasa untuk produk e-commerce terkemuka di Indonesia.</p>
                                        
                                        <div class="skills-tags">
                                            <span class="skill-tag">Figma</span>
                                            <span class="skill-tag">Adobe XD</span>
                                            <span class="skill-tag">User Research</span>
                                            <span class="skill-tag">Prototyping</span>
                                        </div>
                                    </div>
                                    
                                    <div class="bookmark-footer">
                                        <div class="d-flex gap-3">
                                            <div class="salary-badge">💰 10–15 juta</div>
                                            <div class="deadline-badge">
                                                <i class="fas fa-hourglass-end me-1"></i> 20 Jan 2026
                                            </div>
                                        </div>
                                        <small class="text-muted">Disimpan 1 minggu lalu</small>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Empty State (akan muncul jika tidak ada bookmark) -->
                            <!--
                            <div class="col-12">
                                <div class="empty-state">
                                    <i class="far fa-bookmark"></i>
                                    <h5>Belum ada lowongan tersimpan</h5>
                                    <p>Simpan lowongan kerja yang menarik untuk dilamar nanti.</p>
                                    <a href="nav-lowongan" class="btn btn-primary mt-2">
                                        <i class="fas fa-briefcase me-2"></i> Jelajahi Lowongan
                                    </a>
                                </div>
                            </div>
                            -->
                        </div>
                    </div>
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

        // Bookmark removal functionality
        function removeBookmark(itemId, type) {
            if (confirm('Apakah Anda yakin ingin menghapus bookmark ini?')) {
                // Dalam implementasi nyata, ini akan mengirim permintaan ke server
                console.log(`Menghapus bookmark ${itemId} dari ${type}`);
                
                // Animasi penghapusan
                const card = document.querySelector(`[onclick="removeBookmark('${itemId}', '${type}')"]`).closest('.bookmark-card');
                card.style.opacity = '0';
                card.style.transform = 'translateX(100px)';
                
                setTimeout(() => {
                    card.remove();
                    
                    // Perbarui jumlah bookmark di tab
                    updateBookmarkCount(type, -1);
                    
                    // Tampilkan pesan sukses
                    showToast('Bookmark berhasil dihapus', 'success');
                    
                    // Periksa apakah tab sekarang kosong
                    checkEmptyState(type);
                }, 300);
            }
        }
        
        // Update bookmark count in tabs
        function updateBookmarkCount(type, change) {
            const tabButton = document.querySelector(`#${type}-tab`);
            const badge = tabButton.querySelector('.badge');
            const currentCount = parseInt(badge.textContent);
            const newCount = Math.max(0, currentCount + change);
            badge.textContent = newCount;
        }
        
        // Check if a tab is empty and show empty state
        function checkEmptyState(type) {
            const tabContent = document.getElementById(type);
            const cards = tabContent.querySelectorAll('.bookmark-card');
            
            if (cards.length === 0) {
                // Hapus semua kartu yang ada
                tabContent.innerHTML = '';
                
                // Tambahkan state kosong
                const emptyState = document.createElement('div');
                emptyState.className = 'col-12';
                emptyState.innerHTML = `
                    <div class="empty-state">
                        <i class="far fa-bookmark"></i>
                        <h5>Belum ada bookmark ${type === 'forum' ? 'forum' : 'lowongan kerja'}</h5>
                        <p>Simpan ${type === 'forum' ? 'postingan forum' : 'lowongan kerja'} yang menarik untuk dilihat kembali nanti.</p>
                        <a href="nav-${type}" class="btn btn-primary mt-2">
                            <i class="fas fa-${type === 'forum' ? 'comments' : 'briefcase'} me-2"></i> Jelajahi ${type === 'forum' ? 'Forum' : 'Lowongan'}
                        </a>
                    </div>
                `;
                
                tabContent.appendChild(emptyState);
            }
        }
        
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
        
        // Toast notification function
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
            toast.addEventListener('hidden.bs.toast', function() {
                document.body.removeChild(toast);
            });
        }
    </script>
</body>
</html>