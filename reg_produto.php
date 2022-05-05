<?php
header('Content-Type: text/html; charset=utf-8');
include 'connect.php';


if(isset($_POST['sub'])){
    
    $nameProduto=$_POST['nameProduto'];

    // $i="insert into reg(name,username,password,city,image,gender)value('$t','$u','$p','$c','$img','$g')";
    $i = "insert into produto(nameProduto) values ('$nameProduto')";
    mysqli_query($con, $i);
}
?>
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
    <meta charset=”UTF-8”>
        <title></title>
    </head>
    <body>
        <form method="POST" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>
                        Nome produto:
                        <input type="text" name="nameProduto">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" value="enviar" name="sub">         
                    </td>
                    <td>
                        <a href="viewall_produto.php"> Produtos Cadastradas </a>
                    </td>
                </tr>
            </table>
    </body>
</html>
