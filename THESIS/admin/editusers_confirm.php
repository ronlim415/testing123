<?php
$id = $_GET['s_id'];
$user_name = $_POST['user_name'];
$password = $_POST['password'];

include ("dbconnect.php");

$sql = "UPDATE students SET user_name= '$user_name', password = '$password' WHERE s_id = $id"; 

$q = mysqli_query($conn,$sql) or die (mysqli_error($conn));
header ("location:users_list.php");
?>		