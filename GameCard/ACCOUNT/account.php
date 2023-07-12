<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="account.css">
    <title>SIGN UP</title>
</head>
<body>
    <div class="FORM">
        <div class="FORM-text">
            <header><a href="../index.php">Game Card</a></header>
            <?php 
                if (isset($_GET['error'])){
                    if($_GET["error"] == "success") {
                        echo '<p class="msg-erreur">Vos données ont bien été enregistrée !</p>';
                    }
                }
            ?>
            <img src="../img-site/bo.png" width="150px">
            <p>Best Score</p><br>
            <p></p>
            <h1>Account</h1>
            <form action="../extern/account.ext.php" method="post">
                <label>update name</label> <br>
                <input type="text" name="prenom" placeholder="Modifier votre prenom"> <br>
                <label>update username</label> <br>
                <input type="text" name="username" placeholder="Modifier votre nom d'utilisateur">
                <br>
                <button type="submit" name="validate-submit">Valider</button>
            </form>
            <form action="../extern/delete.ext.php" method="post">
                <button type="submit" name="delete-submit">Delete Account</button>  
            </form>
        </div>
    </div>
</body>
</html>