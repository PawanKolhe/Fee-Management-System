<?php
@session_start();
$_SESSION['loginCheck'] = 0;
@session_unset();
@session_destroy();
header('Location:index.php');
?>