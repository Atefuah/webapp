<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clearance Form | Dashboard</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="./css/morris.css" />
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
  <a class="navbar-brand text-white d-flex ml-5" href="#">Students Clearance Form</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav  ml-10">
      <li class="nav-item active bg-white">
        <a class="nav-link text-dark" href="dashboard.php">Main Menu</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Report
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item " href="generatestudentsformpage.php">Generate Form</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         About
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="aboutschool.php">About School</a>
          <a class="dropdown-item" href="aboutclearance.php">About Clearance</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="studentsclearancepage.php" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Clearance
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="studentregpage.php">Registration</a>
      
        </div>
      </li>
    </ul>
  </div>
</nav>
    <section >
        <div class="container">
       
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    </div>
    </section>
 <div class="container">
        <div class="row">
            <div class="col-md-3  ">
              <div class="list-group list-group-flush" id="navbarNavDropdown" >
                 <a href="dashboard.php" class="list-group-item active">
                 <i class="fas fa-tachometer-alt"></i>Dashboard
                 </a>   
                 <a href="studentregpage.php" class="list-group-item list-group-item-action"><span class="fa fa-envelope"></span>Students Registration</a> 
                 <a href="studentsclearancepage.php" class="list-group-item list-group-item-action"><i class="fab fa-wpforms"></i>Clearance Form</a> 
                 <a href="studentsrecords.php" class="list-group-item list-group-item-action"><i class="far fa-clipboard"></i>Students Records </a>  
                 <a href="logout.php" class="list-group-item list-group-item-action"><i class="fas fa-sign-out-alt"></i>LogOut </a>  
                </div>
            </div>
            <div class="col-md-9">
                
 
                                  
                        
                   
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

  <div id="donut-example"></div>

  <br>

  <canvas id="pieChart"></canvas>

            </div>

        </div>
    </div>
    
</section>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
<script src="./js/bootstrap.min.js"></script>

<script src="./js/jquery-3.3.1.min.js"></script>


<script>
Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Cleared Students", value:            
      <?php
                                                    require_once 'studentsclearanceprocess.php';
                                                    $result = mysqli_query($dbc,"SELECT library,student_dept,dean,studentservice from   students_registration_data where library like '%cleared%' and student_dept like '%cleared%' and dean like '%cleared%' and studentservice like '%cleared%'") or die( $sql->error);
                                                    echo  mysqli_affected_rows($dbc);
                                                  
                                                    ?>
                                                        },
    {label: "Registered Students", value:   
                                                                                       
                                                     <?php
                                                    require_once 'studentregprocess.php';
                                                    $result = mysqli_query($dbc,"select * from students_registration_data") or die( $sql->error);
                                                    echo  mysqli_affected_rows($dbc);
                                                  
                                                    ?>
                                                    },
    {label: "Uncleared Students", value:   
                                                          <?php
                                                             require_once 'studentsclearanceprocess.php';
                                                            $result = mysqli_query($dbc,"SELECT library,student_dept,dean,studentservice from   students_registration_data where library like '%uncleared%' and student_dept like '%uncleared%' and dean like '%uncleared%' and studentservice like '%uncleared%'") or die( $sql->error);
                                                            echo  mysqli_affected_rows($dbc);
                                                            ?>}
  ]
});


 
</script>
</body>
</html>