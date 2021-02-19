<?php
$string= "zeeshan" ;

$string_hash= md5($string);


echo $string_hash;



$username = mysqli_real_escape_string($con, $_POST["username"]);  
          $password = mysqli_real_escape_string($con, $_POST["password"]);  
          $password = md5($password);


?>

<?php
	session_start();
	require_once('dbconfig/config.php');
	
?> 
		
 

<?php
	if(isset($_POST['login'])){
 		  
           		
           	// 	$username = mysqli_real_escape_string($con, $_POST["username"]);  
         	 	// $password = mysqli_real_escape_string($con, $_POST["password"]);  
         	 	// $password = md5($password);
         		
           		@$username=$_POST['username'];
 				@$password=$_POST['password'];

				$query = "select * from user where username='$username' and password='$password' ";

			
				 $query_run = mysqli_query($con,$query);
				
				 if($query_run)
				{
				 if(mysqli_num_rows($query_run)>0)
				 	{
				 	$row = mysqli_fetch_array($query_run,MYSQLI_ASSOC);

				 	$_SESSION['username'] = $username;
				 	$_SESSION['password'] = $password;
				 
				 
					
					
			 		header( "Location: index1.php");

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




 <?php
			if(isset($_POST['register']))
			{
				@$username=$_POST['username'];
				@$password=$_POST['password'];
				@$cpassword=$_POST['cpassword'];
				
				if($password==$cpassword)
				{
					$query = "select * from user where username='$username'";
					//echo $query;
				$query_run = mysqli_query($con,$query);
				//echo mysql_num_rows($query_run);
				if($query_run)
					{
						if(mysqli_num_rows($query_run)>0)
						{
							echo '<script type="text/javascript">alert("This Username Already exists.. Please try another username!")</script>';
						}
						else
						{
							$query = "insert into user values('$username','$password')";
							$query_run = mysqli_query($con,$query);
							if($query_run)
							{
								echo '<script type="text/javascript">alert("User Registered.. Welcome")</script>';
								$_SESSION['username'] = $username;
								$_SESSION['password'] = $password;
								header( "Location: index1.php");
							}
							else
							{
								echo '<p class="bg-danger msg-block">Registration Unsuccessful due to server error. Please try later</p>';
							}
						}
					}
					else
					{
						echo '<script type="text/javascript">alert("DB error")</script>';
					}
				}
				else
				{
					echo '<script type="text/javascript">alert("Password and Confirm Password do not match")</script>';
				}
				
			}
			else
			{
			}
		?>



		<?php

$connect = new PDO("mysql:host=localhost;dbname=testing", "root", "");
$message = '';
if(isset($_POST["email"]))
{
 sleep(5);
 $query = "
 INSERT INTO tbl_login 
 (first_name, last_name, gender, email, password, address, mobile_no) VALUES 
 (:first_name, :last_name, :gender, :email, :password, :address, :mobile_no)
 ";
 $password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
 $user_data = array(
  ':first_name'  => $_POST["first_name"],
  ':last_name'  => $_POST["last_name"],
  ':gender'   => $_POST["gender"],
  ':email'   => $_POST["email"],
  ':password'   => $password_hash,
  ':address'   => $_POST["address"],
  ':mobile_no'  => $_POST["mobile_no"]
 );
 $statement = $connect->prepare($query);
 if($statement->execute($user_data))
 {
  $message = '
  <div class="alert alert-success">
  Registration Completed Successfully
  </div>
  ';
 }
 else
 {
  $message = '
  <div class="alert alert-success">
  There is an error in Registration
  </div>
  ';
 }
}
?>