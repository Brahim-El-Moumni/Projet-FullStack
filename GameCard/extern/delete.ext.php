<?php 
session_start();

if(isset($_POST['delete-submit'])){
    require 'db.ext.php';

    $id = $_SESSION["userId"];
    $sql = "DELETE FROM gamecard WHERE id=".$id.";";

    $res = mysqli_query($conn, $sql);

    if(!$res){
        header("Location: ../ACCOUNT/account.php?error=sqlerror");
        exit();
    } else {
        header("Location: logout-delete.ext.php");
        exit();
    }
    mysqli_close($conn);
} else {
    header("Location: ../ACCOUNT/account.php");
    exit();
}

?>