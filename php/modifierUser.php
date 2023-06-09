<?php
 $id = $_GET['id']; 
 if (isset($_POST['Envoyer'])){
    if(isset($_POST['Nom']) &&
        isset($_POST['Prenom']) &&
        isset($_POST['Date_de_naissance']) &&
        isset($_POST['Ville_d_orgine']) &&
        isset($_POST['Formation_de_base']) &&
        $_POST['Nom'] != "" &&
        $_POST['Nom'] != "" &&
        $_POST['Nom'] != "" &&
        $_POST['Nom'] != "" &&
        $_POST['Nom'] != "" 
        ){
         require_once '../connexion.php';
         extract($_POST);

        $sql = "UPDATE apprenants SET Nom = '$Nom' , Prenom ='$Prenom' , Date_de_naissance = '$Date_de_naissance' , Ville_d_origine = '$Ville_d_origine' , Formation_de_base = '$Formation_de_base' WHERE id = $id ";
        if (mysqli_query($conn, $sql)) {
                header("location:listeApprenant.php");
        }else {
                header("location:listeApprenant.php?message=Echèc de la modification");          
        }
    }else{
        header("location:listeApprenant.php?message=Ajouter avec Success");  
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/style.css">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "./connexion.php";

    // la liste des information des apprenants
    $sql  = "SELECT * FROM apprenants where id = $id";
    $result = mysqli_query($conn, $sql);
    //  output data of e
    while($row = mysqli_fetch_assoc($result)){ 
    ?>
    <form action="" method="post">
        <h1>Modifier un utilisateur</h1>
        <input type="text" name="Nom" value= "<?=$row['Nom']?>" placeholder="Name">
        <input type="text" name="Prenom" value= "<?=$row['Prenom']?>" placeholder="Prenom">
        <input type="date" name="Date_de_naissance" value= "<?=$row['Date_de_naissance']?>" placeholder="date de naissance">
        <input type="text" name="Ville_d_origine" value= "<?=$row['Ville_d_origine']?>" placeholder="Ville d'orgine">
        <input type="text" name="Formation_de_base" value= "<?=$row['Formation_de_base']?>" placeholder="Formation de base">
        <input type="submit" value="Valider" name="Envoyer">
    </form>

    <?php
    }
    ?>

</body>
</html>