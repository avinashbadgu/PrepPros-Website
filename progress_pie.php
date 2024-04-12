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
