<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['hp'];

    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $query = "UPDATE `users` SET `name`='$name',`email`='$email',`mobile`='$mobile' WHERE id='$id'";
   
    $result = mysqli_query($mysqli, $query);
    
    // Show message when user added
    echo "User updated successfully. <a href='index.php'>View Users</a>";
}

?>