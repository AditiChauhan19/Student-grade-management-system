// Function to validate the form inputs
function validateForm() {
    const studentID = document.getElementById('studentID').value;
    const fullName = document.getElementById('fullName').value;
    const course = document.getElementById('course').value;
    const grade = document.getElementById('grade').value;

    // Check if all fields are filled
    if (!studentID || !fullName || !course || !grade) {
        alert('All fields are required!');
        return false;
    }

    // Validate Student ID (Example: must be numeric)
    if (!/^\d+$/.test(studentID)) {
        alert('Student ID must be a valid number!');
        return false;
    }

    // Validate Name (Example: must contain only letters and spaces)
    if (!/^[a-zA-Z ]+$/.test(fullName)) {
        alert('Name must contain only letters and spaces!');
        return false;
    }

    return true; // Allow form submission if all validation passes
}
