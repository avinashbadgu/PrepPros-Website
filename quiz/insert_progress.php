
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "preppros";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
@$userId = $_SESSION['id'];
$stmt = $conn->prepare("INSERT INTO user_progress (score, incorrect_answers,user_id) VALUES (?, ?,'$userId')");
$stmt->bind_param("ii", $score, $incorrect_answers);


$score = $_POST['score'];
$incorrect_answers = $_POST['incorrect_answers'];

$stmt->execute();

$stmt->close();
$conn->close();
?>
