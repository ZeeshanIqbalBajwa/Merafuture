<?php
	if(isset($_POST['submit'])){
		
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];

		$to='info@technology-world.net.pk'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you  We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>