<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Formation cloud aws</title>
</head>
<body>
    <div class="titre">
        <p>FORMATION CLOUD AWS</p>
    </div>
    <div class="enreg">
        <h2 class="enreg-titre">SAISISSEZ VOS INFORMATIONS</h2>
        <div class="formul">
            <form action="traitement/enregistre.php" method="post">
                <div class="champ">
                    <label for="nom">Nom    </label> 
                    <input type="text" name="nom_part" id="nom" required>
                </div>
                <div class="champ">
                    <label for="prenom">Prenom </label> 
                    <input type="text" name="prenom_part" id="prenom" required>
                </div>
                <div class="champ">
                    <label for="numero">Numero </label> 
                    <input type="tel" name="numero_part" id="numero" required>
                </div>
                <div class="champ">
                    <label for="adresse">Adresse</label> 
                    <input type="email" name="adresse_part" id="adresse" required>
                </div>
                <div class="champ">
                    <input type="submit" value="envoyer">
                </div>
            </form>
        </div>
    </div>
</body>
</html>