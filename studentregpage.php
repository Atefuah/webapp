<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Registration Form</title>
    <link rel="stylesheet"  href="./css/dashboard.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css"/>

</head>
<body>

<?php
   require_once 'studentregprocess.php';
 ?>

 <?php
 if (isset($_SESSION['message'])) : ?>
 
 <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
</div>   
<?php endif ?>

<nav class="navbar navbar-expand-sm  navbar-white bg-primary " id="navheader">
        <div class="container">
            <a href="" class="navbar-brand  text-white"> Students Registration Form </a>
         
         
     
        </div>
    </nav>


<section >
        <div class="container">
    <ol class="breadcrumb bg-primary">
        <li class="breadcrumb-item active text-white">Dashboard</li>
        <li class="breadcrumb-item active text-white"> Students Registration</li>
    </ol>
    </div>
    </section>
    <section>
 <div class="container">
        <div class="row">
            <div class="col-md-3  ">
              <div class="list-group list-group-flush">
                 <a href="students clearance form.php" class="list-group-item">
                 <i class="fas fa-tachometer-alt"></i>Dashboard
                 </a>   
                 <a href="studentregpage.php" class="list-group-item  active "><i class="fa fa-envelope"></i>  Students Registration</a> 
                 <a href="studentsclearancepage.php" class="list-group-item"><i class="fab fa-wpforms"></i> Clearance Form</a> 
                 <a href="generatestudentsformpage.php" class="list-group-item "> Generate Form</a>
                 <a href="studentsrecords.php" class="list-group-item "><i class="far fa-clipboard"></i> Students Records </a>  
                 
                </div>
            </div>


<div class="col-md-9">

  <div class="card bg-light">
                 <div class="card-header">
                    <h5 class="text-primary">Students Registration Form</h5>
                    </div>
                 <div class="card-body ">

    <form method="POST" action="studentregprocess.php">
        <div class="form-group">
        <input  type="text"  name="firstname" placeholder="firstname" class="form-control" required />
        
        </div>

        <div class="form-group">
     <input  type="text"  name="surname"  placeholder="surname" class="form-control" required />
     
        </div>

           <div class="form-group">
     <input  type="text"  name="other_name"  placeholder="other name" class="form-control" required  />
     
        </div>

        <div class="form-group">
        <input  type="text"  name="reg_no"  placeholder="registration number"  class="form-control" required />
    
        </div>

        <div class="form-group">
        <input  type="text"  name="state_of_origin"  placeholder="state of origin" class="form-control" required />
        
        </div>

        <div class="form-group">
        <input  type="text"  name="nationality"  placeholder="nationality" class="form-control" required />
        </div>

        <div class="form-group">
        <input  type="number"  placeholder="level" name="level" class="form-control" required/>
        </div>

     <div class="form-group">
        <label>Gender</label>
        <select class="form-control" name="gender" />
        <option disabled selected>Select Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        </select>
         </div>


        <div class="form-group">
        <label>Date of Birth</label>
        <input  type="date" name="date_of_birth" class="form-control" required/>
       
        </div>

       
     <div class="form-group">
     <label> Department</label>
        <select  class="form-control" name="department" >
        <option disabled selected>Select Department</option>
        <option value="computer science">Computer Science</option>
        <option value="computer networking" >Computer Networking</option>
        <option value="sec and management">Sec and Management</option>
        <option value="markerting" >Markerting</option>
        <option value="accounting">Accounting</option>
        <option value="hospitality" >Hospitality</option>
        </select>
        </div>
       

        <div class="form-group">
        <label>Year of Completion</label>
        <input  type="text"  name="yearofcompletion" max-length="4" placeholder="year of completion" class="form-control" required/>
       
        </div>

      
        <button  type="submit"  name=""  class="btn btn-primary float-right"  onClick="display()">Submit</button>
        


    </form>
</div>    
</div>
</div>    

</section>














  
<script src="./js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.13.5/bootstrap-table.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.js"></script>
<script>
   
   function display() {

    swal({
  title: 'Congratulations!',
  text: 'You have Succesfully Registered',
  type: 'success',
  timer: 3000,
});
}

  </script>
</body>
</html>