<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login - Student Grade Management System</title>
    <link rel="stylesheet" href="teacherloginstyle.css">
</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <h2>Teacher Login</h2>
    
    <form action="process_login.php" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        
        <button type="submit" class="button">Login</button>
    </form>
    
    <div class="register-link">
        <p>Don't have an account? <a href="registerteacher.php">Register here</a></p>
    </div>
</div>

</body>
</html>
