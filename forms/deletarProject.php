<?php
include '../connect.php';
$sq="delete from project where id=9";
mysqli_query($con,$sq);
header('location:cadastrarProject.php');
?>