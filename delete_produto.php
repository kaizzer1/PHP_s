<?php
include 'connect.php';
$sq="delete from produto where idProduto=9";
mysqli_query($con,$sq);
header('location:viewall_produto.php');
?>