<!--Header-->
<?php

ob_start();
require_once('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="sb-admin.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!--SweetAlert--> 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  

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
            <a href="#" class="brand  w-inline-block"><img style="width: 180px; height: 80px;" src="assets/logo.jpg"
                alt=""></a>
          </div>

          <li class="nav">
            <a class="nav-link " href="../university.php" tabindex="-1" aria-disabled="true">Universities and Degrees
              Pakistan</a>
          </li>

          <li class="nav-item dropdown">
            <a href="./SampleLoginPage/index.php" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
              aria-expanded="false"><img style="width: 40px; height: 40px; border-radius: 80%;"
                src="assets\abc.jpeg"></a>
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





  <div id="wrapper">


    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->


    <ul class="nav navbar-nav side-nav" style="border:1px solid gray; border-radius: 5px;">


      <div class="col-md-12"
        style=" width:100%; color: blue; text-align:center; boder:1px solid blue; background-color:#27AEE3; border-radius:5px;">
        <br> <img
          style="width: 80px; height: 80px; border-radius:50%; border:2px solid white; transform: translate(0%,40%);  "
          src="assets/abc.jpeg">


      </div>
<br>

      
      <li>
      <span class="icon-home2">
              <img src="https://mindlerdashboard.imgix.net/sidebar/dashboard.svg" style=" width:20px; height:20px; " class="sidebar-icon">
              </span><a href="index.php" style="color:#A6A39E;"> Dashboard</a></li>
      <li>
      <span class="icon-home2">
                           <img src="https://mindlerdashboard.imgix.net/sidebar/profile.svg" style=" width:20px; height:20px;" class="sidebar-icon">
                        </span><a href="Emsemployee/index.php" style="color:#A6A39E;"> My Profile</a>
      </li>

      <li>
      <span class="icon-home2" onclick="alert('Kindly complete your profile First');">
                           <img src="https://mindlerdashboard.imgix.net/sidebar/assessment.svg" style=" width:20px; height:20px;" class="sidebar-icon">
                        
            </span> <a href="javascript:void()" data-toggle="collapse" data-target="#posts" style="color:#A6A39E;">
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
      <i class="fa fa-fw fa-dashboard" style="color: #005a9e;"></i><a href="categories.php" style="color:#A6A39E;">Categories</a>

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
      <i class="fa fa-fw fa-file" style="color: #005a9e;"></i><a href="terms.php" style="color:#A6A39E;">Terms and Conditions</a>
      </li>


    </ul>
    <!--Navbar ENDS-->





<!--Main-->
    <div id="page-wrapper">

      <div class="container-fluid ">

        

        <div class="card-group" style=" display:flex; margin-top:50px;">

        <!-- Profile-->

          <div class="card " style=" border: 1px solid gray; border-radius:5px; margin-left: 30px; ">
            <div class="card-body" style="padding:0px!important;">
              <div style=" text-align:center; background-color: #FFB302; width:100%;">
                <i class="fa fa-users"></i>
                <h4 style="color: white;"> My Profile</h4>
              </div>
              <div class=".abc" style="margin:10px;">
              <p class="dashboard-squre-title">
                Enter your personal and educational details. </p>
              <p>88% Completed</p>
             
              <div class="progress progress-xs">
                <div class="progress-bar" role="progressbar" data-transitiongoal="0" aria-valuenow="0"
                  style="background-color:#FFB302; width: 60%;"></div>
              </div><br>
              <a href="Emsemployee/index.php"> <button class="btn btn-warning" style=" background-color: #FFB302;">Fill
                  Profile </button></a>
            </div>
            </div>
          </div>
         
         
          <!-- My Test-->

          <div class="card " style=" border: 1px solid gray; border-radius:5px; margin-left: 30px;">
            <div class="card-body" style="padding:0px!important;">
              <div style=" text-align:center; background-color: #FFB302; width:100%;">
                <i class="fa fa-list icons"></i>
                <h4 style="color: white;"> My Test</h4>
              </div>
              <div class=".abc" style="margin:10px;">
              <p class="dashboard-squre-title">
                Start Your  Counselling Test (MCCT) </p>
              <p>0/8 Remaining</p>
              <div class="progress progress-xs">
                <div class="progress-bar" role="progressbar" data-transitiongoal="0" aria-valuenow="0"
                  style="width: 0%;">
                </div>
              </div>
              <br>
              

              <a href="test.php"> <button class="btn btn-warning" style=" background-color: #FFB302;"
                  class="btn-status"> Start Test</button></a>

              <button href="javascript:void()" class="btn btn-warning" style=" background-color: #FFB302;"
                onclick="alert('Thank you for choosing Merafuture to help you select suitable education fields and degrees. Our Multidimensional Career Counselling Test (MCCT) is a combination of many different tests including Personality, Interest and various Subject based tests. You can attempt all tests on this page. Once all tests are attempted you will need to Upgrade (Pay Fees) to see your detailed results and download complete career assessment report. We wish you all the best');">
                Upgrade </button>
                </div>
            </div>
          </div>

          <!-- Book Appointmnet-->

          <div class="card " style=" border: 1px solid gray; border-radius:5px; margin-left: 30px;">
            <div class="card-body" style="padding:0px!important;">
              <div style=" text-align:center; background-color: #FFB302; width:100%;">
                <i class="fa fa-list icons"></i>
                <h4 style="color: white;">Book Appointment</h4>

              </div>
              <div class=".abc" style="margin:10px;">
              <p class="dashboard-squre-title">
                Start Your Multidimensional Career </p><br><br></p>
              <button class="btn btn-warning" style=" background-color: #FFB302;" href="appointment.php"
                class="btn-status" >
                Book Appointment</button>

            </div>
          </div>
          </div>


        </div>
        
        

        <!-- Pay Fees-->

        <div class="card-group" style=" display:flex; margin-top:20px;">

          <div class="card " style=" border: 1px solid gray; border-radius:5px; margin-left: 30px; ">
            <div class="card-body" style="padding:0px!important;">
              <div style=" text-align:center; background-color: #FFB302; width:100%;">
                <i class="fa fa-list icons"></i>
                <h4 style="color: white;">Pay Fees</h4>
              </div>
              <div class=".abc" style="margin:10px;">
              <p class="dashboard-squre-title">
                Pay Fees to proceed with the Test or Counselling Session.</p><br><br><br> </p>
              <button class="btn btn-warning" style=" background-color: #FFB302; " href="#" id="modal-btn" > Pay
                Fees</button>
 
            

<div id="my-modal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Upgrade </h4>
        <p>Upgrade your Profile securely via Debit/Credit Card, Jazz Cash Mobile Account, or Jazz Cash Voucher.  </p>
        
      </div>
      <div class="modal-body">
        <div class="">
        <table class="table">
              
      
                                   <tbody><tr>
                <td width="300">Pay for Counselling Session</td>
                <td width="100">PKR. 5000</td>
                <td><a href="javascript:void()" data-amount="5000" data-text="Pay for Counselling Session" class="btn btn-success selectpackage">Select</a></td>
            </tr>
                        
           
        </tbody></table>
        
        </div>
        <div class="packageselected" style="">
            <table class="table">
                <tbody><tr>
                    <td class="packagetitle">Pay for Counselling Session</td>
                    <td class="packageamount">5000</td>
                </tr>
                <tr>
                    <td>Discount Code</td>
                    <td>
                        <div class="row">
                        <div class="col-md-8">
                            <input type="text" class="discountcode form-control" placeholder="Discount Code">
                        </div>
                        <div class="col-md-4">
                            <input type="button" class="btn btn-success applydiscount" value="Apply Code">
                        </div>
                        </div>
                        
                    <p class="amountcode" style="display:none"></p>
                    
                    </td>
                </tr>
                <tr class="discountamount" style="display:none;margin-bottom: 0;">
                    <td>Discount Code</td>
                    <td><input type="text" readonly="" class="discountamountval form-control" placeholder="Discount Amount"></td>
                </tr>
                <tr>
                    <td>Subtotal</td>
                    <td class="subtotal">5000</td>
                </tr>
                <tr>
                    <td><a href="https://merafuture.pk/payment/index/5000/Counseling" class="btn btn-success paymnenturl">Pay Now</a></td>
                </tr>
            </tbody></table>
            <div class="text-center">
            <p class="btn btn-success">Select Payment Method</p>
            </div>
            <br>
            <div class="row">
                 <div class="col-md-4 paymenticon">
                    <a href="javascript:void()" data-text="Pay for Counselling Session" class="easypaisabtn"><img src="https://merafuture.pk//public/uploads/easypaisa.png" class="img-responsive"></a>
                    </div>
                    <div class="col-md-4 paymenticon">
                    <a href="https://merafuture.pk/payment/index/5000/Counseling" data-text="Pay for Counselling Session" class="paymnenturl"><img src="https://merafuture.pk//public/uploads/jazzcash.png" class="img-responsive" width="200px" height="200px"></a>
                    </div>
                    <div class="col-md-4 paymenticon">
                    <a href="https://merafuture.pk/payment/index/5000/Counseling" data-text="Pay for Counselling Session" class="paymnenturl"><img src="https://merafuture.pk//public/uploads/visamaster.png" class="img-responsive" width="200px" height="200px"></a>
                    </div>
                        <div class="col-md-4 paymenticon">
               <a href="javascript:void()" data-text="Pay for Counselling Session" class="cashondelivery"><img src="https://merafuture.pk//public/uploads/cashondelivery.png" class="img-responsive" width="200px" height="200px"></a> 
            </div>
            
        
                    
            <div class="col-md-4 paymenticon">
            <a href="javascript:void()" data-text="Pay for Counselling Session" class="banktransfer"><img src="https://merafuture.pk//public/uploads/banktransfer.png" width="200px" height="200px" class="img-responsive"></a>
            </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeModal()">Close</button>
        
      </div>
    </div>
  </div>


            </div>
            </div>
          </div>

          <!-- Universities and Degrees-->

          <div class="card " style=" border: 1px solid gray; border-radius:5px; margin-left: 30px;">
            <div class="card-body" style="padding:0px!important;">
              <div style=" text-align:center; background-color: #FFB302; width:100%;">
                <i class="fa fa-list icons"></i>
                <h4 style="color: white;">Universities and Degrees</h4>
              </div>
              <div class=".abc" style="margin:10px;">
              <p class="dashboard-squre-title">
                Search for University and Degree of your choice</p><br><br><br> </p>
              <a href="..\university.php" class="btn btn-warning" style=" background-color: #FFB302;"
                class="btn-status">
                Search</a>


        
            </div>
          </div>
          </div>

          <!--Video-->

          <div class="card " style=" border: 1px solid gray; border-radius:5px; margin-left: 30px;">
          <div class="col-lg-12" style=" width:100%; height:100%; padding:0px!important;">
            <iframe width="100%" height="175" src="https://www.youtube.com/embed/wxLYIrdOy5c" frameborder="0"
              allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen=""></iframe>
          </div>
          </div>




        </div>

      </div>
      <!-- NEW TESTING ENDS-->
    </div>
    <!-- /.row -->
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
          <a href="https://www.facebook.com/DigTan-DigiTal-102798214929280" style="width:50px; height:50px; "><i
              class="fa fa-facebook"></i></a>
          <a href="https://www.facebook.com/DigTan-DigiTal-102798214929280" style="width:50px; height:50px; "><i
              class="fa fa-linkedin"></i></a>
          <a href="https://www.facebook.com/DigTan-DigiTal-102798214929280" style="width:50px; height:50px; "><i
              class="fa fa-google"></i></a>
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

              <!-- jQuery -->
              <script src="js/jquery.js"></script>

              <!-- Bootstrap Core JavaScript -->
              <script src="js/bootstrap.min.js"></script>

              <!--popUp-->
              <script>
                function togglePopup() {
                  document.getElementById("popup-1").classList.toggle("active");
                }
              </script>

              <script>
                import { createPopper } from '@popperjs/core';
                const popcorn = document.querySelector('#popcorn');
                const tooltip = document.querySelector('#tooltip');
                createPopper(popcorn, tooltip, {
                  placement: 'right',
                });
              </script>


    <!--SweetAlert-->

    <script>
fucntion popUp(){
  swal("Good job!", "You clicked the button!", "success");

}

</script>

<script src="script.js"></script>


<script>
const openEl = document.getElementById('open'),
      modalContainerEl = document.getElementById('modal_container'),
      closeEl = document.getElementById('close');

openEl.addEventListener('click', () => {
    modalContainerEl.classList.add('show');
});

closeEl.addEventListener('click', () => {
    modalContainerEl.classList.remove('show');
});
</script>



</body>

</html>