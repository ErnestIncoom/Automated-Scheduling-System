<?php include('lectserver.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Lecturer Login</title>
	<link href='stylesheet.css' rel='stylesheet' type='text/css'>
</head>
<body> 

	<div style="margin-top: 100px" class="login">
		<div style="margin-bottom: 50px" class="login-header">
        <a href="">
            <img alt="" src="logo.png" width="200px">
        </a>
  </div>
  <h1 style="text-align: center; font-size: 25px; margin-top: -30px; padding-bottom: 30px">Lecturer Login</h1>
  <form method="post" action="lectlogin.php" class="login-form">
  
  <!-- display validation errors here -->
		<?php include('errors.php');?>
  
  
  <div class = "input-group">
				<label>Username</label>
				<input type = "text" name = "username">
				</div>
		<div class = "input-group">
				<label>Password</label>
				<input type = "password" name = "password">
				</div> 
		<div class = "input-group">
				<button type="submit" name="lectlogin" class="btn">Log in</button>
				</div>
				
</form>
  </div>
  </body>
  </html>
				