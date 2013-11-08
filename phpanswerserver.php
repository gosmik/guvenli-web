<?php 
	$connect = mysqli_connect("","root","root","project_v1");
	if(mysqli_num_rows(mysqli_query($connect,"SELECT * from user WHERE user_name='" . $_GET['data'] . "'")) == 1)
	{
		echo $_GET["data"]. " is already in used";
	}
	else
	{
		echo "OK";
	}
	
?>