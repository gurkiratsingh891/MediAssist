 <?php
include_once("mysqli-connection.php");
   
   $pid=$_GET["pid"];
    $lowL=$_GET["lowL"];
    $highL=$_GET["highL"];
$date=$_GET["date"];
$time=$_GET["time"];

    $query="insert into bp values('$pid','$lowL','$highL','$date','$time')";
    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
        echo "your BP has been recorded..";
    else
        echo mysqli_error($dbcon);
?>