<html>
<head>
    <title>Edit Users</title>
</head>
<?php 

include_once("config.php");

$id = $_GET['id']; 
$query = 'SELECT * FROM `users` WHERE id='.$id;
$user = mysqli_query($mysqli,$query);

while($data = mysqli_fetch_array($user))
{
    $id = $data['id'];
    $name = $data['name'];
    $email = $data['email'];
    $mobile = $data['mobile'];
}

?>
<body>
<br><br>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name" value="<?= $name; ?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?= $email; ?>"></td>
            </tr>
            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="hp"  value="<?php echo $mobile; ?>"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Update"></td>
            </tr>
        </table>
    </form>

</body>
</html>