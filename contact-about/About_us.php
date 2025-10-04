<?php
$title = "About Us";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title> <?php echo $title; ?></title>

<!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@400;700&family=Saira:wght@700&display=swap" rel="stylesheet" />
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="About_us.css">


</head>
<body>

<nav class="navbar navbar-expand-lg bg-white shadow-sm py-2">
  <div class="container-fluid">

    <a class="navbar-brand fw-bold" href="#">
      <img src="images/2 717 (1).png" alt="Logo" height="80">
    </a>

    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav items -->
    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <!-- Home -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">Home</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Home 1</a></li>
            <li><a class="dropdown-item" href="#">Home 2</a></li>
          </ul>
        </li>

        <!-- Courses -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Courses</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Web Development</a></li>
            <li><a class="dropdown-item" href="#">UI/UX Design</a></li>
          </ul>
        </li>

        <!-- Shop -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Shop</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Products</a></li>
            <li><a class="dropdown-item" href="#">Cart</a></li>
          </ul>
        </li>

        <!-- Pages -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Pages</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">About Us</a></li>
            <li><a class="dropdown-item" href="#">Contact</a></li>
          </ul>
        </li>
      </ul>

      <!-- Search Bar -->
      <form class="d-flex me-3" role="search">
        <input class="form-control rounded-pill search-bar" type="search" placeholder="What would you like to learn?" aria-label="Search">
      </form>

      <!-- Icons + Buttons -->
      <div class="d-flex align-items-center gap-3">
        <a href="#" class="text-dark position-relative">
          <i class="bi bi-cart fs-5"></i>
          <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">0</span>
        </a>
        <a href="#" class="text-dark"><i class="bi bi-person fs-5"></i>Login</a>
        <button class="btn btn-gradient">Signup</button>
      </div>
    </div>
  </div>
</nav>


  <!-- Hero Section -->
  <section class="hero-section">
    <div>
      <h1>Unlock Your<br />Potential with<br />MasteryHub</h1>
      <p class="hero-description">
        Join MasteryHub today to access a wide range of<br />
        courses designed to enhance your skills. Experience<br />
        interactive learning with expert instructors and a<br />
        supportive community.
      </p>
    </div>
  </section>

  <!-- About Us -->
  <section class="about-us">About Us</section>

  <!-- Our Mission -->
  <section class="mission-section">
    <div class="mission-text">
      <h2>OUR MISSION</h2>
      <p>
        To make high-quality education accessible, affordable, and engaging
        for learners everywhere, empowering them with skills and knowledge to
        achieve their personal and professional goals.
      </p>
    </div>
   <div class="custom-image-wrapper">
  <div class="blob-background"></div>

  <!-- Decorative Icons -->
  <img src="images/icons8-atom-editor-48.png" class="decor-icon icon-sparkle" alt="Decor Icon" />
  <img src="images/icons8-rounded-square-50.png" class="decor-icon icon-square" alt="Decor Icon" />
  <img src="images/icons8-star-50.png" class="decor-icon icon-underline" alt="Decor Icon" />

  <!-- Main Image -->
  <div class="styled-image">
    <img src="images/efca4f0b20493697aeb1be4d9756ce76342ea275.png" alt="Styled Image" />
  </div>
</div>

  </section>

  <!-- Our Vision -->
  <section class="vision-section">
    <div class="mission-text">
      <h2>OUR VISION</h2>
      <p>
        "To become a global learning hub that bridges<br>
        the gap between learners and expert<br>
        instructors, fostering a community where
        education inspires growth, innovation, and<br>
        lifelong success."
      </p>
    </div>
    <div class="custom-image-wrapper">
  <div class="blob-background"></div>

  <!-- Decorative Icons -->
  <img src="images/icons8-atom-editor-48.png" class="decor-icon icon-sparkle" alt="Decor Icon" />
  <img src="images/icons8-rounded-square-50.png" class="decor-icon icon-square" alt="Decor Icon" />
  <img src="images/icons8-star-50.png" class="decor-icon icon-underline" alt="Decor Icon" />

  <!-- Main Image -->
  <div class="styled-image">
    <img src="images/a8a9498ee2365c494808c16f41e1f5d20f79c0d8.png" alt="Styled Image" />
  </div>
</div>
  </section>

  <!-- Founder -->
  <section class="mission-section">
    <div class="mission-text">
      <h2>FOUNDER</h2>
      <p>
        Our founder envisioned a platform where quality education meets accessibility.
        Through MasteryHub, that vision came to life — creating a space where learners
        from all walks of life can unlock their full potential and pursue lifelong success.
      </p>
    </div>
    <div class="custom-image-wrapper">
  <div class="blob-background"></div>

  <!-- Decorative Icons -->
  <img src="images/icons8-atom-editor-48.png" class="decor-icon icon-sparkle" alt="Decor Icon" />
  <img src="images/icons8-rounded-square-50.png" class="decor-icon icon-square" alt="Decor Icon" />
  <img src="images/icons8-star-50.png" class="decor-icon icon-underline" alt="Decor Icon" />

  <!-- Main Image -->
  <div class="styled-image">
    <img src="images/1040b3d0840e480479882d505e2d03be5c41968b.jpg" alt="Styled Image" />
  </div>
</div>


  </section>

  <!-- Founder Quote -->
  <section class="founder-quote-section">
    <div class="quote-card">
      <div class="blob-shape">
        <img src="images/7a6a3d15c42da6d2f456b7ca1ed977211b9a3c0e.png" alt="Founder Photo" />
      </div>
      <div class="text-container">
        <div class="quote-icon">“</div>
        <p class="quote-text">
          Qodem modo typi, qui nunc nobis videntur parum<br>
          clari, fiant sollemnes in futurum quam nunc parum<br>
          nunc putamus claram.
        </p>
        <p class="quote-author">Taniya Jenny<br />
          <span class="quote-role">Marketing, Envato Pty Ltd.</span>
        </p>
      </div>
      <div class="arrow-icons">
        <img src="images/24f9cd00444bc8d8c501a4a9ef79f0efbad58a1f.png" alt="Arrow Left" />
        <img src="images/24f9cd00444bc8d8c501a4a9ef79f0efbad58a1f.png" alt="Arrow Right" />
      </div>
    </div>
  </section>

  <!-- Trusted Learners -->
  <section class="trusted-section">
    <div class="left">
      <h1>Trusted by<br>10,000+<br>learners</h1>
    </div>
    <div class="right">
      <div class="feature">
        <div class="icon"><span>⭐</span></div>
        <p>Expert Instructors</p>
      </div>
      <div class="feature">
        <div class="icon"><span>⭐</span></div>
        <p>Wide Range of Courses</p>
      </div>
      <div class="feature">
        <div class="icon"><span>⭐</span></div>
        <p>Global Accessibility</p>
      </div>
    </div>
  </section>

 <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <!-- Logo + Description -->
      <div class="footer-section">
        <img src="images/1 1957762 (1).png" alt="Mastery Hub Logo" class="footer-logo">
        <p>
          Veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">About</a></li>
          <li><a href="#">Course</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-section">
        <h4>Contact us</h4>
        <p><i class="bi bi-telephone"></i> 071 555-0104</p>
        <p><i class="bi bi-envelope"></i> masteryhub@gmail.com</p>
      </div>
    </div>

    <hr>

    <!-- Bottom Row -->
    <div class="footer-bottom">
      <p>Copyright 2023 | All Rights Reserved</p>
      <div class="social-icons">
        <a href="#"><i class="bi bi-facebook"></i></a>
        <a href="#"><i class="bi bi-twitter"></i></a>
        <a href="#"><i class="bi bi-instagram"></i></a>
        <a href="#"><i class="bi bi-behance"></i></a>
        <a href="#"><i class="bi bi-dribbble"></i></a>
      </div>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>