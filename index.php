<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$users = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>

<div class="container">
<a href="add.php">Add New User</a><br/><br/>

<!-- <div class="row">
    <div class="col-1 border">1</div>
    <div class="col-1 border">1</div>
    <div class="col-1 border">1</div>
    <div class="col-1 border">1</div>
    <div class="col-1 border">1</div>
    <div class="col-1 border">1</div>
    <div class="col-1 border">1</div>
    <div class="col-1 border">1</div>
    <div class="col-1 border">1</div>
    <div class="col-1 border">1</div>
    <div class="col-1 border">1</div>
    <div class="col-1 border">1</div>
</div>
<br>
<div class="row">
    <div class="col-3 border">3</div>
    <div class="col-3 border">3</div>
    <div class="col-3 border">3</div>
    <div class="col-3 border">3</div>
</div>

<br>

<div class="row">
    <div class="col-6 border">6</div>
    <div class="col-6 border">6</div>
</div>
<br> -->

    <table class="table table-borderless table-sm table-striped">
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


    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>