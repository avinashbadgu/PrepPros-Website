<?php
include 'config.php';

$msg = "";

if (isset($_GET['reset'])) {
    $resetCode = mysqli_real_escape_string($conn, $_GET['reset']);

    $checkResetCodeQuery = "SELECT * FROM users WHERE code=?";
    $checkResetCodeStmt = mysqli_prepare($conn, $checkResetCodeQuery);
    mysqli_stmt_bind_param($checkResetCodeStmt, "s", $resetCode);
    mysqli_stmt_execute($checkResetCodeStmt);
    $result = mysqli_stmt_get_result($checkResetCodeStmt);

    if (mysqli_num_rows($result) > 0) {
        if (isset($_POST['submit'])) {
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);

            // Password validations
            if (empty($password) || empty($confirm_password)) {
                $msg = "<div class='alert alert-danger'>All fields are required.</div>";
            } elseif ($password !== $confirm_password) {
                $msg = "<div class='alert alert-danger'>Password and Confirm Password do not match.</div>";
            } elseif (strlen($password) < 6) {
                $msg = "<div class='alert alert-danger'>Password must be at least 6 characters.</div>";
            } elseif (!preg_match("/[a-zA-Z]/", $password)) {
                $msg = "<div class='alert alert-danger'>Password must contain at least one letter.</div>";
            } elseif (!preg_match("/[0-9]/", $password)) {
                $msg = "<div class='alert alert-danger'>Password must contain at least one number.</div>";
            } else {
                // Password hashing
                $hashedPassword = password_hash($password, PASSWORD_BCRYPT, ['cost' => 12]);

                $updatePasswordQuery = "UPDATE users SET password=?, code='' WHERE code=?";
                $updatePasswordStmt = mysqli_prepare($conn, $updatePasswordQuery);
                mysqli_stmt_bind_param($updatePasswordStmt, "ss", $hashedPassword, $resetCode);
                $updateResult = mysqli_stmt_execute($updatePasswordStmt);

                if ($updateResult) {
                    $msg = "<div class='alert alert-success'>Password updated successfully. You can now <a href='login.php'>login</a>.</div>";
                } else {
                    $msg = "<div class='alert alert-danger'>Failed to update password. Please try again.</div>";
                }
            }
        }
    } else {
        $msg = "<div class='alert alert-danger'>Reset Link does not match.</div>";
    }
} else {
    header("Location: forgot-password.php");
    exit();
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
                            <input type="password" class="password" name="password" placeholder="Enter Your Password"
                                required>
                            <input type="password" class="confirm_password" name="confirm_password"
                                placeholder="Enter Your Confirm Password" required>
                            <button name="submit" class="btn" type="submit">Change Password</button>
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
