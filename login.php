<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	
    <link rel="icon" type="image/x-icon" href="pic.jpg">
   <link rel="stylesheet" href="./assets/styles.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="regContainer">
        <div class ="loginForm">
            <h1>THAITANIC</h1>
                <form action="./processing/process_login.php" method = "POST">
 	              <input type="email" name="mail" placeholder="Email Address">
        			<br>
 	                <input type="password" name="password" placeholder="Password">
					<br>
                    <input type="submit" name="submit_Login" value="Log In" class ='btn'>
                </form>  
        </div>
    </div>
</body>
</html>