<?php
include_once("mysqli-connection.php");
   session_start();
   $uid=$_GET["luid"];

    $pwd=$_GET["lpwd"];
   // $mobile=$_GET["lmobile"];

    $query="select * from users where uid='$uid' and pwd='$pwd'";
    $query1="select * from users where uid='$uid'";

   $table=mysqli_query($dbcon,$query);
   $table1=mysqli_query($dbcon,$query1);

if(mysqli_num_rows($table1)==0)
    echo "Invalid userId";
else
{
    if(mysqli_num_rows($table)==0)
      echo "Invalid password";
    else
    {
        $_SESSION["uid"]=$uid;
        $row=mysqli_fetch_array($table);
        $a=$row["usertype"];
        if($a=="patient")
            echo "login patient";
        else
            echo "login doctor";

    }
    
    
}

?>
