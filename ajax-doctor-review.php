<?php
include_once("mysqli-connection.php");
   
   $doctors=$_GET["doctors"];
    $hospitals=$_GET["hospitals"];
    $rating=$_GET["rating"];
$review=$_GET["review"];


    $query="insert into reviews values('$doctors','$hospitals',$rating,'$review')";
    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
        echo "Review submitted..";
    else
        echo mysqli_error($dbcon);

?>