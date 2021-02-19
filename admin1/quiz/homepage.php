<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>



<!DOCTYPE html>
<html>
<head>

<title>Home Page</title>
<link rel="stylesheet" type="text/css"  href="bootstrap.css">
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>

</head>



<body>

 <!--Navigation-->


 <div class="navigation-and-offcanvas" style="">
    <div class="col no-margin-bottom lg-5 md-basis-auto"> 
      <nav class="navigation-menu">


        <ul class="nav ">
          <li class="nav-item">
            <a class="nav-link " href="../index.php">&nbsp&nbsp&nbspHome</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="./students.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspStudents and
              <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Parents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./advice.php" tabindex="-1"
              aria-disabled="true">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAdvice from
              <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Professionals</a>
          </li>

          <div class="col lg-2 md-basis-auto md-order-first no-margin-bottom-lg" style="width:100px; text-align:right;">
            <a href="#" class="brand  w-inline-block"><img style="width: 180px; height: 80px;" src="assets/img/logo.jpg"
                alt=""></a></div>

          <li class="nav">
            <a class="nav-link " href="./university.php" tabindex="-1" aria-disabled="true">Universities and Degrees
              Pakistan</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false"><img style="width: 40px; height: 40px; border-radius: 80%;"
                src="assets\img\abc.jpeg"></a>
            <ul class="dropdown-menu">
              <li> <a class="dropdown-item" href="admin1/index.php">Dashboard</a></li>
              <li> <a class="dropdown-item" href="#">Logout</a></li>

            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link " href="#" aria-haspopup="true" aria-expanded="false">
              <select onchange="set_language()" name="language" id="language" style="color:#FFB302; boder:0px">
                <?php
                $En_select='';
                $Urdu_select='';

                if ((isset($_GET['language']) && $_GET['language']=='en') || !isset($_GET['language'])){
                  $EN_select='selected';
                }
                else{
                  $Urdu_select='selected';
                }

            ?>


                <option value="EN" <?php echo $EN_select?>>EN</option>
                <option value="Urdu" <?php echo $Urdu_select?>>Urdu</option>
              </select>
            </a>


          </li>


        </ul>

</nav>
</div>
</div>











<!--- Quiz Form-->



	<div class="container">
		
 		
		
<div class="col-lg-8 m-auto d-block">

<h1 style="margin-left:250px; color:blue;">Personality Test</h1>


<br><h3 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?> You have select only one of the best option (Best of Luck)</h3></br>	

<form action="check.php" method="post">

<?php
for( $i=1; $i<6; $i++){
$q="select *from questions where qid=$i";
$query=mysqli_query($con, $q);

	while($rows=mysqli_fetch_array($query)){

	?>

		<div  class="card">
			
			<h4 class="card-header"> <?php   echo $rows['question']?></h4>
		</div>
		
		<?php

$q="select *from answers where ans_id=$i";
$query=mysqli_query($con, $q);

	while($rows=mysqli_fetch_array($query)){
?>

		<div class="card-body">

			<input type="radio" name="quizcheck[<?php echo $rows['ans_id'];?>]" value="<?php echo $rows['aid'];?>">
			<?php echo $rows['answer'];?>

		</div>

	
<?php
}}

}
?>

<input type="submit" name="submit" value="Submit" class="btn btn-success m-auto d-block">



			
</form>
</div>
</div>

<br>
<br>
<div class="m-auto d-block"  style="text-align:center;">
<a href="../index.php" class="btn btn-primary m-auto">Back to Portal</a>

</div>
</div>









 <!----------- Footer ------------>

 <footer style="color: aliceblue;" style="margin-top:100px;">
    <div class="main-content">
      
      <div class="center box">
        <h2>
          Merafuture</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">Sector H-9/1, Street 6 National Incubation Center Islamabad
              </span>
          </div>
          <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text">+089-765432100</span>
          </div>
          <div class="email">
            <span class="fa fa-envelope"></span>
            <span class="text">info@merafuture.pk</span>
          </div>
        </div>
      </div>
      <div class="center box">
        <h2>
          Company</h2>
        <div class="content">
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text">About Us</span>
          </div>
          <div class="phone">
            <span class="fa fa-phone"></span>
            <span class="text">Contact Us</span>
          </div>
          <div class="email">
            <span class="fa fa-envelope"></span>
            <span class="text">Terms and Condition</span>
          </div><br>
          <div class="email">
            <span class="fa fa-fw fa-edit"></span>
            <span class="text">Privacy Policy</span>
          </div><br>
          <div class="email">
            <span class="fa fa-fw fa-file"></span>
            <span class="text">FAQ</span>
          </div>
          
        </div>
      </div>
      <div class="right box">
        <h2>
          Visit Social Media Pages</h2>

        <div class="content">
        <a href="https://www.facebook.com/DigTan-DigiTal-102798214929280" style="width:50px; height:50px; "><i class="fa fa-facebook"></i></a>
        <a href="https://www.facebook.com/DigTan-DigiTal-102798214929280" style="width:50px; height:50px; "><i class="fa fa-linkedin"></i></a>
        <a href="https://www.facebook.com/DigTan-DigiTal-102798214929280" style="width:50px; height:50px; "><i class="fa fa-google" ></i></a>
        <img src="https://merafuture.pk/images/paymenticons.png" class="img-fluid">
        <form action="#">
            <div class="email">
              <div class="text">
                Email *</div>
              <input type="email" required>
            </div>
            <div class="msg">
              <div class="text">
                Message *</div>
              <!-- NOTE: Due to more textarea tag I got an error. So I changed the textarea name to changeit. Please change that changeit name to textarea -->
              <changeit id=".msgForm" rows="2" cols="25" required></changeit>
              <!-- replace this changeit name to textarea -->

              <br />
              <div class="btn">
                <button type="submit">Send</button>
              </div>











</body>
</html>