<?php
include("connectfile.php");
$unm=$_POST["name"];
$pwd=$_POST["pass"];

if(isset($_POST["Login"])=="Login")
{
    $q="select * from login where name='$unm'";
    $res=mysqli_query($conn,$q);
    $rows=mysqli_fetch_row ($res);
    $nm= $rows[0];
    $pwd1=$rows[1];

    if($unm==$nm && $pwd==$pwd1)
    {
      header('Location:index1.php');
    }
    else
    {
        echo"<script>alert('login unsuccessfully')</script>";
        echo"<font color='red' >please check username or password else choose new registraion</font>";
    }
}
?>