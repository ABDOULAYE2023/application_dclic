<?php
$id = $_GET['id'];
include_once "./connexion.php";
$sql = "DELETE FROM apprenants where id =$id ";
if (mysqli_query($conn, $sql)) {
    header("location:listeApprenant.php?message=DeleteSuccess");
}else {
    header("location:listeApprenant.php?message=DeleteFail");
}

?>