<?php include 'includes/header.php' ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">

            <div class="page-header">
                <div class="d-flex align-items-center mb-4">
                    <div class="status-dot me-2"></div>
                    <h1 class="page-title">My Projects</h1>
                </div>
                <p class="page-subtitle">A showcase of my work in cybersecurity, web development, and other systems.</p>
            </div>

            <div class="project-categories mb-5">
                <button class="category-btn active" data-category="all">
                    <i class="fas fa-th me-2"></i>
                    All Projects
                </button>
                <button class="category-btn" data-category="web">
                    <i class="fas fa-code me-2"></i>
                    Web Development
                </button>
                <button class="category-btn" data-category="security">
                    <i class="fas fa-shield-alt me-2"></i>
                    Cybersecurity
                </button>
                <button class="category-btn" data-category="other">
                    <i class="fas fa-cogs me-2"></i>
                    Other
                </button>
            </div>

            <div class="projects-grid">

                <div class="project-card-detailed" data-category="web">
                    <div class="project-image">
                        <img src="assets/img/screenshots/mytutor.png" alt="MyTutor Platform">
                        <div class="project-overlay">
                            <div class="project-links">
                                <a href="https://mytutorzm.com" class="project-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <button class="project-link" data-bs-toggle="modal" data-bs-target="#mytutorModal">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-header">
                            <div class="project-icon">
                                <i class="fas fa-graduation-cap"></i>
                            </div>
                            <div class="project-meta">
                                <h3 class="project-title">MyTutor</h3>
                                <span class="project-category">Web Development</span>
                            </div>
                        </div>
                        <p class="project-description">
                            A comprehensive peer-to-peer tutoring platform that connects students for collaborative learning. Features include user authentication, session scheduling, payment integration, and real-time messaging.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Bootstrap</span>
                            <span class="tech-tag">JavaScript</span>
                            <span class="tech-tag">Payment Gateways</span>
                        </div>
                    </div>
                </div>

                <div class="project-card-detailed" data-category="other">
                    <div class="project-image">
                        <img src="assets/img/screenshots/pos.jpeg" alt="Class Register System">
                        <div class="project-overlay">
                            <div class="project-links">
                                <button class="project-link" data-bs-toggle="modal" data-bs-target="#posModal">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-header">
                            <div class="project-icon register-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="project-meta">
                                <h3 class="project-title">POS System</h3>
                                <span class="project-category">web | Desktop </span>
                            </div>
                        </div>
                        <p class="project-description">
                            The system allows businesses to process sales, track inventory, and generate financial reports, invoices, quotations and delivery notes efficiently.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">Livewire</span>
                            <span class="tech-tag">SQLite</span>
                        </div>
                    </div>
                </div>

                <div class="project-card-detailed" data-category="other">
                    <div class="project-image">
                        <img src="assets/img/screenshots/ytdown.png" alt="YTDown">
                        <div class="project-overlay">
                            <div class="project-links">
                                <!-- <a href="#" class="project-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link">
                                    <i class="fab fa-github"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-header">
                            <div class="project-icon">
                                <i class="fa-brands fa-square-youtube"></i>
                            </div>
                            <div class="project-meta">
                                <h3 class="project-title">YouTube Downloader (CLI)</h3>
                                <span class="project-category">Comand Line</span>
                            </div>
                        </div>
                        <p class="project-description">
                            Advanced YouTube downloader that allow to download single and playlist YouTube videos
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">Yt-dlp</span>
                        </div>
                    </div>
                </div>

                <div class="project-card-detailed" data-category="other">
                    <div class="project-image">
                        <img src="assets/img/screenshots/ytdown-gui.png" alt="ytdown">
                        <div class="project-overlay">
                            <div class="project-links">
                                <!-- <a href="#" class="project-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-header">
                            <div class="project-icon">
                                <i class="fa-brands fa-square-youtube"></i>
                            </div>
                            <div class="project-meta">
                                <h3 class="project-title">youtube downloader (GUI)</h3>
                                <span class="project-category">Desktop</span>
                            </div>
                        </div>
                        <p class="project-description">
                            Advanced GUI YouTube downloader that allow to download single and playlist YouTube videos.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">python</span>
                            <span class="tech-tag">Custom Tkinter</span>
                            <span class="tech-tag">yt-dlp</span>
                        </div>
                    </div>
                </div>

                <div class="project-card-detailed" data-category="web">
                    <div class="project-image">
                        <img src="assets/img/screenshots/baz2.png" alt="baz">
                        <div class="project-overlay">
                            <div class="project-links">
                                <button class="project-link" data-bs-toggle="modal" data-bs-target="#bazModal">
                                    <i class="fa-solid fa-eye"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-header">
                            <div class="project-icon">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <div class="project-meta">
                                <h3 class="project-title">BAZ</h3>
                                <span class="project-category">Web Development</span>
                            </div>
                        </div>
                        <p class="project-description">
                            A responsive website for badminton enthusiasts, offering news and event listings.
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Bootstrap</span>
                        </div>
                    </div>
                </div>

                <div class="project-card-detailed" data-category="security">
                    <div class="project-image">
                        <img src="assets/img/screenshots/ips.png" alt="IP">
                        <div class="project-overlay">
                            <div class="project-links">
                                <!-- <a href="#" class="project-link">
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                                <a href="#" class="project-link">
                                    <i class="fab fa-github"></i>
                                </a> -->
                            </div>
                        </div>
                    </div>
                    <div class="project-content">
                        <div class="project-header">
                            <div class="project-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="project-meta">
                                <h3 class="project-title">IPS | IDS</h3>
                                <span class="project-category">Desktop | Web</span>
                            </div>
                        </div>
                        <p class="project-description">
                            A <strong>comprehensive cybersecurity solution</strong> combining <strong>Intrusion Prevention System (IPS)</strong> and <strong>Intrusion Detection System (IDS)</strong> capabilities.
                            <strong>Key Features:</strong>Real-time threat detection & blocking,Network traffic analysis,Automated alerts & incident response,Web-based dashboard for monitoring,Cross-platform compatibility (Windows/Linux)
                            <br><br>
                        </p>
                        <div class="project-tech">
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">Flask</span>
                            <span class="tech-tag">Scapy</span>
                            <span class="tech-tag">Bootstrap</span>
                            <span class="tech-tag">JavaScript</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/modals.php' ?>
<?php include 'includes/footer.php' ?>