<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="./CSS/sidebars.css">
    <title>Files Upload and Download</title>
  </head>
  <body>
        <!-- The sidebar -->
        <div class="sidebar">
        <a class="active" href="index.php">Home</a>
  <a href="users_list.php">Users</a>
  <a href="downloads.php">Files</a>
   <a href="logout.php">Logout</a>
    </div>
    <div class="container">
          <br>
	          Hello, <?php echo $user_data['user_name']; ?>
          <br>
    </div>
      </div>
  </body>
</html>