<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["Nome"] = "Lucas";

echo "Session variables are set.";
?>

</body>
</html>