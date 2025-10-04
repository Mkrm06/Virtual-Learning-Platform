<?php
  $title = "Home";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title; ?></title>
  <link rel="icon" type="image/png" href="imgs/favicon.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<nav class="navbar navbar-expand-lg bg-white shadow-sm py-2">
  <div class="container-fluid">

    <a class="navbar-brand fw-bold" href="#">
      <img src="./imgs/Nav-Logo.png" alt="Logo" height="80">
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
            <li><a class="dropdown-item" href="#featured">Featured Course</a></li>
            <li><a class="dropdown-item" href="#Top-Categories">Top Categories</a></li>
            <li><a class="dropdown-item" href="#testimonials">Testimonials</a></li>
          </ul>
        </li>

        <!-- Courses -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Courses</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="course-browser/Course_Browser_page.html">Web Development</a></li>
            <li><a class="dropdown-item" href="course-browser/Course_Browser_page.html">UI/UX Design</a></li>
          </ul>
        </li>

        <!-- Shop -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Shop</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="course-browser/Course_Browser_page.html">Courses</a></li>
            <li><a class="dropdown-item" href="course-cart/Course_Cart.html">Cart</a></li>
          </ul>
        </li>

        <!-- Pages -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Pages</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./contact-about/About_us.php">About Us</a></li>
            <li><a class="dropdown-item" href="./contact-about/Contact_Us.php">Contact</a></li>
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
        <a href="./Login_Page.html" class="text-dark"><i class="bi bi-person fs-5"></i>Login</a>
        <a href="./Register_Page.html" class="btn btn-gradien" >Signup</a>
      </div>
    </div>
  </div>
</nav>



  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-overlay">
      <div class="hero-content">
        <img src="./imgs/Footer-Logo.png" alt="MasteryHub Logo" class="hero-logo">
        <h1>Unlock Your Potential with <span>MasteryHub</span></h1>
      </div>
    </div>
  </section>

  <!-- Featured Courses -->
  <section class="featured" id="featured">
    <div class="container">
      <h2>Featured Course</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore veniam...</p>
      
      <div class="courses-grid">
        <!-- Course Card -->
        <a href="./courseleraning/Course_Learning.php" style="text-decoration: none; color: inherit;">
        <div class="course-card">
          <img src="./imgs/Course1.png" alt="Course">
          <div class="course-info">
            <p>5,957 Students • 01h 40m</p>
            <h3>Motion Graphics: Create a Nice Typography Animation</h3>
            <div class="course-footer">
              <span>$33.99</span>
              <i class="bi bi-cart"></i>
            </div>
          </div>
        </div></a>

        <a href="./courseleraning/Course_Learning.php" style="text-decoration: none; color: inherit;">
        <div class="course-card">
          <img src="imgs/Course2.png" alt="Course">
          <div class="course-info">
            <p>5,957 Students • 01h 40m</p>
            <h3>The Complete Financial Analyst Training & Investing</h3>
            <div class="course-footer">
              <span>$45.99</span>
              <i class="bi bi-cart"></i>
            </div>
          </div>
        </div></a>

        <a href="./courseleraning/Course_Learning.php" style="text-decoration: none; color: inherit;">
        <div class="course-card">
          <img src="imgs/Course3.png" alt="Course">
          <div class="course-info">
            <p>5,957 Students • 01h 40m</p>
            <h3>Education Software and PHP and JS System Script</h3>
            <div class="course-footer">
              <span>$33.99</span>
              <i class="bi bi-cart"></i>
            </div>
          </div>
        </div></a>

        <a href="./courseleraning/Course_Learning.php" style="text-decoration: none; color: inherit;">
        <div class="course-card">
          <img src="imgs/Course4.png" alt="Course">
          <div class="course-info">
            <p>5,957 Students • 01h 40m</p>
            <h3>Marketing 2023: Complete Guide To Instagram Growth</h3>
            <div class="course-footer">
              <span>$33.99</span>
              <i class="bi bi-cart"></i>
            </div>
          </div>
        </div></a>

        <a href="./courseleraning/Course_Learning.php" style="text-decoration: none; color: inherit;">
        <div class="course-card">
          <img src="imgs/Course5.png" alt="Course">
          <div class="course-info">
            <p>5,957 Students • 01h 40m</p>
            <h3>Advance PHP knowledge with JS to make smart web</h3>
            <div class="course-footer">
              <span>$33.99</span>
              <i class="bi bi-cart"></i>
            </div>
          </div>
        </div></a>

        <a href="./courseleraning/Course_Learning.php" style="text-decoration: none; color: inherit;">
        <div class="course-card">
          <img src="imgs/Course6.png" alt="Course">
          <div class="course-info">
            <p>5,957 Students • 01h 40m</p>
            <h3>Learn 3D Modelling and Design for Beginners</h3>
            <div class="course-footer">
              <span>$33.99</span>
              <i class="bi bi-cart"></i>
            </div>
          </div>
        </div>
      </div></a>

      <div class="btn-container">
        <a href="/course-browser/Course_Browser_page.html" class="btn btn-gradient">Explore courses</a>
      </div>
    </div>
  </section>



  <!-- Gradient Section -->
  <section class="gradient-section">
    <div class="container">
      <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore veniam...</p>
      <div class="row">
        <div class="col-md-4">
          <div class="icon-box"><i class="bi bi-person-video"></i></div>
          <h5>01. Learn</h5>
          <p>Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliqua.</p>
        </div>
        <div class="col-md-4 border-start border-end">
          <div class="icon-box"><i class="bi bi-mortarboard"></i></div>
          <h5>02. Graduate</h5>
          <p>Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliqua.</p>
        </div>
        <div class="col-md-4">
          <div class="icon-box"><i class="bi bi-briefcase"></i></div>
          <h5>03. Work</h5>
          <p>Lorem ipsum dolor sit amet, consectetur dolorili adipiscing elit. Felis donec massa aliqua.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Categories Section -->
  <section class="category-section" id="Top-Categories">
    <div class="container">
      <h3 class="fw-bold mb-3">Top Categories</h3>
      <p class="mb-5">12,000+ unique online course list designs</p>
      <div class="row g-4">
        <div class="col-md-4 col-lg-2">
          <div class="category-card">
            <div class="icon text-danger"><i class="bi bi-megaphone"></i></div>
            <p>Digital Marketing</p>
            <small>25 Courses</small>
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="category-card">
            <div class="icon text-success"><i class="bi bi-code-slash"></i></div>
            <p>Web Development</p>
            <small>16 Courses</small>
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="category-card">
            <div class="icon text-purple"><i class="bi bi-palette"></i></div>
            <p>Art & Humanities</p>
            <small>76 Courses</small>
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="category-card">
            <div class="icon text-warning"><i class="bi bi-person-lines-fill"></i></div>
            <p>Personal Development</p>
            <small>22 Courses</small>
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="category-card">
            <div class="icon text-teal"><i class="bi bi-laptop"></i></div>
            <p>IT and Software</p>
            <small>110 Courses</small>
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="category-card">
            <div class="icon text-info"><i class="bi bi-brush"></i></div>
            <p>Graphic Design</p>
            <small>85 Courses</small>
          </div>
        </div>
      </div>
    </div>
  </section>







  <!-- Third Section -->
  <section class="third-card">
    <div class="third-card-content">
      <div class="third-card-text">
        <h1>The number one factor in <span>relevance drives out resistance.</span></h1>
        <p>
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <a href="./contact-about/Contact_Us.php" class="btn" >Learn More</a>
      </div>
      <div class="third-card-image">
        <img src="./imgs/2.png" alt="Student">
      </div>
    </div>
  </section>

  <!-- Mastery Hub Section -->
<section class="video-section">
  <div class="video-thumbnail">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/2O2-WOg8SN4?si=ayAj72TDtfcrDZI7" title="YouTube video player" 
    frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
  </iframe>
  </div>
</section>


  <!-- Testimonials Section -->
  <section class="testimonials" id="testimonials">
    <h2>Testimonials</h2>
    <p class="subtitle">What our student say about us</p>
    <div class="testimonial-cards">
      <div class="card">
        <div class="card-header">
          <img src="imgs/R1.png" alt="Avatar">
          <h3>Ronald Richards</h3>
        </div>
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="stars">★★★★☆</div>
      </div>

      <div class="card">
        <div class="card-header">
          <img src="imgs/r2.png" alt="Avatar">
          <h3>Wade Warren</h3>
        </div>
        <p>Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
        <div class="stars">★★★☆☆</div>
      </div>

      <div class="card">
        <div class="card-header">
          <img src="imgs/r3.png" alt="Avatar">
          <h3>Jacob Jones</h3>
        </div>
        <p>Esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident...</p>
        <div class="stars">★★★★★</div>
      </div>
    </div>
  </section>














  <!-- Footer -->
  <footer class="footer">
    <div class="footer-container">
      <!-- Logo + Description -->
      <div class="footer-section">
        <img src="./imgs/Footer-Logo.png" alt="Mastery Hub Logo" class="footer-logo">
        <p>
          Veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="footer-section">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="./contact-about/About_us.php">About</a></li>
          <li><a href="#">Course</a></li>
          <li><a href="./contact-about/Contact_Us.php">Contact</a></li>
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
</body>
</html>
