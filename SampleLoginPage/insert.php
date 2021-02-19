<?php
$connect = mysqli_connect("localhost", "root", "", "samplelogindb");
if(isset($_POST["photo"], $_POST["name"], $_POST["email"], $_POST["phone"], $_POST["city"], $_POST["country"]))
{
 $photo = mysqli_real_escape_string($connect, $_POST["photo"]);
 $name = mysqli_real_escape_string($connect, $_POST["name"]);
  $email = mysqli_real_escape_string($connect, $_POST["email"]);
   $phone = mysqli_real_escape_string($connect, $_POST["phone"]);
    $city = mysqli_real_escape_string($connect, $_POST["city"]);
     $country = mysqli_real_escape_string($connect, $_POST["country"]);
 $query = "INSERT INTO employee (photo, name,email, phone, city, country) VALUES('$photo', '$name', '$email', '$phone', '$city', '$country')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 } 
}
?>