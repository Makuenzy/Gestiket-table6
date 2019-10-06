<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/new session.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>new session</title>
</head>
<body>

        <center><div class="div1"> 
          <div class="div2">
                <a href="listes-utilisateurs.php">Utilisateurs</a>
                <a href="listes-sessions.php">Sessions</a>
    </div> 
    <h3>Nouvelle session</h3>
<form id="form" action="controlnewsession.php">
      NOM:
    <input style="margin-left:58px;" type="text" name="nom" value=""><br>
      ANNÉE:
    <input style="margin-left:44px;" type="text" name="annee" value=""><br>
      DATE DÉBUT:
    <input style="margin-left:1px;" type="text" name="datedebut" value=""><br>
      DATE FIN :
    <input style="margin-left:18px;" type="text" name="datefin" value=""><br>
      EFFECTIF:
    <input style="margin-left:25px;" type="text" name="effectif" value=""><br><br>

      <input type="reset" name="" id="">
      <input type="submit" name="valider" id="">
</form>
<h2>Coding for better Life</h2>
    <img src="../Public/img/logo.jpg" alt="logo">


        </div></center>
</body>

</html>