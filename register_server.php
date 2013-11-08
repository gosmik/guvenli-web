<?php 
	include ("connect.php");
	if(mysqli_num_rows(mysqli_query($connect,"SELECT * from user WHERE user_name='" . $_GET['data'] . "'")) == 1)
	{
		echo $_GET["data"]. " is already in used";
	}
	else
	{
		echo $_GET["data"]. " is OK you can select it";
	}
	
?>