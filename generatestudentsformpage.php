<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generate Students Form Page</title>
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


</head>
<body>

<nav class="navbar navbar-expand-sm  navbar-white bg-primary ">
        <div class="container">
            <a href="#" class="navbar navbar-brand  text-white"> Students Clearance Form </a>
            <button class="navbar-toggler" data-toggle="collapse"  data-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="nav">            
              <!--    <ul class="navbar-nav text-white">
                <li class="nav-item "><a href="#" class="nav-link text-white" id="Changes">Main Menu</a></li>
                <li class="nav-item"><a href="studentsclearancepage.php" class="nav-link text-white" id="Changes">Clearance</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white" id="Changes">Report</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white" id="Changes">About Us</a></li>
            </ul>
            -->
        </div>
 
        </div>
    </nav>

<section >
        <div class="container">
    <ol class="breadcrumb bg-primary">
        <li class="breadcrumb-item active text-white">Dashboard</li>
        <li class="breadcrumb-item active text-white"> Generate Students Form</li>
    </ol>
    </div>
    </section>
    <section>
 <div class="container">
        <div class="row">
            <div class="col-md-3  ">
              <div class="list-group list-group-flush">
                 <a href="generatestudentsformpage.php" class="list-group-item">
                 <i class="fas fa-tachometer-alt"></i> Dashboard
                 </a>   
                 <a href="studentregpage.php" class="list-group-item"><span class="fa fa-envelope"></span> Students Registration</a> 
                 <a href="generatestudentsformpage.php" class="list-group-item active"><i class="far fa-file-alt"></i> Generate Form</a>
                 <a href="studentsrecords.php" class="list-group-item "><i class="far fa-clipboard"></i> Students Records </a>  
                  
                </div>
            </div>
            <div class="col-md-9">
                <div class="card bg-light">
                            <div class="card-header card-text">
                            Generate Students Form
                             </div>
                            <div class="card-body">

                            <table class="table  table-bordered  " >
                    <thead>
                            <tr>
                            <th>ID</th> 
                             <th>Firstname</th>  
                             <th>Surname</th>  
                             <th>Reg No</th>  
                             <th>Department</th> 
                             <th>Clearance Status</th> 
                             <th>Action</th>  
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

                            <td>
                            <?php
                             if ($students->library=='cleared' &&  $students->student_dept=='cleared' &&  $students->dean=='cleared' && $students->studentservice=='cleared'){
                              echo 'Cleared';
                            }else {
                                echo 'Not cleared';
                            }  

                             ?>
                            </td>

                            <td> 
                              <a href="generateformprocess.php?id=<?= $students->id ?>" class="btn btn-info btn-sm ">Generate</a>   
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
<!--Modals-->


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