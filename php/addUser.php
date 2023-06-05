<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
   <form action="" method="post">
    <h1>Formulaire d'inscription</h1>
    <input type="text" name="Nom" placeholder="Name">
    <input type="text" name="Prenom" placeholder="Prenom">
    <input type="date" name="Date_de_naissance" placeholder="date de naissance">
    <input type="text" name="Ville_d_orgine" placeholder="Ville d'orgine">
    <input type="text" name="Formation_de_base" placeholder="Formation de base">
    <input type="submit" value="Valider" name="Envoyer">
   </form> 

   <?php
   require_once '../connect_ddb.php';
    if (isset($_POST['Envoyer'])){
        if(isset($_POST['Nom']){
            isset($_POST['Prenom']) &&
            isset($_POST['Date_de_naissance']) &&
            isset($_POST['Ville_d_orgine']) &&
            isset($_POST['Formation_de_base']) 
            
            ){
     
            extract($_POST);

            $sql = "INSERT INTO apprenants (Nom, Prenom, Date_de_naissance, Ville_d_orgine, Formation_de_base)
            VALUES ('$Nom', '$Prenom', '$Date_de_naissance', '$Ville_d_orgine', '$Formation_de_base') ";
            if (mysqli_query($conn, $sql)) {
                    header("location:listeApprenant.php");
            }else {
                    header("location:listeApprenant.php?message=Echèc de l'Ajout");          
            }
        }else{
            header("location:listeApprenant.php?message=Ajouter a la base");  
        }
    }

?>

</body>
</html>

