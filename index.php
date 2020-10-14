<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$users = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

$articles = mysqli_query($mysqli, "SELECT * FROM articles ORDER BY id DESC");

?>

<html>
<head>    
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add.php">Add New User</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add-article.php">Add Article</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <div style="height: 400px; overflow: hidden;;"> 
        <img src="image/dora.jpg" alt="Responsive image" style="width: 100%;">
    </div>

<div class="container">

<div class="row">
    <div class="col-8">
        <br>
        <?php foreach ($articles as $article) { ?>

        <div class="media" style="margin-bottom: 25px">
            <img src="image/dora.jpg" width="64px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0"><u><?php echo $article['title']; ?></u> <br> <small style="font-size: 10px;"> <?php echo $article['waktu'];?> </small></h5>
                <?php echo $article['description']; ?>
                
            </div>
        </div>

        <?php } ?>
        
    </div>
    <div class="col-4">
        <br>
        <ul class="list-group">
            <li class="list-group-item">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
        </ul>
    </div>
</div>


<br><br>


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