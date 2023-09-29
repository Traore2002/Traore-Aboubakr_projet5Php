<?php

session_set_cookie_params(60);
session_start();
if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
  header("location:connexion.php");
  exit;
}
else{

}

include ('traitement.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <nav class="container">
      <img src="images/logo.png" alt="photo">
      <a href="index.php">ACCEUIL</a>
      <a href="ouaga.php">OUAGADOUGOU</a>
      <a href="bobo.php">BOBO-DIOULASSO</a>
      <a href="ziniare.php">ZINIARE</a>
      <a href="contact.php">CONTACT</a>
      <form action="deconnexion.php" method="POST">
        <input type="submit" name="submit" value="Se deconnecter" class="submit">
      </form> 
        
    </nav>
    
    <div class="sac1">
      <img src="images/imag122.jpg" alt="photo"> 
      <h1>BIENVENUE SUR LE SITE TOURISTIQUE DU BF</h1> 
        
    </div>
    <h2 class="you">Les différents types de sites a visité</h2>
    <div class="sac2">
     
        <div class="sace1">
          <img src="images/imag1.jpg" alt="">
          <p>Le monument des martyrs à ouagadougou</p>
        </div>
        <div class="sace2">
          <img src="images/imag1.webp" alt="">
          <p>La vielle mosquée de Dioulassoba à Bobo-Dioulasso</p>
        </div>
        <div class="sace3">
          <img src="images/7.jpg" alt="">
          <p>Le parc animalier de Ziniare</p>
        </div>
    </div>
    <footer class="bouger">
      <div class="van1">
        <img src="images/logo.png" alt="">
        <h4>Burkina Faso</h4>
      </div>
      <div class="van2">
        <h3>Contact</h3>
        <p>(00226) 67671416</p>
        <p>(00226) 01613135</p>
      </div>
      <div class="van3">
        <h3>Adresse</h3>
        <p>BP 67671416</p>
        <p>traoreaboubakr34@gmail.com</p>
      </div>
      
    </footer>

<style>

.submit{
  margin-top:15%;
  height:40px;
  padding-left:-10%;
  font-size:20px;
  color:red;
}


</style>

</body>
</html>