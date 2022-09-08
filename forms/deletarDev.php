<?php
include '../connect.php';
$sq="delete from developer where id=2";
mysqli_query($con,$sq);
header('location:cadastrarDev.php');
?>