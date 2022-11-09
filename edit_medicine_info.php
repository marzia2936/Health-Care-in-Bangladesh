
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

	if(isset($_GET['medicine_id'])) 
	{
	
	
		//echo $_GET['medicine_id'];die;


		$medicine_id = $_GET['medicine_id'];
		
		 $sql = "SELECT * FROM medicine_info WHERE medicine_id = '$medicine_id' ";
	
		//echo $sql; die;
		
		$result = $conn->query($sql);
		if($row = mysqli_fetch_array($result)) 
		{
			    $medicine_id                    =     $row['medicine_id'];
                $medicine_type                  =     $row['medicine_type'];
                $generic_name                   =     $row['generic_name'];
                $strength                       =     $row['strength'];
                $manufactured                   =     $row['manufactured'];
                $unit_price                     =     $row['unit_price'];
                $indications                    =     $row['indications'];
                $side_effect                    =     $row['side_effect'];
                $contradiction                  =     $row['contradiction'];
                $precautions_warning            =     $row['precautions_warning'];
                $storage_condition              =     $row['storage_condition'];



			
			

		
		}
	}
	
	
	
	
	
	if(isset($_POST['update'])) 
	{
		            $medicine_id    			          =       $_POST['medicine_id'];
               
		            $medicine_type                        =       $_POST['medicine_type'];
		            $generic_name 		                  =       $_POST['generic_name'];
		            $strength 	                          =       $_POST['strength'];
	                $manufactured   	                  =       $_POST['manufactured'];
		            $unit_price   	                      =       $_POST['unit_price'];
		            $indications                          =       $_POST['indications'];
		            $side_effect                          =       $_POST['side_effect'];
		            $contradiction                        =       $_POST['contradiction'];
               	    $precautions_warning                  =       $_POST['precautions_warning'];
		            $storage_condition                    =       $_POST['storage_condition'];


		$sql = "UPDATE medicine_info set medicine_type ='$medicine_type', generic_name ='$generic_name',
                strength ='$strength', manufactured='$manufactured', unit_price ='$unit_price',
                indications ='$indications', side_effect ='$side_effect',contradiction ='$contradiction',
                precautions_warning='$precautions_warning',storage_condition='$storage_condition'
                 WHERE medicine_id ='$medicine_id'";
		 
	//echo $sql; die;
		
		$result = $conn->query($sql);
		
		if($result) 
		{
			echo "Updated Successfully!";
			echo "<meta http-equiv='refresh' content='2;url=medicine_info_listview.php'>";
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
                  
		           <li><a href="patient_info_listview.php">Patient Information</a></li>
             
              <li><a href="doctor_info_listview.php">Doctor Information</a></li>
            </ul>
          </li>
		  
		  
		  
		 <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Report Part</span>
            </a>
            <ul class="sub">
              <li><a href="patient_info_listview.php">Patient Information</a></li>
             
              <li><a href="doctor_info_listview.php">Doctor Information</a></li>

            </ul>
          </li>


        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- *****MAIN CONTENT ***** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3>Medicine Information</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"></h4>
              <form class="form-horizontal style-form" method="post" action="edit_medicine_info.php">
			      
			 <!-- <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Medicine ID :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="medicine_id" value="<?php  echo $medicine_id;  ?>">
                  </div>
                </div>
			   -->
                <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Medicine Type :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="medicine_type" value="<?php  echo $medicine_type;   ?>">
                  </div>
                </div>
				
					
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Generic Name :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="generic_name" value="<?php  echo $generic_name;   ?>">
                  </div>
                </div>
				
					<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Strength :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="strength" value="<?php  echo $strength;   ?>">
                  </div>
                </div>
				
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Manufactured By :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="manufactured" value="<?php  echo $manufactured;   ?>">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Unit Price :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="unit_price" value="<?php  echo $unit_price;   ?>">
                  </div>
          </div>
				
				
					<div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Indications :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="indications" value="<?php  echo $indications;   ?>">
                  </div>
          </div>
          <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Side Effects :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="side_effect" value="<?php  echo $side_effect;   ?>">
                  </div>
          </div>
           <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Contradictions :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="contradiction" value="<?php  echo $contradiction ;   ?>">
                  </div>
           </div>

           <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label"> Precaution & Warning :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="precautions_warning" value="<?php  echo $precautions_warning ;   ?>">
                  </div>
           </div>

           <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Storage Conditions :</label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="storage_condition" value="<?php  echo $storage_condition ;   ?>">
                  </div>
           </div>
           

					</select>
                   
                  </div>
                </div>

                   
                  </div>
                </div>
					
				
				
				
				<div class="form-group" align="center">
				
					<input type="submit" class="btn btn-info" name="update" value="Update"/>
					<input type="hidden" class="form-control" name="medicine_id" value="<?php  echo $medicine_id;   ?>">
				
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

