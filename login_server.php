<?php
include ("connect.php");
ob_start();
session_start();
 
$name = $_POST['username'];
$password = $_POST['password'];
$message=$_POST['message'];

if($message=="destroy")
{
    echo "destroyed";
}
$userList=mysqli_query($connect,"SELECT * from user WHERE (user_name='" . $_POST['username'] . "') AND (user_password='" . $_POST['password'] . "') ");

  if($userList)
  {
	if(mysqli_num_rows($userList)>0)
	{
                $_SESSION["login"] = "true";
                $_SESSION["user"] = $name;
                $_SESSION["pass"] = $password;
                header("Location:index.php");
                
		echo "Welcome ". $_POST['username'];
	}
	else
	{
            session_destroy();
            header("Location:login_register_dialog.php");
	}
  }
  ob_end_flush();
?>
