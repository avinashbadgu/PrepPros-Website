<?php
include 'config.php';

$msg = "";

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    // Check if the email exists in the database
    $checkEmailQuery = "SELECT * FROM users WHERE email=?";
    $checkEmailStmt = mysqli_prepare($conn, $checkEmailQuery);
    mysqli_stmt_bind_param($checkEmailStmt, "s", $email);
    mysqli_stmt_execute($checkEmailStmt);
    $result = mysqli_stmt_get_result($checkEmailStmt);

    if (mysqli_num_rows($result) > 0) {
        // Generate a unique reset code
        $resetCode = uniqid();

        // Update the user's code in the database
        $updateCodeQuery = "UPDATE users SET code=? WHERE email=?";
        $updateCodeStmt = mysqli_prepare($conn, $updateCodeQuery);
        mysqli_stmt_bind_param($updateCodeStmt, "ss", $resetCode, $email);
        $updateCodeResult = mysqli_stmt_execute($updateCodeStmt);

        if ($updateCodeResult) {
            // Redirect to the password reset page with the generated reset code
            header("Location: change-password.php?reset=$resetCode");
            exit();
        } else {
            $msg = "<div class='alert alert-danger'>Failed to generate reset code. Please try again.</div>";
        }
    } else {
        $msg = "<div class='alert alert-danger'>Email not found in the database.</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include dirname(__DIR__) . '/includes/head1.php'; ?>
    <meta name="keywords" content="Reset Password" />
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
</head>

<body>
    <section class="w3l-mockup-form">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/image3.svg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Reset Password</h2>
                        <p>Welcome to PrepPros</p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                            <button name="submit" class="btn" type="submit">Reset Password</button>
                        </form>
                        <div class="social-icons">
                            <p>Back to! <a href="./login.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script>
    $(document).ready(function (c) {
        $('.alert-close').on('click', function (c) {
            $('.main-mockup').fadeOut(100, function (c) {
                $('.main-mockup').remove();
            });
        });
    });
</script>

</body>

</html>
