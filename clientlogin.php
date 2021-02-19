<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>mera future</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="styles.css">


  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets\OwlCarousel\dist\assets\owl.carousel.min.css">
  <link rel="stylesheet" href="assets\OwlCarousel\dist\assets\owl.theme.default.min.css">
  <link rel="stylesheet" href="bootstrap\font-awesome\css\font-awesome.min.css">
  
  

</head>



<body>





<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link " href="index.php">Home</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="students.php">Students and Parents</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="advice.php" tabindex="-1" aria-disabled="true">Advice from Professionals</a>
  </li>

  <a class="nav-link"> <img style="width: 180px; height: 80px;" src="assets/logo/logo.jpg"> </a>
  <li class="nav-item">
    <a class="nav-link " href="university.php" tabindex="-1" aria-disabled="true">Universities and Degrees Pakistan</a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false" ><img style="width: 40px; height: 40px; border-radius: 80%;" src="assets\img\abc.jpeg"></a>
    <ul class="dropdown-menu">
     <li> <a class="dropdown-item" href="admin1/index.php">Dashboard</a></li>
     <li> <a class="dropdown-item" href="#">Logout</a></li>
      
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle"  href="#"  aria-haspopup="true" aria-expanded="false" >
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
 
 
 <option value="EN"<?php echo $EN_select?>>EN</option>
 <option value="Urdu" <?php echo $Urdu_select?>>Urdu</option>
 </select>
 </a>


  </li>
 
 
</ul> 
 

<!--Yellow Area-->


<div class="jumbotron p-4 p-md-5 text-white rounded " style="background-image: url(assets/img/yellow.jpg)">
        <div class="col-md-12 px-0" ><br>
            <br>
            <h5 class="display-4 font-italic">Login</h5>
            <br>
            <br>

        </div>
    </div>





<!--Login Form-->
<div class="d-flex p-2 col-example">
<div class="col-lg-6" >
<form>
  
    <div class="form-group col-md-6" >
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4">
    </div>
  
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Remember Me <p style="color: #FFC107;">Forget Password?
      </label>
    </div>
  </div>
  <div class="col-md-6 lg-6 sm-6" style="text-align:center;">
  <button type="submit" class="btn btn-outline-secondary btn-block">Login in</button>
  </div>
  <div class="form-group col-md-6">
      <label class="form-check-label" for="gridCheck">
      <a href="SampleLoginPage/register.php" style="color: #FFC107;"> New to Merfuture? Create Account</a>
      </label>
      </div>
      </form>
</div>





<div class="col-lg-6" style="width:300px ; height: 300px;background-color: #FFC107; text-align:center; ">

<div class="register-info" style="padding-top: 10px;padding-bottom: 10px;">
<br>
<button class="btn btn-lg bg-white"><a href="javascript:void()" id="fbLink" onclick="fbLogin()"><img src="https://merafuture.pk/images/facebook.png" width="30"> LOGIN WITH FACEBOOK</a></button>
           <div id="gSignInWrapper">
            <a href="javascript:void()" id="customBtn" class="customGPlusSignIn">
            <br>
              <span class="icon"></span>
              <button class="btn btn-lg bg-white"><a class="buttonText"><img src="https://merafuture.pk/images/google.webp" width="30"> LOGIN WITH GOOGLE</a></button>
            </a>
              </div>
              
              <img  style="margin-top:200px;" src="https://merafuture.pk/images/shutterstock_1499141258.jpg" width="100%" height="390" class="socialloginimage">
          </div>

</div>

</div>
<br>
<br>


  <!----------- Footer ------------>

  <footer style="color: aliceblue;" >
    <div class="main-content" style="margin-top:450px;">
      
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
          Visit our social media pages</h2>

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














              <!-- <script src="jquery.min.js"></script> -->
<script src="jquery.min.js"></script>
<script src="assets\OwlCarousel\dist\owl.carousel.min.js"></script>
<script src="assets\OwlCarousel\owl.js"></script>
<script>

function set_language(){
  var language=jQuery('#language').val();
  window.location.href='http://localhost/merafuture/index.php/?language='+language;
}

</script>

</body>
</html>



















