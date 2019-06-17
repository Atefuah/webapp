<?php 

require 'db.php';
 $id=$_GET['id'];
 $sql = 'SELECT * FROM students_registration_data WHERE id=:id';
 $statement=$connection->prepare($sql);
 $statement->execute([':id'=>$id]);
 $students =$statement->fetch(PDO::FETCH_OBJ);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Clearance Form</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./css/materialize.min.css"  media="screen,projection"/>

</head>
<body>
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-12 ">
   <div class="card card-default mt-5">
   <div class="card-title">

<!--start printing from here-->
<!--<div id="printarea">-->

   <p class="card-text "><h5 class="text-center">Students Clearance Form</h5></p>
   </div>
   <div class="card-body">
   <form method="post">
   <form class="col s12">
 
   <div class="row">
   <div class="input-field col s8">
          <input id="firstname" readonly  type="text"name="firstname" value="<?=$students->firstname; ?>" class="validate">
          <span class="helper-text text-center" data-error="wrong" data-success="right">Firstname</span>
        </div>
        
        <div class="input-field col s8">
          <input id="surname" readonly  type="text" name="surname" value="<?=$students->surname; ?>" class="validate">
          <span class="helper-text text-center" data-error="wrong" data-success="right">Surname</span>
        </div>     
   
   </div>
   
   <div class="row">
     <div class="input-field col s8">
          <input  id="other_name" readonly  type="text" name="other_name" value="<?=$students->other_name; ?>" class="validate">
          <span class="helper-text text-center" data-error="wrong" data-success="right">Other Name</span>
        </div>
        
        <div class="input-field col s8">
          <input id="department" readonly   type="text" name="department" value="<?=$students->department; ?>" class="validate">
          <span class="helper-text text-center" data-error="wrong" data-success="right">Department</span>
        </div>     
   
   </div>

    <div class="row">
     <div class="input-field col s8">
          <input  id="nationality" readonly  type="text" name="nationality" value="<?=$students->nationality; ?>" class="validate">
          <span class="helper-text text-center" data-error="wrong" data-success="right">Nationality</span>
        </div>
        
        <div class="input-field col s8">
          <input id="yearofcompletion" readonly  type="text" name="yearofcompletion" value="<?=$students->yearofcompletion; ?>" class="validate">
          <span class="helper-text text-center" data-error="wrong" data-success="right">Year of Completion</span>
        </div>     
   
   </div>

    <div class="row">
     <div class="input-field col s8">
          <input  id="library" readonly  type="text" name="library"  value="<?=$students->library; ?>" class="validate">
          <span class="helper-text text-center" data-error="wrong" data-success="right">Libarian</span>
        </div>
        
        <div class="input-field col s8">
          <input id="student_dept" readonly  type="text" name="student_dept" value="<?=$students->student_dept; ?>" class="validate">
          <span class="helper-text text-center" data-error="wrong" data-success="right">Head of Department</span>
        </div>     
   
   </div>

    <div class="row">
     <div class="input-field col s8">
          <input  id="dean" readonly  type="text" name="dean" value="<?=$students->dean; ?>" class="validate">
          <span class="helper-text text-center" data-error="wrong" data-success="right">Dean of Students</span>
        </div>
        
        <div class="input-field col s8">
          <input id="studentservice" readonly  type="text" name="studentservice" value="<?=$students->studentservice; ?>" class="validate">
          <span class="helper-text text-center" data-error="wrong" data-success="right">Students Service</span>
        </div>     
   
   </div>
<!-- printing ends here-->
   </div>
   <br>
  
  
 </form>
   </div>
   <button class=" btn btn-success float-right btn-sm text-white"  onclick="window.print()"> Print</button>
   </div>
   </div> 
   </div>
   </div>
    









     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="./js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/materialize.min.js"></script>

<!--print function-->
<script>
//function printPageArea(printarea){
    var printContent = document.getElementById(printarea);
    var WinPrint = window.open('', '', 'width=900,height=650');
    WinPrint.document.write(printContent.innerHTML);
    WinPrint.document.close();
    WinPrint.focus();
    WinPrint.print();
    WinPrint.close();
//}
</script>
</body>
</html>

    