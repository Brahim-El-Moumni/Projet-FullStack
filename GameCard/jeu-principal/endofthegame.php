
<?php
session_start();
require '../extern/db.ext.php';

$theme = $_GET["theme"];
$id = $_SESSION["userId"];
$sql = "SELECT * FROM jeuActive WHERE theme='".$theme."' AND id=".$id;
$res = mysqli_query($conn, $sql);
if(!$res) {
    echo $sql;
    exit();
}

$tab = mysqli_fetch_assoc($res);
$score = $tab["currentScore"];
$nbrErreur = $tab["nbrErreur"];
$ordreSuivant = $tab["ordreSuivant"];

$sql1 = "SELECT * FROM gameCard WHERE id=".$id;
$res1 = mysqli_query($conn, $sql1);

if(!$res1) {
    echo $sql1;
    exit();
}
$tab1 = mysqli_fetch_assoc($res1);
$bestScore = $tab1["bestScore"];

if($score > $bestScore){
    $sql = "UPDATE gameCard SET bestScore=".$score." WHERE id=".$id;
    $res = mysqli_query($conn, $sql);
    
    if(!$res) {
        echo $sql;
        exit();
    }
    
}

$sql = "UPDATE jeuActive SET ordreActuel='".$ordreSuivant."', ordreSuivant=NULL,nbrErreur=0, currentScore=0 WHERE id=".$id." AND theme='".$theme."';";
$res = mysqli_query($conn, $sql);

if(!$res) {
    echo $sql;
    exit();
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>Jeu Principal</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="endofthegame.css">
</head>
<body>
    <div class="logo">
        <a href="../index.php" style="text-decoration:none;">Game Card</a>
    </div>
    <div class="gif" style="text-align:center">
        <img src="../img-site/original%20(1).gif" width="400px;">
    </div>
    <div class="p" style="text-align:center;font-style:italic;margin-bottom:10px">
        END OF THE GAME!<br><br>
        SCORE: <?php echo $score;?>
       
        <br>
        Vous avez fait <?php echo $nbrErreur;?> erreurs! <br>     
    </div>
    <div class="endBack">
        <a href="jeu-principal.php" style="text-decoration:none;margin-top:10px;">BACK HOME</a>
    </div>
</body>

</html>
