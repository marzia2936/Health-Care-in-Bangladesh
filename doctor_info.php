
<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <title>Health care in Bangladesh</title>

   <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles-->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
       <link rel = "stylesheet" href="css/style-button.css">




</head>
<?php

	
	
	if(isset($_POST['save'])) 
	{
		            // $doctor_id    			          =       $_POST['doctor_id'];
               
		            $doctor_registration_id       =       $_POST['doctor_registration_id'];
		            $doctor_type 		              =       $_POST['doctor_type'];
		            $doctor_name 	                =       $_POST['doctor_name'];
	              $doctor_email   	            =       $_POST['doctor_email'];
		            $doctor_contact_no   	        =       $_POST['doctor_contact_no'];
		            $doctor_registration_status   =       $_POST['doctor_registration_status'];
		            $registration_year            =       $_POST['registration_year'];
		            $doctor_address               =       $_POST['doctor_address'];
               

		
	//echo $sql; die;

    $sql = "INSERT INTO doctor_info(doctor_registration_id ,doctor_type ,doctor_name,doctor_email,doctor_contact_no,doctor_registration_status,registration_year, doctor_address)
     values('$doctor_registration_id' , '$doctor_type' , '$doctor_name' ,'$doctor_email' , '$doctor_contact_no' , '$doctor_registration_status', '$registration_year', '$doctor_address')";
		
		$result = $conn->query($sql);
		
		if($result == 1) 
		{
			//echo "Insert Successfully!";
			header("Location: doctor_info_listview.php");
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
      <a href="" class="logo"><b>Health Care in <span>Bangladesh</span></b></a>
      <!--logo end-->

      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>

        </ul>
      </div>
    </header>
    <aside>

     <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href=""><img src="img/icon2.png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Health Care</h5>
          <li class="mt">
            <a href="index.php">
              <i class="fa fa-home"></i>
              <span>Home</span>
            </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="las la-users"></i>
              <span>User Part</span>
            </a>
            <ul class="sub">
              <li><a href="patient_info_listview.php">Patient Info Listview</a></li>
             
              <li><a href="doctor_info_listview.php">Doctor Information Listview</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-heart"></i>
              <span>Admin Part</span>
               </a>
            <ul class="sub">
                  
		            <li><a href="patient_info_listview.php">Patient Info Listview</a></li>
             
              <li><a href="doctor_info_listview.php">Doctor Information Listview</a></li>
            </ul>
          </li>
		  
		  
		  
		       <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-file-o"></i>
                <span>Report Part</span>      
                    </a>
              <ul class="sub">
                  <li><a href="patient_info_listview.php">Patient Information List</a></li>
              
                <li><a href="doctor_info_listview.php">Doctor Information List</a></li>

              </ul>
          </li>
          
      </ul>
          
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3>Doctor Information</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"></h4>
              <form class="form-horizontal style-form" method="post" action="doctor_info.php">
			      
			 <!-- <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Doctor ID :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="doctor_id" >
                  </div>
                </div> -->
			  
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Registration ID :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="doctor_registration_id" >
                  </div>
                </div>
				
					
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Doctor Type :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="doctor_type" >
                  </div>
                </div>
				
					<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Doctor Name :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="doctor_name" >
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Doctor Email :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="doctor_email">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Doctor Contact No:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="doctor_contact_no" >
                  </div>
          </div>
				
				
					<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Registration Status:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="doctor_registration_status" >
                  </div>
          </div>
          <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Registration Year:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="registration_year" >
                  </div>
          </div>
           <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Address:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="doctor_address" >
                  </div>
          </div>

					</select>
                   
                  </div>
                </div>

                   
                  </div>
                </div>
					
				
				
				
				<div class="form-group" align="center">
				
										<input type="submit" class="btn btn-info" name="save" value="Save"/>

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

