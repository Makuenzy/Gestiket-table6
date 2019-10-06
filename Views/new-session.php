<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/utilisateur.css">
    <meta http-equiv="X-UA-Compatible" 

</head>


<body>
        <center><div class="div1"> 
                <div  class="div2">
               
                <a href="listes-utilisateurs.php">Utilisateurs</a>
                <a href="listes-sessions.php">Sessions</a>
            
                </div>
                

                

                <h1>Nouvelle session</h1>

                <form action="controllersession.php" method="post">
                  NOM:
                <input style="margin-left:28px; margin-bottom: 15px;" type="text" name="nom" value=""><br>
                  ANNEÉ:
              <input style="margin-bottom: -4px;" type="text" name="annee" value=""><br><br>
              DATE DÉBUT:
              <input style="margin-left:5px; margin-bottom: -4px;" type="text" name="datedebut" value=""><br><br>
              DATE FIN:
              <input style="margin-left:22px; margin-bottom: -4px;"type="text" name="datefin" value=""><br><br>
              EFFECTIF:
            <input style="margin-right:35px; margin-bottom: -4px;" type="text" name="effectif" value=""><br><br>
              
                  <input type="reset" name="" id="">
                  <input type="submit" name="valider" id="">
                </form>
                <img src="../Public/img/logo.jpg" alt="logo">
                </center></div>

    
</body>
</html>