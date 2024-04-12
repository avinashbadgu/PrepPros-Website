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
<?php include 'C:\wamp64\www\preppros\progress_pie.php'; ?>

<?php

include_once dirname(__DIR__) . '/preppros/jpgraph-4.4.2/jpgraph-4.4.2/src/jpgraph.php';
include_once dirname(__DIR__) . '/preppros/jpgraph-4.4.2/jpgraph-4.4.2/src/jpgraph_pie.php';


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "preppros";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT score, incorrect_answers FROM user_progress";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
    $row = $result->fetch_assoc();
    $score = $row['score'];
    $incorrectAnswers = $row['incorrect_answers'];
} else {
   
    $score = 0;
    $incorrectAnswers = 0;
}


$conn->close();


$totalQuestions = 20; // Assuming there are 20 questions in total
$correctAnswers = $totalQuestions - $incorrectAnswers;
$correctPercentage = ($correctAnswers / $totalQuestions) * 100;
$incorrectPercentage = ($incorrectAnswers / $totalQuestions) * 100;


$graph = new PieGraph(200, 200);


$data = array($correctPercentage, $incorrectPercentage);
$p1 = new PiePlot($data);


$p1->SetSliceColors(array("#FFFF00", "#FF0000")); 


$p1->SetLegends(array("Correct", "Incorrect"));


$graph->Add($p1);

$graph->img->SetImgFormat("png");


$imageFile = "technical_round_pie_chart.png";

$graph->Stroke($imageFile);

echo "<div class='sidebar'>";
echo "<img src='$imageFile' alt='Pie Chart'>";
echo "</div>";
?>
