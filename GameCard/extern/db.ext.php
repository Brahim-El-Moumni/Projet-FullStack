<?php
// déclaration des variable pour la connexion à la DB
$servername  = 'localhost';
$username    = 'root';
$dbPassword  =  '';
$dbName      = 'dbgamecard';

// Connexion à la BDD

$conn = mysqli_connect($servername, $username, $dbPassword, $dbName);

if(!$conn) {
    die("Connection Failed".mysqli_connect_error());
}
