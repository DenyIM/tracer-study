<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuesioner - Tracer Study UAD</title>
    @vite(['resources/css/app.css', 'resources/css/main-kuesioner.css', 'resources/js/app.js', 'resources/js/main-kuesioner.js']) 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

</head>
<body>
    <!-- Navigation Header -->
    @include('layouts.header')

    <!-- Main Content -->
    <div class="main-content">
        <div class="container py-5">
            <!-- Header Section -->
            <div class="row mb-5">
                <div class="col-12 text-center" data-aos="fade-up">
                    <h1 class="fw-bold mb-3" style="color: var(--primary-blue);">Kuesioner Tracer Study</h1>
                    <p class="lead mb-4">Selesaikan kuesioner untuk membuka fitur-fitur keren lainnya</p>
                    
                    <!-- Progress Section -->
                    <div class="progress-section p-4 mx-auto" style="max-width: 600px;" data-aos="fade-up" data-aos-delay="100">
                        <div class="mb-3">
                            <h5 class="mb-1">Deny Iqbal</h5>
                            <p class="text-muted mb-3">Teknik Informatika 2018</p>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between mb-2">
                                <span class="fw-semibold">Progress Kuesioner</span>
                                <span class="fw-bold text-accent">50%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%"></div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <p class="text-muted mb-0">2 dari 4 kuesioner telah diselesaikan</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Questionnaire Cards -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="fw-bold mb-4 text-center" style="color: var(--primary-blue);" data-aos="fade-up">Daftar Kuesioner</h3>
                    
                    <div class="row g-4">
                        <!-- Kuesioner 1 -->
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <div class="questionnaire-card p-4 h-100 position-relative completed">
                                <div class="questionnaire-status">
                                    <span class="badge bg-success"><i class="fas fa-check me-1"></i> Selesai</span>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="questionnaire-number me-3">1</div>
                                    <div>
                                        <h4 class="fw-bold mb-1">Kuesioner 1</h4>
                                        <p class="text-muted mb-0">Data Diri & Pendidikan</p>
                                    </div>
                                </div>
                                <p class="mb-3">Kuesioner tentang informasi pribadi dan riwayat pendidikan di UAD.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="fas fa-check-circle me-1"></i> Telah diselesaikan</span>
                                    <button class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-eye me-1"></i> Lihat Hasil
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Kuesioner 2 -->
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                            <div class="questionnaire-card p-4 h-100 position-relative completed">
                                <div class="questionnaire-status">
                                    <span class="badge bg-success"><i class="fas fa-check me-1"></i> Selesai</span>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="questionnaire-number me-3">2</div>
                                    <div>
                                        <h4 class="fw-bold mb-1">Kuesioner 2</h4>
                                        <p class="text-muted mb-0">Pengalaman Kerja & Karir</p>
                                    </div>
                                </div>
                                <p class="mb-3">Kuesioner tentang pengalaman kerja setelah lulus dari UAD.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-success"><i class="fas fa-check-circle me-1"></i> Telah diselesaikan</span>
                                    <button class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-eye me-1"></i> Lihat Hasil
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Kuesioner 3 -->
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="questionnaire-card p-4 h-100 position-relative">
                                <div class="questionnaire-status">
                                    <span class="badge bg-warning"><i class="fas fa-lock me-1"></i> Terkunci</span>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="questionnaire-number me-3">3</div>
                                    <div>
                                        <h4 class="fw-bold mb-1">Kuesioner 3</h4>
                                        <p class="text-muted mb-0">Keterampilan & Kompetensi</p>
                                    </div>
                                </div>
                                <p class="mb-3">Kuesioner tentang keterampilan yang diperoleh selama kuliah dan pengembangannya.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-warning"><i class="fas fa-clock me-1"></i> Belum diselesaikan</span>
                                    <button class="btn btn-primary-custom btn-sm">
                                        <i class="fas fa-play me-1"></i> Mulai
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Kuesioner 4 -->
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="questionnaire-card p-4 h-100 position-relative">
                                <div class="questionnaire-status">
                                    <span class="badge bg-warning"><i class="fas fa-lock me-1"></i> Terkunci</span>
                                </div>
                                <div class="d-flex align-items-start mb-3">
                                    <div class="questionnaire-number me-3">4</div>
                                    <div>
                                        <h4 class="fw-bold mb-1">Kuesioner 4</h4>
                                        <p class="text-muted mb-0">Kepuasan & Saran</p>
                                    </div>
                                </div>
                                <p class="mb-3">Kuesioner tentang kepuasan terhadap pendidikan di UAD dan saran pengembangan.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-warning"><i class="fas fa-clock me-1"></i> Belum diselesaikan</span>
                                    <button class="btn btn-primary-custom btn-sm">
                                        <i class="fas fa-play me-1"></i> Mulai
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Feature Unlock Section -->
            <div class="row mb-5">
                <div class="col-12">
                    <h3 class="fw-bold mb-4 text-center" style="color: var(--primary-blue);" data-aos="fade-up">Fitur yang Akan Terbuka</h3>
                    <p class="text-center mb-5" data-aos="fade-up">Selesaikan kuesioner bagian 1 sampai 4 untuk membuka fitur-fitur eksklusif berikut:</p>
                    
                    <div class="row g-4">
                        <!-- Fitur 1 -->
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                            <div class="feature-card p-4 position-relative">
                                <div class="text-center">
                                    <div class="feature-icon mx-auto pulse-animation">
                                        <i class="fas fa-crown"></i>
                                    </div>
                                    <h5 class="fw-bold mb-3">Bagian 1</h5>
                                    <p class="mb-0">Membuka fitur Leadearboard dan kumpulkan point untuk mendapat keuntungan eksklusif</p>
                                </div>
                                <div class="mt-3 text-center">
                                    <span class="badge bg-success"><i class="fas fa-check me-1"></i> Terbuka</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Fitur 2 -->
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                            <div class="feature-card p-4 position-relative">
                                <div class="text-center">
                                    <div class="feature-icon mx-auto pulse-animation">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <h5 class="fw-bold mb-3">Bagian 2</h5>
                                    <p class="mb-0">Dapat mengakses Informasi terkait Event, Seminar, Diskusi dan lainnya di Forum Tracer Study UAD</p>
                                </div>
                                <div class="mt-3 text-center">
                                    <span class="badge bg-success"><i class="fas fa-check me-1"></i> Terbuka</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Fitur 3 -->
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                            <div class="feature-card p-4 position-relative feature-locked">
                                <div class="lock-icon">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="text-center">
                                    <div class="feature-icon mx-auto">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                    <h5 class="fw-bold mb-3">Bagian 3</h5>
                                    <p class="mb-0">Mengakses layanan Konsultasi terkait rencana karir dan bisnis dengan para Mentor via Email/WA</p>
                                </div>
                                <div class="mt-3 text-center">
                                    <span class="badge bg-warning"><i class="fas fa-lock me-1"></i> Kuesioner 3</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Fitur 4 -->
                        <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                            <div class="feature-card p-4 position-relative feature-locked">
                                <div class="lock-icon">
                                    <i class="fas fa-lock"></i>
                                </div>
                                <div class="text-center">
                                    <div class="feature-icon mx-auto">
                                        <i class="fas fa-briefcase"></i>
                                    </div>
                                    <h5 class="fw-bold mb-3">Bagian 4</h5>
                                    <p class="mb-0">Dapat mengakses informasi terkait Lowongan Kerja yang direkomendasikan oleh UAD</p>
                                </div>
                                <div class="mt-3 text-center">
                                    <span class="badge bg-warning"><i class="fas fa-lock me-1"></i> Kuesioner 4</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Motivation Section -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center p-5 rounded" style="background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue)); color: white;" data-aos="fade-up">
                        <h3 class="fw-bold mb-3">Selesaikan Kuesioner Yang Ada</h3>
                        <p class="lead mb-4">Untuk Membuka Fitur-Fitur Keren Lainnya</p>
                        <button class="btn btn-warning btn-lg">
                            <i class="fas fa-rocket me-2"></i> Lanjutkan Kuesioner Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('layouts.footer')

</body>
</html>