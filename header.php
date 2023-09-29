<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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
    <div class="titre">
        <h1>Bienvenue au parc animalier de Ziniaré!</h1>
        
    </div>
    <script>
            const titre= document.querySelector(".h1");
           titre.style.position="absolute";
           let topPos= 0;
           let dir= -1;
            fonction hautBas(){
                if(topPos == 300) { dir= 1 }
                if else(topPos == -50) { dir = -1 }
                topPos += -2 * dir;
                titre.style.top='${topPos}'px;
                requestAnimationFrame(hautBas);

            }
            requestAnimationFrame(hautBas);
</script>
</body>
<style>
    .container{
        display: flex;
        height:600px;
       margin:2%;
        background-image: url("images/20.jpg")  ;
       
    }
    .entete{
        display: flex;
        flex-direction:row;
        align-items:center;
       margin:3%;
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
   .titre{
    display:flex;
    justify-content:center;
    margin-top:-30%;
   }
   .titre > h1{
    color:white;
    font-size:60px;
   }
    .ente {
        display:flex;
        width:30%;
        justify-content: space-between;
        flex-direction:row;
        font-size:20px;
        color:white;
       
    }
    .ente > a{
        color:white;
        margin-right:5%;
    }

        
    @media screen and (max-width:300px){
        .container{
        display: flex;
        height:400px;
       margin:2%;
        width:100%;
       
    }
    .entete{
        display: flex;
        flex-direction:column;        
       margin:3%;
        width:50%;
        height:150px;        
    }
    .entete > img{
        width:100px;
        height:60px;
        border-radius:50%;
        padding-left:-10%;
    }
   .titre{
    display:flex;
    justify-content:center;
    margin-top:-60%;
    padding-left:5%
   }
   .titre > h1{
    color:white;
    font-size:40px;
   }
    .ente {
        display:flex;
        width:30%;
        justify-content: space-between;
        flex-direction:column;
        font-size:20px;
        color:white;
       
    }
    .ente > a{
       
       
    }

           
        }


</style>



</html>