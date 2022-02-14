<?php

include_once("mysqli-connection.php");

$query="select * from consultation where nextAppointment>=CURRENT_DATE";

$table=mysqli_query($dbcon,$query);

$all=array();
while($row=mysqli_fetch_array($table))
{
    $all[]= $row;
}

echo json_encode($all);
?>