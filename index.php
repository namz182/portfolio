<?php include 'includes/header.php' ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="hero-card mb-4">
                <div class="bg-pattern">
                    <div class="pattern-circle pattern-1"></div>
                    <div class="pattern-circle pattern-2"></div>
                </div>

                <div class="card-content">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="d-flex align-items-center">
                            <div class="status-dot"></div>
                            <span class="status-text">Cybersecurity Expert</span>
                        </div>
                        <div class="availability-badge">
                            <div class="availability-dot"></div>
                            AVAILABLE FOR WORK
                        </div>
                    </div>

                    <div class="container d-flex justify-content-center">
                        <div class="row align-items-start mb-4">
                            <div class="col-12 col-md-12 col-lg-8 mb-4">
                                <h1 class="hero-title font">Mainza Namangani</h1>

                                <div class="typing-container mb-3">
                                    <span id="typed-text"></span>
                                </div>

                                <p class="hero-subtitle">Passionate about security and innovative solutions.</p>
                            </div>
                            <div class="col-12 col-md-12 col-lg-4 d-flex justify-content-center">
                                <div class="profile-image">
                                    <img src="assets/img/namz.jpg" alt="Mainza Namangani" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="social-section">
                        <div class="social-links">
                            <a href="https://www.linkedin.com/in/mainza-namangani-7768b8307/?lipi=urn%3Ali%3Apage%3Ad_flagship3_feed%3BO1UHTjTlRhuqt8sHdJotqQ%3D%3D"
                                target="_blank" class="social-link" title="LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://github.com/namz182" target="_blank" class="social-link" title="GitHub">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="https://www.instagram.com/mainamz/" target="_blank" class="social-link"
                                title="Twitter">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                        <a href="assets/files/Mainza Namangani CV.pdf" download="Mainza Namangani CV"
                            class="btn-primary" style="text-decoration: none;">
                            <i class="fas fa-download me-2"></i>
                            Download Resume
                        </a>
                    </div>
                </div>
            </div>

            <div class="content-section">
                <h2 class="section-heading">
                    <i class="fas fa-user-circle me-2"></i>
                    My Story
                </h2>
                <p class="content-text">
                    My journey into technology began with a curiosity about how digital systems work and how to
                    protect them from threats.
                </p>
                <p class="content-text">
                    I specialize in penetration testing, security awareness, and building secure web applications.
                </p>
            </div>


            <div class="certifications-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <div class="status-dot me-2"></div>
                        <span class="section-title">Certifications</span>
                    </div>
                </div>

                <div id="certificationsCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/ethical-hacker.png" alt="Google Cybersecurity Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Ethical Hacker</h4>
                                    <p>Trained in cybersecurity principles, threat analysis, and ethical hacking
                                        methodologies.</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/net-defense.png" alt="Fullstack PHP Training Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Network Defense</h4>
                                    <p>Learned network protection strategies, firewalls, intrusion prevention, and
                                        incident response.</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/cyber-threat.png" alt="Fullstack PHP Training Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Cyber Threat Management</h4>
                                    <p>Learned how to manage cyber threats.</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/os.png" alt="Fullstack PHP Training Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Operating system concepts</h4>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/net-basics.png" alt="Fullstack PHP Training Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Networking basics</h4>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/endpoint.png" alt="Fullstack PHP Training Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>EndPoint Security</h4>
                                    <p>Learned how to secure Endpoints.</p>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="cert-image-container">
                                <img src="assets/img/Certs/python.png" alt="Penetration Testing Certificate"
                                    class="cert-image">
                                <div class="cert-overlay">
                                    <h4>Python for Security</h4>
                                    <p>Utilized Python to develop security tools and perform ethical hacking
                                        assessments.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#certificationsCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#certificationsCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>
                </div>
            </div>

            <div class="skills-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <div class="status-dot me-2"></div>
                        <span class="section-title">Skills</span>
                    </div>
                </div>

                <div class="skills-grid">
                    <div class="skill-category">
                        <h4 class="skill-category-title">
                            <i class="fas fa-code me-2"></i>
                            Technical & Development
                        </h4>
                        <div class="skills-list">
                            <div class="skill-group">
                                <h5>Languages</h5>
                                <div class="skill-tags">
                                    <span class="skill-tag">Python</span>
                                    <span class="skill-tag">PHP</span>
                                    <span class="skill-tag">Java</span>
                                    <span class="skill-tag">SQL</span>
                                    <span class="skill-tag">HTML/CSS</span>
                                    <span class="skill-tag">JavaScript</span>
                                    <span class="skill-tag">C++</span>
                                </div>
                            </div>
                            <div class="skill-group">
                                <h5>Frameworks & Tools</h5>
                                <div class="skill-tags">
                                    <span class="skill-tag">Laravel</span>
                                    <span class="skill-tag">Livewire</span>
                                    <span class="skill-tag">Flask</span>
                                    <span class="skill-tag">Bootstrap</span>
                                    <span class="skill-tag">React</span>
                                    <span class="skill-tag">Git</span>

                                </div>
                            </div>
                            <div class="skill-group">
                                <h5>Databases</h5>
                                <div class="skill-tags">
                                    <span class="skill-tag">MySQL</span>
                                    <span class="skill-tag">SQLite</span>
                                    <span class="skill-tag">MariaDB</span>
                                    <span class="skill-tag">PostgreSQL</span>
                                    <span class="skill-tag">MongoDB</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="skill-category">
                        <h4 class="skill-category-title">
                            <i class="fas fa-shield-alt me-2"></i>
                            Cybersecurity
                        </h4>
                        <div class="skills-list">
                            <div class="skill-group">
                                <h5>Core Skills</h5>
                                <div class="skill-tags">
                                    <span class="skill-tag">Penetration Testing</span>
                                    <span class="skill-tag">Security Awareness</span>
                                    <span class="skill-tag">Networking</span>
                                    <span class="skill-tag">Cryptography</span>
                                    <span class="skill-tag">Digital Forensics</span>
                                    <span class="skill-tag">Kali linux</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="projects-section mb-5">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="d-flex align-items-center">
                        <div class="status-dot me-2"></div>
                        <span class="section-title">Recent Projects</span>
                    </div>
                    <a href="projects.php" class="view-all-btn">
                        View All
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>

                <div class="projects-list">
                    <div class="project-card">
                        <a href="https://mytutorzm.com" target="_blank" style="text-decoration: none;">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <div class="project-icon mytutor-icon">
                                        <i class="fas fa-graduation-cap"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h3 class="project-name">MyTutor</h3>
                                        <p class="project-desc">Peer to peer tutoring platform</p>
                                    </div>
                                </div>
                                <i class="fas fa-arrow-right project-arrow"></i>
                            </div>
                        </a>
                    </div>

                    <div class="project-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="project-icon register-icon">
                                    <i class="fas fa-clipboard-list"></i>
                                </div>
                                <div class="ms-3">
                                    <h3 class="project-name">POS System</h3>
                                    <p class="project-desc">Managing products and invertory</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center">
                                <div class="project-icon church-icon">
                                    <i class="fas fa-church"></i>
                                </div>
                                <div class="ms-3">
                                    <h3 class="project-name">Church Management System</h3>
                                    <p class="project-desc">Member and event management</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>