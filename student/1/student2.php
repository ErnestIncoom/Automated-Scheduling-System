<? php 



	$username = $_POST['user'];
	$password = $_POST['pass'];

	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);
	
	mysql_connect("localhost", "root", "");
	mysql_select_db("test");
	
	$result = mysql_query("select * from tester where username = '$username' and password = '$password'")
				or die( "failed to query database" msql_error());
				
	$row = mysql_fetch_array($result);
		if ($row['username'] == $username && $row['password'] == $password ){
		
	echo "Login Success!!! Welcome" .$row ['username'];
	} else { 
		echo "Failed to Log In";
	}


?>