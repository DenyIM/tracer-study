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
        
        .bookmark-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            margin-bottom: 20px;
            overflow: hidden;
            border: 2px solid transparent;
            position: relative;
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
        
        .empty-state-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 400px;
            padding: 40px 20px;
        }
        
        .empty-state {
            text-align: center;
            max-width: 500px;
            padding: 50px 30px;
            background: white;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            border: 2px dashed #e9ecef;
            transition: all 0.3s ease;
        }
        
        .empty-state:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.12);
            border-color: var(--light-blue);
        }
        
        .empty-state-icon {
            font-size: 5rem;
            margin-bottom: 25px;
            color: #dee2e6;
            position: relative;
            display: inline-block;
        }
        
        .empty-state-icon::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            background: var(--light-blue);
            border-radius: 50%;
            z-index: -1;
            opacity: 0.5;
        }
        
        .empty-state h4 {
            color: var(--primary-blue);
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .empty-state p {
            color: #6c757d;
            font-size: 1.1rem;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        
        .empty-state-actions {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .empty-state-btn {
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            transition: all 0.3s ease;
            text-decoration: none;
        }
        
        .empty-state-btn-primary {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            border: none;
        }
        
        .empty-state-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 51, 102, 0.3);
            color: white;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .empty-state-icon {
            animation: float 3s ease-in-out infinite;
        }
        
        @media (max-width: 768px) {
            .empty-state {
                padding: 40px 20px;
            }
            
            .empty-state-icon {
                font-size: 4rem;
            }
            
            .empty-state-actions {
                flex-direction: column;
                align-items: center;
            }
            
            .empty-state-btn {
                width: 100%;
                max-width: 250px;
                justify-content: center;
            }
        }
        
        .empty-state-appear {
            animation: fadeInUp 0.6s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
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
        
        .footer {
            background-color: var(--primary-blue);
            color: white;
            padding: 20px 0;
            margin-top: 5px;
            text-align: center;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .fade-in {
            animation: fadeIn 0.5s ease-out;
        }
        
        .bookmark-card.removing {
            transform: translateX(100%);
            opacity: 0;
            transition: all 0.4s ease;
            margin-bottom: 0;
            height: 0;
            overflow: hidden;
        }
        
        .bookmark-card.sliding-up {
            transform: translateY(-10%);
            transition: transform 0.4s ease;
        }
    </style>
</head>
<body>
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
                                    <a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i> Profil Saya</a>
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

    <div class="main-content">
        <div class="bookmark-header" data-aos="fade-down">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h1 class="display-5 fw-bold mb-3">Bookmark Saya</h1>
                        <p class="lead mb-0">Kelola dan akses konten yang telah Anda simpan dengan mudah</p>
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
            <div class="bookmark-tabs" data-aos="fade-up">
                <ul class="nav nav-tabs" id="bookmarkTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="forum-tab" data-bs-toggle="tab" data-bs-target="#forum" type="button" role="tab" aria-controls="forum" aria-selected="true">
                            <i class="fas fa-comments me-2"></i> Forum
                            <span class="badge bg-primary ms-2" id="forum-count">3</span>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="jobs-tab" data-bs-toggle="tab" data-bs-target="#jobs" type="button" role="tab" aria-controls="jobs" aria-selected="false">
                            <i class="fas fa-briefcase me-2"></i> Lowongan Kerja
                            <span class="badge bg-primary ms-2" id="jobs-count">2</span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="bookmarkTabsContent">
                    <div class="tab-pane fade show active" id="forum" role="tabpanel" aria-labelledby="forum-tab">
                        <div class="row" id="forum-bookmarks">
                            <div class="col-lg-6 mb-4 fade-in" id="post1">
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
                            
                            <div class="col-lg-6 mb-4 fade-in" id="post2">
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
                            
                            <div class="col-lg-6 mb-4 fade-in" id="post3">
                                <div class="bookmark-card">
                                    <div class="bookmark-header-card">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <div class="d-flex align-items-center">
                                                <div class="user-avatar me-3">AD</div>
                                                <div>
                                                    <h6 class="mb-0">Admin UAD</h6>
                                                    <small class="text-muted">Administrator · 5 jam lalu</small>
                                                </div>
                                            </div>
                                            <button class="remove-bookmark-btn" onclick="removeBookmark('post3', 'forum')">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="bookmark-body">
                                        <h6 class="fw-bold mb-2">Workshop Kewirausahaan untuk Alumni</h6>
                                        <p class="mb-3 small text-muted">Bergabunglah dalam workshop kewirausahaan khusus alumni UAD untuk mengembangkan keterampilan bisnis Anda.</p>
                                        
                                        <div class="post-actions">
                                            <button class="like-btn">
                                                <i class="far fa-heart"></i> <span>35</span>
                                            </button>
                                            <button class="comment-btn">
                                                <i class="far fa-comment"></i> <span>12</span>
                                            </button>
                                        </div>
                                    </div>
                                    
                                    <div class="bookmark-footer">
                                        <span class="badge bg-primary">Workshop</span>
                                        <small class="text-muted">Disimpan 3 hari lalu</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="jobs" role="tabpanel" aria-labelledby="jobs-tab">
                        <div class="row" id="jobs-bookmarks">
                            <div class="col-lg-6 mb-4 fade-in" id="job1">
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
                            
                            <div class="col-lg-6 mb-4 fade-in" id="job2">
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

        // Bookmark removal functionality with sliding animation
        function removeBookmark(itemId, type) {
            if (confirm('Apakah Anda yakin ingin menghapus bookmark ini?')) {
                // Dalam implementasi nyata, ini akan mengirim permintaan ke server
                console.log(`Menghapus bookmark ${itemId} dari ${type}`);
                
                // Perbaikan: Gunakan selector yang benar untuk container jobs
                const containerId = type === 'forum' ? 'forum-bookmarks' : 'jobs-bookmarks';
                const container = document.getElementById(containerId);
                const cardToRemove = document.getElementById(itemId);
                
                if (!container || !cardToRemove) {
                    console.error('Container atau card tidak ditemukan');
                    return;
                }
                
                const cards = Array.from(container.querySelectorAll('.col-lg-6'));
                const indexToRemove = cards.indexOf(cardToRemove);
                
                if (indexToRemove === -1) return;
                
                // Animasi penghapusan untuk kartu yang dihapus
                const cardElement = cardToRemove.querySelector('.bookmark-card');
                cardElement.classList.add('removing');
                
                // Setelah animasi penghapusan selesai, hapus elemen
                setTimeout(() => {
                    cardToRemove.remove();
                    
                    // Animasikan kartu yang tersisa untuk bergeser ke atas
                    animateRemainingCards(cards, indexToRemove, container);
                    
                    // Perbarui jumlah bookmark di tab
                    updateBookmarkCount(type, -1);
                    
                    // Tampilkan pesan sukses
                    showToast('Bookmark berhasil dihapus', 'success');
                    
                    // Periksa apakah tab sekarang kosong
                    checkEmptyState(type);
                }, 400);
            }
        }
        
        // Animate remaining cards to slide up
        function animateRemainingCards(cards, removedIndex, container) {
            // Mulai dari kartu setelah yang dihapus
            for (let i = removedIndex + 1; i < cards.length; i++) {
                const card = cards[i];
                const cardElement = card.querySelector('.bookmark-card');
                
                // Tambahkan kelas animasi
                cardElement.classList.add('sliding-up');
                
                // Setelah animasi selesai, hapus kelas animasi
                setTimeout(() => {
                    cardElement.classList.remove('sliding-up');
                }, 400);
            }
        }
        
        // Update bookmark count in tabs
        function updateBookmarkCount(type, change) {
            const countElement = document.getElementById(`${type}-count`);
            if (countElement) {
                const currentCount = parseInt(countElement.textContent);
                const newCount = Math.max(0, currentCount + change);
                countElement.textContent = newCount;
            }
        }
        
        // Check if a tab is empty and show empty state
        function checkEmptyState(type) {
            // Perbaikan: Gunakan selector yang benar untuk container jobs
            const containerId = type === 'forum' ? 'forum-bookmarks' : 'jobs-bookmarks';
            const container = document.getElementById(containerId);
            
            if (!container) return;
            
            const cards = container.querySelectorAll('.col-lg-6');
            
            if (cards.length === 0) {
                // Hapus semua kartu yang ada
                container.innerHTML = '';
                
                // Tambahkan state kosong
                const emptyStateContainer = document.createElement('div');
                emptyStateContainer.className = 'col-12 empty-state-container';
                
                const emptyState = document.createElement('div');
                emptyState.className = 'empty-state empty-state-appear';
                
                const typeText = type === 'forum' ? 'forum' : 'lowongan kerja';
                const typeIcon = type === 'forum' ? 'comments' : 'briefcase';
                const typeAction = type === 'forum' ? 'postingan forum' : 'lowongan kerja';
                
                emptyState.innerHTML = `
                    <div class="empty-state-icon">
                        <i class="far fa-bookmark"></i>
                    </div>
                    <h4>Belum ada bookmark ${typeText}</h4>
                    <p>Simpan ${typeAction} yang menarik untuk dilihat kembali nanti. Bookmark membantu Anda mengorganisir konten favorit dengan mudah.</p>
                    
                    <div class="empty-state-actions">
                        <a href="nav-${type}" class="empty-state-btn empty-state-btn-primary">
                            <i class="fas fa-${typeIcon} me-2"></i> Jelajahi ${type === 'forum' ? 'Forum' : 'Lowongan Kerja'}
                        </a>
                    </div>
                `;
                
                emptyStateContainer.appendChild(emptyState);
                container.appendChild(emptyStateContainer);
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

// Muat notifikasi saat halaman pertama kali dimuat
document.addEventListener('DOMContentLoaded', loadNotifications);
    </script>
</body>
</html>