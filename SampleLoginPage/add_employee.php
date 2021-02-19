<?php
	session_start();
	require_once('dbconfig/config.php');
	
?>
<?php
$servername= "localhost";
$username= "root";
$password="";
$dbname="samplelogindb";

$conn= new mysqli($servername,$username, $password,$dbname);

if($conn->connect_error)

{

die("connection failed" . $conn->connect_error);


}


if($_SERVER ['REQUEST_METHOD'] == 'POST'){
$path = $_FILES['logo']['name'];
$path_tmp = $_FILES['logo']['tmp_name'];

	$ename= $_POST['ename'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$city= $_POST['city'];
	$country= $_POST['country'];
	if(0 < $_FILES['logo'] ['error'])
	{
		echo 'error :' . $_FILES ['logo']['error'] . '<br>';
	}
	else
	{
		$final_name = 'photo-'.rand().'.jpg';
		move_uploaded_file($path_tmp,'empphoto/' . $final_name);
	}
$stmt = "INSERT INTO employee(photo,name,email,phone,city,country) VALUES('$final_name','$ename','$email','$phone','$city','$country')";




	


	if($conn->query($stmt) === TRUE){ // this one is givng now error from where you took this code 
	$json  = array(
					'success'		=> true,
					'message'		=> 'FOrm submitted',
				  );
	}
	else
	{
		$json  = array(
					'success'		=> false,
					'message'		=> 'Form not submitted',
				  );
	}
	echo json_encode($json);

}

?>