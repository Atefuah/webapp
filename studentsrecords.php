<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clearance Form | Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/dashboard.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="test.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/datatables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/datatables.bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/buttons.dataTables.min.css" />

      <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }

  </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-white d-flex ml-5" href="#">Students Clearance Form</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav  ml-auto">
     
    

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="aboutschool.php">About School</a>
          <a class="dropdown-item" href="aboutclearance.php">About Clearance</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Clearance
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="studentregpage.php">Registration</a>
          <a class="dropdown-item" href="generatestudentsformpage.php">Generate Clearance Form</a>
      
        </div>
      </li>
    </ul>
  </div>
</nav>



                <div class="card bg-light">
                            <div class="card-header">
                          <h5 class="card-text"> Students  Records</h5>
                             </div>
                            <div class="card-body">

                            <table class="table  table-bordered table-striped  " >
                    <thead>
                            <tr>
                            <th>ID</th> 
                             <th>Firstname</th>  
                             <th>Surname</th>  
                             <th>Reg No</th>  
                             <th>Department</th> 
                             <th>Library</th> 
                             <th>Head of Department</th> 
                             <th>Dean of Students</th> 
                             <th>Students Service</th> 
                             <th>Clearance Status</th>
                           
                            </tr>
                            </thead>
                            <tbody>
                           
                             <?php
                            require 'db.php';
                            $sql='SELECT * FROM students_registration_data';
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
                            <td><?= $students->library?></td>
                            <td><?= $students->student_dept?></td>
                            <td><?= $students->dean?></td>
                            <td><?= $students->studentservice?></td>
                            <td>
                            <?php
                             if ($students->library=='cleared' &&  $students->student_dept=='cleared' &&  $students->dean=='cleared' && $students->studentservice=='cleared'){
                              echo 'Cleared';
                            }elseif($students->library=='uncleared' &&  $students->student_dept=='uncleared' &&  $students->dean=='uncleared' && $students->studentservice=='uncleared'){
                                echo 'Not  cleared';
                            }elseif($students->library=='uncleared' ||  $students->student_dept=='uncleared' ||  $students->dean=='uncleared' || $students->studentservice=='uncleared'){
                              echo 'Not Fully cleared';
                            }elseif($students->library=='cleared' ||  $students->student_dept=='cleared' ||  $students->dean=='cleared' || $students->studentservice=='cleared') {
                              echo 'Not Fully cleared';
                            }else {
                              echo 'Yet to be Process';
                            }  

                             ?>
                            </td>

                            </tr>
             <?php endforeach;?>
                        </tbody>
                        </table>
                        </div>
                     </div>



     










         
           
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="./js/bootstrap-material-design.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/jquery-1.12.4.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script src="./js/dataTables.select.min.js"></script>
<script src="./js/jquery.dataTables.min.js"></script>
<script src="./js/dataTables.bootstrap.min.js"></script>
<script src="./js/dataTables.bootstrap4.min.js"></script>
<script src="./js/dataTables.buttons.min.js"></script>
<script src="./js/datatables.min.js"></script>
<script src="./js/select.dataTables.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

<script>  
 $(document).ready(function(){  
      $('.table').DataTable();  
 });  
 </script> 
</body>
</html>