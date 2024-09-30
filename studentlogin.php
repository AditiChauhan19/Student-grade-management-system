<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login - Student Grade Management System</title>
    <link rel="stylesheet" href="studentloginstyle.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <h2>Student Login</h2>
    
    <form action="process_student_login.php" method="POST">
        <div class="form-group">
            <label for="student_id">Student ID:</label>
            <input type="text" id="student_id" name="student_id" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <button type="submit" class="button">Login</button>
    </form>
    
    <div class="register-link">
        <p>Don't have an account? <a href="register_student.php">Register here</a></p>
    </div>
</div>

</body>
</html>
