<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
       
        <title>Health care in Bangladesh</title>

        <!-- Bootstrap core CSS -->
        <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!--external css-->
        <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom styles-->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">
        <link rel = "stylesheet" href="css/style-button.css">

        <link rel="stylesheet"
          href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

      <style>
        .search-container{
          float: left;
        padding: 6px;
        border: none;
        margin-top: 8px;
        margin-right: 16px;
        font-size: 15px;
        border-radius: 10px;
        }
        .search-container,input,text{
          width: 200px;

        }
      </style>

</head>

<body>
  <section id="container">
    
    <!--header start-->
    <header class="header black-bg">

      <div class="sidebar-toggle-box">
              <div class="fa fa-bars tooltips" data-placement="right" data-original-title=""></div>
              </div>
            
            <!--logo start-->
            <a href="" class="logo"><b>Health Care in <span>Bangladesh   ...</span></b></a>
            <!--logo end-->
            <div class="search-container">
              <form action="" method="">
                <input type="text" placeholder="Search.." name="search"  >
              </form>
            </div>
      

      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="login.html">Logout</a></li>

        </ul>
      </div>

    </header>
    <!--header end-->
    
    <!--sidebar start-->
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
               <li><a href="patient_info_listview.php">Patient Information List</a></li>
             
              <li><a href="doctor_info_listview.php">Doctor Information List</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
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
   
    <!--footer start-->
    <!-- <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong></strong>. All Rights Reserved
        </p>




      </div>
    </footer> -->
    <!--footer end-->
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