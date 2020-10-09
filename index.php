<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$users = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
</head>

<body>
<a href="add.php">Add New User</a><br/><br/>

    <table border=1px>
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Email</td>
            <td>Mobile</td>
            <td>Action</td>
        </tr>
        <?php 
            foreach ($users as $user) {
            echo 
                "<tr>
                    <td>".$user['id']."</td>
                    <td>".$user['name']."</td>
                    <td>".$user['email']."</td>
                    <td>".$user['mobile']."</td>
                    <td><a href='edit.php?id=".$user['id']."'>Edit User</a> <a href='delete.php?id=".$user['id']."'>Delete User</a></td>
                </tr>";
            }
        ?>
        
    </table>
</body>
</html>