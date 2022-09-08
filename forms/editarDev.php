<?php
include '../connect.php';
if(isset($_POST['sub'])){
    $t=$_POST['text'];
    $u=$_POST['user'];
    $c=$_POST['office'];
    $g=$_POST['age'];
    $p=$_POST['pass'];
    
    $i="update reg set name='$t', email='$u',burden='$c',age='$g',password='$p', where id='$_SESSION[id]'";
    mysqli_query($con, $i);
    header('location:cadastrarDev.php');
}
    $s="select * from developer where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
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
        <input type="int" name="text" placeholder="Novo name" >
        <input type="text" name="user" placeholder="Novo email"><br><br>
        <input type="text" name="office" placeholder="Novo burden">
        <input type="int" name="newDevAge" placeholder="Nova idade">
        <input type="int" name="age" placeholder="Nova senha">
        <input type="submit" name="sub" value="Atualizar">
    </form>
</body>
</html>
