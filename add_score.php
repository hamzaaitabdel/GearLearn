<?php
session_start();
$score=$_POST['hell'];
$name=$_SESSION['name'];
$_SESSION['score']=$score;
   //echo $score;
   //echo "----";
   //echo $name;
   //echo "----";

   try
   {
   
      $bdd = new PDO('mysql:host=localhost;port=3308;dbname=mysite;', 'root', '');
      $reponse = $bdd->prepare("UPDATE users 
      SET score_drag=".$score."
      WHERE name='".$name."'; ");
      $reponse->execute();
      $reponse->closeCursor();
      
   
   }
   catch (Exception $e)
   {
      die('Erreur : ' . $e->getMessage());
   }
   header('Location: drag-exercices-menu.html'); 

?>