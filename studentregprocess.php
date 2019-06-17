<?php
require 'db.php'; 




if (isset($_POST['firstname']) && isset($_POST['surname']) && isset($_POST['other_name']) && isset($_POST['reg_no']) && isset($_POST['state_of_origin']) && isset($_POST['nationality']) && isset($_POST['gender']) && isset($_POST['level']) && isset($_POST['date_of_birth']) && isset($_POST['department']) && isset($_POST['yearofcompletion'])){

    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $other_name = $_POST['other_name'];
    $reg_no = $_POST['reg_no'];
    $state_of_origin = $_POST['state_of_origin'];
    $nationality = $_POST['nationality'];
    $gender = $_POST['gender'];
    $level = $_POST['level'];
    $date_of_birth = $_POST['date_of_birth'];
    $department = $_POST['department'];
    $yearofcompletion = $_POST['yearofcompletion'];

$sql ='INSERT into students_registration_data(firstname,surname,other_name,reg_no,state_of_origin,nationality,gender,level,date_of_birth,department,yearofcompletion) values(:firstname,:surname,:other_name,:reg_no,:state_of_origin,:nationality,:gender,:level,:date_of_birth,:department,:yearofcompletion)';
$statement=$connection->prepare($sql);
if($statement->execute([':firstname'=>$firstname, ':surname'=>$surname, ':other_name'=>$other_name, ':reg_no'=>$reg_no, ':state_of_origin'=>$state_of_origin, ':nationality'=>$nationality,':gender'=>$gender,':level'=>$level,':date_of_birth'=>$date_of_birth,':department'=>$department,':yearofcompletion'=>$yearofcompletion])){
    header("location: studentregpage.php");
}
   
   

}



    /*if (isset($_POST['sendbylibrary'])) {
        $firstname = $_POST['firstname'];
        $surname = $_POST['surname'];
        $other_name = $_POST['other_name'];
        $reg_no = $_POST['reg_no'];
        $level = $_POST['level'];
        $library = $_POST['library'];
        $department = $_POST['department'];
    
    
        $sql = mysqli_query($dbc,"insert into  students_clearance values(0,'$firstname','$surname','$other_name','$reg_no','$level','$library',NOW(),'$department')") or die( $sql->error);
        
    
        $_SESSION['message'] = " saved successfully";
        $_SESSION['msg_type'] = "success";
    
        header("location: studentsclearancepage.php");
    
    }*/
?>