<?php include_once('script.php');
include_once('DB.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management System </title>
</head>
<body>
<?php
    include_once('nav.php');
    ?>
    <br>
    <div class="container">
        <div class="row">
        
            <div class="col-sm-7">
                <div class="card" style="width:100%;">
        
<form>
<nav class="navbar navbar-expand-lg navbar-white bg-dark  text-white">

  DONOR LOGIN </a></h1>
</nav>

<div class="card-body">
    <div class="row">
    <div class="col-sm-12">
    User Name <br> <input type="text"  class="form-control" placeholder="Enter username" required>
</div>
    <br>
    <div class="col-sm-12">
    Password <br> <input type="password" class="form-control"  placeholder="Password"required>
  </div>
  <br><br>
  <button type="submit" class="btn btn-danger"style="width:50%; padding:10px; align:left;">LogIn</button>
  <div class="form-check"><br>
  <a href="" class="linker">Does not have Account?Click have to register</a>
  
  </div>
</form>
</div>
</div>
</div>
</body>
</html>