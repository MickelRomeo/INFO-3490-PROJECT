<?php include("rserver.php")?>
<html>
<head>
    <script>
        document.getElementById("Submit").onclick = function () {
            location.href = "Dashboard.html";
        };
    </script>
    <script>
        function validateForm() {
            var a = document.forms["sForm"]["Establishment"].value;
            var b = document.forms["sForm"]["Location"].value;
            var c = document.forms["sForm"]["Contact"].value;
            var d = document.forms["sForm"]["Email"].value;
            var e = document.forms["sForm"]["Password"].value;
            if (a == "" || b==""|| c==""|| d=="" || e=="") {
                alert("All feilds must be filled out");
                return false;
            }
        }
    </script>
    <title>Sign up Form Design</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
    <img src="logo.png" class="logo">
<body>
<div class="loginbox">
    <img src="avatar1.png" class="avatar">
    <h1>Sign Up Here</h1>
    <form name="sForm" onsubmit="return validateForm()" method="post" >
        <p>Store Name</p>

        <input type="text" name="Establishment" placeholder="Enter Establishment Name">
        <p>Location</p>

        <input type="text" name="Location" placeholder="Enter Establishment Location">
        <p>Conact</p>

        <input type="tel" name="Contact" placeholder="Enter Phone Number">
        <p>Email</p>
        <input type="email" name="Email" placeholder="Enter Email Address">
        <p>Password</p>
        <input type="password" name="Password" placeholder="Enter Desired Password">
        <input type="submit" name="Submit" value="Register"><br>
        <a href="Login1.php">Already a member?</a>
    </form>
</div>

</body>
</head>
</html>tml>