<?php
   //a)  connexion au SGBD login/Mot de passe Mysql
<<<<<<< HEAD
        $bdd = 'mysql:dbname=ticket;host=localhost';
$user = 'root';
$password = 'dd';

  
try {
    $bdd = new PDO($bdd, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
=======
         $dsn = 'mysql:host=localhost;dbname=ticket;port=3306;charset=utf8';
         //b) Selectionner BD
         try {
 
            $pdo = new PDO($dsn, 'root' , 'dd');
            
            }
            catch (PDOException $exception) {
             
             //mail('fauxmail@votremail.com', 'PDOException', $exception->getMessage());
             exit('Erreur de connexion à la base de données');
             
            }
         
>>>>>>> 25a53a98433edae6318b7cf38844852c56369c12

         ?>