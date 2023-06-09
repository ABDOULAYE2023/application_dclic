<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "liste_apprenant";

// create connexion
$conn = mysqli_connect($host, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connexion failed: " . mysqli_connect_error());
}


?>