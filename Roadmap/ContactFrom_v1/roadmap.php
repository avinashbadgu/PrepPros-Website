<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V1</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
    <style>
        .wrap-input1 a {
            display: block;
            margin-bottom: 10px;
            color: #000; /* Change the color to black */
            text-decoration: none;
            transition: color 0.3s;
        }

        .wrap-input1 a:hover {
            color: rgb(208, 157, 208);
        }
        a{
            color: #000;
            font-size: large;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="contact1">
    <div class="container-contact1">
        <div class="contact1-pic js-tilt" data-tilt>
            <img src="images/img.png" alt="IMG">
        </div>

        <form class="contact1-form validate-form">
            <span class="contact1-form-title">
                Find the Right career for you in Tech
            </span>

            <div class="wrap-input1 validate-input" data-validate="What is your professional background?">
                <span class="contact1-form-title">
                    <a href="https://roadmap.sh/ai-data-scientist">Data Science</a><br>
                    <a href="https://roadmap.sh/full-stack">Full Stack</a><br>
                    <a href="https://roadmap.sh/backend">Backend Development</a><br>
                    <a href="https://roadmap.sh/frontend">Frontend Development</a><br>
                    <a href="https://roadmap.sh/cyber-security">Cyber-Security</a><br>

                </span>
            </div>

           
        </form>
    </div>
</div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>
