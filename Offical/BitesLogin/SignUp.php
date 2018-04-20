<?php include("server.php")?>
<html>
<head>
    <title>Sign up Form Design</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <img src="logo.png" class="logo">
<body>

<div class="loginbox">
    <img src="avatar1.png" class="avatar">
    <h1>Sign Up Here</h1>
    <form action="http://localhost/Offical/DashBoard.html" method="post" >
        <p>Username</p>
        <input type="text" name="username" placeholder="Enter User Name">

        <p>Email</p>
        <input type="email" name="email" placeholder="Enter Email Address">

        <p>Password</p>
              <input type="password" name="password1" placeholder="Enter Desired Password">
        <p>Confirm Password</p>
              <input type="password" name="password2" placeholder="Enter Desired Password">

        <input type="submit" name="Submit" value="Register"><br>
        <a href="Login1.php">Already a member?</a>

         </form>
      </div>

</body>
</head>
</html>