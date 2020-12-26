<?php
    //$score =$_SESSION['score'];

   try
   {
   
      $bdd = new PDO('mysql:host=localhost;port=3308;dbname=mysite;', 'root', '');
      $reponse = $bdd->prepare("UPDATE users 
      SET score_drag=34
      WHERE name='admin'; ");
      $reponse->execute();
      $reponse->closeCursor();
   
   
   }
   catch (Exception $e)
   {
      die('Erreur : ' . $e->getMessage());
   }
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
<input type="submit" class="button" name="insert" value="insert" />
<input type="submit" class="button" name="select" value="select" />
</body>
</html>