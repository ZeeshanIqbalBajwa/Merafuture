<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
        $phone=$_POST['phone'];
        $product=$_POST['product'];
        $time=$_POST['time'];
		$description=$_POST['description'];

		$to='info@technology-world.net.pk'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."Phone :".$phone."\n"."Product type :".$product."\n"."Time duration :".$time ."\n"."Description :".$description;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>