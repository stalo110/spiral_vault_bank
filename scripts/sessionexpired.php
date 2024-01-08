<?php
if(isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)){
header("location:../login.php.php?mail=expired");
exit();
$_SESSION['LAST_ACTIVITY'] = time();

}



?>