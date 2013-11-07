<!DOCTYPE html>
<html>
<head>

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

<script>
function validateForm()
{
var x=document.forms["myForm"]["fname"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }
   
}

function checkUserName()
{
	$.ajax({
	  url: "phpanswerserver.php?username="+$("#usernameText").val(),
	}).done(function(data) {
	  alert(data);
	});
}
</script>
</head>

<body>

<?php 
function hello()
{
	echo "bye bye" ;
} 
?> 
<form name="myForm" action="login_register.php" onsubmit="return validateForm()" method="post">
First name: <input type="text" name="fname" onblur="checkUserName()">
<input id="usernameText" type="submit" value="Submit">
<div id="statusDiv">mesaj</div>
</form>
</body>

</html>