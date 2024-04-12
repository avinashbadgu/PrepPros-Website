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
<div class="card3-body">


    
    <?php

// Directory where solved questions are stored
$solvedQuestionsDir = 'C:\wamp64\www\PrepPros\ide\temp';

// Check if directory exists and is a directory
if (file_exists($solvedQuestionsDir) && is_dir($solvedQuestionsDir)) {
    // Open the directory
    if ($handle = opendir($solvedQuestionsDir)) {
        // Display the folder name
        // echo "<h2>Solved Questions Folder: $solvedQuestionsDir</h2>";
        
        // Loop through each file in the directory
        while (false !== ($file = readdir($handle))) {
            // Skip "." and ".." directories
            if ($file != "." && $file != "..") {
                // Read the content of the file
                $content = file_get_contents("$solvedQuestionsDir/$file");
                // Display the filename
                echo "<h3>Solved Question from $file:</h3>";
                // Display the content in a code snippet form
                echo "<pre><code>$content</code></pre>";
            }
        }
        // Close the directory handle
        closedir($handle);
    } else {
        // Failed to open directory
        echo "Failed to open directory: $solvedQuestionsDir";
    }
} else {
    // Directory does not exist or is not a directory
    echo "Directory '$solvedQuestionsDir' does not exist or is not a directory.";
}
?>