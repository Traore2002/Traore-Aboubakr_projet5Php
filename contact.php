<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire HTML</title>
    <style>
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            
            max-width: 800px;
            margin: 10%;
            padding: 20px;
           padding-left:15%;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .tout{
            display:flex;
            flex-direction:row;
        }
        .chu{
            width:400px;
            height:450px;
        }

        h2 {
            text-align: center;
        }
        .form-group1{
            display:flex;
            flex-direction:column;
            padding-left:10%;
           
        }

        .form-group {
            margin-bottom: 20px;
           width:300px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            transition: border-color 0.3s ease-in-out;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            border-color: #007BFF;
        }

        textarea {
            height: 150px; 
        }

        button {
          
           height:20px;
           padding:7%;
          
            background-color: #007BFF;
            border: none;
            color: #fff;
            font-size: 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
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
    color:white;
    margin:2%;
  }
    </style>
</head>
<body>
<nav class="container1">
      <img src="images/logo.png" alt="photo">
      <a href="index.php">ACCEUIL</a>
      <a href="ouaga.php">OUAGADOUGOU</a>
      <a href="bobo.php">BOBO-DIOULASSO</a>
      <a href="ziniare.php">ZINIARE</a>
      <a href="contact.php">CONTACT</a>
        
    </nav>
    <div class="container">
        <h2>Formulaire de Contact</h2>
        
        <form>
        <div class="tout">
        <img class="chu" src="images/19.jpeg" alt="">
          <div class="form-group1">
              <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
              </div>
              <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
              </div>
              <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" required></textarea>
              </div>
            
            <button type="submit">Envoyer</button>
            </div>
            </div>
        </form>
    </div>
</body>
</html>