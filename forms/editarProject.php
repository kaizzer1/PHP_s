<?php
include '../connect.php';
include '../checkProject.php';
$id = $_GET['id'];
$name = $_GET['nome'];
$pass = $_GET['pass'];
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
    <center><h1>Editar Project</h1></center>
    <form method="POST">
        <input type="int" name="newId" placeholder="Novo Id">
        <input type="text" name="newProjectName" placeholder="Novo nome do project"><br><br>
        <input type="int" name="newPass" placeholder="Nova senha do project">
        <input type="submit" name="edit" value="Atualizar">
    </form>
</body>
</html>

<?php

if(isset($_POST['edit'])){
    $newId = $_POST['newId'];
    $newProjectName = $_POST['newProjectName'];
    $newPass = $_POST['newPass'];
    $i = "update project set id = '$newId', name = '$newProjectName', pass = '$newPass' where id='$id'";
    mysqli_query($con, $i);
    header('location: cadastrarProject.php');
}

?>