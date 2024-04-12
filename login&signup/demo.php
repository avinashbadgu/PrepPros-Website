<?php

//Load Composer's autoloader
require 'vendor/autoload.php';

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

session_start();
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    header("Location: register.php");
    die();
}

include 'config.php';
$msg = "";

// Function to validate input
function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Registration form submitted
   
    $name = validateInput($_POST['name']);
    $email = validateInput($_POST['email']);
    $password = validateInput($_POST['password']);
    $confirmPassword = validateInput($_POST['confirm_password']);
    $user_type = isset($_POST['user_type']) ? validateInput($_POST['user_type']) : '';

    // Additional validation checks
    if (empty($name) || empty($email) || empty($password) || empty($confirmPassword) || empty($user_type)) {
        $msg = "<div class='alert alert-danger'>All fields are required.</div>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = "<div class='alert alert-danger'>Invalid email format.</div>";
    } elseif ($password !== $confirmPassword) {
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
        $code = md5(rand());

        // Check if email already exists
        $checkEmailQuery = "SELECT * FROM users WHERE email=?";
        $checkEmailStmt = mysqli_prepare($conn, $checkEmailQuery);
        mysqli_stmt_bind_param($checkEmailStmt, "s", $email);
        mysqli_stmt_execute($checkEmailStmt);
        $result = mysqli_stmt_get_result($checkEmailStmt);

        if (mysqli_num_rows($result) > 0) {
            $msg = "<div class='alert alert-danger'>This email address is invalid or already exists.</div>";
        } else {
            // Insert user data into the database
            $insertUserQuery = "INSERT INTO users (full_name, email, password, code, user_type, user_status) VALUES (?, ?, ?, ?, ?, 'Active')";
            $insertUserStmt = mysqli_prepare($conn, $insertUserQuery);
            mysqli_stmt_bind_param($insertUserStmt, "sssss", $name, $email, $hashedPassword, $code, $user_type);
            $insertResult = mysqli_stmt_execute($insertUserStmt);

            if ($insertResult) {
                // Send verification email
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.gmail.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'prepbroszz@gmail.com';
                    $mail->Password   = 'hqlykprmembzmcfa';
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
                    $mail->Port       = 465;

                    //Recipients
                    $mail->setFrom('prepbroszz@gmail.com');
                    $mail->addAddress($email);

                    // Content
                    $mail->isHTML(true);
                    $mail->Subject = 'No Reply';
                    $mail->Body = 'Here is the verification link <b><a href="http://localhost/PrepPros/login&signup/login.php?verification='.$code.'">http://localhost/PrepPros/login&signup/login.php?verification='.$code.'</a></b>';

                    $mail->send();
                    $msg = "<div class='alert alert-info'>We have sent a verification link to your email address.</div>";
                } catch (Exception $e) {
                    $msg = "<div class='alert alert-danger'>Message could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
                }
            } else {
                $msg = "<div class='alert alert-danger'>Something went wrong.</div>";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php include dirname(__DIR__).'/includes/head1.php'; ?>
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <section class="w3l-mockup-form" style="background: linear-gradient(to bottom, #dfb7f6 0%, rgb(194, 32, 194) 100%);">
        <div class="container">
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/signup.jpg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Register Now</h2>
                        <p>Welcome to PrepPros </p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="text" class="name" name="name" placeholder="Enter Your Name"
                                value="<?php if (isset($_POST['submit'])) { echo $name; } ?>" required>
                            <input type="email" class="email" name="email" placeholder="Enter Your Email"
                                value="<?php if (isset($_POST['submit'])) { echo $email; } ?>" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password"
                                required>
                            <input type="password" class="confirm_password" name="confirm_password"
                                placeholder="Confirm Password" required>

                            <!-- Add radio button for selecting user or instructor -->
                            <div>
                                <input type="radio" id="user" name="user_type" value="user" checked>
                                <label for="user">User</label>
                                <input type="radio" id="instructor" name="user_type" value="instructor">
                                <label for="instructor">Instructor</label>
                            </div>

                            <button name="submit" class="btn" style="background-color: purple;"
                                type="submit">Register</button>
                        </form>
                        <div class="social-icons">
                            <p>Have an account! <a href="login.php">Login</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script>
        $(document).ready(function(c) {
            $('.alert-close').on('click', function(c) {
                $('.main-mockup').fadeOut(100, function(c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>
</body>

</html>