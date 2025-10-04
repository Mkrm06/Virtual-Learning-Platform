<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>E-Learning Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="My_Profile.css">
</head>
<body>

  <!-- Top navbar (use navbar-light so toggler-icon is visible) -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-2">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#">
        <!-- check image path & filename (no spaces) -->
        <img src="imgs/Nav-Logo.png" alt="Logo" height="60">
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
              aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown">Home</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="index.html">Featured Course</a></li>
              <li><a class="dropdown-item" href="#Top-Categories">Top Categories</a></li>
              <li><a class="dropdown-item" href="#testimonials">Testimonials</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Courses</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Web Development</a></li>
              <li><a class="dropdown-item" href="#">UI/UX Design</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Shop</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Products</a></li>
              <li><a class="dropdown-item" href="#">Cart</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Pages</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">About Us</a></li>
              <li><a class="dropdown-item" href="#">Contact</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="d-flex flex-column flex-lg-row">
    <!-- Sidebar -->
    <aside class="sidebar text-white p-4 d-flex flex-column">
      <div class="text-center mb-4 position-relative">
        <div class="status d-flex align-items-center justify-content-center mb-2">
          <span class="status-dot me-2"></span>
          <span class="small">ONLINE</span>
        </div>

        <!-- check this path too -->
        <img src="imgs/mp.jpg" class="profile-img mb-2" alt="profile">
        <h5 class="mb-0">Kennedy Grey</h5>
        <p class="small">Manila, PH</p>
      </div>

      <div class="menu">
        <button class="btn w-100 btn-dark mb-2 d-flex align-items-center">
          <i class="bi bi-award me-2"></i> My Certificates
        </button>

        <!-- .menu-link styled in CSS (no underline) -->
        <a href="#" class="menu-link d-flex align-items-center mb-2">
          <i class="bi bi-cart me-2"></i> My Purchases
        </a>
        <a href="#" class="menu-link d-flex align-items-center mb-2">
          <i class="bi bi-calendar-event me-2"></i> Calendar
        </a>
        <a href="#" class="menu-link d-flex align-items-center mb-4">
          <i class="bi bi-chat-left-dots me-2"></i> Messages
        </a>
      </div>

      <div class="help-center mt-auto p-3 bg-white text-dark rounded">
        <p>Lorem ipsum dolor sit amet consectetur? Semper amet gravida volutpat.</p>
        <button class="btn btn-dark w-100">Go to Help Center</button>
      </div>
    </aside>

    <!-- Main content -->
    <main class="main-content p-4 flex-grow-1">
      <!-- Tabs header (IMPORTANT: data-bs-toggle="tab" added) -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <ul class="nav nav-tabs" id="dashboardTabs" role="tablist">
          <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tab-dashboard" data-bs-toggle="tab" href="#dashboard" role="tab"
               aria-controls="dashboard" aria-selected="true">Dashboard</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-courses" data-bs-toggle="tab" href="#courses" role="tab"
               aria-controls="courses" aria-selected="false">Courses</a>
          </li>
          <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-settings" data-bs-toggle="tab" href="#settings" role="tab"
               aria-controls="settings" aria-selected="false">Settings</a>
          </li>
        </ul>

        <div class="d-flex align-items-center">
          <input type="search" class="form-control me-3" placeholder="Search">
          <div class="position-relative">
            <i class="bi bi-bell fs-4"></i>
            <span class="notif-dot"></span>
          </div>
        </div>
      </div>

      <!-- Tab content -->
      <div class="tab-content">
        <!-- Dashboard -->
        <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="tab-dashboard">
          <h5>In Progress</h5>
          <div class="d-flex overflow-auto mb-4">
            <!-- course cards -->
            <div class="card course-card me-3">
              <img src="imgs/mp1.jpg" class="card-img-top" alt="UX">
              <div class="card-body">
                <h6>UX Design Basics</h6>
                <p class="small">Lorem ipsum dolor sit amet consectetur.</p>
                <span class="badge bg-secondary">Design</span>
                <span class="badge bg-secondary">Research</span>
              </div>
            </div>

            <div class="card course-card me-3">
              <img src="imgs/mp2.jpg" class="card-img-top" alt="Project">
              <div class="card-body">
                <h6>Project Management</h6>
                <p class="small">Lorem ipsum dolor sit amet consectetur.</p>
                <span class="badge bg-warning">Research</span>
                <span class="badge bg-warning">Presentation</span>
              </div>
            </div>

            <div class="card course-card me-3">
              <img src="imgs/mp3.jpg" class="card-img-top" alt="UI">
              <div class="card-body">
                <h6>UI Design Foundation</h6>
                <p class="small">Lorem ipsum dolor sit amet consectetur.</p>
                <span class="badge bg-info">Design</span>
                <span class="badge bg-info">Research</span>
              </div>
            </div>

            <div class="card course-card">
              <img src="imgs/mp4.jpg" class="card-img-top" alt="Code">
              <div class="card-body">
                <h6>Learn to Code Swift UI</h6>
                <p class="small">Lorem ipsum dolor sit amet consectetur.</p>
                <span class="badge bg-primary">Development</span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="alert alert-dark">📢 Lorem ipsum dolor sit amet consectetur.</div>
              <div class="timeline p-3 border rounded">
                <h6>Timeline</h6>
                <ul class="list-unstyled mt-3">
                  <li><strong>Mon:</strong> Project Management</li>
                  <li><strong>Tue:</strong> UX Design Basics</li>
                  <li><strong>Wed:</strong> Learn to Code Swift UI</li>
                </ul>
              </div>
            </div>
              
            <div class="col-md-4">
              <div class="p-3 bg-warning rounded h-100">
                <h6>Recommendations Today</h6>
                <h4>Graphic Design</h4>
                <p>Lorem ipsum dolor sit amet consectetur. Ac sit urna sed ornare elit.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Courses -->
        <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="tab-courses">
          <h5 class="mb-3">Available Courses</h5>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="imgs/mp1.jpg" class="card-img-top" alt="UX">
                <div class="card-body">
                  <h6>UX Design Basics</h6>
                  <p class="small">Master the fundamentals of UX Design.</p>
                  <button class="btn btn-primary btn-sm enroll-btn">Enroll</button>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="imgs/mp3.jpg" class="card-img-top" alt="UI">
                <div class="card-body">
                  <h6>UI Design Foundation</h6>
                  <p class="small">Build beautiful, user-friendly interfaces.</p>
                  <button class="btn btn-primary btn-sm enroll-btn">Enroll</button>
                </div>
              </div>
            </div>

            <div class="col-md-4 mb-3">
              <div class="card">
                <img src="imgs/mp4.jpg" class="card-img-top" alt="Code">
                <div class="card-body">
                  <h6>Learn to Code Swift UI</h6>
                  <p class="small">Start your journey in iOS development.</p>
                  <button class="btn btn-primary btn-sm enroll-btn">Enroll</button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Settings -->
        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="tab-settings">
          <h5 class="mb-3">Account Settings</h5>
          <form class="w-50">
            <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input type="text" class="form-control" value="Kennedy Grey">
            </div>
            <div class="mb-3">
              <label class="form-label">Email Address</label>
              <input type="email" class="form-control" value="kennedy@email.com">
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" placeholder="••••••••">
            </div>
            <button class="btn btn-success">Save Changes</button>
          </form>
        </div>
      </div>
    </main>
  </div>



 <!-- Footer -->
 <footer class="footer">
  <div class="footer-container">
    <!-- Logo + Description -->
    <div class="footer-section">
      <img src="/imgs/Footer-Logo.png" alt="Mastery Hub Logo" class="footer-logo">
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







  <!-- Bootstrap JS bundle (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <!-- small script: open tab based on URL hash, and wire up enroll buttons -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // open tab from hash if present
      const hash = location.hash;
      if (hash) {
        const trigger = document.querySelector('a[data-bs-toggle="tab"][href="' + hash + '"]');
        if (trigger) new bootstrap.Tab(trigger).show();
      }

      // sample behaviour: enroll button opens Dashboard tab (and you can add logic to append card)
      document.querySelectorAll('.enroll-btn').forEach(btn => {
        btn.addEventListener('click', function (e) {
          e.preventDefault();
          const dashboardTab = document.querySelector('a[data-bs-toggle="tab"][href="#dashboard"]');
          if (dashboardTab) new bootstrap.Tab(dashboardTab).show();
          // TODO: add code here to append a new "in progress" card dynamically if desired
        });
      });
    });
  </script>
</body>
</html>
