<?php
include 'connect.php';
$sq="delete from categoria where id='$_SESSION[id]'";
mysqli_query($con,$sq);
header('location:add_district.php');
?>