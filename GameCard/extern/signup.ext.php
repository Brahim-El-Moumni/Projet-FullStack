<?php

if(isset($_POST["signup-submit"])){
    require 'db.ext.php';
    $name = $_POST["prenom"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../ACCOUNT/signup.php?error=invalidusername-email");
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../ACCOUNT/signup.php?error=invalidemail");
        exit();
    }

    else if (!preg_match("/^[a-zA-Z]*$/", $name)){
        header("Location: ../ACCOUNT/signup.php?error=invalidname");
        exit();
    }

    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../ACCOUNT/signup.php?error=invalidusername");
        exit();
    }

    else if ($password !== $password2 ){
        header("Location: ../ACCOUNT/signup.php?error=PWDdontmatch");
        exit();
    }

    else {
        $sql = "SELECT username FROM gamecard WHERE username='".$username."';";
        $res = mysqli_query($conn, $sql);
        if(!$res){
            header("Location: ../ACCOUNT/signup.php?error=sqlerror");
            exit();
        } else {
            $resultCheck = mysqli_num_rows($res);
            if ($resultCheck > 0) {
                header("Location: ../ACCOUNT/signup.php?error=USERNAMETAKEN");
                exit();
            } else {
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO gamecard(name, username, email, pwd) VALUE('".$name."','".$username."', '".$email."','".$hashedPwd."');" ;
                $res = mysqli_query($conn, $sql);
                }

                if(!$res){
                    header("Location: ../ACCOUNT/signup.php?error=sqlerror");
                    exit();
                } else {
                    header("Location: ../MESSAGES/signup.msg.php?signup=SUCCESS");
                    exit();
                }
        }


    }
    mysqli_close($conn);

} else {
    header("Location: ../ACCOUNT/signup.php");
    exit();
}


