<?php
include_once("mysqli-connection.php");
session_start();
$pid=$_SESSION["uid"];
$query="select date,lowL,highL from bp where pid='$pid'";

$resp=mysqli_query($dbcon,$query);
$dates=array();
$dates['head']="Date";


$lowLevel=array();
$lowLevel['head']="Low";
$highLevel=array();
$highLevel['head']="High";
while($row=mysqli_fetch_array($resp))
	{
		$dates['data'][]=$row["date"];
		$lowLevel['data'][]=$row["lowL"];
		$highLevel['data'][]=$row["highL"];
    }
	$result=array();
	array_push($result,$dates);
	array_push($result,$lowLevel);   
	array_push($result,$highLevel);   
	echo json_encode($result,JSON_NUMERIC_CHECK);
	
?>
