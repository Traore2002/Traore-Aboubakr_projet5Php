<?php

session_start();
session_destroy();
if( isset($_SESSION['id']) && !empty($_SESSION['id']) ){

   header("location:index.php");
   exit;

}else{
   
 } 



 @$nom=$_POST['nom'];
 @$email=$_POST['email'];
 @$code=$_POST['code'];
 @$submit=$_POST['submit'];
 @$erreur="";
 @$err="";


try{
    $bdd=new PDO('mysql:host=localhost; dbname=parc-animalier','root','');
}
catch(Exception $e){
    die("Erreur :" .$e->getMessage());
}

if (isset($submit)) {

   
    
    if (empty($nom)  || empty($email) || empty($code)) {

        $erreur="Veillez remplire tout les champs svp!";
          
    }
    else{
        $res=$bdd->query(" INSERT INTO user(nom, email, code) 
                            VALUES ('$nom','$email','$code')");
        if ($res !== false) {
            header('location:index.php');
        }else{
            $err="echec d'enregistrement!";
        }

    }
}


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
    <div class="contenaire1">
       

        <h1>Inscription</h1>
        <form action="" method="POST">

            <div class="djeli">
                 <input type="text" name="nom"  placeholder="Entrez votre nom">
                 <input type="email" name="email" placeholder="Entrez votre Email">
                 <input type="password" name="code" placeholder="Entrez votre mot de passe">
                 <input type="submit" value="VALIDER" name="submit" class="submit">
            </div>

            <div><?php echo $err?></div>
            <div style="color: red;     font-family:Arial, sans-serif;"><?php echo $erreur?></div>

        </form>

        <div class="kouma">
            <img src="images/imag1.jpg" alt="" width="1200px" height="700px" >
            <button class="but1"><a href="connexion.php">Se connecter</a></button>
        </div>

    </div>

    <style>
         .contenaire1{
            display:flex;
            flex-direction:column;
            height:400px;
        }
        .contenaire1 > h1{
           font-size:80px;
           padding-left:40%;
           background-color:black;
           color:white;
           border-radius:20px;
        }
        .djeli{
            display:flex;
            flex-direction:column;
            width:400px;
            padding-left:40%;
            margin-top:20%;
           height:200px;
           
        }
        .djeli > input{
           
            height:50%;
            margin:2%;
            z-index: 2;
            color:black;
            border-radius:20px;
        }
        .submit{
            background-color:green;
            color:white;
        }
        

        .but1{
          background-color:blue;
          color:white;
          height:40px;
          width:120px;
          align-items:center;
          border-radius:10px;
          font-size:15px;
        }

        .but1 > a{
           color:white;
            
        }
        .kouma{
            display:flex;
            flex-direction:column;
            margin:10%;
            padding:3%;
            margin-top:-30%;
          
        }
        .kouma > img{
            opacity: 50%;
            margin:2%;
        }


    </style>
</body>
</html>
