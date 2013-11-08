<?php
include ("connect.php");

$userList=mysqli_query($connect,"SELECT * from user WHERE (user_name='" . $_POST['username'] . "') AND (user_password='" . $_POST['password'] . "') ");

  if($userList)
  {
	if(mysqli_num_rows($userList)>0)
	{
		echo "Welcome ". $_POST['username'];
	}
	else
	{
	  echo "Wrong User Name or Password. Please check and try again...";
	}
  }
?>
