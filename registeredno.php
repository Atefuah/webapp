<?php
require 'db.php';
 $sql='SELECT  count(*) FROM students_registration_data';
 $statement=$connection->prepare($sql);
 $statement->execute();
 $num_rows =$statement->fetchColumn();
 
 ?>