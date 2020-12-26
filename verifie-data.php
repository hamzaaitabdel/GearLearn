<?php
session_start();
$bdd = new PDO('mysql:host=localhost;port=3308;dbname=mysite;', 'root', '');
$password="";
$email="";
if(isset($_POST['Email'])AND isset($_POST['Password'])){
    $_SESSION['Email']=$_POST['Email'];
    $_SESSION['Password']=$_POST['Password'];
    $email=$_POST['Email'];
    $password=$_POST['Password'];
}


$sel =$bdd->prepare("SELECT email,name, password,id_user,birthday,score_drag FROM users WHERE email ='".$_SESSION['Email']."' AND Password ='".$_SESSION['Password']."';");
$sel-> execute();
$line=$sel->fetch();

 if($line['email']==$email AND $line['password']==$password){
     //echo"exist";
     $_SESSION['name']=$line['name'];
     $name =$line['name'];
     $_SESSION['birthday']=$line['birthday'];
     $_SESSION['score']=$line['score_drag'];
     $_POST['username']=$username;
     header('Location: index-n.php');
 }
 else{
    $msg="n'existe pas";
    echo $email;
    echo"------";
    echo $password;
echo '<script type="text/javascript">window.alert("'.$msg.'");</script>';
 }
?>
