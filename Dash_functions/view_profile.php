<!DOCTYPE html>
 <?php
include  dirname(__FILE__) .'/../includes/head.php';
?>
  <body class="goto-here">
		
  <?php
	include dirname(__FILE__) .'/../includes/header.php';
	?> 
<?php
$host2 = 'localhost';
$username2 = 'root'; // Change this to your database username
$password2 = ''; // Change this to your database password
$dbname2 = 'preppros';

// Establish connection to the second database
$conn2 = new mysqli($host2, $username2, $password2, $dbname2);
if ($conn2->connect_error) {
    die("Connection failed: " . $conn2->connect_error);
}

// Fetching data based on the current user's user_id
$user_id = $_SESSION['id'];
$sql2 = "SELECT meeting_link, start_datetime FROM schedule_list WHERE user_id = '$user_id'";
$result2 = $conn2->query($sql2);
?>
  <?php


include './functions/user_type.php';

// Determine the dashboard file based on the user type
if (isset($_SESSION['user_type'])) {
  $userType = $_SESSION['user_type'];
  
  switch ($userType) {
      case "premium":
        include('./../premium-sidebar.php'); // Include the customer dashboard
          break;
      case "user":
        include('./../user-sidebar.php'); // Include the admin dashboard
          break;
      case "admin":
        include('./../admin-sidebar.php'); // Include the farmer dashboard
          break;
      case "instructor":
        include('./../instructor-sidebar.php'); // Include the farmer dashboard
          break;
      default:
          echo "Invalid user type.";
          // Handle the case when the user type is not recognized 
          break;
  }
} else {
  echo "User type not set.";
}
?>





<section class="home-section">

    <div class="card1">
      <div class="card1-body">
        <div class="d-flex flex-column align-items-center text-center">

          <img src="<?= 'data:image/jpeg;base64,' . base64_encode(@$row["profile_pic"]) ?>" onError="this.onerror=null;this.src='../images/user.png';" alt="Admin" class="rounded-circle" width="100">
          <div class="mt-5">
          <!-- <div class="name"><?php echo $row['full_name']; ?></div> -->

            <h4><?php echo $row['full_name']; ?></h4>
            <!-- <p class="text-secondary mb-1"><?php echo @$row['user_name']; ?></p> -->
            <!-- <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
            <button class="btn btn-primary">Follow</button>
            <button class="btn btn-outline-primary">Message</button> -->
          </div>  
        </div>
      </div>
    </div>

    </div>
    <div class="card2">
      <div class="card2-body">
        <div class="row  text-center">
          <div class="col-sm-3">
            <h6 class="mb-0">Full Name</h6>
          </div>
          <div class="col-sm-6 text-secondary">
          <?php echo $row['full_name']; ?>
          </div>
        </div>
        <hr>
        <div class="row  text-center">
          <div class="col-sm-3">
            <h6 class="mb-0">Email</h6>
          </div>
          <div class="col-sm-6 text-secondary">
            <div><?php echo $row['email']; ?></div>
          </div>
        </div>
        <hr>
        <div class="row  text-center">
          <div class="col-sm-3">
            <h6 class="mb-0">Phone</h6>
          </div>
          <div class="col-sm-6 text-secondary">
          <?php echo $row['ph_number']; ?>
          </div>
        </div>
        <hr>
        <div class="row  text-center">
          <div class="col-sm-3">
            <h6 class="mb-0">User Type</h6>
          </div>
          <div class="col-sm-6 text-secondary">
          <?php echo $row['user_type']; ?>
          </div>
        </div>
        <hr>
        <div class="row  text-center">
          <div class="col-sm-3">
            <h6 class="mb-0">Account Created</h6>
          </div>
          <div class="col-sm-6 text-secondary">
          <?php echo @$row['created_at']; ?>
         
          </div>
        </div>
        <hr>
            <?php if ($result2->num_rows > 0) : ?>
                <div class="row text-center">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Meeting Link</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                        <?php while ($row2 = $result2->fetch_assoc()) : ?>
                            <div><?php echo $row2['meeting_link']; ?></div>
                        <?php endwhile; ?>
                    </div>
                </div>
                <hr>
                <div class="row text-center">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Start Datetime</h6>
                    </div>
                    <div class="col-sm-6 text-secondary">
                        <?php
                        // Reset the pointer of the result set back to the beginning
                        $result2->data_seek(0);
                        while ($row2 = $result2->fetch_assoc()) : ?>
                            <div><?php echo $row2['start_datetime']; ?></div>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php else : ?>
                <p>No meeting link and start datetime found for the current user.</p>
            <?php endif; ?>
        
      </div>
    </div>
  </section>

  </body>

</html>