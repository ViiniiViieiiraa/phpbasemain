<?php
include 'connect.php';
?>
<a href=reg_produto.php>Adicioanar Produto</a>
<table border='1'>
    <tr>
        <th>
            Id
        </th>
        <th>
            Cidade
        </th>
        <th>
            Excluir
        </th>
    </tr>

<?php
$sq="select * from produto";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['idProduto']?>
        </td>
        <td>
            <?php echo $f['nameProduto']?>
        </td>
        <td>
            <a href="delete_produto.php"> Remover</a>
        </td>
    </tr>
    <?php
}
?>