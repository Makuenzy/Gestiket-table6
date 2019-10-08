<?php
<<<<<<< HEAD:controleurs/controllersession.php
=======
/* Connexion à une base ODBC avec l'invocation de pilote */
>>>>>>> d9542553cf8377d5dcdda847a8cc26997b080659:controleurs/controllersession.php
require_once('db_connect.php');

if (isset ($_POST['valider'])){

                $nom = $_POST['nom'];
                $annee = $_POST['annee'];
                $datedebut = $_POST['datedebut'];
                $datefin = $_POST['datefin'];
                $effectif = $_POST['effectif'];
                

                $bdd->exec("INSERT INTO session (`ID`, `nom`, `annee`, `datedebut`, `datefin`, `effectif`) VALUES (NULL, '$nom', '$annee', '$datedebut', '$datefin', '$effectif')");


            }

            header("Location: ../Views/listes-sessions.php");
             

          
            
?>