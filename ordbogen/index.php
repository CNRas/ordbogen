<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="ordbogen.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="headfoot"></div>
<div class="alt">
    <div id="formlen" class="formel">
        <div class="knap">
            <form>
                <button id="login" type="submit" name="login" value="LOGIN" action="login.php">Login</button>
                <button id="opret" type="submit" name="opret" value="OPRET" action="opret.php">Opret</button>
            </form>
        </div>
        
        <?php 
        if (isset($_SESSION['wrong'])) 
        {
            echo "<div class='wrong'>Forkert brugernavn eller password!</div>";
        }

        if (isset($_SESSION['ny'])) 
        {
            echo "<div class='ny'>Bruger oprettet!</div>";
        }
        
        ?>
        
    </div>
    <div>        
        <?php
            if (isset($_GET['login'])) 
            {
                if ($_GET['login'] == "LOGIN") 
                {
                    include('login.php');
            }
        }
        if (isset($_GET['opret'])) 
        {
            if ($_GET['opret'] == "OPRET") 
            {
                include('opret.php');
            }
        }
        ?>
    </div>
</div>
<div class="headfoot"></div>

<script src="ordbogen.js"></script>
</body>
</html>