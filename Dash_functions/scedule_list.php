<!DOCTYPE html>
 <?php
include  dirname(__FILE__) .'/../includes/head.php';
?>
  <body class="goto-here">
		
  <?php
	include dirname(__FILE__) .'/../includes/header.php';
	?> 
  
  <?php


include './functions/user_type.php';

// Determine the dashboard file based on the user type
if (isset($_SESSION['user_type'])) {
  $userType = $_SESSION['user_type'];
  
  switch ($userType) {
      case "premium":
        include('./../premium-sidebar.php'); // Include the customer dashboard
          break;
      case "user":
        include('./../user-sidebar.php'); // Include the admin dashboard
          break;
      case "admin":
        include('./../admin-sidebar.php'); // Include the farmer dashboard
          break;
      case "instructor":
        include('./../instructor-sidebar.php'); // Include the farmer dashboard
          break;
      default:
          echo "Invalid user type.";
          // Handle the case when the user type is not recognized 
          break;
  }
} else {
  echo "User type not set.";
}
?>





<section class="home-section">
<div class="card3">


<?php

// Directory where solved questions are stored
$solvedQuestionsDir = 'C:\wamp64\www\preppros\ide\temp';

// Array of allowed file extensions
$allowedExtensions = array('py', 'cpp', 'c', 'java');

// Display the folder name
echo "<h2 style='text-align: center;'>Solved Questions Folder: $solvedQuestionsDir</h2>";

// Loop through each allowed extension
foreach ($allowedExtensions as $extension) {
    // Find files with the current extension
    $files = glob("$solvedQuestionsDir/*.$extension");
    
    // Check if any files were found
    if ($files !== false) {
        // Loop through each file
        foreach ($files as $file) {
            // Read the content of the file
            $content = file_get_contents($file);
            // Split the content into lines
            $lines = explode("\n", $content);
            
            // Display the filename
            echo "<h3 style='text-align: center;'>Solved Question from $file:</h3>";
            
            // Display the content with line numbering and CSS styling
            echo '<div style="margin: 0 auto; text-align: left;">'; // Center align content
            echo '<pre style="background-color: #000; padding: 10px; border-radius: 5px; border: 1px solid #ddd; overflow-x: auto;">';
            echo '<code style="font-family: Consolas, Monaco, monospace; font-size: 14px; color: #fff;">';
            foreach ($lines as $lineNumber => $line) {
                // Increment line number by 1 to start from 1
                $lineNumber += 1;
                // Format line with line number
                printf('<span style="color: #888;">%4d |</span> %s', $lineNumber, htmlspecialchars($line));
            }
            echo '</code>';
            echo '</pre>';
            echo '</div>';
            
            // Add symbols for right and wrong actions
            echo '<div style="text-align: center; margin-top: 10px;">'; // Center align buttons
            echo '  <button onclick="showRightAlert()">✅ Right</button>';
            echo '  <button onclick="showWrongAlert()">❌ Wrong</button>';
            echo '</div>';
        }
    }
}

?>

<!-- JavaScript for SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function showRightAlert() {
        Swal.fire({
            icon: "success",
            title: "Correct!",
            text: "Your answer is right ",
        });
    }
    function showWrongAlert() {
        Swal.fire({
            icon: "error",
            title: "Wrong!",
            text: "Need to work on this ",
        });
    }
</script>