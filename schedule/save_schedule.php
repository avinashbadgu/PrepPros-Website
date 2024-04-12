<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Include Bootstrap CSS (assuming you're using Bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Include SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
</head>
<body>

<!-- Your HTML content goes here -->

<!-- Include Bootstrap JS (assuming you're using Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Include SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
session_start();
require_once('db-connect.php');

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'No data to save.'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace('./');
                }
            });
          </script>";
    $conn->close();
    exit;
}

extract($_POST);
$allday = isset($allday);
@$userId = $_SESSION['id'];
$meeting_link = 'https://meet.google.com/wdn-twmw-nqo';

// If ID is empty, check if the provided name or email already exists for any record
if (empty($id)) {
    $existing_entry = $conn->query("SELECT * FROM `schedule_list` WHERE `student_name` = '$student_name' OR `email` = '$email'");
    if ($existing_entry && $existing_entry->num_rows > 0) {
        // Entry already exists, show error message
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'The provided name or email already exists. Please choose a different name or email.'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.replace('./');
                    }
                });
              </script>";
        $conn->close();
        exit;
    }
}

// Check if the entry has already been updated
$entry_status = $conn->query("SELECT updated FROM `schedule_list` WHERE `id` = '$id'")->fetch_assoc()['updated'];
if ($entry_status == 1) {
    echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Slot Booked😒',
                text: 'Try another slot before others book it ⏩👋'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace('./');
                }
            });
          </script>";
    $conn->close();
    exit;
}

// Proceed to insert or update
if (empty($id)) {
    $sql = "INSERT INTO `schedule_list` (`student_name`, `email`, `meeting_link`, `user_id`) VALUES ('$student_name', '$email', '$meeting_link', '$userId')";
} else {
    $sql = "UPDATE `schedule_list` SET `student_name` = '$student_name', `email` = '$email', `meeting_link` = '$meeting_link', `user_id` = '$userId', `updated` = 1 WHERE `id` = '$id'";
}

$save = $conn->query($sql);

if ($save) {
    echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Slot Successfully Booked ✅.',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '/PrepPros/Dash_functions/view_profile.php';
                }
            });
          </script>";
} else {
    echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'An error occurred while saving the schedule. {$conn->error}'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.replace('./');
                }
            });
          </script>";
}

$conn->close();
?>


</body>
</html>