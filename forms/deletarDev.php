<?php
include '../connect.php';
$sq="delete from developer where id=1";
mysqli_query($con,$sq);
header('location:cadastrarDev.php');
?>