<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/bdd89edb33.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
    <link rel="stylesheet" href="css/card.css" />
    <title>PrepPros Premium Page</title>
</head>

<body>
    <section class="section-plans" id="section-plans">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Premium
            </h2><br><br>
            <h3 class="head" style="color: #000; justify-content: center; font-size: 20px;">Get started with the best Subscription that works for you.</h3>
        </div><br><br>

        <div class="row">
            <div class="col-1-of-2">
                <div class="card">
                    <div class="card__side card__side--front-1">
                        <div class="card__title card__title--1">
                            <i class="fas fa-paper-plane"></i>
                            <h4 class="card__heading">Basic</h4>
                        </div>

                        <div class="card__details">
                            <ul>
                                <li>limited Aptitude Questions</li>
                                <li>Access to limited Courses</li>
                                <li>Unmetered Progress</li>
                                <li>50 coding Questions</li>
                                <li>Access to IDE</li>
                                <li>Live Events</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                                <p class="card__price-only">You are Subscribed to this</p>
                                <p class="card__price-value">Free</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-1-of-2">
                <div class="card">
                    <div class="card__side card__side--front-2">
                        <div class="card__title card__title--2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                                <path fill-rule="evenodd" d="M13.5 4.938a7 7 0 1 1-9.006 1.737c.202-.257.59-.218.793.039.278.352.594.672.943.954.332.269.786-.049.773-.476a5.977 5.977 0 0 1 .572-2.759 6.026 6.026 0 0 1 2.486-2.665c.247-.14.55-.016.677.238A6.967 6.967 0 0 0 13.5 4.938ZM14 12a4 4 0 0 1-4 4c-1.913 0-3.52-1.398-3.91-3.182-.093-.429.44-.643.814-.413a4.043 4.043 0 0 0 1.601.564c.303.038.531-.24.51-.544a5.975 5.975 0 0 1 1.315-4.192.447.447 0 0 1 .431-.16A4.001 4.001 0 0 1 14 12Z" clip-rule="evenodd" />
                              </svg>                              
                            <h4 class="card__heading">PrepPros Plus</h4>
                        </div>

                        <div class="card__details">
                            <ul>
                                <li>Includes Free Package Features</li>
                                <li>Unlimited Aptitude Questions, coding challenges, course access,etc</li>
                                <li>Unlimited HR interviews</li>
                                <li>Coding supervision</li>
                                <li>One-on-one mentoring sessions with Faculty members</li>
                                <!-- <li>And much more</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="card__side card__side--back card__side--back-2">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">₹5,999/mo*</p>
                            </div>
                            <a href="payment.php" class="btn btn--white">Get started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    	<!-- footer begins -->
	
<?php
include  dirname(__DIR__).'/preppros/includes/footer.php';

?>
	<!-- End of footer -->
</body>

</html>