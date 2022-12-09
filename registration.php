<?php 
	include('connection.php'); 
	session_start();
	if(isset($_SESSION["user_id"]))
	{
	header("Location:index.php");
	exit();
	}
	
	$output = NULL;
	
	if(isset($_POST["submit"])){
		
		//$output = "Ok";
		$username = $_POST["username"];
		$password = $_POST["password"];
		$rpassword = $_POST["rpassword"];
		$contact = $_POST["contact"];

		 
		$query = $conn->query("SELECT * FROM users WHERE username='$username'");
		if(empty($username)OR empty($password)OR empty($rpassword)OR empty($contact)){
			$output = "<span style='color:red'>Please fill in all fields!</span>";
		}elseif($query->num_rows != 0){
			$output = "<span style='color:red'>That username is already taken!</span>";
		}elseif($rpassword != $password){
			$output = "<span style='color:red'>Your password don't match!</span>";
		}elseif(strlen($password) < 6 ){
			$output = "<span style='color:red'>Your password must not be at least 5 characters!</span>";
		}else{
			//Encrypt the password
			//$password = md5($password);
			$insert = $conn->query("INSERT INTO users (username,password,contact) VALUES('$username','$password','$contact')");
			if($insert != TRUE){
				$output = "<span style='color:red'>There was a problem </span><br />";
				$output .= $conn->error;
			}else{
				$output = "<span style='color:green'>You have been registared.</span>";
			}
		}
		 
	}
	
	
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="admin/css/style.css"/>

</head>
<body>
<div class="login_form">
	 <h1 style="text-align:center; color:#0000ff">Health care in Bangladesh </h1>
	<h2 style="text-align:center; color:#000000">User Registration Form</h2>
	<div class="container">
      <div class = "row">
			<div class="col-4">            
			</div>
			<div class="col-4" style="margin-top:150px">  
				<form action="" method="POST">
						<div class="mt-2">
							<label class="form-label"><b>Username</label>
							<input type="text" class="form-control" name="username" placeholder="Username"/>
					</div>
				
					<div class="mt-2">
							<label class="form-label"><b>Password</label>
							<input type="password" class="form-control" name="password" placeholder="Password"/>
					</div>
						<div class="mt-2">
							<label class="form-label"><b>Confirm Password</label>
							<input type="password" class="form-control" name="rpassword" placeholder="Confirm Password"/>
						</div>
				
					<div class="mt-2">
						<label class="form-label"><b>Contact No</label>
						<input type="number" class="form-control" name="contact" placeholder="Contact No"/>
					</div>
					
					<div class="mt-2">
					 <input type="submit" class="btn btn-success" name="submit" value="Register"/>
					</div>
				
				</form>
					<div class="mt-2">
					<h5>If registered <a href="../index.php">Login</a> </h5>
					</div>
					<div class="col-4">            
					</div>
			</div>
      </div>
	   <?php echo $output; ?>
   </div>
</div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
 <script>
    $.backstretch("img/bg5.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
