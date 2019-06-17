<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Students Clearance Form | Dashboard</title>
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
<!--login form-->

<div class="row justify-content-center">
<div class="col-lg-4  bg-light rounded mt-5"  id="login-box">
<h3 class="text-center mt-2 text-info py-1">Login</h3>
<form method="POST" action="loginprocess.php"  class="p-2" id="login-frm">
<div class="form-group">


<input type="text" placeholder="username" name="usernametxt" required class="form-control"/>
</div>

<div class="form-group">
<input type="password" placeholder="password" name="passwordtxt" required class="form-control"/>
</div>

<button type="submit" name="login" class="btn btn-primary btn-block mb-5" id="login">Login</button><br>
<p class="text-center">New User?<a href="register.php" class="text-link" id="register-btn">  Register</a></p>
</form>
</div>
</div>






           
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> 
<script src="./js/bootstrap.min.js"></script>

<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#register-btn").click(function(){
        $("#registration-box").show();
        $("#login-box").hide();
        });
        $("#login-btn").click(function(){
        $("#login-box").show();
        $("#registration-box").hide();
        
        });
    });

   function display() {
     alert(' You have Successfully Registered');  
   }   

</script>

</body>
</html>