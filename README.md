# 🎓 Online Learning Platform

A web-based **Online Learning Management System** built with **PHP**, **MySQL**, **HTML**, **CSS**, and **Bootstrap**.  
This platform allows **students**, **instructors**, and **admins** to manage courses, users, and content efficiently.

---

## 🚀 Features

### 👩‍🏫 For Admin
- Manage users (students, instructors)
- Add / Update / Delete courses
- View all registered users and enrolled students
- Assign instructors to courses
- Dashboard overview of platform statistics

### 🧑‍💻 For Instructors
- Manage their assigned courses
- Upload and edit lessons, materials, and quizzes
- Track enrolled students
- View student progress

### 🎓 For Students
- Register and log in securely
- Enroll in available courses
- Access lessons, assignments, and quizzes
- Track course completion progress
- Download certificates (if applicable)

---

## 🧠 Tech Stack

| Layer | Technologies |
|-------|---------------|
| Frontend | HTML5, CSS3, JavaScript, Bootstrap 5 |
| Backend | PHP (Procedural or OOP based) |
| Database | MySQL |
| Authentication | PHP Sessions |
| Deployment | XAMPP / WAMP / Localhost |

---

## ⚙️ Project Structure

📂 online-learning-platform
│
├── 📁 assets/               # CSS, JS, Images
├── 📁 includes/             # Common reusable components
├── 📁 dashboards/
│   ├── admin_dashboard.php
│   ├── instructor_dashboard.php
│   ├── student_dashboard.php
│
├── 📁 config/
│   └── db_connect.php       # Database connection
│
├── 📁 auth/
│   ├── login.php
│   ├── login_process.php
│   ├── register.php
│   └── logout.php
│
├── 📁 courses/
│   ├── add_course.php
│   ├── edit_course.php
│   └── view_courses.php
│
├── index.php                # Homepage
├── about.php                # About the platform
├── contact.php              # Contact form
├── README.md                # Project documentation
└── database.sql             # Database schema

````
🧰 Installation Guide

Follow these steps to set up the project locally 👇

1️⃣ Clone the repository
```bash
git clone https://github.com/<your-username>/virtual-learning-platform.git


2️⃣ Move into the project folder

```bash
cd virtual-learning-platform
```

### 3️⃣ Set up the database

* Open **phpMyAdmin**
* Create a database named `masteryhub`
* Import `user.sql` file provided in the project

### 4️⃣ Configure the database connection

Edit `config/db_connect.php`:

```php
<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "masteryhub";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Database connection failed: " . $conn->connect_error);
}
?>
```

5️⃣ Run the project

* Start Apache and MySQL in XAMPP
* Open browser and visit:
  👉 `http://localhost/virtual-learning-platform/`

---

🔐 Login Roles

| Role       | Email                                                   | Password      |
| ---------- | ------------------------------------------------------- | ------------- |
| Admin      | [admin@example.com](mailto:admin@example.com)           | admin123      |
| Instructor | [instructor@example.com](mailto:instructor@example.com) | instructor123 |
| Student    | [student@example.com](mailto:student@example.com)       | student123    |

> ⚠️ Use these credentials after importing the database.

---

## 🧾 Example Screens (Optional)

> Add screenshots here using:
> `![Screenshot](assets/screenshots/login.png)`

```

Would you like me to:
- Add **screenshot section placeholders** (e.g., login, dashboard, course pages)?  
- Or make it match your **specific folder structure** (if you show me your folders)?
```
