<?php
include '../connect.php';
?>
<table border='1'>
    <tr>   
        <h1>Area Admin</h1>
        <th>
            Name
        </th>
        <th>
            Password
        </th>
    </tr>

<?php
$sq="select * from project";
$qu=mysqli_query($con,$sq);
while($f=  mysqli_fetch_assoc($qu)){
    ?>
    <tr>
        <td>
            <?php echo $f['name']?>
        </td>
        <td>
            <?php echo $f['pass']?>
        </td>
    </tr>
    <?php
}
?>