<?php
include '../connect.php';
include '../checklogin.php';
$id = $_GET['id'];
$nameProduto = $_GET['nomeProduto'];
$idcategoria = $_GET['idCategoria'];
$nomeCategoria = $_GET['nomeCat'];

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
    <center><h1>Editar Cidade</h1></center>
    <form method="POST">
        <label> Selecione o produto: </label><br>
        <select name="city">
        <?php
        echo "<option value=$id>$nameProduto</option>";

        $sqlProduto= mysqli_query($con, "select * from produto");
                                    
        while($item = mysqli_fetch_assoc($sqlProduto))
        {
            $nomeProduto = utf8_encode($item['nameCity']);
            $idProduto = $item['idCity'];
            echo "                                
                <option value=$idProduto>$nomeProduto</option>                                
            ";
        }
        ?>
        </select>
        <br>
        <label> Selecione o categoria: </label><br>
        <select name="categoria">
        <?php
        echo "<option value=$idCategoria>$nomeCategoria</option>";

        $sqlCategoria= mysqli_query($con, "select * from categoria");
                                    
        while($item = mysqli_fetch_assoc($sqlCategoria))
        {
            $nomeCategoria = utf8_encode($item['nomeCategoria']);
            $idCategoria = $item['idCategoria'];
            echo "                                
                <option value=$idCategoria>$nomeCategoria</option>                                
            ";
        }
        ?>
        </select>
        <br>
        <br>
        <input type="text" name="newName" placeholder="Novo nome do produto"><br><br>
        <input type="number" name="newpreco" placeholder="Novo preço do produto">
        <input type="submit" name="edit" value="Confirmar">
    </form>
</body>
</html>

<?php

if(isset($_POST['edit'])){
    $newProdutoName = $_POST['newName'];
    $newCategoria = $_POST['categoria'];
    $newPreco = $_POST['newpreco'];
    $i = "update produto set nomeProduto = '$newProdutoName', fk_idCategoria = '$newCategoria', precoProduto = '$newPreco' where idProduto='$id'";
    mysqli_query($con, $i);
    header('location: produto.php');
}

?>