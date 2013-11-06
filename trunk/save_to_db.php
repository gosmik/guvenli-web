<?php
include ("connect.php");
//Let's do code for if username already is in use!
if(mysqli_num_rows(mysqli_query($connect,"SELECT * from user WHERE user_name='" . $_POST['username'] . "'")) == 1)
{
	echo "<br> <h2 > Oops! Username is already in use </h2>";
}
else
{
	mysqli_query($connect,"INSERT into user (user_name,user_surname,user_mail,user_password) VALUES ('".$_POST['username']."', '".$_POST['surname']."', '".$_POST['mail']."', '".$_POST['password']."')") or die(mysqli_error($connect));
	echo "<br> <h2 > Congrulations ! </h2>";
}
?>