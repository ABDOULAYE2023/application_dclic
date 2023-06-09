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
<body >
    
    <main>
        <div class="link_container">
            <a class="link" href="ajoutbd.php">Ajouter un utilisateur</a>
            <form action= "recherche.php" method="post">
                <input type="text" class="recherche1" name="search" placeholder= "rechercher un apprenant">
                <button type="submit" class="rchecrche2">rechercher</button>
            </form>
        </div>
    </main>
    <table>
        <thead>
    <?php
    include_once "connexion.php";
    // liste des apprenants
    $sql = "SELECT * FROM apprenants";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
    ?>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>Ville d'orgine</th>
                <th>Formation de Base</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
            <tbody>
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                ?>
            <tr>
                    
                    <td><?=$row['Nom']?></td>
                    <td><?=$row['Prenom']?></td>
                    <td><?=$row['Date_de_naissance']?></td>
                    <td><?=$row['Ville_d_origine']?></td>
                    <td><?=$row['Formation_de_base']?></td>
                    <td class="Modifier_text"><button class="btn btn-primary"><a class="Modifier_text" href="modifierUser.php?id=<?=$row['id']?>">Modifier</a></button></td>
                    <td class="Supprimer"><button class="btn btn-danger"><a class="Modifier_text" href="supprimerUser.php?id=<?=$row['id']?>">Supprimer</a></button></td>
            </tr>
            <?php
                }
             }
             else{
                echo "<p class='message'>0 utilisateur present !</p> ";
             }

            ?>
            </tbody>
     </table>  
</body>
</html>