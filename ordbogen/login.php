<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div  class="loginForm">
<div class="guide">Skriv dine login detaljer:</div>
<form method="post">
        <input type="text" name="username" placeholder="Brugernavn">
        <br><br>
        <input type="password" name="password" placeholder="Kodeord">
        <br><br>
        <div class="btn"><button type="submit" value="Log In" formaction="checklogin.php">Login</button></div>
</form>
</div>

</body>
</html>


