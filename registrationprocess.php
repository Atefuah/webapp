
<?php

$dbc = mysqli_connect('localhost','root','','students_clearance_data'); 

if (isset($_POST['register'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];
 
   

    $sql = mysqli_query($dbc,"insert into clearance_login_form values('$username','$password','$usertype')") or die( $sql->error);

  header("location: admin clearance page.php");

}else {

    header("location: admin clearance page.php");

}


?>

