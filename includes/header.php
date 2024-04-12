<?php
include(dirname(__DIR__) . '/functions/db.php');
?>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="<?php echo $base_url; ?>home.php"><span>Prep</span>Pros</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                   

                    <?php
                    if (isset($_SESSION['id'], $_SESSION['full_name'], $_SESSION['user_type'])) {
                        ?>
                        <?php
                            $user_id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
                            $sql = "SELECT user_type,full_name, email, profile_pic FROM users WHERE id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("i", $user_id);
                            $stmt->execute();
                            if ($stmt->error) {
                                echo "Error: " . $stmt->error;
                            }
                            $stmt->bind_result($user_type, $full_name, $profile_pic, $email);
                            $stmt->fetch();

                            $_SESSION['user_type'] = $user_type;
                            $stmt->close();
                            $_SESSION["path"] = "";

                            if (isset($_SESSION['user_type'])) {
                                if ($_SESSION['user_type'] == 'admin') {
                                    $_SESSION["path"] = "$base_url.#";
                                } elseif ($_SESSION['user_type'] == 'premium') {
                                    $_SESSION["path"] = "$base_url.#";
                                } elseif ($_SESSION['user_type'] == 'user') {
                                    $_SESSION["path"] = "$base_url.#";
                                } elseif ($_SESSION['user_type'] == 'instructor') {
                                    $_SESSION["path"] = "$base_url.#";      
                                } else {
                                    echo "error";
                                }
                            }
                            ?>  <?php
                            if ($_SESSION['user_type'] === 'user') {
                                ?>
                             <li class="nav-item active"><a href="<?php echo $base_url; ?>premium.php"
                            class="nav-link" style="color:#3ff0cb;">Premium</a></li>
                            <?php
                                    }
                                    ?>
                    <li class="nav-item active"><a href="<?php echo $base_url; ?>home.php"
                            class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="<?php echo $base_url; ?>resources.php"
                            class="nav-link">Resources</a></li>
                    <li class="nav-item"><a href="<?php echo $base_url; ?>instructor_details.php"
                            class="nav-link">Instructor</a></li>
                    <li class="nav-item"><a href="<?php echo $base_url; ?>blog.php" class="nav-link">Articles</a></li>
                    <li class="nav-item"><a href="<?php echo $base_url; ?>about.php"
                            class="nav-link">About</a></li>
                    <li class="nav-item"><a href="<?php echo $base_url; ?>contact.php"
                            class="nav-link">Contact</a></li>


                       
                        <?php
                            $user_id = filter_var($_SESSION['id'], FILTER_VALIDATE_INT);
                            $sql = "SELECT user_type,full_name, email, profile_pic FROM users WHERE id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("i", $user_id);
                            $stmt->execute();
                            if ($stmt->error) {
                                echo "Error: " . $stmt->error;
                            }
                            $stmt->bind_result($user_type, $full_name, $profile_pic, $email);
                            $stmt->fetch();

                            $_SESSION['user_type'] = $user_type;
                            $stmt->close();
                            $_SESSION["path"] = "";

                            if (isset($_SESSION['user_type'])) {
                                if ($_SESSION['user_type'] == 'admin') {
                                    $_SESSION["path"] = "$base_url.#";
                                } elseif ($_SESSION['user_type'] == 'premium') {
                                    $_SESSION["path"] = "$base_url.#";
                                } elseif ($_SESSION['user_type'] == 'user') {
                                    $_SESSION["path"] = "$base_url.#";
                                } elseif ($_SESSION['user_type'] == 'instructor') {
                                    $_SESSION["path"] = "$base_url.#";    
                                } else {
                                    echo "error";
                                }
                            }
                            ?> 
                           
                    <li  class="hrd-prof">

                       <a href="#"class="display-picture"><img
                                    src="<?php echo 'data:image/jpeg;base64,' . base64_encode($profile_pic); ?>"
                                    onError="this.onerror=null;this.src='<?php echo $base_url; ?>/images/user.png';"
                                    alt="User"></a>
                          </li>
                          

                    <div class="card hidden hrd-prof-menu">
                        <ul>
                        
                            <li><a><b>Hello, <?php echo $_SESSION['full_name']; ?></b> </a></li>
                            <li><a href="<?php echo $base_url; ?>Dash_functions/view_profile.php">Profile</a></li>
                            <?php
                                    if ($_SESSION['user_type'] === 'premium') {
                                        ?>
                            <li><a href="<?php echo $base_url; ?>#">MyTests</a></li>
                            <?php
                                    } elseif ($_SESSION['user_type'] === 'admin') {
                                        ?>
                            <li><a href="<?php echo $base_url; ?>#">ManageUsers</a></li>
                            <?php
                                    } elseif ($_SESSION['user_type'] === 'instructor') {
                                        ?>
                            <li><a href="<?php echo $base_url; ?>#">My Schedule</a></li>
                            <?php
                                    } else {
                                        ?>
                            <li><a href="<?php echo $base_url; ?>/premium.php">GetPremium</a></li>
                            <?php
                                    }
                                    ?>
                            <li><a href="<?php echo $base_url; ?>#">Settings</a></li>
                            <li><a href="<?php echo $base_url; ?>/login&signup/logout.php">Logout</a></li>
                        </ul>
                    </div>
                    <?php
                    } else {
                        ?>
                    <li class="nav-item"><a href="<?php echo $base_url; ?>login&signup/login.php"
                            class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="<?php echo $base_url; ?>login&signup/register.php"
                            class="nav-link">Signup</a></li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
    <script src="<?php echo $base_url; ?>/js/profile_pic_dd.js"></script>
</body>
</html>
