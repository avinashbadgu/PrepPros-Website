<!DOCTYPE html>
 <?php
 if($_SESSION['user_type'] != 'admin' && $_SESSION['user_type'] != ' user'&& $_SESSION['user_type'] != 'premium'){
  header("Location: ./home.php");

}
include  dirname(__FILE__) .'/includes/head.php';
?>
  <body class="goto-here">
		
  <?php
	include dirname(__FILE__) .'/includes/header.php';
	?> 

    <?php include('./instructor-sidebar.php');?>
  
  
  </body>
</html>
