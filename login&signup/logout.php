<?php

session_start();
session_unset();
// session_destroy();


// session_start();

unset($_SESSION['id']);
unset($_SESSION['full_name']);
unset($_SESSION['email']);
session_destroy();
header("Location: ../index.php");
