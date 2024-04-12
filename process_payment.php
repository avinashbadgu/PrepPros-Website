<?php
// Start the session (if not already started)
session_start();

// Include database connection file
include_once "db_connect.php";

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to login page or handle the situation as per your application logic
    header("Location: login.php");
    exit; // Stop further execution
}

// Retrieve user ID from session
$user_id = $_SESSION['user_id']; // Assuming you store user ID in the session upon login

// Update user_type to 'premium' for the user who made the payment
$sql = "UPDATE users SET user_type = 'premium' WHERE id = $user_id";

if (mysqli_query($conn, $sql)) {
    // Payment processed successfully
    echo "Payment processed successfully!";
} else {
    // Payment processing failed
    echo "Error processing payment: " . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>
