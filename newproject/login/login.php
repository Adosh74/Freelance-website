<html>
<head>
	<title>Login Form</title>
	 <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body style="background: #128184 ">
	<div class="header">
		<h2>Login_Page</h2>
	</div>

    <form method="post" action="login.php">
        
        <div class="input">
        <label>Username</label>
			<input type="text" name="username"  value="">
            </div>
		
              <div class="input">
        <label>Password</label>
			<input type="password" name="password"  value="">
      </div>
                  <!------------->
        <button type="submit" class="btn" name="login"><a href="client_post.php">Login</a></button>
		<!--------------------->
        <p>
			    Not have acount?<a href="Register.php">Sign_Up</a>
		</p>
	</form>
</body>
</html>