<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Public/css/liste-utilisateurs.css">
    <title>listes-utilisateurs</title>
</head>
<body>
        <center><div class="div1"> 
                        <div class="div2">
                                <div  class="div2">               
                                        <a href="listes-utilisateurs.php">Utilisateurs</a>
                                        <a href="listes-sessions.php">Sessions</a>                                    
                                        </div>
                                        <button><a href="new-session.php">NOUVEAU</a></button>
                        </div>
                        <?php
     include_once('db_connect.php');
           $query = $pdo->query("SELECT * FROM `session` ");
           $sessions= $query->fetchAll();
          // var_dump($users) ;

         ?>


         <table border="1">
                <thead>
                <tr>
                     <th>Nom</th>
                     <th>Année</th>
                     <th>Date Début</th>
                     <th>Date Fin</th>
                     <th>Effectif</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                    foreach ($sessions as $key => $session) {
                   
                ?>
                    <tr>
                       <td><?php echo $session['nom'];?></td>
                       <td><?php echo $session['annee'];?></td>
                       <td><?php echo $session['datedebut'];?></td>
                       <td><?php echo $session['datefin'];?></td>
                       <td><?php echo $session['effectif'];?></td>
                    </tr>
                <?php
                     
                    }
                 ?>
                </tbody>
         </table>
                    <h2>Coding for better Life</h2>
                    <img src="../Public/img/logo.jpg" alt="logo">
    </div></center>
</body>
</html>