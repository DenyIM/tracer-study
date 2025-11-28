<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lowongan Kerja - Tracer Study UAD</title>
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
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            color: white;
            padding: 50px 0 30px 0;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="%23ffffff" opacity="0.1"><polygon points="0,0 1000,50 1000,100 0,100"/></svg>');
            background-size: cover;
        }
        
        .search-hero {
            background: white;
            border-radius: 15px;
            padding: 25px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            margin-top: -30px;
            position: relative;
            z-index: 10;
        }
        
        .quick-filter-section {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            margin-bottom: 25px;
            overflow: hidden;
        }
        
        .quick-filter-header {
            padding: 15px 20px;
            border-bottom: 1px solid #eaeaea;
            font-weight: 600;
            color: var(--primary-blue);
        }
        
        .quick-filter-body {
            padding: 20px;
        }
        
        .advanced-filter {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-top: 15px;
            display: none;
            animation: slideDown 0.3s ease-out;
        }
        
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .filter-group {
            margin-bottom: 15px;
        }
        
        .filter-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--primary-blue);
            font-size: 0.9rem;
        }
        
        .job-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            margin-bottom: 20px;
            overflow: hidden;
            cursor: pointer;
            border: 2px solid transparent;
        }
        
        .job-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            border-color: var(--light-blue);
        }
        
        .job-header {
            padding: 20px;
            border-bottom: 1px solid #f0f0f0;
        }
        
        .job-body {
            padding: 20px;
        }
        
        .job-footer {
            padding: 15px 20px;
            background: #f8f9fa;
            border-top: 1px solid #eaeaea;
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
        
        .bookmark-btn {
            background: none;
            border: none;
            color: #6c757d;
            font-size: 1.1rem;
            transition: all 0.3s ease;
            padding: 5px;
        }
        
        .bookmark-btn.active {
            color: var(--accent-yellow);
        }
        
        .bookmark-btn:hover {
            color: var(--accent-yellow);
            transform: scale(1.1);
        }
        
        .main-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .job-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .sort-options {
            background: white;
            border-radius: 10px;
            padding: 15px 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        
        .sort-btn {
            border: none;
            background: none;
            padding: 8px 15px;
            border-radius: 20px;
            margin-right: 10px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .sort-btn.active {
            background: var(--primary-blue);
            color: white;
        }
        
        .sort-btn:hover {
            background: var(--light-blue);
            color: var(--primary-blue);
        }
        
        @media (max-width: 768px) {
            .job-grid {
                grid-template-columns: 1fr;
            }
            
            .search-hero {
                margin-top: -20px;
                padding: 20px;
            }
            
            .job-meta {
                gap: 8px;
            }
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
                            <a class="nav-link" href="#"><i class="fas fa-clipboard-list me-1"></i> Kuesioner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-crown me-1"></i> Leadearboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-comments me-1"></i> Forum</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fas fa-chalkboard-teacher me-1"></i> Mentorship</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="fas fa-briefcase me-1"></i> Lowongan Kerja</a>
                        </li>
                    </ul>
                    
                    <!-- Right Navigation -->
                    <div class="d-flex align-items-center">
                        <button class="btn btn-warning btn-sm me-2" style="display: none;">
                            <i class="fas fa-plus-circle me-1"></i> Posting
                        </button>
                        
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

    <!-- Hero Section -->
    <section class="hero-section" data-aos="fade-down">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 fw-bold mb-3">Temukan Karir Impian Anda</h1>
                    <p class="lead mb-4">Jelajahi ribuan lowongan kerja eksklusif untuk alumni UAD. Temukan pekerjaan yang sesuai dengan passion dan keahlian Anda.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="hero-icon">
                        <i class="fas fa-search" style="font-size: 6rem; opacity: 0.8;"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container main-container">
        <div class="search-hero" data-aos="fade-up" data-aos-delay="100">
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="filter-group">
                        <label class="filter-label">🔍 Kata Kunci</label>
                        <input type="text" class="form-control" placeholder="Posisi, perusahaan, atau skill...">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="filter-group">
                        <label class="filter-label">💼 Posisi/Industri</label>
                        <select class="form-select">
                            <option value="">Semua Posisi</option>
                            <option value="it">Teknologi Informasi</option>
                            <option value="finance">Keuangan & Perbankan</option>
                            <option value="marketing">Pemasaran</option>
                            <option value="hrd">HR & Development</option>
                            <option value="engineering">Engineering</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="filter-group">
                        <label class="filter-label">📍 Lokasi</label>
                        <select class="form-select">
                            <option value="">Semua Lokasi</option>
                            <option value="jakarta">Jakarta</option>
                            <option value="bandung">Bandung</option>
                            <option value="yogyakarta">Yogyakarta</option>
                            <option value="surabaya">Surabaya</option>
                            <option value="remote">Remote</option>
                            <option value="hybrid">Hybrid</option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="row mt-3">
                <div class="col-12">
                    <button class="btn btn-link p-0 text-decoration-none" id="toggleAdvancedFilter">
                        <i class="fas fa-sliders-h me-2"></i> Pencarian Spesifik
                    </button>
                </div>
            </div>
            
            <div class="advanced-filter" id="advancedFilter">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="filter-group">
                            <label class="filter-label">🎓 Pendidikan Terakhir</label>
                            <select class="form-select">
                                <option value="">Semua Pendidikan</option>
                                <option value="d3">D3</option>
                                <option value="s1">S1</option>
                                <option value="s2">S2</option>
                                <option value="s3">S3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="filter-group">
                            <label class="filter-label">📚 Jurusan UAD</label>
                            <select class="form-select">
                                <option value="">Semua Jurusan</option>
                                <option value="informatika">Teknik Informatika</option>
                                <option value="sipil">Teknik Sipil</option>
                                <option value="elektro">Teknik Elektro</option>
                                <option value="manajemen">Manajemen</option>
                                <option value="akuntansi">Akuntansi</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="filter-group">
                            <label class="filter-label">💰 Range Gaji</label>
                            <select class="form-select">
                                <option value="">Semua Range</option>
                                <option value="0-3">Rp 0 - 3 juta</option>
                                <option value="3-6">Rp 3 - 6 juta</option>
                                <option value="6-10">Rp 6 - 10 juta</option>
                                <option value="10-15">Rp 10 - 15 juta</option>
                                <option value="15+">> Rp 15 juta</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="filter-group">
                            <label class="filter-label">🛠️ Skill</label>
                            <select class="form-select">
                                <option value="">Semua Skill</option>
                                <option value="programming">Programming</option>
                                <option value="design">Design</option>
                                <option value="analytics">Data Analytics</option>
                                <option value="management">Management</option>
                                <option value="marketing">Digital Marketing</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="filter-group">
                            <label class="filter-label">⏳ Pengalaman</label>
                            <select class="form-select">
                                <option value="">Semua Level</option>
                                <option value="freshgraduate">Fresh Graduate</option>
                                <option value="1-3">1-3 Tahun</option>
                                <option value="3-5">3-5 Tahun</option>
                                <option value="5+">> 5 Tahun</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="filter-group">
                            <label class="filter-label">🕒 Tipe Pekerjaan</label>
                            <select class="form-select">
                                <option value="">Semua Tipe</option>
                                <option value="fulltime">Full Time</option>
                                <option value="parttime">Part Time</option>
                                <option value="internship">Internship</option>
                                <option value="kontrak">Kontrak</option>
                                <option value="freelance">Freelance</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <button class="btn btn-primary-custom btn-lg px-5">
                        <i class="fas fa-search me-2"></i> Cari Lowongan
                    </button>
                </div>
            </div>
        </div>

        <div class="sort-options" data-aos="fade-up" data-aos-delay="150">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <span class="fw-bold me-3">Urutkan berdasarkan:</span>
                    <button class="sort-btn active" data-sort="popular">Terpopuler</button>
                    <button class="sort-btn" data-sort="newest">Terbaru</button>
                    <button class="sort-btn" data-sort="oldest">Terlama</button>
                </div>
                <div class="text-muted">
                    <span id="jobCount">1245</span> lowongan ditemukan
                </div>
            </div>
        </div>

        <div class="job-grid">
            <div class="job-card" data-aos="fade-up" data-aos-delay="200" onclick="viewJobDetail(1)">
                <div class="job-header">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex align-items-center">
                            <div class="company-logo me-3">MJ</div>
                            <div>
                                <h5 class="fw-bold mb-1">Software Engineer</h5>
                                <p class="text-muted mb-0">PT Maju Jaya Teknologi</p>
                            </div>
                        </div>
                        <button class="bookmark-btn" onclick="event.stopPropagation(); toggleBookmark(this)">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                </div>
                
                <div class="job-body">
                    <div class="job-meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jakarta Selatan – Hybrid</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i>
                            <span>Full Time</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <span>2-3 tahun</span>
                        </div>
                    </div>
                    
                    <p class="mb-3 small text-muted">Kami mencari Software Engineer yang berpengalaman dalam pengembangan aplikasi web menggunakan Laravel dan MySQL.</p>
                    
                    <div class="skills-tags">
                        <span class="skill-tag">Laravel</span>
                        <span class="skill-tag">MySQL</span>
                        <span class="skill-tag">API</span>
                        <span class="skill-tag">JavaScript</span>
                    </div>
                </div>
                
                <div class="job-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-3">
                            <div class="salary-badge">💰 6–10 juta</div>
                            <div class="deadline-badge">
                                <i class="fas fa-hourglass-end me-1"></i> 30 Nov 2025
                            </div>
                        </div>
                        <span class="text-muted small">🔍 245 dilihat</span>
                    </div>
                </div>
            </div>

            <div class="job-card" data-aos="fade-up" data-aos-delay="250" onclick="viewJobDetail(2)">
                <div class="job-header">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex align-items-center">
                            <div class="company-logo me-3" style="background: linear-gradient(135deg, #28a745, #20c997);">BI</div>
                            <div>
                                <h5 class="fw-bold mb-1">Data Analyst</h5>
                                <p class="text-muted mb-0">Bank Indonesia</p>
                            </div>
                        </div>
                        <button class="bookmark-btn active" onclick="event.stopPropagation(); toggleBookmark(this)">
                            <i class="fas fa-bookmark"></i>
                        </button>
                    </div>
                </div>
                
                <div class="job-body">
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
                
                <div class="job-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-3">
                            <div class="salary-badge">💰 8–12 juta</div>
                            <div class="deadline-badge">
                                <i class="fas fa-hourglass-end me-1"></i> 15 Des 2025
                            </div>
                        </div>
                        <span class="text-muted small">🔍 189 dilihat</span>
                    </div>
                </div>
            </div>

            <!-- Job Card 3 -->
            <div class="job-card" data-aos="fade-up" data-aos-delay="300" onclick="viewJobDetail(3)">
                <div class="job-header">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex align-items-center">
                            <div class="company-logo me-3" style="background: linear-gradient(135deg, #dc3545, #e83e8c);">TP</div>
                            <div>
                                <h5 class="fw-bold mb-1">UI/UX Designer</h5>
                                <p class="text-muted mb-0">Tokopedia</p>
                            </div>
                        </div>
                        <button class="bookmark-btn" onclick="event.stopPropagation(); toggleBookmark(this)">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                </div>
                
                <div class="job-body">
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
                
                <div class="job-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-3">
                            <div class="salary-badge">💰 10–15 juta</div>
                            <div class="deadline-badge">
                                <i class="fas fa-hourglass-end me-1"></i> 20 Jan 2026
                            </div>
                        </div>
                        <span class="text-muted small">🔍 312 dilihat</span>
                    </div>
                </div>
            </div>

            <div class="job-card" data-aos="fade-up" data-aos-delay="350" onclick="viewJobDetail(4)">
                <div class="job-header">
                    <div class="d-flex justify-content-between align-items-start">
                        <div class="d-flex align-items-center">
                            <div class="company-logo me-3" style="background: linear-gradient(135deg, #6f42c1, #d63384);">GP</div>
                            <div>
                                <h5 class="fw-bold mb-1">Product Manager</h5>
                                <p class="text-muted mb-0">GoPay</p>
                            </div>
                        </div>
                        <button class="bookmark-btn" onclick="event.stopPropagation(); toggleBookmark(this)">
                            <i class="far fa-bookmark"></i>
                        </button>
                    </div>
                </div>
                
                <div class="job-body">
                    <div class="job-meta">
                        <div class="meta-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Jakarta – Hybrid</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-briefcase"></i>
                            <span>Full Time</span>
                        </div>
                        <div class="meta-item">
                            <i class="fas fa-clock"></i>
                            <span>4-6 tahun</span>
                        </div>
                    </div>
                    
                    <p class="mb-3 small text-muted">Memimpin pengembangan produk fintech inovatif untuk jutaan pengguna di Indonesia.</p>
                    
                    <div class="skills-tags">
                        <span class="skill-tag">Product Strategy</span>
                        <span class="skill-tag">Agile</span>
                        <span class="skill-tag">Data Analysis</span>
                        <span class="skill-tag">Stakeholder Mgmt</span>
                    </div>
                </div>
                
                <div class="job-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="d-flex gap-3">
                            <div class="salary-badge">💰 15–25 juta</div>
                            <div class="deadline-badge">
                                <i class="fas fa-hourglass-end me-1"></i> 10 Des 2025
                            </div>
                        </div>
                        <span class="text-muted small">🔍 421 dilihat</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mb-5" data-aos="fade-up">
            <button class="btn btn-outline-primary btn-lg">
                <i class="fas fa-redo me-2"></i> Muat Lebih Banyak Lowongan
            </button>
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

        // Toggle Advanced Filter
        document.getElementById('toggleAdvancedFilter').addEventListener('click', function() {
            const advancedFilter = document.getElementById('advancedFilter');
            const icon = this.querySelector('i');
            
            if (advancedFilter.style.display === 'block') {
                advancedFilter.style.display = 'none';
                icon.className = 'fas fa-sliders-h me-2';
            } else {
                advancedFilter.style.display = 'block';
                icon.className = 'fas fa-times me-2';
            }
        });

        // Bookmark functionality
        function toggleBookmark(button) {
            const icon = button.querySelector('i');
            if (icon.classList.contains('far')) {
                icon.classList.remove('far');
                icon.classList.add('fas');
                button.classList.add('active');
            } else {
                icon.classList.remove('fas');
                icon.classList.add('far');
                button.classList.remove('active');
            }
        }

        // Sort functionality
        document.querySelectorAll('.sort-btn').forEach(button => {
            button.addEventListener('click', function() {
                document.querySelectorAll('.sort-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                this.classList.add('active');
                
                // Here you would implement actual sorting logic
                const sortType = this.getAttribute('data-sort');
                console.log('Sorting by:', sortType);
            });
        });

        // View job detail (simulated)
        function viewJobDetail(jobId) {
            // In real implementation, this would navigate to job detail page
            console.log('Viewing job detail for ID:', jobId);
            alert(`Membuka detail lowongan ID: ${jobId}\n\nDalam implementasi nyata, ini akan mengarahkan ke halaman detail lowongan kerja.`);
        }

        // Simulate job count
        document.getElementById('jobCount').textContent = '1.245';

    </script>
</body>
</html>