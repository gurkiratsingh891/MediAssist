 <?php
include_once("mysqli-connection.php");
   
   $uid=$_GET["suid"];
    $pwd=$_GET["spwd"];
    $mobile=$_GET["smobile"];
$usertype=$_GET["usertype"];

    $query="insert into users(uid,pwd,mobile,usertype) values('$uid','$pwd','$mobile','$usertype')";
    mysqli_query($dbcon,$query);
    if(mysqli_error($dbcon)=="")
        echo "Signup successful....";
    else
        echo mysqli_error($dbcon);
?>