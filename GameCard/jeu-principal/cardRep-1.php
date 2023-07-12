<?php
session_start();
require '../extern/db.ext.php';
require '../afficherCarte/afficheCarte.php';


$theme = $_GET["theme"];
$id = $_SESSION["userId"];

// Initialisation de la prmeière carte
$sql = "SELECT * FROM jeuActive WHERE id=".$id." AND theme='".$theme."';";
$res = mysqli_query($conn, $sql);
if(!$res){
    header("Location: cardRep.php?error=sqlerror");
    exit();
}

    if (mysqli_num_rows($res) == 0){
        $ordreSuivant = "";
        $ordreActuel = "";
        $sql = "SELECT COUNT(*) FROM ".$theme;
        $res = mysqli_query($conn, $sql);
        if(!$res){
            header("Location: cardRep.php?error=sqlerror");
            exit();
        } 
        $tab = mysqli_fetch_assoc($res);
        $taille = $tab["COUNT(*)"];
        
        for($i = 1; $i <= $taille; $i++){
            $ordreActuel.= $i."/";                        
        }
        $sql = "INSERT INTO jeuActive(id, ordreActuel, ordreSuivant, theme, nbrErreur, currentScore) VALUES(".$id.",'".$ordreActuel."','".$ordreSuivant."','".$theme."',0,0);";
        $res = mysqli_query($conn, $sql);
        if(!$res){
            header("Location: cardRep.php?error=sqlerror");
            exit();
        }
    } 

    $sql = "SELECT * FROM jeuActive WHERE id=".$id." AND theme='".$theme."';";
    $res = mysqli_query($conn, $sql);
    if(!$res){
        header("Location: cardRep.php?error=sqlerror");
        exit();
    }
    $tab = mysqli_fetch_assoc($res);
    $ordreActuel = $tab["ordreActuel"];
    $ordreActuelexp = explode("/", $ordreActuel);
    $a = $ordreActuelexp[0];
        
    $sql = "SELECT question,type FROM ".$theme." WHERE id=".$a;
    $res = mysqli_query($conn, $sql);
    if(!$res){
        header("Location: cardRep.php?error=sqlerror");
        exit();
    }
    $tab = mysqli_fetch_assoc($res);
    $question = $tab["question"];
    $type = $tab["type"];
    
    if($type == "qcm"){
        $sql = "SELECT * FROM propositions ".$theme." WHERE theme='".$theme."' AND questionId=".$a;
        $res = mysqli_query($conn, $sql);
        if(!$res){
            header("Location: cardRep.php?error=sqlerror");
            exit();
        } 
        $tab = mysqli_fetch_assoc($res);
        $prop1 = $tab["proposition1"];
        $prop2 = $tab["proposition2"];
        $prop3 = $tab["proposition3"];
        afficherCarteProp($question, $prop1, $prop2, $prop3, $theme, $a);
    } else {
        afficherCarteTexte($question, $theme, $a);                     
    }
    // $sql = "SELECT COUNT(*) FROM jeuActive";
    // $res = mysqli_query($conn, $sql);
    // if(!$res){
    //     header("Location: cardRep.php?error=sqlerror");
    //     exit();
    // }
    
    
                    