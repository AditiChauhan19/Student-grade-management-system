<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grade Management System</title>
    <link rel="stylesheet" href="style.css">

    <style>
        /* Button styles with float: right */
        .button {
            float: right;
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 10px 0 0; /* Add some margin for space between buttons */
        }
        .button2 {
            float: left;
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 10px 10px 0 0; /* Add some margin for space between buttons */
        }
        .imgcss {
            float: right;
        }


        .button:hover {
            background-color: #45a049;
        }

        /* Clear floats after buttons */
        .container:after {
            content: "";
            display: block;
            clear: both;
        }
    </style>

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">
    <h2>User Login/Registration</h2>
    <img src="userimg.png" class="imgcss">
    <img src="userimg.png" class="imgcss2">
    


     <br><br>
    

 
    <a href="registerstudent.php" class="button">Student/Parent</a>
    
    <a href="registerteacher.php" class="button2">Teacher</a>
</div>


</body>
</html>
