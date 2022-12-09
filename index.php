<?php 
	include('admin/connection.php');
	session_start();
	if(isset($_SESSION["user_id"])){
		header("Location:index.php");
		exit();
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="admin/css/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<div class="login_form">
	  <h1 style="text-align:center; color:#0000ff">Health Care In Bangladesh </h1>
	<h2 style="text-align:center; color:#000000">User Login Page</h2>
	 
    <div class="container">
			<div class = "row">
					<div class="col-4">            
					</div>
				<div class="col-4" style="margin-top:150px"> 
			
						<form action="" method="POST">
							<div class = "mt-2">
								<label class = "form-label"><b>Username</label>
								<input type="text" name="username" class="form-control" placeholder="Username">
							</div>
							<div class = "mt-2">
								<label class= "form-label"><b>Password</label>
								<input type="password" name="password" class="form-control" placeholder="Password">
							</div>
							<div class= "mt-2">
							
								<input type="submit" class="btn btn-success" name="submit" value="Login"/>
							
							</div>
						</form>
				          <h5>if not registared ? <a href="admin/registration.php">click here</a></h5>
				</div>
						<div class="col-4">            
						</div>
			</div>
     </div>
	
	<?php
			$output = NULL;
			if(isset($_POST["submit"])){
				$username = $_POST["username"];
				$password = $_POST["password"];
				
				
				
				if(empty($username)=== true || empty($password)=== true)
				{
					$output = "<span style='color:red'>Username/Password field is required!</span>";
				}
				else
				{
					//echo $username;
					//echo $password;
					
					$sql = "SELECT * FROM users WHERE username='$username'";
					$query = $conn->query($sql);
					if($query->num_rows > 0)
					{
						
					$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
					$query = $conn->query($sql);
					$result = $query->fetch_array();
					$conn->close();
					
					if($query->num_rows == 1)
					{
						//echo $result['id'];
						$_SESSION["logged_in"] = true;
						$_SESSION['user_id'] = $result['id'];
						header('Location:admin/index.php');
					}
					else
					{
						$output = "<span style='color:red'>Username/Password combination is incorrect!</span>";
					}
						
						
						//echo 'Success';
					}
					else
					{
						$output = "<span style='color:red'>Username does\'t exists</span>";
					}
				}
			}
			echo $output;
		?>
</div>
 </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="admin/lib/jquery/jquery.min.js"></script>
  <script src="admin/lib/bootstrap/js/bootstrap.min.js"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="admin/lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/bg4.jpg", {
      speed: 500
    });
  </script>
</body>

</html>
