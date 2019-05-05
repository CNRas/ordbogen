<?php
session_start();
include("connect.php");

if (!$conn) 
{
    die("Connection failed: ".mysqli_connect_error());
}

$my_username=$_POST["username"];
$my_password=$_POST["password"];

$sql = "SELECT * FROM $tbl_name WHERE username='$my_username' and password='$my_password'";
$resultat = mysqli_query($conn, $sql);

$count= mysqli_num_rows($resultat);


if ($count == 1) 
{
    $_SESSION["login"] = 1;
    header("location:velkommen.php");
}
else 
{
    $_SESSION["wrong"] = 1;
    header("location:index.php?login=LOGIN");
}