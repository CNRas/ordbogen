<?php 
session_start();
if (!isset($_SESSION["login"])) 
{
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="ordbogen.css">
    <title>Document</title>
</head>
<body>
<div class="headfoot">
</div>
<div class="alt">
    <div class="mig">
        <div class="tekst">
            Tusind tak for muligheden for at lave denne lille opgave til jer. Farverne er inspireret af Ordbogen.com og Grammatip.com. 
            Koden er PHP, så vidt muligt efter PSR-2, SQL, html, ren CSS og med en smule jQuery. <br>
            Jeg ser frem til vi ses til en samtale!<br>
            - Christian Nick Rasmussen
        </div>
        <div class="right">
            <div class="chris"><a href="https://cnras.dk"  target="_blank"><img id="christian" src="https://cnras.dk/christian2.jpeg"></a></div>
            <div class="holder"><img id="pil" src="https://i.imgur.com/QI9FKHC.png"></div>
        </div>
        <form method="post">
            <div class="btn"><button type="submit" value="logout" name="logout" formaction="logout.php">Logout</button></div>
        </form>
    </div>

</div>
<div class="headfoot">
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>   
<script src="ordbogen.js"></script>
</body>
</html>