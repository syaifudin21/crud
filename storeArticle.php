<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['Submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    
    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO articles(title,description,image) VALUES('$title','$description','$image')");

    // Show message when user added
    echo "Article added successfully. <a href='index.php'>View Users</a>";
}

?>