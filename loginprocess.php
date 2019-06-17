<?php
require_once 'registrationprocess.php';
        $dbc = mysqli_connect('localhost','root','','students_clearance_data'); 

    if (isset($_POST['login'])) {
 
        $username = $_POST['usernametxt'];
        $password = $_POST['passwordtxt'];
    
        $sql = mysqli_query($dbc,"select username,password,usertype from clearance_login_form") or die( $sql->error);
        while($row = mysqli_fetch_array($sql)) {
        $db_username =$row['username'];
        $db_password =$row['password'];
        $db_usertype =$row['usertype'];

        if ($username==$db_username &&  $password== $db_password){
         session_start();
         $_SESSION["username"]= $db_username;
         $_SESSION["usertype"]= $db_usertype;

         if ($_SESSION["usertype"]=='dean') {
            
           header("location: deanpage.php");

         }elseif($_SESSION["usertype"]=='department') {
            header("location: departmentpage.php");
         }
         elseif ($_SESSION["usertype"]=='library') {
            header("location: librarymain.php");
         }
         elseif ($_SESSION["usertype"]=='studentservice') {
            header("location: studentservicepage.php");
         }


        }else {
            echo "Login Failed";        
            }
    }

    }

     
   


?>