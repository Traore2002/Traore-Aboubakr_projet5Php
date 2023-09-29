<?php

function afficherImageParID($id) {
   
    $conn = new mysqli('localhost', 'root', '', 'parc-animalier');

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }
$sql = "SELECT id, contenu, nom FROM images WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $contenuImage = $row['contenu'];
        $nomImage = $row['nom'];
  $html = '<img src="data:image/jpeg;base64,' . base64_encode($contenuImage) . '" alt="Image ' . $id . '" >';

     
        $conn->close();

        return $html;
    } else {
       
        $conn->close();
        
        return "Aucune image n'a été trouvée dans la base de données pour l'ID spécifié.";
    }
}


function afficherTexteParNom($nomTexte) {
   
    $conn = new mysqli('localhost', 'root', '', 'parc-animalier');

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $nomTexteEchappe = $conn->real_escape_string($nomTexte);


    $sql = "SELECT contenu FROM text WHERE nomTexte = '$nomTexteEchappe'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contenuTexte = $row['contenu'];

      
        echo '<div class="texte">' . $contenuTexte . '</div>';
    } else {
        echo "Aucun texte trouvé dans la base de données pour le nom spécifié.";
    }

   
    $conn->close();
}

?>