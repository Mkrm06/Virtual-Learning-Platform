<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Panel — Online Learning Platform</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>

  <style>
    :root { --sidebar-width: 260px; }
    body { min-height: 100vh; }
    .sidebar { width: var(--sidebar-width); }
    .sidebar .nav-link { color: rgba(255,255,255,0.9); }
    .sidebar .nav-link.active { background: rgba(255,255,255,0.06); }
    .brand { font-weight:700; letter-spacing:.3px; }
    @media (max-width: 991px) {
      .sidebar { position: fixed; z-index:1030; transform:translateX(-110%); transition:transform .25s ease; }
      .sidebar.show { transform: translateX(0); }
      main { margin-left: 0 !important; }
    }
  </style>
</head>
<body class="bg-light">

<!-- Top Navbar -->
<nav class="navbar navbar-dark bg-primary sticky-top">
  <div class="container-fluid">
    <button class="btn btn-sm btn-outline-light d-lg-none me-2" id="btnToggleSidebar"><i class="bi bi-list"></i></button>
    <a class="navbar-brand ms-2 brand" href="#">OLP Admin</a>
    <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
      <input class="form-control form-control-sm" id="globalSearch" type="search" placeholder="Search users, courses, orders..." aria-label="Search">
    </form>
    <div class="d-flex align-items-center gap-2">
      <div class="dropdown">
        <a class="btn btn-sm btn-light" href="#" id="notifBtn" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-bell"></i> <span class="badge bg-danger" id="notifCount">3</span></a>
        <ul class="dropdown-menu dropdown-menu-end p-2" style="min-width:300px;" aria-labelledby="notifBtn" id="notifList">
          <!-- notifications injected here -->
        </ul>
      </div>
      <div class="dropdown me-2">
        <a class="btn btn-sm btn-light dropdown-toggle" href="#" data-bs-toggle="dropdown"><img src="https://ui-avatars.com/api/?name=Admin&background=0D6EFD&color=fff&rounded=true" class="rounded-circle" width="28" height="28"> Admin</a>
        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#profileTab" data-bs-toggle="tab">Profile</a></li>
          <li><a class="dropdown-item" href="#settingsTab" data-bs-toggle="tab">Settings</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item text-danger" href="#" id="logoutBtn">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<div class="d-flex">
  <!-- Sidebar -->
  <aside class="sidebar bg-dark text-white p-3 d-none d-lg-block" id="sidebar">
    <div class="mb-4 text-center">
      <img src="https://ui-avatars.com/api/?name=OLP+Admin&background=fff&color=0d6efd&rounded=true&size=80" class="rounded-circle border" alt="admin">
      <div class="mt-2"> <strong>Admin</strong><div class="small text-muted">Super Admin</div></div>
    </div>
    <nav class="nav flex-column">
      <a class="nav-link active" data-tab-target="#dashboardTab" href="#"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a>
      <a class="nav-link" data-tab-target="#usersTab" href="#"><i class="bi bi-people me-2"></i>Users</a>
      <a class="nav-link" data-tab-target="#coursesTab" href="#"><i class="bi bi-journal-bookmark me-2"></i>Courses</a>
      <a class="nav-link" data-tab-target="#enrollmentsTab" href="#"><i class="bi bi-card-list me-2"></i>Enrollments</a>
      <a class="nav-link" data-tab-target="#paymentsTab" href="#"><i class="bi bi-currency-dollar me-2"></i>Payments</a>
      <a class="nav-link" data-tab-target="#reportsTab" href="#"><i class="bi bi-graph-up me-2"></i>Reports</a>
      <a class="nav-link" data-tab-target="#messagesTab" href="#"><i class="bi bi-chat-left-text me-2"></i>Messages</a>
      <a class="nav-link" data-tab-target="#logsTab" href="#"><i class="bi bi-file-earmark-text me-2"></i>System Logs</a>
      <a class="nav-link" data-tab-target="#settingsTab" href="#"><i class="bi bi-gear me-2"></i>Settings</a>
    </nav>
    <hr class="text-white-50">
    <div class="small text-white-50">Quick Actions</div>
    <div class="d-grid gap-2 mt-2">
      <button class="btn btn-sm btn-outline-light" id="btnAddCourse">+ New Course</button>
      <button class="btn btn-sm btn-outline-light" id="btnAddUser">+ New User</button>
    </div>
  </aside>

  <!-- Main content area -->
  <main class="flex-grow-1 p-4" id="mainContent" style="margin-left:var(--sidebar-width);">

    <!-- Tab panes (single page admin app) -->
    <div class="tab-content">

      <!-- Dashboard -->
      <div class="tab-pane active" id="dashboardTab">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3>Dashboard</h3>
          <div class="text-muted small">Last updated: <span id="lastUpdated">-</span></div>
        </div>

        <div class="row g-3 mb-3">
          <div class="col-md-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <div class="small text-muted">Active Users</div>
                    <div class="h4" id="statUsers">0</div>
                  </div>
                  <i class="bi bi-people h1 text-primary"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <div class="small text-muted">Published Courses</div>
                    <div class="h4" id="statCourses">0</div>
                  </div>
                  <i class="bi bi-journal-bookmark h1 text-success"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <div class="small text-muted">Monthly Revenue</div>
                    <div class="h4" id="statRevenue">$0</div>
                  </div>
                  <i class="bi bi-currency-dollar h1 text-warning"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card shadow-sm">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between">
                  <div>
                    <div class="small text-muted">Pending Enrollments</div>
                    <div class="h4" id="statEnroll">0</div>
                  </div>
                  <i class="bi bi-hourglass-split h1 text-danger"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row g-3">
          <div class="col-lg-8">
            <div class="card shadow-sm">
              <div class="card-body">
                <h6>User Growth</h6>
                <canvas id="chartUsers" height="120"></canvas>
              </div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h6>Top Courses</h6>
                <ul class="list-group" id="topCoursesList">
                  <!-- filled via JS -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Users Management -->
      <div class="tab-pane" id="usersTab">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3>Users</h3>
          <div>
            <button class="btn btn-sm btn-primary" id="btnExportUsers">Export CSV</button>
            <button class="btn btn-sm btn-success" id="openAddUserModal">Add User</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-sm" id="usersTable">
                <thead class="table-light">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Joined</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- users rows -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Courses Management -->
      <div class="tab-pane" id="coursesTab">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h3>Courses</h3>
          <div>
            <button class="btn btn-sm btn-primary" id="btnExportCourses">Export CSV</button>
            <button class="btn btn-sm btn-success" id="openAddCourseModal">Add Course</button>
          </div>
        </div>

        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-hover table-sm" id="coursesTable">
                <thead class="table-light">
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Instructor</th>
                    <th>Students</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- courses rows -->
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Enrollments -->
      <div class="tab-pane" id="enrollmentsTab">
        <h3>Enrollments</h3>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm" id="enrollTable">
                <thead class="table-light">
                  <tr><th>Enroll ID</th><th>Student</th><th>Course</th><th>Date</th><th>Status</th><th>Actions</th></tr>
                </thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Payments -->
      <div class="tab-pane" id="paymentsTab">
        <h3>Payments</h3>
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-sm" id="paymentsTable">
                <thead class="table-light"><tr><th>TXN</th><th>User</th><th>Amount</th><th>Course</th><th>Date</th><th>Status</th></tr></thead>
                <tbody></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- Reports -->
      <div class="tab-pane" id="reportsTab">
        <h3>Reports</h3>
        <div class="card mb-3">
          <div class="card-body">
            <h6>Generate Report</h6>
            <div class="row g-2">
              <div class="col-md-3"><input class="form-control form-control-sm" id="reportFrom" type="date"></div>
              <div class="col-md-3"><input class="form-control form-control-sm" id="reportTo" type="date"></div>
              <div class="col-md-3"><select class="form-select form-select-sm" id="reportType"><option value="enrollments">Enrollments</option><option value="revenue">Revenue</option><option value="users">Users</option></select></div>
              <div class="col-md-3"><button class="btn btn-sm btn-primary" id="btnGenReport">Generate</button></div>
            </div>
          </div>
        </div>
        <div id="reportResults"></div>
      </div>

      <!-- Messages -->
      <div class="tab-pane" id="messagesTab">
        <h3>Messages & Support</h3>
        <div class="row">
          <div class="col-lg-4">
            <div class="list-group" id="messageList">
              <!-- message items -->
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body" id="messageThread">
                <p class="text-muted">Select a message to view conversation.</p>
              </div>
              <div class="card-footer">
                <div class="input-group">
                  <input class="form-control" id="replyInput" placeholder="Type reply...">
                  <button class="btn btn-primary" id="sendReply">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Logs -->
      <div class="tab-pane" id="logsTab">
        <h3>System Logs</h3>
        <pre id="logsArea" class="bg-dark text-light p-3 rounded" style="height:300px;overflow:auto;">// system logs will appear here</pre>
      </div>

      <!-- Settings / Profile -->
      <div class="tab-pane" id="settingsTab">
        <h3>Settings</h3>
        <div class="row">
          <div class="col-lg-6">
            <div class="card mb-3">
              <div class="card-body">
                <h6>Platform Settings</h6>
                <div class="mb-2">
                  <label class="form-label">Platform Name</label>
                  <input class="form-control" id="settingPlatformName" value="Online Learning Platform">
                </div>
                <div class="mb-2">
                  <label class="form-label">Default Currency</label>
                  <input class="form-control" id="settingCurrency" value="USD">
                </div>
                <button class="btn btn-sm btn-primary" id="saveSettings">Save Settings</button>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="card mb-3">
              <div class="card-body">
                <h6>Admin Profile</h6>
                <div class="mb-2"><label class="form-label">Name</label><input class="form-control" id="adminName" value="Admin"></div>
                <div class="mb-2"><label class="form-label">Email</label><input class="form-control" id="adminEmail" value="admin@example.com"></div>
                <button class="btn btn-sm btn-primary" id="saveProfile">Update Profile</button>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </main>
</div>

<!-- Modals -->
<div class="modal fade" id="modalUser" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUserTitle">Add User</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="userId">
        <div class="mb-2"><label class="form-label">Name</label><input id="userName" class="form-control"></div>
        <div class="mb-2"><label class="form-label">Email</label><input id="userEmail" class="form-control"></div>
        <div class="mb-2"><label class="form-label">Role</label>
          <select id="userRole" class="form-select"><option>student</option><option>instructor</option><option>admin</option></select>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" id="saveUserBtn">Save</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modalCourse" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalCourseTitle">Add Course</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="courseId">
        <div class="mb-2"><label class="form-label">Title</label><input id="courseTitle" class="form-control"></div>
        <div class="mb-2"><label class="form-label">Instructor</label><input id="courseInstructor" class="form-control"></div>
        <div class="mb-2"><label class="form-label">Price (USD)</label><input id="coursePrice" class="form-control" type="number"></div>
        <div class="mb-2"><label class="form-label">Description</label>
          <div id="courseDesc" contenteditable="true" class="form-control" style="min-height:120px;">Course description goes here...</div>
        </div>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" id="coursePublished">
          <label class="form-check-label" for="coursePublished">Published</label>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-primary" id="saveCourseBtn">Save Course</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
// ---------- Simple single-page admin app (frontend-only demo)
// - Data stored in localStorage to simulate CRUD
// - Features: Dashboard stats, Users, Courses, Enrollments, Payments, Reports, Messages, Logs
// - Replace localStorage parts with real API calls for production

const defaultState = {
  users: [
    {id: 'u1', name:'Alice', email:'alice@example.com', role:'student', joined:'2025-01-08'},
    {id: 'u2', name:'Bob', email:'bob@example.com', role:'instructor', joined:'2024-11-15'},
    {id: 'u3', name:'Charlie', email:'charlie@example.com', role:'student', joined:'2025-03-02'},
  ],
  courses: [
    {id:'c1', title:'Intro to Python', instructor:'Bob', students:120, price:29, published:true},
    {id:'c2', title:'Web Dev Basics', instructor:'Bob', students:85, price:19, published:true},
    {id:'c3', title:'Data Science 101', instructor:'Bob', students:45, price:39, published:false},
  ],
  enrollments: [
    {id:'e1', user:'Alice', course:'Intro to Python', date:'2025-08-10', status:'active'}
  ],
  payments: [
    {txn:'t1', user:'Alice', amount:29, course:'Intro to Python', date:'2025-08-10', status:'paid'}
  ],
  messages: [
    {id:'m1', user:'Alice', subject:'Issue with course video', thread:[{from:'Alice',text:'Video not loading',time:'2025-09-01'}]}
  ],
  notifications: [
    {id:'n1', text:'New user signed up: Diana', time:'2025-09-25'},
    {id:'n2', text:'Course published: Data Science 101', time:'2025-09-20'},
    {id:'n3', text:'Payment received: $29', time:'2025-09-18'},
  ],
  settings: {platformName:'Online Learning Platform', currency:'USD'}
};

function loadState(){
  const s = localStorage.getItem('olp_admin_state');
  if(!s){ localStorage.setItem('olp_admin_state', JSON.stringify(defaultState)); return defaultState; }
  return JSON.parse(s);
}
function saveState(state){ localStorage.setItem('olp_admin_state', JSON.stringify(state)); }
let state = loadState();

// UI helpers
const tabLinks = document.querySelectorAll('.sidebar .nav-link, .navbar .dropdown-item[data-bs-toggle]');
const tabPanes = document.querySelectorAll('.tab-pane');
function showTab(target){
  tabPanes.forEach(t=>t.classList.remove('active'));
  tabLinks.forEach(l=>l.classList.remove('active'));
  const pane = document.querySelector(target);
  if(pane) pane.classList.add('active');
  // highlight sidebar link
  const side = document.querySelector('.sidebar .nav-link[data-tab-target="'+target+'"]');
  if(side) side.classList.add('active');
}

// initial render
function renderAll(){
  document.getElementById('lastUpdated').textContent = new Date().toLocaleString();
  renderDashboard(); renderUsers(); renderCourses(); renderEnrollments(); renderPayments(); renderMessages(); renderNotifications(); renderLogs();
}

// Dashboard
let usersChart;
function renderDashboard(){
  document.getElementById('statUsers').textContent = state.users.length;
  document.getElementById('statCourses').textContent = state.courses.length;
  const revenue = state.payments.reduce((s,p)=>s+p.amount,0);
  document.getElementById('statRevenue').textContent = '$'+revenue;
  document.getElementById('statEnroll').textContent = state.enrollments.filter(e=>e.status!=='completed').length;

  // Top courses
  const topList = document.getElementById('topCoursesList'); topList.innerHTML='';
  state.courses.slice().sort((a,b)=>b.students-a.students).slice(0,5).forEach(c=>{
    const li = document.createElement('li'); li.className='list-group-item d-flex justify-content-between align-items-start';
    li.innerHTML = `<div><div class=\"fw-bold\">${c.title}</div><div class=\"small text-muted\">${c.instructor}</div></div><span class=\"badge bg-primary rounded-pill\">${c.students}</span>`;
    topList.appendChild(li);
  });

  // User growth chart (dummy monthly values)
  const labels = ['Apr','May','Jun','Jul','Aug','Sep','Oct'];
  const values = labels.map((l,i)=> 10 + (state.users.length * (i/labels.length)) | 0);
  const ctx = document.getElementById('chartUsers');
  if(usersChart) usersChart.destroy();
  usersChart = new Chart(ctx, {type:'line', data:{labels, datasets:[{label:'New signups', data:values, tension:0.4, fill:true}]}, options:{responsive:true}});
}

// Users
function renderUsers(){
  const tbody = document.querySelector('#usersTable tbody'); tbody.innerHTML='';
  state.users.forEach(u=>{
    const tr = document.createElement('tr');
    tr.innerHTML = `<td>${u.id}</td><td>${u.name}</td><td>${u.email}</td><td>${u.role}</td><td>${u.joined}</td>
      <td>
        <button class=\"btn btn-sm btn-outline-primary me-1\" onclick=\"editUser('${u.id}')\"><i class=\"bi bi-pencil\"></i></button>
        <button class=\"btn btn-sm btn-outline-danger\" onclick=\"deleteUser('${u.id}')\"><i class=\"bi bi-trash\"></i></button>
      </td>`;
    tbody.appendChild(tr);
  });
}
function saveUserFromModal(){
  const id = document.getElementById('userId').value || ('u'+Date.now());
  const u = {id, name:document.getElementById('userName').value, email:document.getElementById('userEmail').value, role:document.getElementById('userRole').value, joined:new Date().toISOString().slice(0,10)};
  const idx = state.users.findIndex(x=>x.id===id);
  if(idx>=0) state.users[idx]=u; else state.users.push(u);
  saveState(state); renderUsers(); renderDashboard(); var m = bootstrap.Modal.getInstance(document.getElementById('modalUser')); m.hide(); log(`User saved: ${u.email}`);
}
function editUser(id){
  const u = state.users.find(x=>x.id===id); if(!u) return;
  document.getElementById('userId').value = u.id; document.getElementById('userName').value=u.name; document.getElementById('userEmail').value=u.email; document.getElementById('userRole').value=u.role;
  new bootstrap.Modal(document.getElementById('modalUser')).show();
}
function deleteUser(id){ if(!confirm('Remove user?')) return; state.users = state.users.filter(x=>x.id!==id); saveState(state); renderUsers(); renderDashboard(); log('User removed: '+id); }

// Courses
function renderCourses(){
  const tbody = document.querySelector('#coursesTable tbody'); tbody.innerHTML='';
  state.courses.forEach(c=>{
    const tr = document.createElement('tr');
    tr.innerHTML = `<td>${c.id}</td><td>${c.title}</td><td>${c.instructor}</td><td>${c.students}</td><td>$${c.price}</td><td>${c.published?'<span class="badge bg-success">Published</span>':'<span class="badge bg-secondary">Draft</span>'}</td>
      <td>
        <button class=\"btn btn-sm btn-outline-primary me-1\" onclick=\"editCourse('${c.id}')\"><i class=\"bi bi-pencil\"></i></button>
        <button class=\"btn btn-sm btn-outline-danger\" onclick=\"deleteCourse('${c.id}')\"><i class=\"bi bi-trash\"></i></button>
      </td>`;
    tbody.appendChild(tr);
  });
}
function saveCourseFromModal(){
  const id = document.getElementById('courseId').value || ('c'+Date.now());
  const c = {id, title:document.getElementById('courseTitle').value, instructor:document.getElementById('courseInstructor').value, price: Number(document.getElementById('coursePrice').value)||0, students:0, published:document.getElementById('coursePublished').checked, description:document.getElementById('courseDesc').innerHTML};
  const idx = state.courses.findIndex(x=>x.id===id);
  if(idx>=0) state.courses[idx]=c; else state.courses.push(c);
  saveState(state); renderCourses(); renderDashboard(); var m = bootstrap.Modal.getInstance(document.getElementById('modalCourse')); m.hide(); log(`Course saved: ${c.title}`);
}
function editCourse(id){
  const c = state.courses.find(x=>x.id===id); if(!c) return;
  document.getElementById('courseId').value=c.id; document.getElementById('courseTitle').value=c.title; document.getElementById('courseInstructor').value=c.instructor; document.getElementById('coursePrice').value=c.price; document.getElementById('courseDesc').innerHTML=c.description||''; document.getElementById('coursePublished').checked = !!c.published;
  new bootstrap.Modal(document.getElementById('modalCourse')).show();
}
function deleteCourse(id){ if(!confirm('Delete course?')) return; state.courses = state.courses.filter(x=>x.id!==id); saveState(state); renderCourses(); renderDashboard(); log('Course removed: '+id); }

// Enrollments & Payments
function renderEnrollments(){ const tbody = document.querySelector('#enrollTable tbody'); tbody.innerHTML=''; state.enrollments.forEach(e=>{ const tr = document.createElement('tr'); tr.innerHTML = `<td>${e.id}</td><td>${e.user}</td><td>${e.course}</td><td>${e.date}</td><td>${e.status}</td><td><button class="btn btn-sm btn-outline-success" onclick="completeEnroll('${e.id}')">Mark Complete</button></td>`; tbody.appendChild(tr); }); }
function completeEnroll(id){ const e = state.enrollments.find(x=>x.id===id); if(!e) return; e.status='completed'; saveState(state); renderEnrollments(); log('Enrollment completed: '+id); }
function renderPayments(){ const tbody = document.querySelector('#paymentsTable tbody'); tbody.innerHTML=''; state.payments.forEach(p=>{ const tr=document.createElement('tr'); tr.innerHTML=`<td>${p.txn}</td><td>${p.user}</td><td>$${p.amount}</td><td>${p.course}</td><td>${p.date}</td><td>${p.status}</td>`; tbody.appendChild(tr); }); }

// Reports
function generateReport(){ const from = document.getElementById('reportFrom').value; const to = document.getElementById('reportTo').value; const type = document.getElementById('reportType').value; const out = document.getElementById('reportResults'); out.innerHTML='';
  if(type==='enrollments'){ const rows = state.enrollments.filter(e=> (!from||e.date>=from) && (!to||e.date<=to)); out.innerHTML = `<div class="card"><div class="card-body"><h6>Enrollments (${rows.length})</h6><pre>${JSON.stringify(rows, null, 2)}</pre></div></div>`; }
  if(type==='revenue'){ const rows = state.payments.filter(p=> (!from||p.date>=from) && (!to||p.date<=to)); const total = rows.reduce((s,r)=>s+r.amount,0); out.innerHTML = `<div class="card"><div class="card-body"><h6>Revenue: $${total}</h6><pre>${JSON.stringify(rows, null, 2)}</pre></div></div>`; }
  if(type==='users'){ const rows = state.users.filter(u=> (!from||u.joined>=from) && (!to||u.joined<=to)); out.innerHTML = `<div class="card"><div class="card-body"><h6>Users: ${rows.length}</h6><pre>${JSON.stringify(rows,null,2)}</pre></div></div>`; }
}

// Messages & Notifications
function renderMessages(){ const list = document.getElementById('messageList'); list.innerHTML=''; state.messages.forEach(m=>{ const btn = document.createElement('button'); btn.className='list-group-item list-group-item-action'; btn.innerHTML = `<div class="d-flex w-100 justify-content-between"><strong>${m.user}</strong><small class="text-muted">${m.thread[m.thread.length-1].time}</small></div><div class="small">${m.subject}</div>`; btn.onclick = ()=>openMessage(m.id); list.appendChild(btn); }); }
function openMessage(id){ const m = state.messages.find(x=>x.id===id); const thread = document.getElementById('messageThread'); thread.innerHTML = `<h6>${m.subject}</h6><div class="mb-3">`+ m.thread.map(t=>`<div class="mb-2"><strong>${t.from}</strong> <div class="small text-muted">${t.time}</div><div>${t.text}</div></div>`).join('')+`</div>`; document.getElementById('sendReply').onclick = ()=>{ const text = document.getElementById('replyInput').value; if(!text) return; m.thread.push({from:'Admin', text, time:new Date().toISOString().slice(0,10)}); saveState(state); openMessage(id); document.getElementById('replyInput').value=''; log('Replied to message '+id); } }

function renderNotifications(){ const list = document.getElementById('notifList'); list.innerHTML=''; state.notifications.forEach(n=>{ const li = document.createElement('li'); li.className='mb-2'; li.innerHTML = `<div><div class='small text-muted'>${n.time}</div><div>${n.text}</div></div>`; list.appendChild(li); }); document.getElementById('notifCount').textContent = state.notifications.length; }

// Logs
function log(text){ const logs = document.getElementById('logsArea'); const entry = `[${new Date().toLocaleString()}] ${text}\n` + logs.textContent; logs.textContent = entry; }
function renderLogs(){ document.getElementById('logsArea').textContent = `// System log\n` + (localStorage.getItem('olp_admin_log') || 'No logs yet.'); }

// Settings/Profile save
document.getElementById('saveSettings').addEventListener('click', ()=>{ state.settings.platformName = document.getElementById('settingPlatformName').value; state.settings.currency = document.getElementById('settingCurrency').value; saveState(state); log('Settings updated'); alert('Settings saved'); });
document.getElementById('saveProfile').addEventListener('click', ()=>{ const name=document.getElementById('adminName').value; const email=document.getElementById('adminEmail').value; log('Profile updated: '+name); alert('Profile updated'); });

// Modal handlers
document.getElementById('saveUserBtn').addEventListener('click', saveUserFromModal);
document.getElementById('saveCourseBtn').addEventListener('click', saveCourseFromModal);

// Buttons
document.getElementById('openAddUserModal').addEventListener('click', ()=>{ document.getElementById('userId').value=''; document.getElementById('userName').value=''; document.getElementById('userEmail').value=''; document.getElementById('userRole').value='student'; new bootstrap.Modal(document.getElementById('modalUser')).show(); });
document.getElementById('openAddCourseModal').addEventListener('click', ()=>{ document.getElementById('courseId').value=''; document.getElementById('courseTitle').value=''; document.getElementById('courseInstructor').value=''; document.getElementById('coursePrice').value='0'; document.getElementById('courseDesc').innerHTML=''; document.getElementById('coursePublished').checked=false; new bootstrap.Modal(document.getElementById('modalCourse')).show(); });

// Export CSV utilities
function exportCSV(filename, rows){ const csv = rows.map(r=>Object.values(r).map(v=>`"${(''+v).replace(/"/g,'""')}"`).join(',')).join('\n'); const blob = new Blob([csv], {type:'text/csv'}); const url = URL.createObjectURL(blob); const a=document.createElement('a'); a.href=url; a.download=filename; document.body.appendChild(a); a.click(); a.remove(); URL.revokeObjectURL(url); }
document.getElementById('btnExportUsers').addEventListener('click', ()=>exportCSV('users.csv', state.users));
document.getElementById('btnExportCourses').addEventListener('click', ()=>exportCSV('courses.csv', state.courses));
document.getElementById('btnGenReport').addEventListener('click', generateReport);

// Sidebar tab clicks
document.querySelectorAll('.sidebar .nav-link').forEach(a=>{ a.addEventListener('click', (e)=>{ e.preventDefault(); const t = a.getAttribute('data-tab-target'); showTab(t); if(window.innerWidth<992) document.getElementById('sidebar').classList.remove('show'); }); });

// small-screen toggler
document.getElementById('btnToggleSidebar').addEventListener('click', ()=>{ document.getElementById('sidebar').classList.toggle('show'); });

// quick action buttons
document.getElementById('btnAddCourse').addEventListener('click', ()=>document.getElementById('openAddCourseModal').click());
document.getElementById('btnAddUser').addEventListener('click', ()=>document.getElementById('openAddUserModal').click());

// simple global search (client-side)
document.getElementById('globalSearch').addEventListener('input', (e)=>{
  const q = e.target.value.toLowerCase(); if(!q) return; // naive search
  const u = state.users.find(x=> x.name.toLowerCase().includes(q)||x.email.toLowerCase().includes(q));
  if(u) { showTab('#usersTab'); setTimeout(()=>{ editUser(u.id); },250); }
});

// initial render
renderAll();

// initial tab link activation
document.querySelector('.sidebar .nav-link.active')?.classList.add('active');

// expose some functions for inline onclick handlers
window.editUser = editUser; window.deleteUser = deleteUser; window.editCourse = editCourse; window.deleteCourse = deleteCourse; window.completeEnroll = completeEnroll; window.log = log;

</script>

</body>
</html>
