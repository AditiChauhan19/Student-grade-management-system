<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration - Student Grade Management System</title>
    <link rel="stylesheet" href="registerstudentstyle.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <h2>Student Registration</h2>
    
    <form action="process_registration.php" method="POST">
        <div class="form-group">
            <label for="full_name">Full Name:</label>
            <input type="text" id="full_name" name="full_name" required>
        </div>
        
        <div class="form-group">
            <label for="student_id">Student ID:</label>
            <input type="text" id="student_id" name="student_id" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required>
        </div>

        <button type="submit" class="button">Register</button>
    </form>

    <div class="login-link">
        <p>Already have an account? <a href="login_student.html">Login here</a></p>
    </div>
</div>

</body>
</html>
