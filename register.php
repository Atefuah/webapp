<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adminstration Registration Page</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/admindashboard.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="styleform.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
    
    body{
    background-image: url("./images/iStock_871203832_800x400.jpg");
 
  }

    </style>
</head>
<body>
    <!--registration form-->

<div class="row justify-content-center">
<div class="col-lg-4  bg-light rounded mt-5" id="registration-box">
<h3 class="text-center mt-2 text-info py-1">Registration </h3>
<form method="POST" action="registrationprocess.php" class="p-2" id="registration-frm">
<div class="form-group">
<input type="text" name="username" placeholder="username" required class="form-control"/>
</div>

<div class="form-group">
<input type="text"  name="password" placeholder="password" required class="form-control"/>
</div>

<div class="form-group">
<select class="form-control" name="usertype">
<option  disabled selected>Select user role</option>
<option value="library">Library</option>
<option value="dean">Dean of Student</option>
<option value="department"> Head of Department</option>
<option value="studentservice">Student Service</option>
</select>
</div>
<button type="submit" name="register" class="btn btn-primary btn-block" id="register" onClick="display()">Register</button><br>
<p class="text-center">Already Registered?<a href="admin clearance page.php" class="text-link" id="login-btn">  Login here</a></p>
</form>
</div>
</div>



    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<script src="./js/bootstrap.min.js"></script>

</body>
</html>