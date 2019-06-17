<?php

 require 'db.php';
 $id = $_GET['id'];
 $sql = 'SELECT * FROM students_registration_data WHERE id=:id';
 $statement=$connection->prepare($sql);
 $statement->execute([':id'=>$id]);
 $students =$statement->fetch(PDO::FETCH_OBJ);
 
 if (isset($_POST['firstname'])&& isset($_POST['surname']) && isset($_POST['other_name']) && isset($_POST['reg_no']) && isset($_POST['department'])){
         
     $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $other_name = $_POST['other_name'];
    $reg_no = $_POST['reg_no'];
    $department = $_POST['department'];
    $student_dept = $_POST['student_dept'];
    $reason = $_POST['reason'];
 $sql='UPDATE students_registration_data SET firstname=:firstname, surname=:surname, other_name=:other_name, reg_no=:reg_no, department=:department,  student_dept=:student_dept WHERE id=:id';
 $statement = $connection->prepare($sql);
 if($statement->execute([':firstname'=>$firstname, ':surname'=>$surname, ':other_name'=>$other_name, ':reg_no'=>$reg_no, ':department'=>$department, ':student_dept'=>$student_dept ." ".  $reason,':id'=>$id])){
 
 header("location: departmentclearanceform.php");
 
 }
 
 }
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fill Clearance Form</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./css/dashboard.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/popper.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css"/>
</head>
<body>


<div class="container ml-10">
<div class="row justify-content-center">
<div class="col-md-4 offset-md-4 rounded"></div>
        <div class="card  bg-light">
        <div class="card-body"> 
         <form method="post">
          <div class="card-title">
            <h4 class="card-text text-center" >Students Clearance Form</h4>
           </div>
             <p class="text-center text-primary font weight bold">
                STATEMENT OF CLEARANCE<hr>
                This student have satisfied all financial obligations and returned intellectual property or confidential information.
                </p>
                <hr>
            <div class="form-group">
            <label for="firstname">Firstame</label>
                <input type="text"  name="firstname" readonly  value="<?=$students->firstname; ?>" id="firstname" class="form-control">
            </div>

     <div class="form-group">
        <label for="surname">Surname</label>
        <input type="text" name="surname" readonly  value="<?=$students->surname; ?>" id="surname" class="form-control">
    </div>

     <div class="form-group">
        <label for="other_name">Other Name</label>
        <input type="text" name="other_name" readonly  value="<?=$students->other_name; ?>"  id="other_name" class="form-control">
    </div>

     <div class="form-group">
        <label for="reg_no">Registration No</label>
        <input type="text" name="reg_no"   readonly   value="<?=$students->reg_no; ?>" id="reg_no" class="form-control">
    </div>

    <div class="form-group">
        <label for="department">Department</label>
        <input type="text" name="department"  readonly  value="<?=$students->department; ?>" id="department" class="form-control">
    </div>
     
     <div class="form-group">
     <label>Head of Department</label>
        <select id="HeadDepartment" class="form-control" name="student_dept" autofocus>
         <option disabled selected>Clearance Status</option>
        <option value="cleared">Cleared</option>
         <option value="uncleared">Uncleared</option>
          </select>
         </div> 
         <div class="form-group" >
         <textarea id="Uncleared" class="form-control"  style="display: none;" name="reason" placeholder=" State the reason why you have uncleared  this student"></textarea>
         </div>
         <button type="submit" class="btn btn-info float-right"  onClick="display()">SUBMIT</button>     
        </form>
        </div>
        </div>
    </div>
    </div>



 <script src="./js/bootstrap.min.js"></script>
 <script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


   
   <script>
   
   function display() {
    Swal.fire({
  position: 'top-end',
  type: 'success',
  title: ' <?= $students->firstname?> Successfully Cleared',
  showConfirmButton: false,
  timer: 9000000
})
}


$(document).ready(function() {   
$('#HeadDepartment').change(function(){   
if($('#HeadDepartment').val() === 'uncleared')   
   {   
   $('#Uncleared').show();    
   }   
else 
   {   
   $('#Uncleared').hide();      
   }   
});   
}); 
  </script>

</body>
</html>


