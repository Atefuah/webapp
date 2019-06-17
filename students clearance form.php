<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="./css/popper.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="./css/admindashboard.css" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/bootstrap-material-design.min.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
#abt:hover{
    cursor:pointer;
}
 </style> 
  <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand text-white d-flex ml-5" href="">Students Clearance Form</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

</nav>
    <section >
        <div class="container">
       
    <ol class="breadcrumb  bg-primary">
        <li class="breadcrumb-item active text-white">Dashboard</li>
    </ol>
    </div>
    </section>
    
 <div class="container">
        <div class="row">
            <div class="col-md-3  ">
              <div class="list-group list-group-flush" id="navbarNavDropdown" >
                 <a href="students clearance form.php" class="list-group-item active">
                 <i class="fas fa-tachometer-alt"></i>Dashboard
                 </a>   
                 <a href="studentregpage.php" class="list-group-item list-group-item-action"><span class="fa fa-envelope"></span>Students Registration</a> 
                 <a href="studentsrecords.php" class="list-group-item list-group-item-action"><i class="far fa-clipboard"></i>Students Records </a>  
                 <a href="generatestudentsformpage.php" class="list-group-item list-group-item-action"><i class="far fa-clipboard"></i>Generate Form </a>          
  <a href="aboutschool.php" class="list-group-item list-group-item-action  small"><i class="far fa-clipboard"></i> About School</a>
  <a href="aboutclearance.php" class="list-group-item list-group-item-action  small"><i class="far fa-clipboard"></i>  About Clearance</a>

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
                                                            </h3></span> <h5>Uncleared Students</h5>
                                                           
                                                        </div>
                                                </div>
                                            </div>
                                              
                                
                    </div>    
                                  
                        
                   
               <br><br>
                	<!-- Start Slider BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/_mg_0433.jpg" alt="_MG_0433" title="_MG_0433" id="wows1_0"/></li>
		<li><img src="data1/images/article620.jpg" alt="Article620" title="Article620" id="wows1_1"/></li>
		<li><img src="data1/images/classroom2386288__340.jpg" alt="classroom-2386288__340" title="classroom-2386288__340" id="wows1_2"/></li>
		<li><img src="data1/images/image6.jpg" alt="image6" title="image6" id="wows1_3"/></li>
		<li><img src="data1/images/image8.jpg" alt="image8" title="image8" id="wows1_4"/></li>
		<li><img src="data1/images/istock_871203832_800x400.jpg" alt="iStock_871203832_800x400" title="iStock_871203832_800x400" id="wows1_5"/></li>
		<li><img src="data1/images/re285rd.jpg" alt="RE285rD" title="RE285rD" id="wows1_6"/></li>
		<li><img src="data1/images/study_fair_6_15.jpg" alt="Study_Fair_6_15" title="Study_Fair_6_15" id="wows1_7"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/thingstodo2.jpg" alt="slideshow javascript" title="things-to-do2" id="wows1_8"/></a></li>
		<li><img src="data1/images/tourism_experiences_class.jpg" alt="tourism_experiences_class" title="tourism_experiences_class" id="wows1_9"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="_MG_0433"><span><img src="data1/tooltips/_mg_0433.jpg" alt="_MG_0433"/>1</span></a>
		<a href="#" title="Article620"><span><img src="data1/tooltips/article620.jpg" alt="Article620"/>2</span></a>
		<a href="#" title="classroom-2386288__340"><span><img src="data1/tooltips/classroom2386288__340.jpg" alt="classroom-2386288__340"/>3</span></a>
		<a href="#" title="image6"><span><img src="data1/tooltips/image6.jpg" alt="image6"/>4</span></a>
		<a href="#" title="image8"><span><img src="data1/tooltips/image8.jpg" alt="image8"/>5</span></a>
		<a href="#" title="iStock_871203832_800x400"><span><img src="data1/tooltips/istock_871203832_800x400.jpg" alt="iStock_871203832_800x400"/>6</span></a>
		<a href="#" title="RE285rD"><span><img src="data1/tooltips/re285rd.jpg" alt="RE285rD"/>7</span></a>
		<a href="#" title="Study_Fair_6_15"><span><img src="data1/tooltips/study_fair_6_15.jpg" alt="Study_Fair_6_15"/>8</span></a>
		<a href="#" title="things-to-do2"><span><img src="data1/tooltips/thingstodo2.jpg" alt="things-to-do2"/>9</span></a>
		<a href="#" title="tourism_experiences_class"><span><img src="data1/tooltips/tourism_experiences_class.jpg" alt="tourism_experiences_class"/>10</span></a>
	</div></div>
<div class="ws_shadow"></div>
</div>	


 </div>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End Slider BODY section -->


<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="./js/bootstrap-material-design.min.js"></script> 
 <script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/popper.min.js"></script>

</body>
</html>