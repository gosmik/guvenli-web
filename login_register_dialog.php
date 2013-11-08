<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
	<html xmlns = "http://www.w3.org/1999/xhtml">
	   <head>
	      <title>Register Page</title>
  
        <style type="text/css">		
			body
			{
				background: #250d0b url(templatemo_bg.jpg) top repeat-x ;
				font-family:arial;
			}
		
            .header_01 {
            	padding: 0 0 10px 0;
            	margin: 0 0 10px 0;
            	font-size: 16px;
            	color: #fbbc53;
            }
        }</style>

	  <meta charset="utf-8" />
	  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  <link rel="stylesheet" href="style_v1.css"> 
	  <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	  <script>
		  $(function() {
			$( "#tabs" ).tabs(function()
			{
			});
		  });
	  </script>
	  
		<script>
			$(document).ready(function(){
			  $("#username").blur(function(){
				$.get("register_server.php?data="+$("#username").val(),function(data,status){
				  alert(data);
				});
			  });
			});
		</script>
	   </head>
	   
	   <body class = "header_01">
		
		<div style="width:500px; margin:auto; padding:auto" id="tabs">
		  <ul>
			<li><a href="#tabs-1">Register</a></li>
			<li><a href="#tabs-2">Login</a></li>
		  </ul>

		  <div id="tabs-1">
			  <!-- post form data to save_to_db.php -->
			  <form method = "post" action = "save_to_db.php">
				 <div >
					<div style="header_01"> User Register </div>
					<!-- create four text boxes for user input -->   
					<table border="0">
						<tr>
							<td>Name </td>
							<td><input id="username" class="header_01" type = "text" name = "username" /></td>
						</tr>			
						<tr>
							<td>Surname </td>
							<td><input id="name" class="header_01" type = "text" name = "surname" /></td>
						</tr>	
						</tr>					
							<td>Mail </td>
							<td><input id="mail" class="header_01" type = "text" name = "mail" /></td>
						</tr>
						</tr>					
							<td>Password</td>
							<td><input id="password" class="header_01" type = "password" name = "password" /></td>
						</tr>
					</table>
				
					<!-- create a submit button -->
					<input type = "submit" value = "Register" />
					
				 </div>
			  </form>
		  </div>
		  
		  <div id="tabs-2">
			  <!-- post form data to save_to_db.php -->
			  <form method = "post" action = "login_server.php">
				 <div >
					<header_01 >fill in the blank </sheader_01>
					<!-- create four text boxes for user input -->   
					<table border="0">
						<tr>
							<td>Name </td>
							<td><input class="header_01" type = "text" name = "username" /></td>
						</tr>			
						</tr>					
							<td>Password</td>
							<td><input class="header_01" type = "password" name = "password" /></td>
						</tr>
					</table>
				
					<!-- create a submit button -->
					<input type = "submit" value = "Ok" />
					
				 </div>
			  </form>
		  </div>
		</div>

	   </body>
	</html>


