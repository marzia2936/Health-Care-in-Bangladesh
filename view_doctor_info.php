
<?php
  include('connection.php');
	?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <title>Health Care in Bangladesh</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
   <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">




  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <!-- Custom styles-->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link rel = "stylesheet" href="css/style-button.css">

</head>


	<?php
 
  if(isset($_GET['doctor_id'])) 
	{
	
	
		//echo $_GET['book_id'];die;
		$doctor_id = $_GET['doctor_id'];

         $sql = "SELECT * FROM doctor_info WHERE doctor_id = '$doctor_id' ";
        $result = $conn->query($sql);

        if($row = mysqli_fetch_array($result)) 
		{
                $doctor_id                    =     $row['doctor_id'];
                $doctor_registration_id       =     $row['doctor_registration_id'];
                $doctor_type                  =     $row['doctor_type'];
                $doctor_name                  =     $row['doctor_name'];
                $doctor_email                 =     $row['doctor_email'];
                $doctor_contact_no            =     $row['doctor_contact_no'];
                $doctor_registration_status   =     $row['doctor_registration_status'];
                $registration_year            =     $row['registration_year'];
                $doctor_address               =     $row['doctor_address'];

  }
}




?>

<body>
  <section id="container">
   
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title=""></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo"><b>Health Care in <span>Bangladesh</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href=""><img src="img/icon2.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Health Care</h5>
          <li class="mt">
            <a class="active" href="index.php">
              <i class="fa fa-home" aria-hidden="true"></i>
              <span>Home</span>              </a>          </li>
          
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="las la-users"></i>
              <span>User Part</span>
            </a>
            <ul class="sub">
              <li><a href="patient_info_listview.php">Patient Information List</a></li>
             
              <li><a href="doctor_info_listview.php">Doctor Information List</a></li>

              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-heart"></i>
              <span>Admin Part</span>
            </a>
            <ul class="sub">
              <li><a href="">Grids</a></li>
              <li><a href="">Calendar</a></li>
              <li><a href="">Gallery</a></li>
              <li><a href="">Todo List</a></li>
              <li><a href="">Dropzone File Upload</a></li>
              <li><a href="">Inline Editor</a></li>
              <li><a href="">Multiple File Upload</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Extra Pages</span>
            </a>
            <ul class="sub">
              <li><a href="">Blank Page</a></li>
              <li><a href="">Login</a></li>
              <li><a href="">Lock Screen</a></li>
              <li><a href="">Profile</a></li>

            </ul>
          </li>


          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
            </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3>View Doctor Information</h3>
         <a href="doctor_info_listview.php" class="button3">Back to Page-></a>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"></h4>
              <form class="form-horizontal style-form" method="POST" action="">
			  
			      <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Registration ID :</label>
                  <div class="col-sm-6">
                    
				          <label class="col-sm-6 col-sm-6 control-label"><?php  echo $doctor_registration_id;   ?></label>
                
                </div>
                </div>
			  
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Doctor Type :</label>
                  <div class="col-sm-6">
				  	<label class="col-sm-6 col-sm-6 control-label"><?php  echo $doctor_type;   ?></label>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Doctor Name :</label>
                  <div class="col-sm-6">
				  	<label class="col-sm-6 col-sm-6 control-label"><?php  echo $doctor_name;   ?></label>
                  </div>
                </div>
				
			
					<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Doctor Email :</label>
                  <div class="col-sm-6">
                    
					<label class="col-sm-6 col-sm-6 control-label"><?php  echo $doctor_email;?> </label>
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Doctor Contact No:</label>
                  <div class="col-sm-6">
				  	<label class="col-sm-6 col-sm-6 control-label"><?php  echo $doctor_contact_no;?></label>
                  </div>
                </div>
				
					<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Registration Status :</label>
                  <div class="col-sm-6">
				  	<label class="col-sm-6 col-sm-6 control-label"><?php  echo $doctor_registration_status; ?></label>
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Registration Year : </label>
                  <div class="col-sm-6">
                    
					<label class="col-sm-6 col-sm-6 control-label"><?php  echo $registration_year;?></label>
                  </div>
                    
                   </div>
             <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Doctor Address : </label>
                  <div class="col-sm-6">
                    
					<label class="col-sm-6 col-sm-6 control-label"><?php  echo $doctor_address;?></label>
                  </div>
                    
                   </div>
							
							
				
                
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div>
        <!-- /row -->
        <!-- INLINE FORM ELELEMNTS -->
        
        <!-- /row -->
        <!-- INPUT MESSAGES -->
        
        <!-- /row -->
        <!-- INPUT MESSAGES -->
        
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <!--custom switch-->
  <script src="lib/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="lib/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="lib/form-component.js"></script>

</body>

</html>

