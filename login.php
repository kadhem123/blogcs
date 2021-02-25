<?php
include("config.php");
session_start();

if(isset($_POST["email"])&& isset($_POST["password"])){
    $email=$_POST["email"];
    $password=$_POST["password"];
    $sql="Select * from user where email='$email' and password='$password'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    if(is_array($row)){
        $_SESSION["email"]=$row["email"];
        $_SESSION["role"]=$row["role"];
        header("Location:article.php");
    
    }
    else{
      $message="Wrong Email / password";
    }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Connexion</title>
</head>
<body style="text-align: center;">
<h5 class="text-primary"><b>Bienvenue dans notre application</b></h5>
    <div style="width: 30%;margin:auto;border:solid 1px #ddd;border-radius:10px;padding:20px">
    <form action="" method="POST" >
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" class="form-control">
    </div>
<input type="submit" class="btn btn-success" value="connexion">
<?php 
if(isset($message)){
    ?><h6 class="text-danger"><?php echo $message; ?></h6><?php
}?>
    </form></div>
</body>
</html>