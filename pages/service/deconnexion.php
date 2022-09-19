coucou
<?php

require __DIR__."/../../service/_isloggedV2.php";
islogged(false, "./");
unset($_SESSION);
session_destroy();
setcookie("PHPSESSID", "", time()-3600);
header("location: ./");
exit;
?>