<?php
include ("header.php");
include ("traitement.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="section1">
        <h2>
             <?php  afficherTexteParNom("1");?>      
        </h2>

        <div class="photo">
            <?php echo afficherImageParID(10);?> 
            <?php echo afficherImageParID(7);?>            
        </div>
        <h3>
                 <?php afficherTexteParNom("2");?>        
        </h3>
       
    </div>
    <?php
    include 'footer.php';
    ?>

    <style>
        .section1{
            display:flex;
            flex-direction:column;
            margin-top:25%;
            width:100%;
            
            
            
        }
        .photo{
            display:flex;
            flex-direction:row;
            width:100%;
            height:600px;
            background-color:black;
            border-radius:50px;
            margin-top:-2%;
        }
        .photo > img{
            width:800px;
            height:500px;
            margin:1%;
            margin-top:3%;
        }
        .section1 > h2{
            display:flex;
            justify-content:center;
            margin:2%;
            font-size:50px;
            background-color:black;
            color:white;
            border-radius:50px;
            z-index: 2;
        }
        .section1 > h3{
           
            margin:2%;
            font-size:2rem;
           
        }


        @media screen and (max-width:300px){
            .section1{
               
            }
            .photo{
            display:flex;
            flex-direction:column;
            height:500px;
        }
        .photo > img{
            width:250px;
            height:200px;
            margin:5%;
            margin-top:10%;
        }
        .section1 > h2{
            display:flex;
            justify-content:center;
            margin:2%;
            font-size:20px;
            background-color:black;
            color:white;
            border-radius:10px;
            z-index: 2;
        }
        .section1 > h3{
           
           margin:2%;
           font-size:15px;
          
       }
        }

    </style>
</body>
</html>