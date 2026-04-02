<?php
// Include database connection
include('includes/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    // Check for empty fields
    if (!empty($name) && !empty($message)) {
        // Insert data into feedback table
        $sql = "INSERT INTO feedback (name, message) VALUES ('$name', '$message')";
        
        if (mysqli_query($conn, $sql)) {
            // Redirect back with success message
            header("Location: feedback.php?status=success");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Please fill in all fields.";
    }
} else {
    // If someone tries to access this page directly
    header("Location: feedback.php");
    exit();
}
?>
