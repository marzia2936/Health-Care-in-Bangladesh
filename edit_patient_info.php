

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

	if(isset($_GET['patient_id'])) 
	{
	
	
		//echo $_GET['patient_id'];die;


		$patient_id = $_GET['patient_id'];
		
		 $sql = "SELECT * FROM patient_info WHERE patient_id = '$patient_id' ";
	
		//echo $sql; die;
		
		$result = $conn->query($sql);
		if($row = mysqli_fetch_array($result)) 
		{
			          $patient_id                            =     $row['patient_id'];
                $patient_identity                      =     $row['patient_identity'];
                $patient_name                          =     $row['patient_name'];
                $patient_birth_date                    =     $row['patient_birth_date'];
                $patient_contact_no                    =     $row['patient_contact_no'];
                $patient_email                         =     $row['patient_email'];
                $patient_parmanent_location            =     $row['patient_parmanent_location'];
                $patient_present_location              =     $row['patient_present_location'];
                
			
			

		
		}
	}
	
	
	
	
	
	if(isset($_POST['update'])) 
	{
		            $patient_id     			                 =       $_POST['patient_id'];
               
		            $patient_identity                      =       $_POST['patient_identity'];
		            $patient_name 		                     =       $_POST['patient_name'];
		            $patient_birth_date 	                 =       $_POST['patient_birth_date'];
	              $patient_contact_no   	               =       $_POST['patient_contact_no'];
		            $patient_email   	                     =       $_POST['patient_email'];
		            $patient_parmanent_location            =       $_POST['patient_parmanent_location'];
		            $patient_present_location              =       $_POST['patient_present_location'];
               

		$sql = "UPDATE patient_info set patient_identity ='$patient_identity', patient_name ='$patient_name',
    patient_birth_date ='$patient_birth_date', patient_contact_no ='$patient_contact_no', patient_email ='$patient_email',
    patient_parmanent_location ='$patient_parmanent_location', patient_present_location ='$patient_present_location' WHERE patient_id ='$patient_id'";
		 
	//echo $sql; die;
		
		$result = $conn->query($sql);
		
		if($result) 
		{
			echo "Updated Successfully!";
			echo "<meta http-equiv='refresh' content='2;url=patient_info_listview.php'>";
			exit();
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
              <li><a href="patient_info_listview.php">Patient Information</a></li>
             
              <li><a href="doctor_info_listview.php">Doctor Information</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-heart"></i>
              <span>Admin Part</span>
               </a>
            <ul class="sub">
                  
		            <li><a href=" "> </a></li>
		   		    <li><a href=" "> </a></li>
            </ul>
          </li>
		  
		  
		  
		  
		  <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-file-o"></i>
              <span>Report Part</span>            </a>
            <ul class="sub">
                
            </ul>
          </li>
          
         
          
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3>Patient Information</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"></h4>
              <form class="form-horizontal style-form" method="post" action="edit_patient_info.php">

                <!-- <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Patient ID :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="patient_id" value="<?php  echo $patient_id;  ?>">
                  </div>
                </div> -->
			      
			 <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Patient Identity No. :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="patient_identity" value="<?php  echo $patient_identity;  ?>">
                  </div>
                </div>
			  
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Patient Name:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="patient_name" value="<?php  echo $patient_name;   ?>">
                  </div>
                </div>
				
					
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Date of Birth:</label>
                  <div class="col-sm-6">
                    <input type="date" class="form-control" name="patient_birth_date" value="<?php  echo $patient_birth_date;   ?>">
                  </div>
                </div>
				
					<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Patient Contact No.:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="patient_contact_no" value="<?php  echo $patient_contact_no;   ?>">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Patient Email :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="patient_email" value="<?php  echo $patient_email;   ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Patient Parmanent Address:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="patient_parmanent_location" value="<?php  echo $patient_parmanent_location;   ?>">
                  </div>
          </div>
				
				
					<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Patient Present Address:</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="patient_present_location" value="<?php  echo $patient_present_location;   ?>">
                  </div>
          </div>
          
           

					</select>
                   
                  </div>
                </div>

                   
                  </div>
                </div>
					
				
				
				
				<div class="form-group" align="center">
				
					<input type="submit" class="btn btn-info" name="update" value="Update"/>
					<input type="hidden" class="form-control" name="patient_id" value="<?php  echo $patient_id;   ?>">
				
				</div>
                
              </form>
            </div>
          </div>
         
        </div>
        
      </section>
     
    </section>
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

