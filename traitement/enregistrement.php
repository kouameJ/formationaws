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

    $nom = htmlspecialchars($_POST['nom_part']);
    $prenom = htmlspecialchars($_POST['prenom_part']);
    $numero = htmlspecialchars($_POST['numero_part']);
    $adresse = htmlspecialchars($_POST['adresse_part']);

    if (!empty($nom) && !empty($prenom) && !empty($numero) && !empty($adresse)) {
        
        $requete = $connexion->prepare('INSERT INTO participants(nom_participants, prenom_participants, numero_participants, adresse_participantss) VALUES (:nompart, :prenompart, :numeropart, :adressepart)');   
    
        $requete->bindvalue(':nompart', $nom);
        $requete->bindvalue(':prenompart', $prenom);
        $requete->bindvalue(':numeropart', $numero);
        $requete->bindvalue(':adressepart', $adresse);
        
        $requete->execute(); 
        
        header("Location:../liste-participants.php");
    }
?>