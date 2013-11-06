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
            	font-weight: bold;
            }
        }</style>

	  <meta charset="utf-8" />
	  <title>jQuery UI Tabs - Default functionality</title>
	  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  <link rel="stylesheet" href="/resources/demos/style.css" />
	  
	  <script src="js/jquery.min.js"></script>
		<script src="js/myscript.js"></script>

	  <script>
	  $(function() {
		$( "#tabs" ).tabs();
	  });
	  
	  </script>
	  <link rel="stylesheet" href="style_v1.css"> 
	  <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	  		<script type="text/javascript">
 		$(document).ready(function() {  
  
        //the min chars for username  
        var min_chars = 3;  
  
        //result texts  
        var characters_error = 'Minimum amount of chars is 3';  
        var checking_html = 'Checking...';  
  
        //when button is clicked  
        $('#check_username_availability').click(function(){  
            //run the character number check  
            if($('#username').val().length < min_chars){  
                //if it's bellow the minimum show characters_error text '  
                $('#username_availability_result').html(characters_error);  
            }else{  
                //else show the cheking_text and run the function to check  
                $('#username_availability_result').html(checking_html);  
                check_availability();  
            }  
        });  
  
  });  
  
//function to check username availability  
function check_availability(){  
  
        //get the username  
        var username = $('#username').val();  
  
        //use ajax to run the check  
        $.post("check_username.php", { username: username },  
            function(result){  
                //if the result is 1  
                if(result == 1){  
                    //show that the username is available  
                    $('#username_availability_result').html(username + ' is Available');  
                }else{  
                    //show that the username is NOT available  
                    $('#username_availability_result').html(username + ' is not Available');  
                }  
        });  
  
} 
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
							<td><input class="header_01" type = "text" name = "username" /></td>
						</tr>			
						<tr>
							<td>Surname </td>
							<td><input class="header_01" type = "text" name = "surname" /></td>
						</tr>	
						</tr>					
							<td>Mail </td>
							<td><input class="header_01" type = "text" name = "mail" /></td>
						</tr>
						</tr>					
							<td>Password</td>
							<td><input class="header_01" type = "password" name = "password" /></td>
						</tr>
					</table>
				
					<!-- create a submit button -->
					<input type = "submit" value = "Register" />
					
				 </div>
			  </form>
		  </div>
		  
		  <div id="tabs-2">
			  <!-- post form data to save_to_db.php -->
			  <form method = "post" action = "save_to_db.php">
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


