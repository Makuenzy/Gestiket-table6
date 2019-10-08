<?php
require_once('db_connect.php');

if (isset ($_POST['valider'])){
    $nom = $_POST['nom'];
    $datecreation = $_POST['datecreation'];
    $bdd->exec("INSERT INTO `referentiel` (`ID`, `nom`, `datecreation`) VALUES (NULL, '$nom', '$datecreation')");

                echo "envoye";
            }

            //header("Location: ../Views/new-referentiel.php");
             
          
?>