<img src="res/Wallpaper.png" alt="banner" class="banner">
<img src="../res/logo.png" alt="logo" class="logo">

<nav class="navbar sticky-top navbar-expand-lg bg-navbar-pink" data-bs-theme="dark">
    <div class="container-fluid bg-navbar-pink px-5">
        <a class="navbar-brand text-white fw-bold" href="#">Creaciones de madam</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link <?php if($currentPage == 'index') echo 'active' ?>" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link <?php if($currentPage == 'about') echo 'active' ?>" href="../about.php">Sobre mi</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if($currentPage == 'services') echo 'active' ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Servicios
                </a>
                <ul class="dropdown-menu bg-menu">
                    <li><a class="dropdown-item" href="../services.php">Todo</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../services.php#stickers">Stickers</a></li>
                    <li><a class="dropdown-item" href="../services.php#posters">Posters</a></li>
                    <li><a class="dropdown-item" href="../services.php#ilustraciones">Ilustraciones</a></li>
                    <li><a class="dropdown-item" href="../services.php#tejidos">Tejidos</a></li>
                    <li><a class="dropdown-item" href="../services.php#peluches">Peluches</a></li>
                </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>