<?php
session_start();
unset($prn);
unset($name);
unset($email);
unset($number);
header("Location:login.php");
?>