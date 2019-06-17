<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clearance Form | Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="./css/morris.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/admindashboard.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap-material-design.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }

  </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-white d-flex ml-5" href="">Students Clearance Form</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav  ml-auto">
    
          <li class="nav-item "><a href="#" class="nav-link text-white" id="Changes">You are Logged In as : 
                <?php 
                       
              session_start();
              echo  $_SESSION["username"];
                ?>        [ Students Service ]</a></li>
      
    </ul>
  </div>
</nav>
    <section >
        <div class="container">
  
    <ol class="breadcrumb bg-primary">
        <li class="breadcrumb-item active text-white">Dashboard</li>
    </ol>
    </div>
    </section>
 <div class="container">
        <div class="row">
            <div class="col-md-3  ">
              <div class="list-group list-group-flush" id="navbarNavDropdown" >
                 <a href="studentservicepage.php" class="list-group-item active">
                 <i class="fas fa-tachometer-alt"></i>Dashboard
                 </a>   
                 <a href="studentserviceclearanceform.php" class="list-group-item list-group-item-action"><i class="fab fa-wpforms"></i>Clearance Form</a> 
                 <a href="#" class="list-group-item list-group-item-action"><i class="far fa-clipboard"></i>Students Records </a>  
                 <a href="aboutschool.php" class="list-group-item list-group-item-action"><i class="far fa-clipboard"></i>About School </a>
                 <a href="aboutclearance.php" class="list-group-item list-group-item-action"><i class="far fa-clipboard"></i>About Clearance </a>
                 <a href="logout.php" class="list-group-item list-group-item-action"><i class="fas fa-sign-out-alt"></i>LogOut </a>  
                </div>
            </div>
            <div class="col-md-9">
                
                    <div class="container">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="card text-primary">
                                           
                                                    <div class="card-body">       
                                                   <span> <h3>
                                                       <?php
                                                  require_once 'registeredno.php';
                                                  //$result = mysqli_query($dbc,"select * from students_registration_data") or die( $sql->error);
                                                   echo   $num_rows; 
                                                    ?>
                                                    </h3></span> <h5>Registered Students</h5>
                                                </div>
                                               
                                            </div>
                                        </div>
                    
                                        <div class="col-md-4">
                                                <div class="card text-primary">
                                                    <div class="card-body">       
                                                        <span> <h3>
                                                        <?php
                                                    require_once 'studentsclearanceprocess.php';
                                                    $result = mysqli_query($dbc,"SELECT library,student_dept,dean,studentservice from   students_registration_data where library like '%cleared%' and student_dept like '%cleared%' and dean like '%cleared%' and studentservice like '%cleared%'") or die( $sql->error);
                                                    echo  mysqli_affected_rows($dbc);
                                                  
                                                    ?>
                                                        </h3></span> <h5>Cleared Students</h5>
                                                       
                                                    </div>
                                            </div>
                                        </div>
                                            <div class="col-md-4">
                                                    <div class="card text-primary">
                                                        <div class="card-body">       
                                                            <span> <h3>
                                                            <?php
                                                             require_once 'studentsclearanceprocess.php';
                                                            $result = mysqli_query($dbc,"SELECT library,student_dept,dean,studentservice from   students_registration_data where library like '%uncleared%' and student_dept like '%uncleared%' and dean like '%uncleared%' and studentservice like '%uncleared%'") or die( $sql->error);
                                                            echo  mysqli_affected_rows($dbc);
                                                            ?>
                                                            </h3></span> <h5>UnCleared Students</h5>
                                                           
                                                        </div>
                                                </div>
                                            </div>
                                              
                                
                    </div>    
                                  
                        
                   
                </div>
                <br>
                <br>
               
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-500"   src="./images/Study_Fair_6_15.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-500" src="./images/tourism_experiences_class.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-500" src="./images/Computer_Science.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-500" src="./images/Article620.jpg" alt="fourth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-500" src="./images/image6.jpg" alt="fifth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-500" src="./images/image5.jpg" alt="Sixth slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-500" src="./images/things-to-do2.jpg" alt="Seventh slide">
    </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-500" src="./images/papic-home.jpg" alt="Seventh slide">
    </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-500" src="./images/RE285rD.jpeg" alt="Seventh slide">
    </div>
  </div>
  <div class="carousel-item">
      <img class="d-block w-500" src="./images/iStock_871203832_800x400.jpg" alt="Seventh slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
              
<br>

  <div id="donut-example"></div><canvas id="pieChart"></canvas>

            </div>

        </div>
    </div>
    
</section>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="./js/bootstrap-material-design.min.js"></script>    
<script src="./js/bootstrap.min.js"></script>
<script src="./js/morris.min.js"></script>
<script src="Bootstrap\bootstrap.js"></script>
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>



<script>



</script>
</body>
</html>