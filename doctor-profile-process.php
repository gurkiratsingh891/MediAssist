<?php


include_once("mysqli-connection.php");
include_once("session.php");
$btn=$_POST["btn"];

if($btn=="save")
{
    doSave($dbcon);
}
else
{
    doUpdate($dbcon);
}


function doSave($dbcon)
{
$name=$_POST["name"]; 
   $exp=$_POST["exp"]; 
    $uid=$_SESSION["uid"];
   $orgName=$_FILES["pic"]["name"];
   $tmpName=$_FILES["pic"]["tmp_name"];
    
   $picpath="uploads/".$orgName;
    
    move_uploaded_file($tmpName,$picpath);
   $special=$_POST["special"];
    $details=$_POST["details"];
    $hname=$_POST["hname"];
        $qual=$_POST["qual"];
        $lat=$_POST["lat"];
        $lon=$_POST["lon"];
        $city=$_POST["city"];
        $mobile=$_POST["mobile"];
   $query="insert into doctor_profile values('$uid','$name','$picpath','$qual','$special',$exp,'$hname','$lat','$lon','$city','$mobile','$details')";
    
   mysqli_query($dbcon,$query);
    
    if(mysqli_error($dbcon)=="")
        echo "Record Submitted....";
    else
    { echo mysqli_error($dbcon);
     echo "sorry";
    }
}

function doUpdate($dbcon)
{
        $uid=$_SESSION["uid"];

    $name=$_POST["name"]; 
   $exp=$_POST["exp"]; 
   $name=$_POST["name"]; 
   $hname=$_POST["hname"]; 
   $lat=$_POST["lat"]; 
   $long=$_POST["long"]; 
   $details=$_POST["details"]; 
    
   
 $special=$_POST["special"];
 $city=$_POST["city"];
        $mobile=$_POST["mobile"];
     $orgName=$_FILES["pic"]["name"];
   $tmpName=$_FILES["pic"]["tmp_name"];
    
    if($orgName=="")
    {
        $picpath=$_POST["hdn"];
    }
    else
    {
        $picpath="uploads/".$orgName;
    
    move_uploaded_file($tmpName,$picpath);
    }
    
      $query="update doctor_profile set name='$name',hname='$hname',city='$city',lat='$lat',long='$long',details='$details',mobile='$mobile',pic='$picpath',exp='$exp',special='$special' where uid='$uid'";

    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
    {
        if(mysqli_affected_rows($dbcon)!=0)
        echo "Record Updated....";
        else
        echo "Invalid uid";
    }
    else
        echo mysqli_error($dbcon);
    
}




?>