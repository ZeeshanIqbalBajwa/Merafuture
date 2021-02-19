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
            <a href="#" class="brand  w-inline-block"><img style="width: 180px; height: 80px;" src="assets/logo.jpg"
                alt=""></a></div>

          <li class="nav">
            <a class="nav-link " href="./university.php" tabindex="-1" aria-disabled="true">Universities and Degrees
              Pakistan</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
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




<section class="wrapper" style="margin-left:100px; margin-top:50px">
         
   
       
      
     <div class="row dashboard-post-section">
       <div class="col-md-10 blog-cards test-part">
     	<div class="text-right">
     	      
<a href="javascript:void()" class="btn btn-success " id="modal-btn">View Results</a>


<!--popover-->
                        

<div id="my-modal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">Pay Fees </h4>
        <p>Pay securely via Debit/Credit Card, Jazz Cash Mobile Account, or Jazz Cash Voucher.  </p>
        
      </div>
      <div class="modal-body">
        <div class="">
        <table class="table">
              
      
                                   <tbody><tr style="text-align:left;">
                <td width="300">Pay for test results</td>
                <td width="100">PKR. 5000</td>
                <td><a href="javascript:void()" data-amount="5000" data-text="Pay for Counselling Session" class="btn btn-success selectpackage">Select</a></td>
            </tr>
                        
           
        </tbody></table>
        
        </div>
        <div class="packageselected" style="text-align:left;">
            <table class="table">
                <tbody><tr>
                    <td class="packagetitle">Pay for test results</td>
                    <td class="packageamount">5000</td>
                </tr>
                
                <tr>
                    <td>Subtotal</td>
                    <td class="subtotal">5000</td>
                </tr>
                <tr>
                    <td><a href="..\jazzcash-rest-api-main\checkout.php" class="btn btn-success paymnenturl">Pay Now</a></td>
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
                        
        </div>
        </div>
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn btn-default" data-dismiss="modal" onclick="closeModal()">Close</button>
        
      </div>
    </div>
  </div>


<!--Instructions-->
<a href="javascript:void()" class="btn btn-primary " id="open">Upgrade</a>


    <div class="modal-container" id="modal_container">
        <div class="modal">
            <h1>Model are Here</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio consequatur nulla eligendi vero quis aliquid consequuntur quia numquam iste itaque?</p>
            <button id="close">
                Close Modal
            </button>
        </div>
    </div>





              
              
               <!--Updrade Button--> 

               <div class="popup">
               <div class="popup-content">
               </div>
               </div>         
                         
                         
                         
                          <!-- <a href="javascript:void()" data-toggle="modal" data-target="#myModalhelptest" class="btn btn-primary makepaymentbtn">Instructions </a> -->
     	</div>
     	<table class="table" style="">
     		<thead>
     			<tr>
     				<td>Test ID</td>
     				<td data-th="Small">Test Name</td>
     				<td data-th="Small">Approx Time</td>
     				<td data-th="Small">Total Questions</td>
     				
     				<td data-th="Small">Actions</td>
     			</tr>
     		</thead>
     		<tbody>
     			     			<tr>
     				<td>1</td>
     				<td>Personality Test</td>
     				<td>15 Minutes </td>
     				<td>60</td>
     				
     				<td>
     				         				             				       
     			 <a href="quiz/homepage.php" class="btn btn-success">Take Test</a>
     				             				             				         				    
     				</td>
     			</tr>
     			     			<tr>
     				<td>2</td>
     				<td>Numerical Reasoning</td>
     				<td>9 Minutes </td>
     				<td>7</td>
     				<td>
     				         				             				       
     			 <a href="Javascript:void()" class="btn btn-success" onclick="alert('Kindly complete your Personality Test First');">Take Test</a>
     				             				             				         				    
     				</td>
     			</tr>
     			     			<tr>
     				<td>3</td>
     				<td>Mechanical Reasoning</td>
     				<td>9 Minutes </td>
     				<td>7</td>
     				
     				<td>
     				         				             				       
     				             				        <a href="Javascript:void()" class="btn btn-success" onclick="alert('Kindly complete your profile First');">Take Test</a>
     				             				             				         				    
     				</td>
     			</tr>
     			     			<tr>
     				<td>4</td>
     				<td>Interests</td>
     				<td>10 Minutes </td>
     				<td>40</td>
     				
     				<td>
     				         				             				       
     				             				        <a href="Javascript:void()" class="btn btn-success" onclick="alert('Kindly complete your profile First');">Take Test</a>
     				             				             				         				    
     				</td>
     			</tr>
     			     			<tr>
     				<td>5</td>
     				<td>Deductive Reasoning</td>
     				<td>9 Minutes </td>
     				<td>7</td>
     				
     				<td>
     				         				             				       
     				             				        <a href="Javascript:void()" class="btn btn-success" onclick="alert('Kindly complete your profile First');">Take Test</a>
     				             				             				         				    
     				</td>
     			</tr>
     			     			<tr>
     				<td>6</td>
     				<td>Error Checking</td>
     				<td>5 Minutes </td>
     				<td>10</td>
     				
     				<td>
     				         				             				       
     				             				        <a href="Javascript:void()" class="btn btn-success" onclick="alert('Kindly complete your profile First');">Take Test</a>
     				             				             				         				    
     				</td>
     			</tr>
     			     			<tr>
     				<td>7</td>
     				<td>Verbal Reasoning</td>
     				<td>15 Minutes </td>
     				<td>10</td>
     				
     				<td>
     				         				             				       
     				             				        <a href="Javascript:void()" class="btn btn-success" onclick="alert('Kindly complete your profile First');">Take Test</a>
     				             				             				         				    
     				</td>
     			</tr>
     			     			<tr>
     				<td>8</td>
     				<td>Inductive Reasoning</td>
     				<td>9 Minutes </td>
     				<td>7</td>
     				
     				<td>
     				         				             				       
     				             				        <a href="Javascript:void()" class="btn btn-success" onclick="alert('Kindly complete your profile First');">Take Test</a>
     				             				             				         				    
     				</td>
     			</tr>
     			     		</tbody>
     	</table>
      
      
         </div>
      </div>
   </section>


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

              
            <!-- jQuery -->
            <script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>




<!--Popovers-->

<script src="script.js"></script>


<!--Upgrade buttton Popovers-->

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