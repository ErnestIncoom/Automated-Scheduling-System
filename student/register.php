<?php include('server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Course Rep Registration</title>
	<link href='stylesheet.css' rel='stylesheet' type='text/css'>
</head>
<body> 

	<div style="margin-top: 100px" class="login">
		<div style="margin-bottom: 50px" class="login-header">
        <a href="">
            <img alt="" src="logo.png" width="200px">
        </a>
  </div>
  <h1 style="text-align: center; font-size: 25px; margin-top: -30px; padding-bottom: 30px">Course Rep Registration</h1>
  <form method="post" action="register.php" class="login-form">
		<!-- display validation errors here -->
		<?php include('errors.php');?>
		
		<div class = "input-group">
				<label>Username</label>
				<input type = "text" name = "username" value="<?php echo $username; ?>">
				</div>
		<div class = "input-group">
				<label>School Email</label>
				<input type = "text" name = "email" value="<?php echo $email;?>">
				</div>
		<div class = "input-group">
				<label>Password</label>
				<input type = "password" name = "password_1">
				</div>
		<div class = "input-group">
				<label>Confirm Password</label>
				<input type = "password " name = "password_2">
				</div>
		<div class = "input-group">
				<button type="submit" name="register" class="btn">Register</button>
				</div>
				
		<p> 
				Already a member? 
		</p>
							<p>	<a href= "stulogin.php"> Sign In As Student</a> </p>
								  <a href= "lectlogin.php"> Sign In As Lecturer</a>
  
  </form>
  </div>
  </body>
  </html>