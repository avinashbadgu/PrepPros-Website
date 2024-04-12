<?php
session_start();

include 'config.php';

// Redirect if the user is already logged in
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    header("Location: ../home.php");
    exit();
}

$msg = "";
$dashboardUrls = [
    'admin' => '../Dash_functions/view_profile.php',
    'user' => '../home.php',
    'premium' => '../home.php',
    'instructor' => '../Dash_functions/view_profile.php',

];

if (isset($_GET['verification'])) {
    $verificationCode = $_GET['verification'];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE code='$verificationCode'");

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $query = mysqli_query($conn, "UPDATE users SET code='' WHERE code='$verificationCode'");

        if ($query) {
            // User is successfully verified, store verification in session
            $_SESSION['verification_done'] = true;
            $_SESSION['verification_user_id'] = $row['id'];
            header("Location: login.php");
            exit();
        }
    } else {
        header("Location: ../index.php");
        exit();
    }
}

if (isset($_POST['submit'])) {
    $email = validateInput($_POST['email']);
    $password = $_POST['password'];  // Do not validate or hash here

    if (empty($email) || empty($password)) {
        $msg = "<div class='alert alert-danger'>Email and Password are required.</div>";
    } else {
        // Use parameterized query to prevent SQL injection
        $sql = "SELECT * FROM users WHERE email=?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            // Verify the entered password with the stored hashed password
            if (password_verify($password, $row['password'])) {
                $_SESSION['full_name'] = $row['full_name'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['user_type'] = $row['user_type'];
                $_SESSION['email'] = $email;

                $userType = $row['user_type'];

                if (isset($dashboardUrls[$userType])) {
                    // Redirect the user to their dashboard
                    $dashboardUrl = $dashboardUrls[$userType];
                    header("Location: $dashboardUrl");
                    exit();
                } else {
                    echo "Invalid user_type";
                    exit();
                }
            } else {
                $msg = "<div class='alert alert-danger'>Incorrect Email or Password. Try again.</div>";
            }
        } else {
            $msg = "<div class='alert alert-danger'>Incorrect Email or Password. Try again.</div>";
        }
    }
}

function validateInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <?php
    include  dirname(__DIR__).'/includes/head1.php';
    ?>
    <!-- Meta tag Keywords -->
    <meta name="keywords" content="Login Form" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- form section start -->
    <section class="w3l-mockup-form" style="background: linear-gradient(to bottom, purple 0%, #c054ff 100%);">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/login.jpg" alt="">
                        </div>
                    </div>
                    <div class="content-wthree">
                        <h2>Login Now</h2>
                        <p>Welcome To PrepPros </p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="email" class="email" name="email" placeholder="Enter Your Email" required>
                            <input type="password" class="password" name="password" placeholder="Enter Your Password"
                                style="margin-bottom: 2px;" required>
                            <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align: right;">Forgot Password?</a></p>
                            <button name="submit" style="background-color: purple;" class="btn" type="submit">Login</button>
                        </form>
                        <div class="social-icons">
                            <p>Create Account! <a href="register.php">Register</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
    </section>
    <!-- //form section start -->

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
