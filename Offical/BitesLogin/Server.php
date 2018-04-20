<?php
     // connect to the database
     $db = mysqli_connect('localhost', 'root','', 'qbdb' );

     // if the register button is clicked
if (isset($_POST['Submit'])){
    $username = mysqli_real_escape_String($db, $_POST['Username']);
    $Email = mysqli_real_escape_String($db, $_POST['Email']);
    $Password1 = mysqli_real_escape_String($db, $_POST['Password1']);
    $Password2= mysqli_real_escape_String($db, $_POST['Password2']);



    //if there are no errors, save user to db

        $Password= md5($Password1);
        $sql= "INSERT INTO members (Username, Email, Password) VALUES ('$username', '$Email', '$Password')";
        mysqli_query($db, $sql);


    }


?>