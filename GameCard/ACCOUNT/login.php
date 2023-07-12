<!DOCTYPE html>

<head>
    <title>LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
</head>
<body>
              
    <div class="FORM">
        
        <div class="form-text">
            
            <header><a href="../index.php">Game Card</a></header>
            <h1>Login</h1>
            
            <?php 
                if(isset($_GET["error"])) {
                    if($_GET["error"] == "wrongpassword") {
                        echo '<p class="msg-erreur">mot de passe invalide !</p>';
                    }
                    else if ($_GET["error"] == "dontexist") {
                        echo '<p class="msg-erreur">Utilisateur inexistant !</p>';
                    }
                }
            
            ?>
            <form action="../extern/login.ext.php" method="post">
                <label class="un">username/mail</label> <br>
                <input type="text" placeholder="Entrer le nom d'utilisateur/Email" name="username" required> <br>
                        
            <label class="un">password</label> <br>
            <input type="password" placeholder="Entre ton mot de passe" name="password" required> <br>
    
            <button type="submit" name="login-submit">Log In</button>
        </form>
        
        <div class="bottom-text">
            <p>DON'T HAVE AN ACCOUNT ? <a href="signup.php" id="signup">SIGN UP</a></p>
        
        </div>
            <a href="../PASSWORD/reset-password.php" class="forgot-pwd">FORGOT YOUR PASSWORD ?</a>
        </div>  
    </div>
</body>