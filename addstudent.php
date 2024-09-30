<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student - Student Grade Management System</title>
    <link rel="stylesheet" href="addstudentstyle.css">
    <script src="addstudentvalidation.js" defer></script> <!-- Include JavaScript file -->
</head>
<body>

<?php include 'header.php'; ?>




<div class="container">
    <br><br>
    
    <form id="addStudentForm" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="studentID">Student ID:</label>
            <input type="text" id="studentID" name="studentID" required>
        </div>

        <div class="form-group">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>
        </div>

        <div class="form-group">
            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required>
        </div>

        <div class="form-group">
            <label for="grade">Grade:</label>
            <select id="grade" name="grade" required>
                <option value="" disabled selected>Select Grade</option>
                <option value="A">A</option>
                <option value="B+">B+</option>
                <option value="B">B</option>
                <option value="C+">C+</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="F">F</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="button">Add Student</button>
        </div>
    </form>
</div>

</body>
</html>
