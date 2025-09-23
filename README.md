# 🎓 Student Grade Management System (PHP & MySQL)

## 📌 Project Overview
The **Student Grade Management System** is a web-based application developed using **PHP** and **MySQL**.  
It allows administrators/teachers to manage student records, grades, and subjects efficiently, while students can view their academic performance in a structured manner.  

This project is useful for **schools, colleges, and universities** to digitize student performance records.

---

## 🚀 Features
- 👩‍🏫 **Admin/Teacher Panel**
  - Add, update, delete student records
  - Manage subjects and classes
  - Enter and update grades
  - Generate student performance reports

- 🎓 **Student Panel**
  - View personal profile
  - Check grades/marks by subject
  - Track overall academic performance

- 📊 **Reports**
  - Individual student grade report
  - Subject-wise performance tracking
  - Exportable data (CSV/PDF) *(optional)*

---

## 🛠️ Tech Stack
- **Frontend:** HTML, CSS, JavaScript, Bootstrap  
- **Backend:** PHP (Core PHP / PDO / MySQLi)  
- **Database:** MySQL  
- **Server:** Apache (XAMPP/LAMP/WAMP)  

---

## 📂 Project Structure
student-grade-mgmt-system/
│── config/ # Database configuration
│── public/ # Public assets (CSS, JS, images)
│── admin/ # Admin/teacher panel
│── student/ # Student panel
│── includes/ # Reusable PHP files (header, footer, db connection)
│── index.php # Login page
│── dashboard.php # Dashboard after login
│── README.md # Project documentation
│── database.sql # MySQL database file




Installation Guide
1. **Clone this repository**  
   ```bash
   git clone https://github.com/your-username/student-grade-mgmt-system.git
Move project to server directory

For XAMPP → htdocs/

For WAMP → www/

For LAMP → /var/www/html/

Import Database

Open phpMyAdmin

Create a database (e.g., student_grades)

Import database.sql file

Configure Database Connection

Edit /config/db.php

php
Copy code
$host = "localhost";
$user = "root";
$password = "";
$dbname = "student_grades";
Run the Project

Open in browser:

perl
Copy code
http://localhost/student-grade-mgmt-system
🔑 Default Credentials
Admin Login:

Username: admin

Password: admin123

Student Login:

Username: student1

Password: student123

(You can modify these inside the database after importing database.sql)




📌 Future Enhancements

Email notifications for students

Role-based access control

Online exam & result integration

Advanced analytics dashboard

🤝 Contributing

Pull requests are welcome! For major changes, please open an issue first to discuss what you’d like to change.
