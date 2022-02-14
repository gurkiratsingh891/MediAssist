<?php


include_once("mysqli-connection.php");
$pid=$_POST["pid"]; 
   $doctor=$_POST["doctor"]; 
    
   $orgName=$_FILES["pic"]["name"];
   $tmpName=$_FILES["pic"]["tmp_name"];
    
   $picpath="uploads/".$orgName;
    
    move_uploaded_file($tmpName,$picpath);

   $cdate=$_POST["cdate"];
    $instruction=$_POST["instruction"];
        $nextAppointment=$_POST["nextAppointment"];
   $query="insert into consultation values('$pid','$doctor','$cdate','$picpath','$instruction','$nextAppointment')";
    
   mysqli_query($dbcon,$query);
    
    if(mysqli_error($dbcon)=="")
        echo "Record Submitted....";
    else
    { echo mysqli_error($dbcon);
     echo "sorry";
    }




?>