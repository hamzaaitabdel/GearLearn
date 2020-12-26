<?php
session_start();
$name =$_POST['full-name'];
$email =$_POST['Email'];
$password =$_POST['pass'];
$number="";
$sex ="";
if (isset($_POST['tel'])) {
  $number =$_POST['tel'];
  }
if (isset($_POST['sexe'])) {
  $sex = $_POST['sexe'];
  }
$naissance =$_POST['naissance'];
$password1=$_POST['pass1'];
//echo $name;
//echo $number;
//echo $number;
//echo $sex;
//echo $password;
try
{
  if($password==$password1 AND $password!=""and $password1!=""){
     $bdd = new PDO('mysql:host=localhost;port=3308;dbname=mysite;', 'root', '');
     $reponse = $bdd->prepare("INSERT INTO users (name, email,telephone,birthday,sex,password)
      VALUES ('".$name."','".$email."','".$number."','".$naissance."','".$sex."','".$password."');");
     $reponse->execute();
     $_SESSION['name']=$name;
     $_SESSION['Email']=$email;
     $_SESSION['score']="0.0";
     $_SESSION['birthday']=$naissance;
     $reponse->closeCursor();
     
     header('Location: index-n.php');
  }
  else{
    echo "<script>if(confirm('Confirmez votre mot de passe')){document.location.href='sign-up.php'};</script>";
    //$_POST['pass1']="";
    

  }

}
catch (Exception $e)
{
     die('Erreur : ' . $e->getMessage());
}

$_POST['name'] ="";
$_POST['email'] ="";
$_POST['password'] ="";
$_POST['number']="";
?>
