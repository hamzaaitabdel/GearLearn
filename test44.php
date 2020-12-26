<?php
session_start();
$_SESSION['id']="haamza";
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
    <p>hi</p>
    
    <?php
    //session_start();
    echo $_SESSION['id']; 
    ?>
    
</body>
</html>