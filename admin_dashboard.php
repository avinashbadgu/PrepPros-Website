<!DOCTYPE html>
<?php
if($_SESSION['user_type'] != 'admin'){
  header("Location: ../home.php");

}
include  dirname(__FILE__) .'/includes/head.php';
?>
  <body class="goto-here">
		
  <?php
	include dirname(__FILE__) .'/includes/header.php';
	?> 
  
  <?php include('./admin-sidebar.php');?>


  </body>
</html>
