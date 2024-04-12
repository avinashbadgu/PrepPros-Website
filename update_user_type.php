<?php
// Include database connection file
include_once "db_connect.php";

// Check if user ID is set in the session
if(isset($_SESSION['user_id'])) {
    // Retrieve user ID from session
    $user_id = $_SESSION['user_id'];

    // Update user_type to 'premium' for the user who made the payment using a prepared statement
    $sql = "UPDATE users SET user_type = ? WHERE id = ?";
    
    // Prepare the SQL statement
    if($stmt = mysqli_prepare($conn, $sql)) {
        // Bind parameters
        $user_type = 'premium';
        mysqli_stmt_bind_param($stmt, "si", $user_type, $user_id);
        
        // Execute the statement
        if(mysqli_stmt_execute($stmt)) {
            echo "User upgraded to premium successfully!";
        } else {
            echo "Error updating user: " . mysqli_error($conn);
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        echo "Error preparing statement: " . mysqli_error($conn);
    }
} else {
    echo "User ID not found in session.";
}

// Close database connection
mysqli_close($conn);
?>
