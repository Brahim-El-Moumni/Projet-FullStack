<?php
if(isset($_POST['login-submit'])){
    require 'db.ext.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM gamecard WHERE username='".$username."' OR email='".$username."';";
    $res = mysqli_query($conn, $sql);

    if(!$res) {
        header("Location: ../ACCOUNT/login.php?error=sqlerror");
        exit();
    } else {
        if($row = mysqli_fetch_assoc($res)){
            $pwdCheck = password_verify($password, $row["pwd"]);

            if($pwdCheck == false) {
                header("Location: ../ACCOUNT/login.php?error=wrongpassword");
                exit();
            } else if ($pwdCheck == true) {
                session_start();
                $_SESSION["userId"] = $row["id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["status"] = $row["status"];

                header("Location: ../MESSAGES/login.msg.php?login=SUCCESS");
                exit();
            }
            
        } else {
            header("Location: ../ACCOUNT/login.php?error=dontexist");
            exit();
        }
    }
    mysqli_close($conn);


} else {
    header("Location: ../ACCOUNT/login.php");
    exit();
}

?>