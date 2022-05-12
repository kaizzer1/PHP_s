<?php
header ('Content-Type: text/html; charset=utf-8');
include 'connect.php';
if(isset($_POST['sub'])){
    $nomeCategoria=$_POST['text'];

    $i ="insert into categoria (nomeCategoria) values ('$nomeCategoria') ";
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
                        <input type="submit" value="submit" name="sub">
                               
                    </td>
                </tr>
            </table>
    </body>
</html>