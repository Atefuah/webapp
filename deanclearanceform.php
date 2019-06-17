<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Clearance Form</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css" />
    <link rel="stylesheet"  href="./css/dashboard.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/popper.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/datatables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/datatables.bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/buttons.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css"/>
</head>
<body>



 <?php
 if (isset($_SESSION['message'])) : ?>
 
 <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
</div>   
<?php endif ?>

<nav class="navbar navbar-expand-sm  navbar-white bg-primary ">
        <div class="container">
            <a href="#" class="navbar-brand  text-white active"> Students Clearance Form </a>
            <button class="navbar-toggler" data-toggle="collapse"  data-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="nav">            
                  <ul class="navbar-nav text-white  ml-auto">
                  <li class="nav-item "><a href="#" class="nav-link text-white" id="Changes">You are Logged In as : 
                <?php 
                       
              session_start();
              echo  $_SESSION["username"];
                ?>        [ Dean of Students ]</a></li>
            </ul>
            
        </div>
     
        </div>
    </nav>

<section >
        <div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item active "> Students Clearance Form</li>
    </ol>
    </div>
    </section>
    <section>
 <div class="container">
        <div class="row">
            <div class="col-md-3">
              <div class="list-group list-group-flush ">
                 <a href="dashboard.php" class="list-group-item">
                 <i class="fas fa-tachometer-alt"></i> Dashboard
                 </a>   
                 <a href="studentregpage.php" class="list-group-item"><i class="fa fa-envelope"></i>  Students Registration</a> 
                 <a href="studentsclearancepage.php" class="list-group-item active"><i class="fab fa-wpforms"></i> Students Clearance Form</a> 
                 <a href="generatestudentsformpage.php" class="list-group-item ">Generate Form</a>
                 <a href="studentsrecord.php" class="list-group-item "><i class="far fa-clipboard"></i>  Students Records </a>  
                 <a href="logout.php" class="list-group-item "><i class="fas fa-sign-out-alt"></i> LogOut </a>  
                </div>
            </div>
            <div class="col-md-9">
                

<div class="card bg-light">
               <div class="card-header">
                  <h5 class="text-primary">Students Clearance Form</h5>
                  </div>
               <div class="card-body ">
               <table class="table  table-bordered  " >
                    <thead>
                            <tr>
                            <th>ID</th> 
                             <th>Firstname</th>  
                             <th>Surname</th>  
                             <th>Reg No</th>  
                             <th>Department</th>  
                             <th>Clearance Action</th>  
                            </tr>
                            </thead>
                            <tbody>
                           
                             <?php
                            require 'db.php';
                            $sql='SELECT *FROM students_registration_data';
                            $statement=$connection->prepare($sql);
                            $statement->execute();
                            $registration_data=$statement->fetchAll(PDO::FETCH_OBJ);
                                ?>
                    <?php foreach($registration_data as $students):?>
                            <tr>  
                            <td><?= $students->id?></td>
                            <td><?= $students->firstname?></td>
                            <td><?= $students->surname?></td>
                            <td><?= $students->reg_no?></td>
                            <td><?= $students->department?></td>
                            
                                <td>
                                
                                    <a href="deanedit.php?id=<?=$students->id ?>"
                                   class="btn btn-info btn-sm ">fill form</a>
                                  
                                </td>
                            </tr>
             <?php endforeach;?>
                        </tbody>
                        </table>




</div>    
</div>
</div> 
</div>
</div>  
</section>








  
 <script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/popper.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
<script src="./js/dataTables.select.min.js"></script>
<script src="./js/jquery.dataTables.min.js"></script>
<script src="./js/dataTables.bootstrap.min.js"></script>
<script src="./js/dataTables.bootstrap4.min.js"></script>
<script src="./js/dataTables.buttons.min.js"></script>
<script src="./js/datatables.min.js"></script>
<script src="./js/select.dataTables.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/popper.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.js"></script>

<script>
 $(document).ready(function(){  
      $('.table').DataTable();  
 });


 </script>


</body>
</html>