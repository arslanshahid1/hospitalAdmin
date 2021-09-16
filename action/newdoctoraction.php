<?php 

if(!empty($_POST['sub'])){

   $name=$_POST['doctorName'];
   $email=$_POST['doctorEmail'];
   $contact=$_POST['doctorContact'];
   $speciality=$_POST['doctorSpeciality'];
   $intro=$_POST['doctorIntro'];

    $filename = $_FILES["fileToUpload"]["name"];
    $filename = time().$filename;
    $target_dir = "uploads/";
    $target_file = $target_dir.$filename;
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
    
    include_once("connection.php");
    $query="INSERT INTO `doctors` (name,email,contact,speciality,intro,photo) VALUES ('$name','$email','$contact','$speciality','$intro','$filename')";
    mysqli_query($cn,$query);

    header('Location:../submitted.php');



}
?>