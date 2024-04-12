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

if (empty($id)) {
    $sql = "INSERT INTO `schedule_list` (`title`, `description`, `start_datetime`, `end_datetime`) VALUES ('$title', '$description', '$start_datetime', '$end_datetime')";
} else {
    $sql = "UPDATE `schedule_list` SET `title` = '{$title}', `description` = '{$description}', `start_datetime` = '{$start_datetime}', `end_datetime` = '{$end_datetime}' WHERE `id` = '{$id}'";
}

$save = $conn->query($sql);

if ($save) {
    echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Schedule Successfully Saved.',
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
                text: 'An error occurred.{$conn->error}'
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
