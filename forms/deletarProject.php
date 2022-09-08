<?php
include '../connect.php';
$sq="delete from project where id=2";
mysqli_query($con,$sq);
header('location:cadastrarProject.php');
?>