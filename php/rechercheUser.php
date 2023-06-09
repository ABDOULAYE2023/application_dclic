<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des apprenants</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
</head>  
<body>
    <main>
        <div class="link_container">
            <a class="link" href="ajoutbd.php">Ajouter un utilisateur</a>
        </div>
    </main>
    <table>
        <thead>
            <tr id= "items">
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Ville d'orgine</th>
                <th>Formation de Base</th>

            </tr>
        </thead>
            <tbody>
            <?php
    include_once "connexion.php";
    $recherche = isset($_POST['search']) ? $_POST['search'] : '';

    $q = $con->query("SELECT * FROM apprenants WHERE Nom like '%$recherche' or Prenom like '%$recherche' or Date_de_naissance like '%$recherche' or Ville_d_origine like '%$recherche' or Formation_de_base like '%$recherche' LIMIT 10");
    while($row = mysqli_fetch_array($sq)){
    ?>
            <tr>   
                    <td><?=$row['Nom']?></td>
                    <td><?=$row['Prenom']?></td>
                    <td><?=$row['Date_de_naissance']?></td>
                    <td><?=$row['Ville_d_origine']?></td>
                    <td><?=$row['Formation_de_base']?></td>
            </tr>
            <?php
            }
            ?>
            </tbody>
     </table>  
</body>
</html>