<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "noteshub";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname) or die('connection failed'.mysqli_connect_error());

?>