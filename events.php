
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel | Events </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/popper.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="test.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/datatables.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/dataTables.jqueryui.min.css" />
    
 


 
</head>
<body>



<?php
   require_once 'eventprocess.php';
 ?>

 <?php
 if (isset($_SESSION['message'])) : ?>
 
 <div class="alert alert-<?=$_SESSION['msg_type']?>">
    <?php
    echo $_SESSION['message'];
    unset($_SESSION['message']);
    ?>
</div>   
<?php endif ?>

<nav class="navbar navbar-expand-sm navbar-white bg-dark ">
        <div class="container">
            <a href="#" class="navbar navbar-brand text-white"> News Notification App</a>
            <button class="navbar-toggler" data-toggle="collapse"  data-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">            
         <!--       <ul class="navbar-nav">
                <li class="nav-item"><a href="#" class="nav-link"  id="Changes">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link"  id="Changes">Service</a></li>
                <li class="nav-item"><a href="#" class="nav-link"  id="Changes">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link"  id="Changes">Contact</a></li>
            </ul>-->
        </div>
        <form class="form-inline my-2">
            
            <button class="btn btn-primary " data-toggle="modal" data-target="#addpost">create content</button>

        </form>
        </div>
    </nav>
    <section >
        <div class="container">
    <ol class="breadcrumb">
            <li><a href="dashboard.php">Dashboard</a></li>
        <li class="breadcrumb-item active ml-4"> >> Events</li>
    </ol>
    </div>
    </section>
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group list-group-flush">
                 <a href="dashboard.php" class="list-group-item ">
                     Dashboard
                 </a>   
                 <a href="newsmanager.php" class="list-group-item "> News Manager </a> 
                 <a href="events.php" class="list-group-item  active">Events</a> 
                 <a href="manageuser.php" class="list-group-item ">Manage User</a> 
                 <a href="notificationmanager.php" class="list-group-item ">Notification Manager </a>  
                </div>
            </div>
            <div class="col-md-9">
            <button class="btn btn-primary btn-lg" data-target="#addevent" data-toggle="modal" >Add Event</button>
            <br>
            <br>
                <div class="card card-default">
                    <div class="card-header">
                        <h5>Events</h5>
                    </div>
                    <div class="card-body ">
                    <table class="table table-striped table-bordered  table-sm   table-responsive " >
                    <thead>
                            <tr>
                             <th>id</th>   
                             <th>Events Title</th>  
                             <th>Events Message</th>  
                             <th>Time Published</th>  
                             <th>Sent By</th>  
                             <th>Action</th>  
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                              require_once 'eventprocess.php';
                             ?>
                                <?php
                             $dbc = mysqli_connect('localhost','root','','notification_app'); 
                             $result = mysqli_query($dbc,"select * from  eventsmanager") or die( $sql->error);
                             ?>
                             <?php
                            while ($row = $result->fetch_assoc()):  ?>
                            <tr>
                                <td><?php  echo  $row['id']?></td>
                                <td><?php  echo  $row['Events_title']?></td>
                                <td><?php  echo  $row['Events_message']?></td>
                                <td><?php  echo  $row['Sent_At']?></td>
                                <td><?php  echo  $row['Sent_By']?></td>
                                <td>
                                    <a href="events.php?edit=<?php echo $row['id']; ?>"
                                   class="btn btn-info btn-sm">Edit</a>
                                   <a href="eventprocess.php?delete=<?php echo $row['id']; ?>"
                                   class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
<?php endwhile;?>
                        </tbody>
                        </table>
                     </div>
                    
                </div>
            </div>
            </div>
        </div>
    </div>

</section>
<!--Modals-->
<div class="modal " id="addevent" tabindex="-1" role="dialog" aria-labelledby="myModallabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <?php require_once 'eventprocess.php';
             ?>
             <?php
             $result = mysqli_query($dbc,"select * from  eventsmanager") or die( $sql->error);
             ?>
            <form  action="eventprocess.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="modal-header">
                    <h4 class="modal-title" id="myModallabel">Add Event</h4>
             <button  type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
           
            </div>
            <div class="modal-body">
            <div class="form-group">
                <label>Event Title</label>
                <input type="text" placeholder="Event Title" name="Events_title"   value="<?php echo $Events_title; ?>" class="form-control">
            </div>
          
            <div class="form-group">
                    <label>Event Content</label>
                  <textarea class="ckeditor " name="Events_message" value="<?php echo $Events_message; ?>"   placeholder=" Add Event here..."></textarea>
                </div>
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal">close</button>
               
                <?php 
                if($update==true):
                ?>
                <button class="btn btn-info" type="submit" name="update">update news</button>
                <?php else: ?>
                <button class="btn btn-primary" type="submit" name="save">Send Message</button>
                <?php endif; ?>

            </div>
        </form>
        </div>

    </div>

</div>

<!--popup modal-->
<button class="btn btn-primary btn-sm" data-target="#loginModal" data-toggle="modal">Login</button>
<div class="modal "   id="loginModal" tabindex="-1">
    <div class="modal-dialog"  role="document">

        <div class="modal-content">

         <div class="modal-header">
         <h5 class="modal-title">Login</h5>
            <button class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="modal-body">
            <form class="form-group">
            <label>username</label>
            <input type="text" class="form-control" placeholder="username">
            <label>password</label>
            <input type="text" class="form-control" placeholder="password">
                </form>
         </div>
            <div class="modal-footer">
                <button class="btn btn-primary">Login</button>
                <button class="btn btn-primary" data-dismiss="modal">Close</button>

            </div>
    </div>

</div>

</div>

<script src="./js/bootstrap.min.js"></script>
<script src="Bootstrap\bootstrap.js"></script>
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/jquery-1.12.4.js"></script>
<script src="./ckeditor/ckeditor.js"></script>
<script src="./js/jquery.dataTables.min.js"></script>
<script src="./js/datatables.min.js"></script>
<script src="./js/dataTables.bootstrap4.js"></script>
<script src="./js/dataTables.bootstrap.min.js"></script>
<script src="./fontawesome-free-5.7.0-web/fontawesome.min.js"></script>
<script src="./fontawesome-free-5.7.0-web/brands.min.js"></script>
<script src="./js/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<script>
 $(document).ready(function(){  
      $('.table').DataTable();  
 });  
 </script> 
</body>
</html>