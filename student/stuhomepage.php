<?php include('server.php'); 
//if user is no logged in, they cannot access this page
	if (empty($_SESSION['username'])){
		header('location: stulogin.php');
	}
?>


		

<!DOCTYPE html>
<html>
<head>
	<title>Student Homepage</title>
	<link href='stylesheet.css' rel='stylesheet' type='text/css'>
</head>
<body> 

	<div style="margin-top: 100px" class="login">
		<div style="margin-bottom: 50px" class="login-header">
        <a href="">
            <img alt="" src="logo.png" width="200px">
        </a>
  </div>
  <h1 style="text-align: center; font-size: 25px; margin-top: -30px; padding-bottom: 30px">Student Homepage</h1>
    </div>
	
	<div class="content">
		<?php if (isset($_SESSION['success'])): ?>
				<div class = "error success">
					<h3>
						<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
						
						?>
					</h3>
				</div>
		<?php endif ?>
		
			<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p><a href="stulogin.php" style="color: red;"> Logout</a></p>
			<?php endif ?>
	</div>
  </body>
  </html>