<?php
/*$servername="localhost";
$password="";
$db="company";

$db=mysqli_connect($servername,$username,$password,$db);
if($db){
  echo "good";
}*/
$dsn='mysql:host=localhost;dbname=students_clearance_data';
$username='root';
$password='';
$option=[];

try{
$connection = new PDO($dsn,$username,$password,$option);
}catch(PDOException $e){

}
?>
