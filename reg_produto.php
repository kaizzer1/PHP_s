<?php
header ('Content-Type: text/html; charset=utf-8');
include 'connect.php';
if(isset($_POST['sub'])){
    $nomeProduto=$_POST['text'];
    $preçoProduto=$_POST['float'];

    $i ="insert into produto (nomeProduto, preçoProduto, fk_idCategoria) values ( '$nomeProduto', '$preçoProduto', 1) ";
    //$i="insert into reg(name,username,password,city,image,gender)value('$t','$u','$p','$c','$img','$g')";
    mysqli_query($con, $i);

}
?>
<!DOCTYPE HTML> 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Name
                        <input type="text" name="text">
                    </td>
                </tr>

                <tr>
                    <td>
                        Preço
                        <input type="text" name="float">
                    </td>
                </tr>

                <tr>
                    <td>
                        Categoria
                        <select name="categoria">
                            <option value="">-select-</option>
                            <?php
                            $sqlCity = mysqli_query($con, "select * from categoria");

                            while($item = mysqli_fetch_assoc($sqlCity))
                            {
                                $nomeItem = $item["nomeCategoria"];
                                $idCity = $item["id_fkCategoria"];
                                echo"
                                <option value=$idCity>$nomeItem</option>
                                ";
                            }
                            ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
            </table>
    </body>
</html>