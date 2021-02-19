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
    <a class="nav-link dropdown-toggle" data-toggle="dropdown"  role="button" aria-haspopup="true" aria-expanded="false" ><img style="width: 40px; height: 40px; border-radius: 80%;" src="assets\img\abc.jpeg"></a>
    <ul class="dropdown-menu">
     <li> <a class="dropdown-item" href="admin1/index.php">Dashboard</a></li>
     <li> <a class="dropdown-item" href="#">Logout</a></li>
      
    </ul>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link "  href="#"  aria-haspopup="true" aria-expanded="false" >
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




<!--Search-->
<br>
<br>

<form>
  <div class="form-row" style="margin-left:180px;">
    <div class="col-3">
      <input type="text" class="form-control" placeholder="City">
    </div>
    <div class="col-3">
      <input type="text" class="form-control" placeholder="State">
    </div>
    <div class="col-3">
      <input type="text" class="form-control" placeholder="Zip">
    </div>
    <div class="col-auto">
      <button type="Search" class="btn btn-primary mb-2">Search</button>
    </div>
  </div>
</form>




    

    <!--cards-->
    


<!--test-->

<div class="container is-wrapping" style="margin-top:30px;">
    	
    		
    <div class="container" style="display:flex; flex-direction: row;  ">
        

      <div class="col lg-4 md-12 universitieslist" style="display: block; border:1px  solid #DEDEDE; text-align:center; ">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/6" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-6.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/6" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Abasyn University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline" style=" text-align:left;">
                        <li ><i class="fa fa-caret-right"></i > BS Biosciences</li>
                        <li ><i class="fa fa-caret-right"></i > Peshawer</li>
                        <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
      <div class="col lg-4 md-12 universitieslist" style=" display: block; text-align:center; margin-left:20px; border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/7" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-7.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/7" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Abbotabad University of Science and Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline" style=" text-align:left;">
                        <li><i class="fa fa-caret-right"></i> BS Artificial Intelligence</li>
                        <li><i class="fa fa-caret-right"></i> Abbotabad</li>
                                                <li><i class="fa fa-caret-right"></i> Computer Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="margin-left:20px; display: block; text-align:center;  border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/8" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-8.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/8" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Abdul Wali Khan University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline" style=" text-align:left;">
                        <li><i class="fa fa-caret-right"></i> BS Botany</li>
                        <li><i class="fa fa-caret-right"></i> Mardan</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
</div>


                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/177" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-177.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/177" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of South Asia</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Arts</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/178" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-178.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/178" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Sufism and Modern Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Bithshah</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/179" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-179.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/179" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Swabi</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Mass Communication</li>
                        <li><i class="fa fa-caret-right"></i> Swabi</li>
                                                <li><i class="fa fa-caret-right"></i> Social Sciences &amp; Humanities</li>
                                                                        <li><i class="fa fa-caret-right"></i> Fall</li>
                                                <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/180" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-180.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/180" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Swat</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Archaeology</li>
                        <li><i class="fa fa-caret-right"></i> Swat</li>
                                                <li><i class="fa fa-caret-right"></i> Social Sciences &amp; Humanities</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/181" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-181.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/181" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of the Punjab</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Agricultural Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/182" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-182.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/182" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Turbat</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Balochi</li>
                        <li><i class="fa fa-caret-right"></i> Turbat</li>
                                                <li><i class="fa fa-caret-right"></i> Social Sciences &amp; Humanities</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/183" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-183.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/183" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">The University of Veterinary and Animal Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Applied Microbiology</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/184" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-184.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/184" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Wah</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Biological Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Wah Cannt</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/185" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-185.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/185" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Buner</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Botany</li>
                        <li><i class="fa fa-caret-right"></i> Buner</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/186" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-186.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/186" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Balochistan</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Brahvi</li>
                        <li><i class="fa fa-caret-right"></i> Quetta</li>
                                                <li><i class="fa fa-caret-right"></i> Social Sciences &amp; Humanities</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring</li>
                                                <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/187" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-187.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/187" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Baltistan</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Animal Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Skardu</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/188" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-188.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/188" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Pakistan Institute of Engineering &amp; Applied Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Electrical Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
                                                <li><i class="fa fa-caret-right"></i> Engineering</li>
                                                                        <li><i class="fa fa-caret-right"></i> Fall</li>
                                                <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/189" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-189.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/189" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Pakistan Institute of Fashion &amp; Design</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BFA Fashion Design</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Arts</li>
                                                                        <li><i class="fa fa-caret-right"></i> Fall</li>
                                                <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/190" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-190.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/190" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Peoples University of Medical &amp; Health Sciences for Women</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> MBBS</li>
                        <li><i class="fa fa-caret-right"></i> Shaheed Benazirabad</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Fall</li>
                                                <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 5 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/191" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-191.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/191" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Pir Abdul Qadir Shah Jeelani Institute of Medical Sciences Gambat</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Cardiology</li>
                        <li><i class="fa fa-caret-right"></i> Khairpur</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/192" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-192.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/192" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Pir Mehr Ali Shah Arid Agriculture University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Human Nutrition &amp; Dietetics</li>
                        <li><i class="fa fa-caret-right"></i> Rawalpendi</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/193" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-193.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/193" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Preston University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Kohat</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/194" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-194.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/194" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Punjab Tianjin University of Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> B.Tech Electrical Engineering Technology</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Engineering</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/195" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-195.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/195" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Rawalpindi Medical University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> MBBS</li>
                        <li><i class="fa fa-caret-right"></i> Rawalpendi</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 5 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/196" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-196.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/196" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Riphah International University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Electrical Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
                                                <li><i class="fa fa-caret-right"></i> Engineering</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/197" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-197.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/197" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Quaid-e-Awam University of Engineering, Sciences &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Chemical Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Nawabshah</li>
                                                <li><i class="fa fa-caret-right"></i> Engineering</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/198" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-198.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/198" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Quaid-i-Azam University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/199" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-199.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/199" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Qarshi University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Computer Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/200" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-200.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/200" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Qurtuba University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Botany</li>
                        <li><i class="fa fa-caret-right"></i> Dera Ismail Khan</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/201" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-201.png" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/201" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Karachi School of Business and Leadership</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                     </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/202" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-202.png" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/202" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Poonch</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Agriculture</li>
                        <li><i class="fa fa-caret-right"></i> Rawala Kot</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Fall</li>
                                                <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/203" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-203.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/203" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Balochistan University of Information Technology, Engineering and Management Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Quetta</li>
                                                <li><i class="fa fa-caret-right"></i> Arts</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/204" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-204.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/204" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Ali Institute of Education</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Education</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Social Sciences &amp; Humanities</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/205" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-205.png" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/205" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Government College for Women University Faisalabad</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                     </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/206" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-206.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/206" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Imperial College of Business Studies</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                     </div>
              </div>
            </div>
          </a>
        </div>
      </div>



</div>
</div>
</div>
</div>
                    
                                
            
    <!--pagination-->

    
  <ul class="pagination justify-content-center" >
    <li class="page-item ">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="university1.php">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>

    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>



</div>
</div>

        
   

<br>
<br>

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

              <br/>
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




    