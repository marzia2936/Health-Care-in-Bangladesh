
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
              <li><a href="medicine_info_listview.php"> Medicine Information</a></li>
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
  <section id="main-content">
   <section class="wrapper">
   <div class="row">
     <div class="col-md-12">
      <div class="content-panel">
              <div class="div1">
                <h4>Medicine Information List</h4>
              </div>
          <div class="div2">
            <a href="medicine_info.php" class="button3">Add Medicine</a>
            <a href="index.php" class="button3">Back to Page-></a>
          </div>
        <div class="table1">
          <table>
      
              <tr>
                
                      <th>SI</th>
                        <th>Medicine Type</th>
                        <th>Generic Name</th>
                        <th>Strength</th>
                        <th>Manufactured By</th>
                        <th>Unit Price</th>
                        <!-- <th>Indications</th>   <td>$indications</td> -->
                        <th>Side Effects</th>
                       
                        <th>Contradictions</th>
                        <th>Precautions & Warning</th>
                        <th>Storage Conditions</th>

                        <th>Action</th>
              </tr>

            <?php
                      
                      /*Delete Code*/
                      
                      if(isset($_GET['medicine_id'])) 
                      {
                        $medicine_id = $_GET['medicine_id'];
                        
                        $sql = "DELETE FROM medicine_info WHERE medicine_id='$medicine_id'";
                        $conn->query($sql);
                        
                      }

                  $sql = "Select * from medicine_info ";
                  $rec = $conn->query($sql);
                  $i = 0;
                  
                      while( $row = mysqli_fetch_array($rec))
                      {
                        $i++;

                        $medicine_id                   =     $row['medicine_id'];
                        $medicine_type                 =     $row['medicine_type'];
                        $generic_name                  =     $row['generic_name'];
                        $strength                      =     $row['strength'];
                        $manufactured                  =     $row['manufactured'];
                        $unit_price                    =     $row['unit_price'];
                        $indications                   =     $row['indications'];
                        $side_effect                   =     $row['side_effect'];
                        $contradiction                 =     $row['contradiction'];
                        $precautions_warning            =     $row['precautions_warning'];
                        $storage_condition             =     $row['storage_condition'];



                        echo "<tr>
                            <td>$medicine_id</td>
                            <td>$medicine_type</td>
                            <td>$generic_name</td>
                            <td>$strength</td>
                            <td> $manufactured</td>
                            <td>$unit_price</td>
                           
                            <td>$side_effect</td>
                            
                            <td>$contradiction</td>
                            <td>$precautions_warning</td>
                            <td>$storage_condition</td>
                            
                            <td>
                              <a href='view_medicine_info.php?medicine_id=$medicine_id' class='button4'>View</a> | 
                              <a href='edit_medicine_info.php?medicine_id=$medicine_id' class='button1'>Edit</a> | 
                              <a href='$_SERVER[SCRIPT_NAME]?medicine_id=$medicine_id' class='button2' onClick=\"return confirm('Are you sure?')\">Delete</a>
                              
                            </td>
                          </tr>";
                      }

      
               ?>
 
          </table>
          </div>
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
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->

  <script src="lib/zabuto_calendar.js"></script>

  <script type="application/javascript">
    $(document).ready(function () {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function (e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function () {
          return myDateFunction(this.id, false);
        },
        action_nav: function () {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
          type: "text",
          label: "Special event",
          badge: "00"
        },
        {
          type: "block",
          label: "Regular event",
        }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>