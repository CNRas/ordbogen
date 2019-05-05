<?php
session_start();
include("connect.php");

if (!$conn) 
{
    die("Connection failed: ".mysqli_connect_error());
}

$my_username=$_POST["username"];
$my_password=$_POST["password"];


$sql = "INSERT INTO $tbl_name VALUES(NULL,'".$my_username."','".$my_password."')";
mysqli_query($conn, $sql);

$_SESSION['ny'] = 1;
header("location:index.php");