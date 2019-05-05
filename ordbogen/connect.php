<?php
session_start();
        $host="localhost";
        $username="root";
        $password="root";
        $db_name="login";
        $tbl_name="login";
        
        $conn = mysqli_connect($host, $username, $password, $db_name);
