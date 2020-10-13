<?php

include_once('config.php');
$id = $_GET['id'];

$q = "DELETE FROM `users` WHERE id=$id";

$result = mysqli_query($mysqli, $q);
    
// Show message when user added
echo "User delete successfully. <a href='index.php'>View Users</a>";
