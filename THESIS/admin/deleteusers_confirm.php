<?php
$id = $_GET['s_id'];
$conn = mysqli_connect("localhost","root","") or die (mysqli_error($conn));
$db = mysqli_select_db($conn,"file-management");

$sql = "DELETE FROM students WHERE s_id = $id";

$q = mysqli_query($conn,$sql) or die (mysqli_error($conn)); 
header ("location:users_list.php");
?>