<?php
include 'connect.php';
?>
<a href="reg_produto.php"> adicionar Produto </a>
<table border='1'>
    <tr>
        <th>
            Id
        </th>
        <th>
            Produto
        </th>
        <th>
            Preço Produto    
        </th>
        <th> 
            Categoria
        </th>
        <th>
            Excluir
        </th>
    </tr>

<?php
$sq="select * from produto as p inner join categoria as c on c.idCategoria = p.fk_idCategoria";

$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['idProduto']?>
        </td>
        <td>
            <?php echo $f['nomeProduto']?>
        </td>
        <td>
            <?php echo $f['preçoProduto']?>
        </td>
        <td>
            <?php echo $f['nomeCategoria']?>
        </td>
        <td>
            <a href="delete_produto.php"> remover</a>
        </td>
    </tr>
    <?php
}
?>