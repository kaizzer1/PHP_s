<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Meu nome é " . $_SESSION["Nome"] ;
;
?>

</body>
</html>