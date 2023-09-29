<?php
   
   @$nom=$_POST['nom'];
@$prenom=$_POST['prenom'];
@$age=$_POST['age'];
@$validé=$_POST['vallidé'];
$erreur="";
if(isset($validé)){
    if(empty($nom)) $erreur="Nom laissé valide";
    if(empty($prenom)) $erreur="Prenom laissé valide";
    if(!is_numeric($age)) $erreur="Age invalide";
}
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

<head>
<div class="container">
          <nav class="entete">
            
            <img src="images/logo.webp" alt="">
            <div class="ente">
                <a href="ziniare.php">Acceuil</a>
                <a href="apropos.php">A Propos</a>
                <a href="#">Services</a>
            </div>
           
          </nav>
         
        </div>
</head>
    <div class="container4">
        <h1> 
            <?php afficherTexteParNom("p1");?>
        </h1>
    <div class="sectio1">
        <div class=" unp">
        <h4>
        <?php afficherTexteParNom("p2");?>
        </h4>
        <h5>
        <?php afficherTexteParNom("p3");?>   
        </h5>
        </div>
        <img class="imag1" src="images/6.webp" alt="photo">
        <img class="imag2" src="images/2.webp" alt="photo">
        <img class="imag3" src="images/12.jpeg" alt="photo">
        
    </div>

    <div class="sectio2">
        <h2>Actualité sur le parc animalier de Ziniaré</h2> 

        <div class="chu">
           <div class="ma1">
                <img src="images/3.webp" alt="">
                <img src="images/5.webp" alt="">
           </div>
           <div class="ma2">
                <img src="images/9.webp" alt="">
                <img src="images/12.jpeg" alt="">
           </div>
           <p>
                Le parc animalier de Ziniaré était resté a l'abandon après 
                le départ de Blaise Compaoré suite a l'insurection populaire 
                les 30 et 31 octobre 2014. Mais depuis 2021, l'association pour
                la protection de la faune et de la flore a repris la gestion du
                parc auprès de la mairie de la commune de Ziniaré
            </p>
        </div>

        <div class="so">
           
            <h3>Des espèces ont disparu</h3>
            <p>
                L'espèces du parc est conditionné par le paiement d'une somme en 
                fonction de l'age et de la nationalité.<<Depuis que l'association
                a repris la gestion,les paiement se font devant la porte ces 500f pour 
                les enfants et 1000f pour les adultes.>>
                Les water bouc et élan sont toujours là. Mais les buffles, la girafe, 
                goudous et zèbres sont mort.IL y'avait aussi des tigres, élephants, des hyènes
                Les tortues sont toujours là. Ily'avait plusieurs races de singes, de babouins
                des macaques et des singes rouge, des phacochère, des hyppopotames. L'élephants
                aussi est mort suite a une maladie.
            </p>
            <div class="ba">
            <img class="ba1" src="images/2.webp" alt="">
            <img class="ba2" src="images/3.webp" alt="">
            <img class="ba3" src="images/12.jpeg" alt="">
            <img class="ba4" src="images/16.jpeg" alt="">
            <img class="ba5" src="images/18.jpeg" alt="">
            <img class="ba6" src="images/19.jpeg" alt="">
            <img class="ba7" src="images/8.webp" alt="">
            <img class="ba8" src="images/13.webp" alt="">
            </div>
        </div>
    </div>

    <div class="sectio3">
        <h1>Pour faire des réservations de visite</h1>
        <form action="" name="form" method="post">
            <div class="label">Nom</div>
            <div class="input">
                <input type="text" name="nom">
            </div>
            <div class="label">Prénom</div>
            <div class="input">
                <input type="text" name="prenom">
            </div>
            <div class="label">Age</div>
            <div class="input">
                <input type="number" min="12" name="age">
            </div>
            <div class="label">Heure de visite</div>
            <div class="input">
                <input type="time" max="18" min="6" name="time">
            </div>
            <div class="label">La date</div>
            <div class="input">
                <input type="date" max="31" min="1"  name="date">
            </div>
            
            <div class="submit">
                <input  type="submit" name="validé" value="M'inscrire">
            </div>
        </form>
    </div>

    <?php
    include 'footer.php';
    ?>
    </div>
    
    <style>
         .entete{
        display: flex;
        flex-direction:row;
        align-items:center;
       margin:1%;
        width:100%;
        justify-content: space-between;
        background-color:black;
        height:90px;
        
    }
    .entete > img{
        width:150px;
        height:80px;
        border-radius:50%;
        
    }
    .ente > a{
        color:white;
        margin-right:3%;
    }
    .ente {
        display:flex;
        width:30%;
        justify-content: space-between;
        flex-direction:row;
        font-size:20px;
        color:white;
      
    }
        .container4 {
            display:flex;
            flex-direction:column;
            margin-top:10%;
            height:1000px;
            width:100%;
            background-color: black;
            border-radius:30px;
            position:absolute;
        }
        .container4 > h1{
            margin-top:10%;
            display:flex;
            flex-direction:row;
            justify-content:center;
            font-size:60px;
            color:black;
            margin:5%;
            background-color:white;
           border-radius:60px;
           z-index: 2;
        }
        .sectio1{
            display:flex;
            flex-direction:row;
            margin-top:10%;
            width:100%;
            z-index: 2;
        }
        .sectio1 > img{
            width:15%;
        }
        .unp{
            display:flex;
            flex-direction:column;
            font-size:22px;
            margin-top:5%;
            padding-left:5%;
            color:white;
        }
        .imag1{
            width:300px;
            height:250px;
            padding-left:5%;
            margin-top:-5%;
           
        }
        .imag2{
            width:250px;
            height:250px;
            margin-top:10%;
            padding-left:-5%;
            
        }
        .imag3{
            width:350px;
            height:250px;
            padding-left:-15%;
            margin:1%;
           margin-top:20%;
        }
        .sectio2{
            margin-top:10%;
            background-image: url("images/14.png")
        }
        .sectio2 > h2{
            display:flex;
            justify-content:center;
            font-size:50px;
            color:white;
            background-color:black;
            border-radius:50px;
        }
        .chu{
            display:flex;
            flex-direction:row;
            width:100%;
            justify-content:space-between;
            margin-top:10%;
        }
        .chu > p{
            width:50%;
            font-size:37px;
        }
        .ma1 > img{
            width:250px;
            height:200px;
            padding-left:43%;
            margin-top:5%;
            margin:0%;
        }
        .ma2 > img{
            width:250px;
            height:200px;
           margin-top:20%;
           margin:0%;
        }
        .so > h3{
            display:flex;
            justify-content:center;
            font-size:50px;
            color:white;
            width:50%;
            background-color:black;
           border-radius:50px;
           margin-top:10%;
           margin:5%;
        }
        .so > p{
            width:80%;
            font-size:40px;
            padding-left:13%;
        }
        .ba{
            background-color:black;
            border-radius:50px;
        }
        .ba > img{
            width:300px;
            height:250px;
            padding-left:5%;
            margin:0%;
        }

        .sectio3{
            width:1200px;
            height:1300px;
            background-color:orange;
            margin-top:2%;
            border-radius:50px;
            justify-content:center;
            margin:15%;
        }
        .sectio3 > h1{
    padding: -3%;
    margin: 5%;
    background-color: black;
    color: white;
    justify-content: center;
    font-size: 50px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding-left: 20%;
}
.label{
    font-size: 30px;
    margin: 1%;
    padding-left:25%;
}
.input{
    height: 50px;
    width: 50%;
    padding-left:35%;
}
.input > input{
    height: 40px;
    width: 30%;
    padding-left:20%;
}
.submit{
   display: flex;
   justify-content: center;
   padding: 5%;
   margin: 1%;
   
}
.submit > input{
    font-size: 40px;
    background-color: rgb(58, 161, 58);
    color: white;
    border-radius:50px;
}
section{
    padding: 2%;
    margin: 2%;
    background-color:whitesmoke;
    border-radius: 20px;
    border-color: black;
}
@media screen and (max-width:300px){
    .sectio3 > h1{
    padding: -5%;
    margin: 5%;
    background-color: black;
    color: white;
    justify-content: center;
    font-size: 30px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding-left: 20%;
}
.input{
    height: 50px;
    width: 50%;
    padding-left:35%;
}
.input > input{
    height: 40px;
    width: 70%;
    padding-left:20%;
}
.ba > img{
            width:250px;
            height:200px;
            padding-left:5%;
            margin:3%;
        }
        .ba{
            background-color:black;
            border-radius:30px;
            height:1800px;
        }
        .so > h3{
            display:flex;
            justify-content:center;
            font-size:25px;
            color:orange;
            margin-top:-50%;
        }
        .so > p{
            width:80%;
            font-size:20px;
            padding-left:13%;
           
        }
        .entete{
        display: flex;
        flex-direction:column;
        align-items:center;
       margin:1%;
        width:50%;
        justify-content: space-between;
        background-color:black;
        height:300px;
        
    }
    .entete > img{
        width:100px;
        height:60px;
        border-radius:50%;
        
    }
    .ente > a{
        color:white;
        margin-right:3%;
       
    }
    .ente {
        display:flex;
        width:20%;
        justify-content: space-between;
        flex-direction:column;
        font-size:25px;
        color:white;
        margin:5%;
    }
    .container4 {
            display:flex;
            flex-direction:column;
            margin-top:10%;
            height:1050px;
            width:100%;
            background-color: black;
            border-radius:30px;
            position:absolute;
        }
    .container4 > h1{
            margin-top:10%;
            display:flex;
            flex-direction:row;
            justify-content:center;
            font-size:20px;
            color:black;
            margin:5%;
            background-color:white;
           border-radius:10px;
           z-index: 2;
        }
        .sectio1{
            display:flex;
            flex-direction:column;
            margin-top:10%;
            width:100%;
            z-index: 2;
        }
        .sectio1 > img{
            width:15%;
        }
        .unp{
            display:flex;
            flex-direction:column;
            font-size:22px;
            margin-top:5%;
            padding-left:5%;
            color:white;
        }
        .imag1{
            width:200px;
            height:100px;
            padding-left:5%;
            margin-top:-10%;
           
        }
        .imag2{
            width:100px;
            height:90px;
            margin-top:-5%;
            padding-left:15%;
            
        }
        .imag3{
            width:150px;
            height:100px;
            padding-left:20%;
            margin:1%;
           margin-top:-10%;
        }
        .sectio2{
            margin-top:10%;
            background-image: url("images/14.png")
        }
        .sectio2 > h2{
            display:flex;
            justify-content:center;
            font-size:20px;
            color:white;
            background-color:black;
            border-radius:10px;
            width:90%;
        }
        .chu{
            display:flex;
            flex-direction:column;
            width:100%;
            justify-content:space-between;
            margin-top:10%;
        }
        .chu > p{
            width:100%;
            font-size:15px;
        }
        .ma1 > img{
            width:150px;
            height:90px;
            padding-left:20%;
            margin-top:5%;
           
        }
        .ma2 > img{
            width:100px;
            height:90px;
           margin-top:10%;
           
           padding-left:5%;
        }
        .so > h3{
            display:flex;
            justify-content:center;
            font-size:20px;
            color:white;
            width:90%;
            background-color:black;
           border-radius:10px;
           margin-top:10%;
           margin:5%;
        }
        .so > p{
            width:100%;
            font-size:15px;
            padding-left:1%;
        }
        .ba{
            background-color:black;
            border-radius:20px;
            height:1850px;
        }
        .ba > img{
            width:250px;
            height:200px;
            padding-left:5%;
            margin-top:5%;
        }
        .sectio3{
            width:300px;
            height:1000px;
            background-color:orange;
            margin-top:0%;
            border-radius:50px;
           margin-top:-10%;
            margin:0%;
        }
        .sectio3 > h1{
    padding: -3%;
    margin: 5%;
    background-color: black;
    color: white;
    justify-content: center;
    font-size: 20px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    padding-left: 20%;
}
.label{
    font-size: 20px;
    margin: 1%;
    padding-left:25%;
}
.input{
    height: 50px;
    width: 50%;
    padding-left:35%;
}
.input > input{
    height: 25px;
    width: 50%;
    padding-left:20%;
}
.submit{
   display: flex;
   justify-content: center;
   padding: 5%;
   margin: 1%;
   
}
.submit > input{
    font-size: 20px;
    background-color: rgb(58, 161, 58);
    color: white;
    border-radius:30px;
}
}
        
    </style>
</body>
</html>