<?php
   //a)  connexion au SGBD login/Mot de passe Mysql
        $bdd = 'mysql:dbname=ticket;host=localhost';
$user = 'PCRS';
$password = 'Pcrs15981993*';

  
try {
    $bdd = new PDO($bdd, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

         ?>