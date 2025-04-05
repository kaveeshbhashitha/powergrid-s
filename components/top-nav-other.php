<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.php" class="logo d-flex align-items-center me-auto" style="text-decoration: none;">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img src="./assets/img/logo-pg.jpeg" alt=""><h1 class="sitename mt-2">PowerGrid</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
        <li><a href="./index.php" style="text-decoration: none;">Home</a></li>
        <li><a href="./about.php" class="<?php echo ($activePage == 'about') ? 'active' : ''; ?>" style="text-decoration: none;">About</a></li>
        <li><a href="./index.php#services" style="text-decoration: none;">Services</a></li>
        <li><a href="./index.php#projects" style="text-decoration: none;">Projects</a></li>
        <li><a href="./index.php#team" style="text-decoration: none;">Team</a></li>
        <li><a href="./blogs.php" class="<?php echo ($activePage == 'blogs') ? 'active' : ''; ?>" style="text-decoration: none;">Blogs</a></li>

          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact" style="text-decoration: none;">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>