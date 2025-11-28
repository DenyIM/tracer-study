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
                            <a class="nav-link" href="nav-kuesioner"><i class="fas fa-clipboard-list me-1"></i> Kuesioner</a>
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
                                        <!-- MODIFIKASI: Tombol refresh dipindah ke atas -->
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
                        
                        <!-- MODIFIKASI: Profile Dropdown - IMPROVED -->
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