<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["nome"] = "Lucas";
$_SESSION["idade"] = "17";
$_SESSION["rg"] = "32.321.321-1";
echo "Session variables are set.";
?>

</body>
</html>