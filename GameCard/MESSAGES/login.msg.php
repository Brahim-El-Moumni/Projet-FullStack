<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="login.msg.css">  
    </head>    
    <body>
        <p>Welcome <?php echo $_SESSION["username"];?><br> You are now <br> logged in !</p>
        <div class="btn">
            <button type="button"><a href="../jeu-principal/jeu-principal.php"><span>START</span></a></button>           
        </div>
        <div class="gif">
            <img src="../img-site/original%20(1).gif">     
        </div>
        <div class="logo">
            
            <a href="../index.php">Game Card</a>  
        </div>
        <div class="home-redirection"><a href="../index.php">HOME</a></div>               
    </body>
</html>