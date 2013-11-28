<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Homework 1 yusuf ünlü</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style_v1.css">
<!--[if IE]>
      	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<script>
    function destroy_session()
        {
            $.get("login_server.php?message=destroy",function(data,status)
            {
                alert(data);
            });
        }
</script>

</head>
<body class="php">
<div id="container">
	<div id="main" role="main" class="hellobox">
		<header><a href="index.php">main page</a></header>
		<h1><?php echo 'Welcome !'; ?> </h1>
		</h2>
	</div>
    
    <?php 
        ob_start();
        session_start();
        
        if(!isset($_SESSION["login"]))
        {
            echo "<center> <h4>Maybe you can sign in</h4></center>";
        }
        else 
        {
            echo "<h4><center> Welcome ".$_SESSION["user"]."</h4>";
            ?> <button onclick="destroy_session()">Bu button ile cikilirsa ajax ile session destroy edilir sayfa yenilenmez</button> <?php
            echo "<a href=logout.php>bu linkten cikilirsa sayfa yenilenir session destroy edilir</a></center>";
        }?>
	<nav>
	<ul>
		<li><a class="active" href="login_register_dialog.php#login">Login</a></li>
		<li><a href="login_register_dialog.php#register">Register</a></li>
	</ul>
	</nav>
	
	<footer>
	<h4>write something</h4>
	<p>
		write something:
	</p>
	</footer>
</div>

</body>
</html>
