<?php
$title = "Contact Us";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>MasteryHub</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Rowdies:wght@400;700&family=Saira:wght@400;700&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="Contact_Us.css">
</head>

<body>
 <!-- nav bar -->
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
    <div class="container text-white d-flex flex-column align-items-start justify-content-center" style="height: 100vh;">
      <img src="images/1346c10121837b7e9a717863ec378e7e6f54b90c (2).png" alt="MasteryHub Hero Logo" class="hero-logo" />
      <div class="hero-text">
        <h1>
          Unlock Your<br />
          Potential with<br />
          Mastery<span>Hub</span>
        </h1>
      </div>
    </div>
  </section>

  <!-- Discover Section -->
  <section class="discover-section">
    <h2>DISCOVER US</h2>
    <p>
      MasteryHUB is here to help you;<br />
      Our experts are available to answer any questions you might have. We've got the answers.
    </p>

    <div class="email-contact">
      EMAIL US<br />
      <a href="mailto:masteryhub@mustaryhub.com">masteryhub@mustaryhub.com</a>
    </div>

    <div class="image-stack">
      <div class="image-wrapper image1">
        <img src="images/70d0adc1c5f6df85748d7393a7f821ebdb2dac54.png" alt="Person 1"/>
      </div>
      <div class="image-wrapper image2">
        <img src="images/b42cafc185084dd3d8db11defbaf03489ec3bd6d.png" alt="Person 2" />
      </div>
      <div class="image-wrapper image3">
        <img src="images/efca4f0b20493697aeb1be4d9756ce76342ea275.png" alt="Person 3" />
      </div>
      <div class="image-wrapper image4">
        <img src="images/bcb98db50c38b454883966d455c52586b8c9d221.png" alt="Person 4" />
      </div>
    </div>
  </section>
  <div class="container1">
    <div class="left">
      <p>Thank you for getting in touch!<br>Kindly.<br>Fill the form, have a great day!</p>
    </div>
    <form class="right">
      <div class="form-group">
        <label for="name">Your Name</label>
        <input id="name" type="text" placeholder="Your Name" />
      </div>
      <div class="form-group">
        <label for="email">Your Email</label>
        <input id="email" type="email" placeholder="Your Email" />
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input id="phone" type="tel" placeholder="Phone Number" />
      </div>
      <div class="form-group">
        <label for="country">Country</label>
        <select id="country" >
          <option value="" disabled selected></option>
          <option>United States</option>
          <option>Canada</option>
          <option>United Kingdom</option>
          <option>Australia</option>
          <option>Other</option>
        </select>
      </div>

      <div class="form-group">
        <label for="company">Company Name</label>
        <input id="company" type="text" placeholder="Company Name" />
      </div>
      <div class="form-group">
        <label for="interest">Interested in</label>
        <select id="interest" >
          <option value="" disabled selected></option>
          <option>Product A</option>
          <option>Product B</option>
          <option>Service A</option>
          <option>Service B</option>
        </select>
      </div>

      <div class="form-group full-width">
        <label for="message">Message</label>
        <textarea id="message" placeholder="Message"></textarea>
      </div>

      <button class="submit-btn" type="submit">Submit</button>
    </form>
  </div>

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
</body>
</html>
