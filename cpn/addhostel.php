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
<!---------------- MY CSS ----->
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
  <h2> Hostel Finder </h2>
</div>

<!------------- FIXED AREA ENDSSSS   ------------->

<div class="jumbotron">
<div class="container">
  <h2 align="center" style="color: orange; margin-bottom: 20px;" >ADD YOUR HOSTEL DETAILS</h2>

<!--------------------DETAILSSSSSSSSS AREAAAAAAAAAAA----------- --->
<div class="container">
  <form class="form-horizontal">

<!-------------------------INFOOOOOOOO -------------->
<div class="container">
<div class="col-sm-5">
    <div class="form-group">
      <label for="name">Owner name:</label>
      <input type="name" class="form-control" id="name" >
    </div>

    <div class="form-group">
      <label for="Hostelname">Hostel name:</label>
      <input type="password" class="form-control" id="pwd" >
    </div>

  <label for="Hostelname">Hostel type:</label> <br>
<label class="radio-inline"><input type="radio" name="optradio" checked> Boys</label>
<label class="radio-inline"><input type="radio" name="optradio">girls</label>     
</div>

<div class="col-sm-5">
     <div class="form-group">
      <label for="Hostelname">Hostel address:</label>
      <input type="password" class="form-control" id="pwd" >
    </div>

    <div class="form-group">
      <label for="name">Gmap link:</label>
      <input type="name" class="form-control" id="name" >
    </div>

</div>
</div>

<hr style="height:1px; border:none; color:red; background-color:#000;">

<!-----------------------SERVICES-------------------------->
<div class="container servicecheck">
    <h3> Tick to specify the servies you provide </h3>

 <div class="checkbox">
  <div class="col-sm-5">
      <label><input type="checkbox"> Wi-fi</label> <br>
      <label><input type="checkbox"> Security </label> <br>
      <label><input type="checkbox"> Healthy food</label> <br>
    </div>

    <div class="col-sm-5">
      <label><input type="checkbox"> Peaceful environment</label> <br>
      <label><input type="checkbox"> Loundry Service</label> <br>
      <label><input type="checkbox"> Hot and cold water 24-7</label> <br>
    </div>

Enter more details about your facilities: 
     <textarea  rows="5" cols="16" id="comment" placeholder="Enter Comments"></textarea>
     </div>
   </div>
    
    <hr style="height:1px; border:none; color:#000; background-color:#000;">

<!--------------------------PRICE-------------------------->
<div class="container">

    <h3> Prices per month </h3>

    <div class="col-sm-5">
    <div class="form-group">
      <label for="fee">Admission fee:</label>
      <input type="number" class="form-control" id="fee" >
    </div>

    <div class="form-group">
      <label for="fee">Single bed:</label>
      <input type="number" class="form-control" id="fee" >
    </div>

    <div class="form-group">
      <label for="fee">Three bed:</label>
      <input type="number" class="form-control" id="fee">
    </div>
  </div>

<div class="col-sm-5">
    <div class="form-group">
      <label for="Hostelname">Security deposit</label>
      <input type="number" class="form-control" id="fee" >
    </div>

     <div class="form-group">
      <label for="fee">Double bed:</label>
      <input type="number" class="form-control" id="fee">
    </div>

     <div class="form-group">
      <label for="fee">Four bed:</label>
      <input type="number" class="form-control" id="fee">
    </div>
  </div>
  </div>
  <hr style="height:1px; border:none; color:#000; background-color:#000;">

  <!--------------------------CONTACT DETAILS-------------------------->

 <h3> Contact details  </h3>
 <div class="container">
 <div class="col-sm-5">
    <div class="form-group">
      <label for="name">Phone number:</label>
      <input type="tel" class="form-control" id="phone" >
    </div>

    <div class="form-group">
      <label for="Hostelname">Email id:</label>
      <input type="email" class="form-control" id="email" >
    </div>
  </div>
</div>


  

<button type="submit" class="btn mybtns">Submit</button>

</form>


</div>

</div>
</div>

</div>
</body>





