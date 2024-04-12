<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include  dirname(__DIR__) . '/../includes/head1.php';

    include  dirname(__DIR__) . '/../includes/head.php';

    ?>




    <style>
        #column2 {
            flex: 4;
            background-color: rgb(250, 246, 255);
            overflow: auto;
            /* Allow for scrolling if content exceeds column height */
            padding: 0px;
            width: 100%;
            height: 100%;
            /* Full height of the viewport */
            border: none;

            .hidethis {
                display: none;
                /* Hide this by default */
            }
        }
    </style>
</head>

<body>
    <?php
    include  dirname(__DIR__) . '/../includes/header.php';

    ?>
    <!-- <nav class="navbar navbar-expand-lg ftco-navbar-light1" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand img d-flex justify-content-center" href="index.html"
				style="background-image: url('../../images/logo.png'); height: 90x; width: 90px;"></a>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="../../home.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="../../profile.php" class="nav-link">My Profile</a></li>
				</ul>
			</div>
		</div>
	</nav> -->
    <!-- <nav class="navbar navbar-expand-lg ftco-navbar-light1" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand img d-flex justify-content-center" href="index.html"
				style="background-image: url('images/logo.png'); height: 90x; width: 90px;"></a>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="profile.html" class="nav-link">My Profile</a></li>
				</ul>
			</div>
		</div>
	</nav>
	END nav -->
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tab-links");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <!-- partial:index.partial.html -->
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>C course</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Index</p>
                <li class="active">
                    <!-- <a href="java_module1.html" target="iframe" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Module 1</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu"> -->
                <li>
                    <a href="abt.php" target="iframe">Introduction</a>
                </li>
                <li>
                    <a href=" <?php echo $base_url; ?>ide/index.html" target="iframe">Ide</a>
                </li>
                <li>
                    <a href="c1.php" target="iframe">Module 1</a>
                </li>
                <!-- <li>
                            <a href="java_module2.html" target="iframe">Servlets</a>
                        </li>
                        <li>
                            <a href="quiz/" target="iframe">Take Test</a>
                        </li> -->
                <!-- </ul> -->
                </li>
                <li>
                    <a href="c2.php" target="iframe">Module 2</a>
                </li>
                <li>
                <li>
                    <a href="c2.php" target="iframe">Module 3</a>
                </li>
                </li>
                <li>
                    <a href="c2.php" target="iframe">Module 4</a>
                </li>

            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="<?php echo $base_url; ?>resources.php" class="article">Back to Courses</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <iframe id="column2" name="iframe" frameborder="0" src="abt.php">

            </iframe>

        </div>
    </div>
    </div>
    </div>
    <!-- partial -->
    <script src="js/script.js"></script>
    <script>
        function loadContent(url) {
            $('.loadhere').load(url);
        }
    </script>
    <script src="<?php echo $base_url; ?>/js/profile_pic_dd.js"></script>


</body>

</html>