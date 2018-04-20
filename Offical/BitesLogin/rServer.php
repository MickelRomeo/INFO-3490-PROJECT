<?php
// connect to the database
$db = mysqli_connect('localhost', 'root','', 'qbdb' );

// if the register button is clicked
if (isset($_POST['Submit'])){
    $Establishment = mysqli_real_escape_String($db, $_POST['Establishment']);
    $Location = mysqli_real_escape_String($db, $_POST['Location']);
    $Contact = mysqli_real_escape_String($db, $_POST['Contact']);
    $Email = mysqli_real_escape_String($db, $_POST['Email']);
    $Password= mysqli_real_escape_String($db, $_POST['Password']);




    //if there are no errors, save user to db

    $Password= md5($Password);
    $sql= "INSERT INTO res_members (Establishment, Location, Contact, Email, Password) VALUES ('$Establishment','$Location','$Contact', '$Email', '$Password')";
    mysqli_query($db, $sql);


}


?>