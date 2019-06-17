<?php

$dbc = mysqli_connect('localhost','root','','students_clearance_data'); 

if (isset($_POST['save'])) {
 
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $reg_no = $_POST['reg_no'];
    $library = $_POST['library'];
    $dean = $_POST['dean'];
    $security = $_POST['security'];
    $department = $_POST['department'];
    $exams_and_records = $_POST['exams_and_records'];
    $receipt = $_POST['receipt'];
    $remarks = $_POST['remarks'];
    

   
    $sql = mysqli_query($dbc,"insert into  students_clearance('$firstname','$surname','$library','$reg_no',' $dean','$security',' $department',' $exams_and_records','$receipt','$remarks')") or die( $sql->error);

    $_SESSION['message'] = "Clearance Form Submitted Successfully";
    $_SESSION['msg_type'] = "success";

    header("location: studentsclearancepage.php");
}


?>