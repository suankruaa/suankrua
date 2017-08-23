<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_sk";

$link = mysqli_connect($host,$user,$pass);
mysqli_select_db($link,$db);
mysqli_query($link, "SET NAMES utf8");
?>