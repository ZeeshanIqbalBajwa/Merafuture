<?php
	session_start();
	require_once('dbconfig/config.php');
?>

<?php require 'fb_init.php' ?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="../bootstrap.min.css">
</head>



<body style="background-color:#bdc3c7">


<?php if(isset($_SESSION['access_token']));?>


	
	
	<div id="main-wrapper">
	<h2> </h2>
			<div class="imgcontainer">

				<img src="imgs\logo.jpg" alt="Avatar" class="avatar" style="width:40%;">
			</div>
 <br>

 <?php echo"&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp Welcome to Merafuture  " . $user->getField('name');?>
		<form action="index.php" method="post">
		
			<div class="inner_container">
			<div class="col-md-12" style=" text-align:center">
			<a href="<?php echo $login_url;?>" type="button" class="btn btn-primary" ><i class="fa fa-facebook"></i>Login With Facebook</button> </a>
			<button type="button" class="btn btn-danger ">Login With Google</button>
			<br>
			<br></div>
				<label><b>Username</b></label>
				<input  style="border-radius:10px;" type="text" placeholder="Enter Username" name="username" required>
				<label><b>Password</b></label>
				<input style="border-radius:10px;" type="password" placeholder="Enter Password" name="password" required>
				<button class="login_button bg-white" name="login" type="submit" style="border-radius: 10px; width:96%; color:black;">Login</button>
				<a href="register.php"><button type="button" class="register_btn bg-white" style="border-radius: 10px; width:96%; color:black;">Register</button></a>
				
				<div class="col-md-12" style=" text-align:center">
				<a href="../index.php"><button type="button" class="btn btn-primary bg-white" style="border-radius: 20px; color:black; ">Back to Home</button></a>
				<a href="logout.php"><button type="button" class="btn btn-danger bg-white" style="width:110px; border-radius: 20px; color:black;" >Log Out</button></a>
			</div>
			</div>
			</div>
		</form>
		
		
 

<?php
	if(isset($_POST['login'])){
 		  
           		
           	
         		
           		@$username=$_POST['username'];
 				@$password=md5($_POST['password']);

				$query = "select * from user where username='$username' and password='$password' ";

			
				 $query_run = mysqli_query($con,$query);
				
				 if($query_run)
				{
				 if(mysqli_num_rows($query_run)>0)
				 	{
				 	$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);

				 	$_SESSION['username'] = $username;
				 	$_SESSION['password'] = $password;
				 
				 
					
					
			 		header( "Location: ../admin1/index.php");

			}
			 		else
			 		{
			 			echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
		 		}
			 	}
				else
				{
		 		echo '<script type="text/javascript">alert("Database Error")</script>';
			 	}
			 }
			 else
			 {
			}

?>
		
	</div>
</body>
</html>