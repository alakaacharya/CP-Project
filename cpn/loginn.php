<?php include('server.php') ?>

<!------------- FIXEDDDDDDDDDD  AREAAAAA   ------------->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hostel Finder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!---------------- MY CSS  ------>
<link rel="stylesheet" href="css/demo.css" type="text/css">
<!----------------------------- FONT AWESOME ------ ---------->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>

<div class="container">

 <a href="#" class="navbar-brand"><img src="media/logo.png" height="80px" width="80px"></a> 

<!------------- NAVIGATION BAR  ------------->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      

       <li><a href="cpindex.php">Home</a></li>
      <li><a href="#">Vacancies </a></li>
      <li><a href="list.php">Hostels </a></li>
      <li><a href="#">Top 10</a></li>
        <li><a href="addhostel.php">Add your hostel </a></li>
       <li><a href="help.php">Help </a></li>
    </ul>
  </div>
</nav>


<!------------- NAVIGATION BAR 2 ------------->

<nav class="navbar navbar-default lognav">
  <div class="container-fluid">
    <ul class="nav navbar-nav">
      
      <li><a href="login.php">Login</a></li>
      <li> <a href="signup.php"> Register </a></li>
      
    </ul>
  </div>
</nav>

<div class="container-fluid">
  <h2> Hostel Finder </h2
</div>
<!------------- FIXED AREA ENDSSSS   ------------->

<div class="jumbotron">
<div class="container">

  <!---------------LOGIN --->

  <h3 align="center" >LOGIN</h3>

<form class="form-horizontal" method="post" action="loginn.php">
  <?php include('error.php'); ?>
    <div class="form-group">
      <label class="control-label col-sm-2" for="username">UserName:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name=username id="email" placeholder="Enter email">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-5">          
        <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-5">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>

    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="login_user" class="btn mybtns">Submit</button>
      </div>
    </div>

    Don't have an account?  <a href="signup.php"> Click Here </a> to register!
  </form>
</div> 




</div>

</div>
</div>

</div>
</body>