<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "meu nome é:" . $_SESSION["nome"] . ".<br>";
echo "minha idade é:" . $_SESSION["idade"] . ".<br>";
echo "meu rg é:" . $_SESSION["rg"] . ".<br>";
?>

</body>
</html>