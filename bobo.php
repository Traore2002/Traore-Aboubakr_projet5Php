<?php
include 'traitement.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="container2">
      <img src="images/logo.png" alt="photo">
      <a href="index.php">ACCEUIL</a>
      <a href="ouaga.php">OUAGADOUGOU</a>
      <a href="bobo.php">BOBO-DIOULASSO</a>
      <a href="ziniare.php">ZINIARE</a> 
       
    </nav>
            <h1 class="bob"><?php afficherTexteParNom("30");?></h1>
            <h2 class="bob2"><?php afficherTexteParNom("31");?></h2>
        <div class="por1">
        <?php echo afficherImageParID(21); ?>

            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id amet nulla, ea corporis illum modi numquam, deserunt cumque fugiat ab perferendis quidem, explicabo deleniti voluptatibus porro voluptatum voluptas quam eum!</p>

        </div>
        <h2 class="bob3"><?php afficherTexteParNom("33");?></h2>
        <div class="por2">
        <?php echo afficherImageParID(22); ?>
>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Id amet nulla, ea corporis illum modi numquam, deserunt cumque fugiat ab perferendis quidem, explicabo deleniti voluptatibus porro voluptatum voluptas quam eum!</p>

        </div>



    <style>
                .container2{
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
  .container2 > img{
    width:150px;
    height:100px;
  }
  .container2 > a{
    padding-left:5%;
    margin:2%;
    color:white;
  }
  .bob{
    font-size:40px;
    padding-left:20%;
    margin:3%;
    background-image:url("images/imag10.jpg");
    height:100px;
    border-radius:10px;
  }
  .bob2{
    font-size:40px;
    padding-left:25%;
    margin:5%;
  }
  .por1{
    display:flex;
    flex-direction:row;
    margin:5%;
  }
  .por1 > img{
    width:600px;
    height:500px;
    box-shadow: 4px 4px 8px rgb(0,0,0,0.7);
    border-radius:50%;
  }
  .por1 > p{
    font-size:35px;
    width:40%;
    margin-top:10%;
    padding-left:5%;
    box-shadow: 4px 4px 8px rgb(0,0,0,0.7);
    border-radius:10px;
  }.bob3{
    font-size:40px;
    padding-left:25%;
    margin:5%;
  }
  .por2{
    display:flex;
    flex-direction:row;
    margin:5%;
  }
  .por2 > img{
    width:600px;
    height:500px;
    box-shadow: 4px 4px 8px rgb(0,0,0,0.7);
    border-radius:50%;
  }
  .por2 > p{
    font-size:35px;
    width:40%;
    margin-top:10%;
    padding-left:5%;
    box-shadow: 4px 4px 8px rgb(0,0,0,0.7);
    border-radius:10px;
  }
    </style>
    <?php 
    include 'footer.php';
    ?>
</body>
</html>