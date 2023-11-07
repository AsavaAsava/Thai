


<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
    <link rel="stylesheet" href="./assets/styles.css">
</head>
<body>

    <div class="mainContainer">
        <div class ="mainForm">
            <h1>Hello There!</h1>
                <form action="./processing/process_register.php" method = "POST">
 	              <input type="text" name="name" placeholder="First Name">
                    <br>
                    
                    <select name="gender">
                        <option value ="" disabled selected>Choose Your Gender</option>
                        <option value ="20">Waiter</option>
                        <option value ="10">Admin</option>
                        <option value ="30">Inventory</option>
                    </select>
                    <br>
                    <input type="email" name="email" placeholder="E-Mail Address">
 	                <input type="password" name="password" placeholder="Password">
                    <input type="password" name="passwordConfirm" placeholder="Re-type Password">
                    <br>
                    <input type="submit" name="submit_Registration" value="Register">
                </form>    
        </div>
    </div>
</body>
</html>