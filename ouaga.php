
<?php
include 'traitement.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ouaga.css">
    <title>Document</title>
</head>
<body>
<nav class="container1">
      <img src="images/logo.png" alt="photo">
      <a href="index.php">ACCEUIL</a>
      <a href="ouaga.php">OUAGADOUGOU</a>
      <a href="bobo.php">BOBO-DIOULASSO</a>
      <a href="ziniare.php">ZINIARE</a> 
       
    </nav>
    <header class="iye">
        <h1><?php afficherTexteParNom("10");?></h1>
    </header>
    <h2 class="pit">L<?php afficherTexteParNom("11");?></h2>
        <div class="go1">
           
        <?php echo afficherImageParID(20); ?>
 
           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A veritatis ratione dolores magni. Doloremque officiis voluptatibus pariatur quibusdam, eaque nostrum fugit provident tempore repellendus sint nihil rerum, reprehenderit commodi ipsa!</p>

        </div>
        <h2 class="pit1"><?php afficherTexteParNom("13");?></h2>
        <div class="go2">
           
        <?php echo afficherImageParID(23); ?>

           <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A veritatis ratione dolores magni. Doloremque officiis voluptatibus pariatur quibusdam, eaque nostrum fugit provident tempore repellendus sint nihil rerum, reprehenderit commodi ipsa!</p>

        </div>
        <style>
            .container1{
    display:flex;
    flex-direction:row;
    width:100%;
    height:100px;
    justify-content: space-between;
    margin-top:2%;
    border-radius:10px;
    background-color:black;
    background-size:cover;
    background-repeat: no-repeat;

  }
  .container1 > img{
    width:150px;
    height:100px;
  }
  .container1 > a{
    padding-left:5%;
    margin:2%;
    color:white;
  }
  .iye > h1{
    font-size:40px;
    padding-left:20%;
    margin:5%;
    background-image:url("images/19.jpeg");
    height:100px;
  }
  .go1 > img{
    width: 600px;
    height: 500px;
    border-radius:10px;
  }
  .go1 {
    display: flex;
    flex-direction: row;
    margin:5%;
    
    
    
  }
  .go1 > p{
    font-size:40px;
    width:40%;
    padding-left:10%;
    box-shadow: 4px 4px 8px rgb(0,0,0,0.7);
    background-color:black;
    color:white;
    border-radius:10px;
  }
  .go2 > img{
    width: 600px;
    height: 500px;
    border-radius:10px;
  }
  .go2 {
    display: flex;
    flex-direction: row;
    margin:5%;
    
    
    
  }
  .go2 > p{
    font-size:40px;
    width:40%;
    padding-left:10%;
    box-shadow: 4px 4px 8px rgb(0,0,0,0.7);
    background-color:black;
    color:white;
    border-radius:10px;
  }
  .pit{
    font-size:40px;
    padding-left:30%;
  }
  .pit1{
    font-size:40px;
    padding-left:30%;
    margin-top:5%;
  }
        </style>
        <?php 
    include 'footer.php';
    ?>
</body>
</html>