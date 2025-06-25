<?php
$host = "localhost";
$user = "root";
$pwd = "";
$sql_db = "personal_portfoliowebsite";

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    header('Location: error.html');
    exit();
}
?>