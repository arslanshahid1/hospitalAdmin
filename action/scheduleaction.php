<?php
    $day = $_POST['day'];
    $timeStart = $_POST['timeStart'];
    $timeEnd = $_POST['timeEnd'];
    $id= $_GET['id'];

     $n=count($day);

     include_once("connection.php");
    
     for($i=0; $i< $n; $i++)
         {
             $d = $day[$i];
             $s   = $timeStart[$i];
             $e   = $timeEnd[$i];
             $query="INSERT INTO `schedule` (day,startTime,endTime) VALUES ('$d',,'$s','$e')";
             mysqli_query($cn,$query) or die('sdadas'.mysqli_error($cn));
         }
    
//    header('Location:../submitted.php');

?>