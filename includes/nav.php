<nav class="navbar-custom sticky-top">
    <div class="container-fluid d-flex justify-content-center">
        <div class="nav-container">
            <p class="my-2 font d-none d-md-block" title="Mainza Namangani">NAMZ</p>
            <div class="nav-icons">
                <a href="index.php" class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" title="Home">
                    <i class="fas fa-home"></i>
                </a>
                <a href="about.php" class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>" title="About">
                    <i class="fas fa-user"></i>
                </a>
                <a href="projects.php" class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) == 'projects.php' ? 'active' : ''; ?>" title="Projects">
                    <i class="fas fa-briefcase"></i>
                </a>
                <a href="contact.php" class="nav-btn <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>" title="Contact">
                    <i class="fas fa-address-book"></i>
                </a>
            </div>

            <div class="nav-actions">
                <button class="btn-primary" data-bs-toggle="modal" data-bs-target="#contactModal">
                    Contact
                </button>
            </div>
        </div>
    </div>
</nav>