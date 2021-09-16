<?php 
$username=$_POST["username"];
$password= $_POST["password"];

$cu="123";
$cp="123";

if($username==$cu && $password==$cp){
    session_start();
    $_SESSION['loggedin']=$username;
    header('Location:../viewdoctors.php');
    echo "successful";
}
else{
    $error="Incorrect username or password";
   header('Location:../login.php?error=' . $error);
    echo "not successful";
}

?>