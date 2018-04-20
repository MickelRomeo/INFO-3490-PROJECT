<html>
<head>
<script src="https://www.gstatic.com/firebasejs/4.11.0/firebase.js"></script>
<script>
  // Initialize Firebase
  var config = {
    apiKey: "AIzaSyCNVlh9Z3xmx7W44bbPEgA_eimlDnkyxJc",
    authDomain: "quick-bites-dashboard-app.firebaseapp.com",
    databaseURL: "https://quick-bites-dashboard-app.firebaseio.com",
    projectId: "quick-bites-dashboard-app",
    storageBucket: "quick-bites-dashboard-app.appspot.com",
    messagingSenderId: "493884657785"
  };
  firebase.initializeApp(config);
</script>
<script>
function validateForm() {
    var x = document.forms["lForm"]["Username"].value;
	var y = document.forms["lForm"]["Password"].value;
    if (x == "" || y=="") {
        alert("All feilds must be filled out");
        return false;
    }
}
</script>
<title>Login Form Design</title>
      <link rel="stylesheet" type="text/css" href="style.css">
	  <img src="logo.png" class="logo">
<body>

     <div class="loginbox">
     <img src="avatar1.png" class="avatar">
         <h1>Login Here</h1>
         <form name="lForm" onsubmit="return validateForm()" method="post">
              <p>Username</p>
              <input type="text" name="Username" placeholder="Enter User Name">
              <p>Password</p>
              <input type="password" name="Password" placeholder="Enter Password">

             <form action="http://localhost/Offical/DashBoard.html">
                 <input type="submit" value="Login" />
             </form>

             <a href="rSignUp.php">Sign up To Be Featured On the Dashboard</a>
         </form>
      </div>

</body>
</head>
</html>