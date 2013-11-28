<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
	<html xmlns = "http://www.w3.org/1999/xhtml">
	   <head>
	      <title>Register Page</title>
  
        <style type="text/css">		
            .body {
                      padding-top: 40px;
                      padding-bottom: 40px;
                      background-color: #eee;
                    }
		
            .header_01 {
            	padding: 0 0 10px 0;
            	margin: 0 0 10px 0;
            	font-size: 16px;
            	color: #fbbc53;
            }
			.form-signin {
		  max-width: 330px;
		  padding: 15px;
		  margin: 0 0;
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
		  margin-bottom: 10px;
		}
		.form-signin .checkbox {
		  font-weight: normal;
		}
		.form-signin .form-control {
		  position: relative;
		  font-size: 16px;
		  height: auto;
		  padding: 10px;
		  -webkit-box-sizing: border-box;
			 -moz-box-sizing: border-box;
				  box-sizing: border-box;
		}
		.form-signin .form-control:focus {
		  z-index: 2;
		}
		.form-signin input[type="text"] {
		  margin-bottom: -1px;
		  border-bottom-left-radius: 0;
		  border-bottom-right-radius: 0;
		}
		.form-signin input[type="password"] {
		  margin-bottom: 10px;
		  border-top-left-radius: 0;
		  border-top-right-radius: 0;
		}
        }</style>

	  <meta charset="utf-8" />
	  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	  <link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	  
	  <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
	<script src="dist/js/bootstrap.js"></script>


	  <script>
		  $(function() {
			$("#tabs" ).tabs();
		  });
		  
		$(function() 
		{
			var pathname = window.location.pathname;
			var hash = window.location.hash;
			//alert(window.location.hash);
			var tab_index=0;
			if(hash=="#login")
			{
				tab_index=1;
			}	
			$("#tabs").tabs( "option", "active", tab_index);
		})
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
	   
	   <script>
                function mycheck()
                {
                var str = "100, 1000 or 10000?";
                var patt1 = /\d{4,5}/g; 
                var result = str.match(patt1);
                alert(result);
                document.getElementById("demo").innerHTML=result;
                }
            </script>
	   <body class="body">
		
		<div style="width:400px; margin:auto; padding:auto" id="tabs">
		  <ul>
			<li><a href="#tabs-1">Register</a></li>
			<li><a href="#tabs-2">Login</a></li>
		  </ul>

		  <div class="container" id="tabs-1">
			  <!-- post form data to save_to_db.php -->
			  <form class="form-signin" method = "post" action = "save_to_db.php">
                            <div >
                                <h2 class="form-signin-heading">User Register </h2> 
                                    <input id="username" type="text" class="form-control" name="username" placeholder="User Name" required autofocus>
                                    <input id="name" type="text" class="form-control" name="name" placeholder="Name" required > 
                                    <input id="tel" type="tel" class="form-control"  name="tel" placeholder="Telephone"  required>
                                    <input id="mail" type="email" class="form-control"  name="mail" placeholder="E-mail"  required>
                                    <!-- below lines will not work for all the browser because of browser support-->
                                    <input id="birthday" type="date" class="form-control"  name="birthday" placeholder="Birthday"  required>
                                    <input id="password" pattern="[A-Za-z]{6,20}" type="password" class="form-control" name="password" placeholder="password should be 6-20 only characters" required > 
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>		
                            </div>
			  </form>
		  </div>
		  
		  <div class="container" id="tabs-2">
			  <form class="form-signin" method = "post" action = "login_server.php">
				 <div >
					<h2 class="form-signin-heading">Please sign in</h2>

					<input type="text" class="form-control" name="username" placeholder="User Name" required autofocus>
					<input type="password" class="form-control" name="password" placeholder="Password" required>
						
					<label class="checkbox">
					<input type="checkbox" value="remember-me"> Remember me
					</label>
					<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
					
				 </div>
			  </form>
		  </div>

	</div>
			

	
		<li><a href="#tabs-1">Register</a></li>
		<li><a href="#tabs-2">Login</a></li>

	   </body>
	</html>


