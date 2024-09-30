<div class="container">
    <h2>Student List</h2>
    
    <table>
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Full Name</th>
                <th>Course</th>
                <th>Grade</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- Example student entries -->
            <tr>
                <td>001</td>
                <td>John Doe</td>
                <td>Math 101</td>
                <td>A</td>
                <td>
                    <a href="edit-student.html?id=001">Edit</a> |
                    <a href="delete-student.html?id=001">Delete</a>
                </td>
            </tr>
            <tr>
                <td>002</td>
                <td>Jane Smith</td>
                <td>English 102</td>
                <td>B+</td>
                <td>
                    <a href="edit-student.html?id=002">Edit</a> |
                    <a href="delete-student.html?id=002">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>

    <a href="addstudent.php" class="button">Add New Student</a>
</div>
