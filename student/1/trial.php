<!DOCTYPE html>
<html>
<head>
	<title>Course Rep Login</title>
  
</head>
<body>
<link href='stylesheet.css' rel='stylesheet' type='text/css'>

<div style="margin-top: 100px" class="login">
  <div style="margin-bottom: 50px" class="login-header">
        <a href="">
            <img alt="" src="logo.png" width="200px">
        </a>
  </div>
  <h1 style="text-align: center; font-size: 25px; margin-top: -30px; padding-bottom: 30px">Course Rep Login</h1>
  <form class="login-form" method="post" action="student2.php">
    <h3>Index Number</h3>
    <input type="text" id="user" placeholder="Index Number" name="user"/><br>
    <h3>Password</h3>
    <input type="password" id="pass" placeholder="Password" name="pass"/>
    <br>
    <input type="submit" id="btn" value="Login" class="login-submit" />
    <br>
    <h6 class="password-reset"><a href="passwordreset.html">Forgotten password?</h6>
    <h6 class="password-reset"><a href="index.html">Back To Home</h6>
  </form>
</div>

</body>
</html>


