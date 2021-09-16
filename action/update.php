<?php 
	$id  =        $_GET['id'];
    $name =       $_POST['doctorName'];
    $email =      $_POST['doctorEmail'];
    $contact =    $_POST['doctorContact'];
    $speciality = $_POST['doctorSpeciality'];
    $intro=       $_POST['doctorIntro'];

    include_once("connection.php");

   $query = "UPDATE `doctors` SET `name`='$name', `email`='$email', `contact`='$contact', `speciality`='$speciality', `intro`='$intro' WHERE id='$id'";

	mysqli_query($cn,$query) or die("Can't run query".mysqli_error($cn));
	header("LOCATION:../viewdoctors.php");	
?>