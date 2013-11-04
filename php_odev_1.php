<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	
	<html xmlns = "http://www.w3.org/1999/xhtml">
	   <head>
	      <title>Sample form to take user input in XHTML</title>
  
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

	   </head>
	   <body class = "header_01">
	      <h1 >Sample Registration Form</h1>
	      <p>Please fill in all fields and click Register.</p>
	   
	      <!-- post form data to form.php -->
	      <form method = "post" action = "form.php">
	         <div >
	            <span class = "header_01">  Please fill out the fields below.<br /> </span>
	            
	            <!-- create four text boxes for user input -->
	            <div class="header_01" >Welcome to our photo site!</div> <div class="header_01" >Welcome to our photo site!</div>
	            
				<table border="0">
					<tr>
						<td>First Name </td>
						<td><input class="header_01" type = "text" name = "fname" /></td>
					</tr>			
					<tr>
						<td>Second Name </td>
						<td><input class="header_01" type = "text" name = "fname" /></td>
					</tr>	
					</tr>					
						<td>Mail </td>
						<td><input class="header_01" type = "text" name = "fname" /></td>
					</tr>
					</tr>					
						<td>Mail Again</td>
						<td><input class="header_01" type = "text" name = "fname" /></td>
					</tr>
				</table>

	            <img src = ""  alt = "Publications" /><br />
	
	            <span class = "header_01">
	               Which book would you like information about?
	            </span><br />
	
	            <!-- create drop-down list containing book names -->
	            <select name = "book">
				
	               <option>Internet and WWW How to Program 4e</option>
	               <option>C++ How to Program 6e</option>
	               <option>Java How to Program 7e</option>
	               <option>Visual Basic 2005 How to Program 3e</option>
	            </select>
	            <br /><br />
	
	            <img src = "" alt = "Operating System" />
	            <br /><span class = "header_01">
	               Which operating system are you currently using?
	            <br /></span>
	
	            <!-- create five radio buttons -->
	            <input type = "radio" name = "os" value = "Windows XP"
	               checked = "checked" /> Windows XP                  
	            <input type = "radio" name = "os" value =  
	               "Windows Vista" /> Windows Vista<br />
	            <input type = "radio" name = "os" value =  
	               "Mac OS X" /> Mac OS X
	            <input type = "radio" name = "os" value = "Linux" /> Linux
	            <input type = "radio" name = "os" value = "Other" /> Other<br />
				   
	            <!-- create a submit button -->
	            <input type = "submit" value = "Register" />
	         </div>
	      </form>
	   </body>
	</html>


