<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>mera future</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" />
    <script src="bootstrap/jquery/jquery-3.5.1.slim.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="owl.carousel.min.css">
    <link rel="stylesheet" href="owl.theme.default.min.css">

    <!--tabgroup-->
    
<link rel='stylesheet prefetch' href='https://files.krve.io/f/eyespot.css'>   
<link rel='stylesheet prefetch' href='https://cdn.cloudcache.dk/materialdesignicons/1.6.50/css/materialdesignicons.min.css'>


    <link href="styles.css" rel="stylesheet">

</head>


<body>


<div class="navigation-and-offcanvas" style="">
      <div class="col no-margin-bottom lg-5 md-basis-uato"  >
        <nav class="navigation-menu">

     
<ul class="nav ">
  <li class="nav-item">
    <a class="nav-link " href="index.php">&nbsp&nbsp&nbspHome</a>
  </li>
  
  <li class="nav-item">
    <a class="nav-link" href="students.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspStudents and <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Parents</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="advice.php" tabindex="-1" aria-disabled="true">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspAdvice from <br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Professionals</a>
  </li>

  <div class="col lg-2 md-basis-auto md-order-first no-margin-bottom-lg" style="width:100px; text-align:right;"><a href="#" class="brand  w-inline-block"><img style="width: 180px; height: 80px;" src="assets/logo/logo.jpg" alt=""></a></div>

  <li class="nav">
    <a class="nav-link " href="university.php" tabindex="-1" aria-disabled="true">Universities and Degrees Pakistan</a>
  </li>

  <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false" ><img style="width: 40px; height: 40px; border-radius: 80%;" src="assets\img\abc.jpeg"></a>
    <ul class="dropdown-menu">
     <li> <a class="dropdown-item" href="admin1/index.php">Dashboard</a></li>
     <li> <a class="dropdown-item" href="SampleLoginPage/logout.php">Logout</a></li>
      
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


</nav>

</div>
</div>





    <div class="jumbotron p-4 p-md-5 text-white rounded "  style="background-image: url(assets/img/yellow.jpg)">
        <div class="col-md-12 px-0"><br>
            <br>
            <h1 class="display-4 font-italic">Advice From Professionals</h1>
            <br>
            <br>

        </div>
    </div>

    <!--Heading Text 01-->

  <div class="card" style="margin-top: 100px;">
    <div class="card-body">
      <center>
        <h1 class="card-title">Talk to the people in the field</h1>
        <p class="card-text" style="font-size:20px;">Here’s what our qualified professionals have to say! Understand the insights and uncover your interests to achieve and succeed in your career goals.</p>
      </center>
    </div>
  </div>




  <!--Videos-->

  <div class="row">
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/oxig4qnNUSE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Career as a Therapist in Pakistan </h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/BlPWJn4zs8g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Career in UI UX Design in Pakistan</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/7tseO_WO7t4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Do not force your children towards a Career: Advice for Parents</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/Nisi6Ra_Y5Y" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Importance of Performing Arts for young people</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/qHzjubfAHPU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Career as a Micro System Engineer in Pakistan</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/HYO50oqbSF0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Employability Skills: What are the three W's of Work by Mohsin Nishat</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/aRBu5vs7SPk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Career as a Civil Engineer in Pakistan</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/z7KPf_Wi6hk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Why is it important to select a degree as per your aptitude?</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/24st8Wfizuw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Entrepreneurs, Entrepreneurship and Business Opportunities in Pakistan</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/qAQrqkw-HPQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Career as a Data Scientist in Pakistan</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/OjWtc8TuVQE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Career as an Economist in Pakistan</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/NO87KF1dizw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Career in Computer Science in Pakistan</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/koUnqU7XICQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Career as a Finance Professional in Pakistan</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/3qib9LhPszs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Career as an HR Professional in Pakistan</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/PykINDUrzu4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Career as a Journalist in Pakistan</h3>
      </div>
            <div class="col-lg-4 col-xs-12 videosectionbox" style="border:0px;">
      	
	    <iframe width="100%" height="250" src="https://www.youtube.com/embed/BjAlBmax0To" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
	    <h3>Career as an Electrical Engineer in Pakistan</h3>
      </div>
            </div>
      
   <!--Foooter-->
  <!-- /#page-wrapper -->



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
