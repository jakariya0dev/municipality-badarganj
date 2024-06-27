

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo text-decoration-none" href="index.php">SMS-PHP</a>
    <a class="sidebar-brand brand-logo-mini text-decoration-none" href="index.php">SP</a>
  </div>
  <ul class="nav">

    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal"><?= $_SESSION['user']['name']; ?></h5>
            <span><?= $_SESSION['user']['title'] ?></span>
          </div>
        </div>
        
      </div>
    </li>
    
    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>

    <!-- Dashboard -->
    <li class="nav-item menu-items">
      <a class="nav-link" href="index.html">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <!-- Slider -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#slider-banner" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Slider</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="slider-banner">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="slider-all.php">All Slider</a></li>
          <li class="nav-item"> <a class="nav-link" href="slider-add.php">Add New Slider</a></li>
        </ul>
      </div>
    </li>

    <!-- Notice -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#notice-board" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Notice</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="notice-board">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="notice-all.php">All Notice</a></li>
          <li class="nav-item"> <a class="nav-link" href="notice-add.php">Add New Notice</a></li>
          <li class="nav-item"> <a class="nav-link" href="notice-scroll.php">Scrolling Notice</a></li>
        </ul>
      </div>
    </li>

    <!-- About -->
    <li class="nav-item menu-items">
      <a class="nav-link" href="about.php">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">About Us</span>
      </a>
    </li>

    <!-- Mayor Profile -->
    <li class="nav-item menu-items">
      <a class="nav-link" href="mayor.php">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Mayor Profile</span>
      </a>
    </li>

    <!-- Features -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#feature-list" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Feature</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="feature-list">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="feature-all.php">All Feature</a></li>
          <li class="nav-item"> <a class="nav-link" href="feature-add.php">Add New Feature</a></li>
        </ul>
      </div>
    </li>

    <!-- Achievements -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#achievement-list" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Achievement</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="achievement-list">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="achievement-all.php">All Achievement</a></li>
          <li class="nav-item"> <a class="nav-link" href="achievement-add.php">Add Achievement</a></li>
        </ul>
      </div>
    </li>


    <!-- Counsellor -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#counsellor-list" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Counsellor</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="counsellor-list">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="counsellor-all.php">All Counsellor</a></li>
          <li class="nav-item"> <a class="nav-link" href="counsellor-add.php">Add Counsellor</a></li>
        </ul>
      </div>
    </li>


    <!-- Employee -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#employee-list" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Employee</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="employee-list">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="employee-all.php">All Employee</a></li>
          <li class="nav-item"> <a class="nav-link" href="employee-add.php">Add Employee</a></li>
        </ul>
      </div>
    </li>


    <!-- Photo Gallery -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#gallery-list" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Photo Gallery</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="gallery-list">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="gallery-all.php">All Photo</a></li>
          <li class="nav-item"> <a class="nav-link" href="gallery-add.php">Add Photo</a></li>
        </ul>
      </div>
    </li>


    <!-- Video Gallery -->
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#video-list" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Video Gallery</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="video-list">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="video-all.php">All Video</a></li>
          <li class="nav-item"> <a class="nav-link" href="video-add.php">Add Video</a></li>
        </ul>
      </div>
    </li>

    <!-- Contact -->
    <li class="nav-item menu-items">
      <a class="nav-link" href="contact.php">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Contact</span>
      </a>
    </li>

  </ul>
</nav>