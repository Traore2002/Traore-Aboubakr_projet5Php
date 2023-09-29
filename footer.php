<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
        <div class="container3">
         <div class="sec1">
            <h3>Contact</h3>
            <p>(00226) 67671716</p>
            <p>(00226) 01613135</p>
         </div>
         <div class="sec2">
            <h3>Adresse</h3>
            <p>Ziniaré</p>
            <p>traoreaboubakr34@gmail.com</p>
         </div>
         <div class="sec3">
            <h3>Pour plus d'info</h3>
            <img src="images/r1.png" alt="">
            <img src="images/r2.png" alt="">
            <img src="images/r3.jpg" alt="">
            <img src="images/r4.PNG" alt="">
            <img src="images/r5.PNG" alt="">
         </div>

        </div>
    </footer>
    <style>
        .container3{
            display:flex;
            flex-direction:row;
            margin:5%;
            width:90%;
            height:300px;
            justify-content:space-between;
            background-color:black;
            border-radius:20px;
        }
        .sec3 > img{
            width:70px;
            height:50px;
            border-radius:50%;
            margin:-3%;
            margin-top:10%;
        }
        .sec2 > h3{
            color:white;
            font-size:40px;
        }
        .sec2 > p{
            color:white;
            font-size:30px;
        }
        .sec1{
            padding-left:2%;
        }
        .sec1 > h3{
            color:white;
            font-size:40px;
        }
        .sec1 > p{
            color:white;
            font-size:30px;
        }
        .sec3 > h3{
            color:white;
            font-size:40px;
        }
        @media screen and (max-width:300px){
            .container3{
            display:flex;
            flex-direction:column;
           
            width:100%;
            height:400px;
            justify-content:space-between;
            background-color:black;
            border-radius:10px;
        }
        .sec3 > img{
            width:50px;
            height:20px;
            border-radius:50%;
            margin:-3%;
            margin-top:10%;
        }
        .sec2 > h3{
            color:white;
            font-size:20px;
        }
        .sec1 > h3{
            color:white;
            font-size:20px;
        }
        .sec1 > h3{
            color:white;
            font-size:20px;
        }
        .sec1 > p{
            color:white;
            font-size:15px;
        }
        .sec2 > p{
            color:white;
            font-size:15px;
        }
        .sec3 > p{
            color:white;
            font-size:15px;
        }
        .sec3 > img{
            width:50px;
            height:30px;
            border-radius:50%;
            margin:-3%;
            margin-top:-10%;
            
        }
        .sec3 > h3{
            
            font-size:20px;
            margin-top:2%;
            padding-left:5%;
        }

    </style>
</body>
</html>