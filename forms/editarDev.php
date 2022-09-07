<?php
include '../connect.php';
include '../checkDev.php';
    $id=$_POST['int'];
    $name=$_POST['text'];
    $email=$_POST['text'];
    $burden=$_POST['text'];
    $age=$_POST['int'];
    $pass=$_POST['int'];
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>Editar developer</h1></center>
    <form method="POST">
        <input type="int" name="newId" placeholder="Novo Id">
        <input type="int" name="newDevName" placeholder="Novo name">
        <input type="text" name="newDevEmail" placeholder="Novo email"><br><br>
        <input type="text" name="newDevBurden" placeholder="Novo burden">
        <input type="int" name="newDevAge" placeholder="Nova idade">
        <input type="int" name="newPass" placeholder="Nova senha">
        <input type="submit" name="edit" value="Atualizar">
    </form>
</body>
</html>

<?php

if(isset($_POST['edit'])){
    $newId = $_POST['newId'];
    $newDevName = $_POST['newDevName'];
    $newDevEmail = $_POST['newDevEmail'];
    $newDevBurden = $_POST['newDevBurden'];
    $newDevAge = $_POST['newDevAge'];
    $newPass = $_POST['newPass'];
    $i = "update developer set id = '$newId', name = '$newDevName', email = '$newDevEmail', burden = '$newDevBurden', age = '$newDevAge', pass = '$newPass' where id='$id'";
    mysqli_query($con, $i);
    header('location: cadastrarDev.php');
}

?>