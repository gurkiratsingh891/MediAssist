 <?php
include_once("mysqli-connection.php");
   $btn=$_GET["btn"];
   
   

if($btn=="profile-save")
{
    doSave($dbcon);
}
else
{
    doUpdate($dbcon);
}


function doSave($dbcon)
{
    $pid=$_GET["pid"];
    $gender=$_GET["gender"];
    $city=$_GET["city"];
    $age=$_GET["age"];
    $address=$_GET["address"];
$email=$_GET["email"];
$mobile=$_GET["mobile"];
$name=$_GET["name"];

    $query="insert into patient_profile values('$pid','$name',$age,'$gender','$mobile','$email','$address','$city')";
    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
        echo "Profile saved..";
    else
        echo mysqli_error($dbcon);
}



function doUpdate($dbcon)
{
    $pid=$_GET["pid"];
    $gender=$_GET["gender"];
    $city=$_GET["city"];
    $age=$_GET["age"];
    $address=$_GET["address"];
$email=$_GET["email"];
$mobile=$_GET["mobile"];
$name=$_GET["name"];


$query="update patient_profile set name='$name',age=$age,gender='$gender',mobile='$mobile',email='$email',address='$address', city='$city' where pid='$pid'";
    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
        echo "profile updated..";
    else
        echo mysqli_error($dbcon);
}
?>