 <?php
include_once("mysqli-connection.php");
   
   $pid=$_GET["pid"];
    $type=$_GET["type"];
    $category=$_GET["category"];
    $level=$_GET["level"];

$date=$_GET["date"];
$time=$_GET["time"];

    $query="insert into sugar values('$pid','$type','$category',$level,'$date','$time')";
    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
        echo "your sugar has been recorded..";
    else
        echo mysqli_error($dbcon);
?>