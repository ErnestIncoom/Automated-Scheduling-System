<?php 
		//redirect to student homepage
		session_start();
		//end 
		
		$username = "";
		$email = "";
		$errors = array();
		
		
		// connect to the database
		$db = mysqli_connect('127.0.0.1:3307','root','','registration');
				
		
		//if the register button is clicked
		if(isset($_POST['register'])){
			$username =($_POST['username']);
			$email =($_POST['email']);
			$password_1 =($_POST['password_1']);
			$password_2 =($_POST['password_2']);
			
			
		// ensure that form fields are filled properly
		
		if (empty($username)){
			array_push($errors, "Username is required");
							}
		if (empty($email)){
			array_push($errors, "Email is required");
							}
		if (empty($password_1)){
			array_push($errors, "Password is required");
							}
		if ($password_1 != $password_2) {
			array_push($errors, "The Two Passwords do not match");
						}
		
		//if there are no errors, save user to database
		
		if (count($errors) == 0) {
			$password = md5($password_1); //encrypt password before storing in database
			$sql = "INSERT INTO users (username, email, password)
							VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are logged in";
			header('location: stuhomepage.php');
		}
		}
			//log user in from login page
		if (isset($_POST['stulogin'])){
			$username =($_POST['username']);
			$password=($_POST['password']);
			
			
			
		// ensure that form fields are filled properly
		
		if (empty($username)){
			array_push($errors, "Username is required");
							}
		if (empty($password)){
			array_push($errors, "Password is required");
							}
		if (count($errors) == 0){
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1) {
				// log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are logged in";
				header('location: stuhomepage.php');
			}else{
				array_push($errors, "Wrong Username/ Password");
				
				}
			//logout
			if (isset($_GET['logout'])) {
				session_destroy();
				unset($_SEESION['username']);
				header('location: stulogin.php');
			}

		}
						}
			

?>