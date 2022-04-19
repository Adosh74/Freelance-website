<html>
<head>
	<title>Rigesteration Form</title>
    <link rel="stylesheet" type="text/css" href="css.css"> 
	
</head>
<body style="background: #128184 ">

    <div class="header">
		<h2> Register as Client</h2>
	</div>

    <form method="post" action="Register.php">
         <div class="input">
        <label>First_Name</label>
			<input type="text" name="name"  value="" placeholder="fname">
            </div>
        <div class="input">
        <label>Last_Name</label>
			<input type="text" name="username"  value="" placeholder="lname">
            </div>
		 <div class="input">
			<label>Phone_Number</label>
			<input type="number" name="email"  value="" placeholder="phone">
        </div>
              <div class="input">
        <label>User_name</label>
			<input type="text" name="User_name"  value=""  placeholder="User name">
      </div>
                   <div class="input">
		<label>Password</label>
			<input type="password" name="password"  placeholder="password">
        </div>
     
    <div class="picture">
      <input type="file" name="">
    </div>
        <div>
            <!--------------------------------------------------->
        <button type="submit"class="btn" name="reg_user"><a href="logined/edit.php">Register</a></button>
        <!--------------------------------------------------->
		</div>
    
		<p>
			   Have Acount?<a href="login.php">Login</a>
		</p>
	</form>
</body>
</html>