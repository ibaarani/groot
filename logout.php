<?php
session_start();
unset($_SESSION['govt_admin']);
session_unset();
session_destroy();
header("Location: index");
?>

<!--Session works good  --barani dharan updated here because code should not  be shared  ->