



<htmL>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" ></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
<link rel="stylesheet" href="css/styles.css">


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
            <a class="nav-link" href="../students.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspStudents and
              <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Parents</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="../advice.php" tabindex="-1"
              aria-disabled="true">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAdvice from
              <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Professionals</a>
          </li>

          <div class="col lg-2 md-basis-auto md-order-first no-margin-bottom-lg" style="width:100px; text-align:right;">
            <a href="#" class="brand  w-inline-block"><img style="width: 180px; height: 80px;" src="empphoto/logo.jpg"
                alt=""></a></div>

          <li class="nav">
            <a class="nav-link " href="../university.php" tabindex="-1" aria-disabled="true">Universities and Degrees
              Pakistan</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false"><img style="width: 40px; height: 40px; border-radius: 80%;"
                src="empphoto\abc.jpeg"></a>
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
      
    </div>
  </div>


   


  <div id="wrapper">


<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->


<ul class="nav navbar-nav side-nav" style="border:1px solid gray; border-radius: 5px;">


  <div class="col-md-12"
    style=" width:100%; color: blue; text-align:center; boder:1px solid blue; background-color:#27AEE3; border-radius:5px;">
    <br> <img
      style="width: 80px; height: 80px; border-radius:50%; border:2px solid white; transform: translate(0%,40%);  "
      src="empphoto/abc.jpeg">


  </div>
<br>

  
  <li>
  <span class="icon-home2">
          <img src="https://mindlerdashboard.imgix.net/sidebar/dashboard.svg" style=" width:20px; height:20px; " class="sidebar-icon">
          </span><a href="../index.php" style="color:#A6A39E;"> Dashboard</a></li>
  <li>
  <span class="icon-home2">
                       <img src="https://mindlerdashboard.imgix.net/sidebar/profile.svg" style=" width:20px; height:20px;" class="sidebar-icon">
                    </span><a href="#" style="color:#A6A39E;"> My Profile</a>
  </li>

  <li>
  <span class="icon-home2" onclick="alert('Kindly complete your profile First');">
                       <img src="https://mindlerdashboard.imgix.net/sidebar/assessment.svg" style=" width:20px; height:20px;" class="sidebar-icon">
                    
        </span> <a href="../test.php" data-toggle="collapse" data-target="#posts" style="color:#A6A39E;">
      My Test<i class="fa fa-fw fa-caret-down"></i>
    </a>

    <ul id="posts" class="collapse" style="color:#A6A39E;">
      <li>
        <a href="#" style="color:#A6A39E;">My Test</a>

      </li>
      <li>
        <a href="#" style="color:#A6A39E;">Pay Fees</a>

      </li>
      <li>
        <a href="terms.php" style="color:#A6A39E;">Terms and conditions</a>

      </li>
    </ul>
  </li>



  <li>
  <i class="fa fa-fw fa-dashboard" style="color: #005a9e;"></i><a href="../categories.php" style="color:#A6A39E;">Categories</a>

  </li>


  <li>
  <span class="icon-home2">
                       <img src="https://mindlerdashboard.imgix.net/sidebar/resources.svg" style="width:20px; height:20px;" class="sidebar-icon">
                    </span> <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false" style="color:#A6A39E;">
      Resources
    </a>

    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
      <li> <a class="dropdown-item" href="#" style="color:#A6A39E;">Action</a></li>
      <li> <a class="dropdown-item" href="#" style="color:#A6A39E;">Another action</a></li>
    </ul>
  </li>


  <li>
  <i class="fa fa-fw fa-file" style="color: #005a9e;"></i> <a href="../students.php" style="color:#A6A39E;">Help</a>
  </li>
  <li>
  <i class="fa fa-file-signature" style="color: #005a9e;"></i><a href="../terms.php" style="color:#A6A39E;">Terms and Conditions</a>
  </li>


</ul>
<!--Navbar ENDS-->



<!--Form Start-->
<div id="page-wrapper" >

<div class="container-fluid" >
  

<br><br>
    
		
		<div class="col-lg-8 " style="margin-left:300px; border: hidden ;">


<form id=frmemployee class="card no-outiline" enctype="multipart/form-data" action="" method="POST" >
			<div align="center">
			<h3 align="center" style="color: blue;"> <b><b></h3>

			</div><br>
			<div align="left">
			<label style="font-size: 16px">Profile Image</label>
			<input type="file" class="form-control-file" id="photo" name="photo" data-default-file="" required="">
			<!-- <input type="file"  name="logo" id="logo" class="dropify" data-default-file="" required=""> -->
			</div><br>

			
  			<div class="form-row">
    <div class="col">
	<label>Full Name:</label>
			<input type="text" class="form-control" name="name" id="name" placeholder="Name" size="30px" required>
    </div>
    <div class="col">
	<label>Eamil Address:</label>
			<input type="text" class="form-control" name="email" id="email" placeholder="Email" size="30px" required>
						
    	</div>
  </div>
  <br>

  <div class="form-row">
    <div class="col">
	<label>Mobile Number </label>
			<input type="text" class="form-control" name="phone" id="phone" placeholder="Mobile Number" size="30px" required>
						
    </div>
    <div class="col">
	<label>City of Residenace  :</label>&nbsp &nbsp
	  <select class="custom-select" id="city" name="city" required>
        <option selected disabled value="">Choose...</option>
        <option>Karachi</option>
        <option>Lahore</option>
        <option>Islamabad</option>
        <option>Multan</option>
		<option>Hyderabad</option>
		<option>Quetta</option>
		<option>Peshawar</option>
		<option>Gilit</option>
		<option>Muzzafarabad</option>
      </select>
      <div class="invalid-feedback">
        Please select a Country.
      </div>
  </div>
  </div>
  <br>


  <div class="form-row" >
    
    <div class="col" >
	
	<!-- <input type="text" class="form-control" name="country" id="country" placeholder="Country" size="30px" required> -->
			
	<label for="validationCustom04">Country</label>
      <select class="custom-select" id="country" name="country" required>
        <option selected disabled value="">Choose...</option>
        <option>Pakistan</option>
        <option>India</option>
        <option>USA</option>
        <option>Uk</option>
      </select>
      <div class="invalid-feedback">
        Please select a Country.
      </div>
    </div>
			<div class="col">						
  <p>Please select your gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>

  </div>
  </div>
  <br>

  <div class="form-row">
    <div class="col">
	<label>Father/Gaurdian Name </label>
			<input type="text" class="form-control" name="guardian" id="guardian" placeholder="Father/Gaurdian Name" size="30px" required>
						
    </div>
    <div class="col">
	<label>Father/Gaurdian Mobile Number  :</label>&nbsp &nbsp
			<input type="text" class="form-control" name="gphone" id="gphone" placeholder="Father/Gaurdian Mobie Number" size="30px" required>
						
    	</div>
  </div>
  <br>

  <div class="form-row">
    <div class="col">
	<label>Current School/College's Name *</label>
			<input type="text" class="form-control" name="school" id="school" placeholder="Current School/College's Name" size="30px" required>
    </div>
    <div class="col">
	<label>Subjects in O Level / Matric</label>
			<input type="text" class="form-control" name="subject" id="subject" placeholder="Subjects in O Level / Matric" size="30px" required>
						
    	</div>
  </div>
  <br>


  <div class="form-row">
    <div class="col-md-6">
	<label>Subjects in A Level / FA/ FSc/ Intermediate *</label>
			<input type="text" class="form-control" name="Asubject" id="Asubject" placeholder="Subjects in A Level / FA/ FSc/ Intermediate" size="30px" required>
    </div>
    <div class="col-md-6">
	<label>Student ID</label>
			<input type="text" class="form-control" name="id" id="id" placeholder="Student ID" size="30px" required>
    </div>
  </div>
  <br>

<div class="form-row">
				
				<div class="col-md-6" style="text-align:left;" >
			<a  href="./index.php"><input type="submit" name="update" vlaue="UPDATE DATA"  class="btn btn-primary submitbutton" style=" border-radius: 10px;" ></a>
			<br><br></div>
        
    
			</div>
</div>

    
    
  </div>


	</form>


  </div>
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



















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>

<!-- <script >
	var dvE= $('#logo').dropify({

	});
	dvE = dvE.data('dropify')

	$('#frmemployee').submit(function(e){
		
e.preventDefault()
		var form= $('#frmemployee')[0];
		var formdata= new FormData(this);

		$.ajax({
			type: 'POST',
			url: 'add_employee.php',
			data:formdata, // you used this one in quatation ok try now other things 
			dataType : 'JSON',
			contentType: false,
			processData:false,

			success:function(data)
			{
						if(data.success)
						{
							alert('success')
						}else
						{
							alert('not success')
						}
					



			}


		});
	}) -->

</script>















</body>

</html>


<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'merafuturedb');

if (isset($_POST['update'])){

  $id=$_POST['id'];

$query= "UPDATE 'student' SET  name='$_POST[name]',email='$_POST[email]',phone='$_POST[phone]',city='$_POST[city]',country='$_POST[country]',guardian='$_POST[guardian]',gphone='$_POST[gphone]',school='$_POST[school]',subject='$_POST[subject]',Asubject='$_POST[Asubject]' Where id='$_POST[id]'";
$query_run=mysqli_query($connection,$query);

if($query_run){
  echo '<script type="text/javascript"> alert("Profile Updated") </script>';
}
else{
  echo '<script type="text/javascript"> alert("Profile not Updated")</script>';
}
}

?>