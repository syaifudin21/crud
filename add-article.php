<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="storeArticle.php" method="post">
        <table width="25%" border="0">
            <tr> 
                <td>Title</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr> 
                <td>Description</td>
                <td><textarea name="description" cols="30" rows="10"></textarea></td>
            </tr>
            <tr> 
                <td>image</td>
                <td><input type="text" name="image"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

</body>
</html>