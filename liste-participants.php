<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formation cloud aws</title>
</head>
<body>
    <div class="titre">
        <p>LISTE PARTICIPANTS</p>
    </div>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "formation_aws";

        try{
            $connexion = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e){
            echo"Erreur :" . $e->getMessage();
        }
        $check = $connexion->prepare('SELECT * FROM participants');
        $participants = $check->fetchAll();
    ?>

    <?php
        foreach ($participants as $participant)
        {
    ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Prénoms</th>
            <th>Numero</th>
            <th>Adresse</th>
            <th>Adresse IP</th>
        </tr>
        <tr>
            <td><?php echo $participant['id_participants'];?></td>
            <td><?php echo $participant['nom_participants'];?></td>
            <td><?php echo $participant['prenom_participants'];?></td>
            <td><?php echo $participant['numero_participants'];?></td>
            <td><?php echo $participant['adresse_participants'];?></td>
        </tr>
        </table>
    <?php   
        }
    ?>
</body>
</html>