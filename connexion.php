<?php

session_start();
if( isset($_SESSION['id']) && !empty($_SESSION['id']) ){

    header("location:index.php");
    exit;

}else{
      
 } 


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

    if (empty($email) || empty($code)) {

        $erreur="Veillez remplire tout les champs svp!";
          
    }
    else{
        $info_user = $bdd->query("SELECT *FROM user WHERE email='$email' ")->fetch();

        if($info_user !== false){

            if($info_user['code'] == $code){

                $_SESSION['id']=$info_user['id'];
                $_SESSION['login']= true;
                header('location:index.php');
            } else{
                $err="Mot de passe incorrecte!";
            }
        }else{ 
            $err="Email ou mot de passe incorrecte!";
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
    <div class="contenaire">
        

        <h1>Connexion</h1>
        <form action="" method="POST">

            <div class="gouma">
                 <input type="email" name="email" placeholder="Entrez votre Email">
                 <input type="password" name="code" placeholder="Entrez votre mot de passe">
                 <input type="submit" value="Se connecter" name="submit" class="submit">
            </div>

            <div style="color: red; font-family:Arial, sans-serif;"><?php echo $err ?></div>
            <div style="color: red; font-family:Arial, sans-serif;"><?php echo $erreur ?></div>

        </form>

        <div class="afo">
        <img src="images/10.webp" alt="" width="1200px" height="700px" >
        <button class="but"><a href="inscription.php">S'inscrire</a></button>
        </div>

    </div>

    <style>
        .contenaire{
            display:flex;
            flex-direction:column;
            height:400px;
        }
        .contenaire > h1{
           font-size:80px;
           padding-left:40%;
           background-color:black;
           color:white;
           border-radius:20px;
        }
        .gouma{
            display:flex;
            flex-direction:column;
            width:400px;
            padding-left:40%;
            margin-top:20%;
           height:200px;
           
        }
        .gouma > input{
           
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
        

        .but{
          background-color:blue;
          color:white;
          height:40px;
          width:100px;
          align-items:center;
          border-radius:10px;
          font-size:20px;
        }

        .but > a{
           color:white;
            justify-content:center;
        }
        .afo{
            display:flex;
            flex-direction:column;
            margin:10%;
            padding:3%;
            margin-top:-30%;
          
        }
        .afo > img{
            opacity: 50%;
            margin:2%;
        }


    </style>
</body>
</html>
