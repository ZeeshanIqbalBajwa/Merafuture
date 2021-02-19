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
      <button type="Search" class="btn btn-dark mb-2">Search</button>
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

<div class="container" style="display:flex;  flex-direction: row; margin-top:30px;">
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: block; text-align:center;  border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/9" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-9.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/9" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">The Aga Khan University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline" style=" text-align:left;">
                        <li><i class="fa fa-caret-right"></i> MBBS</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Fall</li>
                                                <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 5 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
        <div class="col lg-4 md-12 universitieslist" style="display: block; margin-left:20px; text-align:center; border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/10" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-10.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/10" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Air University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline" style=" text-align:left;">
                        <li><i class="fa fa-caret-right"></i> BS Tourism &amp; Hospitality</li>
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
                    
                            <div class="col lg-4 md-12 universitieslist" style=" margin-left:20px;display: block; text-align:center;  border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/11" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-11.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/11" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">The Allama Iqbal Open University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline" style=" text-align:left;">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Ars</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
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
</div>

<div class="container" style="display:flex;  flex-direction: row; margin-top:30px; text-align:center; ">
            <div class="col lg-4 md-12 universitieslist" style="display: block;text-align:center;  border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/12" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-12.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/12" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Al-Hamd Islamic University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline" style=" text-align:left;">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Quetta</li>
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
                    
                            <div class="col lg-4 md-12 universitieslist" style="margin-left:20px; display: block; text-align:center;  border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/13" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-13.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/13" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Bacha Khan University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline" style=" text-align:left;">
                        <li><i class="fa fa-caret-right"></i> BS Zoology</li>
                        <li><i class="fa fa-caret-right"></i> Charsadda</li>
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
                    
                            <div class="col lg-4 md-12 universitieslist" style=" margin-left:20px;display: block;  border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/14" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-14.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/14" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Bahauddin Zakariya University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline" style=" text-align:left;">
                        <li><i class="fa fa-caret-right"></i> BS Agricultural Business</li>
                        <li><i class="fa fa-caret-right"></i> Multan</li>
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

</div>

<div class="container" style="display:flex; flex-direction: row; margin-top:30px; ">
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;  border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/15" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-15.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/15" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Bahria University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Accounting &amp; Finance</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
                                                <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none; margin-left:20px; border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/16" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-16.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/16" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Balochistan University of Engineering &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Civil Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Khuzdar</li>
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
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none; margin-left:20px; border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/17" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-17.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/17" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Baqai Medical University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Bioinformatics</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
</div>

<div class="container" style="display:flex; flex-direction: row; margin-top:30px;">
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;  border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/18" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-18.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/18" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Barrett Hodgson University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Biomedical Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;  border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/19" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-19.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/19" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Beaconhouse National University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
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
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;  border:1px  solid #DEDEDE;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/20" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-20.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/20" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Benazir Bhutto Shaheed University Lyari</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Public</li>
                        <li><i class="fa fa-caret-right"></i> </li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
</div>
<div class="container" style="display:flex; flex-direction: row; margin-top:30px;">
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/21" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-21.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/21" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Benazir Bhutto Shaheed University of Technology &amp; Skill Development</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> B.Tech Civil Engineering Technology</li>
                        <li><i class="fa fa-caret-right"></i> Khairpur</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/22" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-22.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/22" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Brains Institute</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/23" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-23.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/23" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Capital University of Science &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Biosciences</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
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
</div>
<div class="container" style="display:flex; flex-direction: row; margin-top:30px;">
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/24" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-24.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/24" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">CECOS University of Information Technology and Emerging Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/25" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-25.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/25" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Cholistan University of Veterinary and Animal Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Animal Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Bahawalpur</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/26" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-26.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/26" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">City University of Science and Information Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
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
</div>
<div class="container" style="display:flex; flex-direction: row; margin-top:30px;">
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/29" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-29.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/29" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Commecs Institute of Business &amp; Emerging Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/30" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-30.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/30" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">COMSATS University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/31" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-31.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/31" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Dadabhoy Institute of Higher Education</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
                                                <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 2 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
<div class="container" style="display:flex; flex-direction: row; margin-top:30px;">
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/32" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-32.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/32" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Dawood University of Engineering &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Mathematics</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/33" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-33.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/33" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">DHA Suffa University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Mechanical Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/34" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-34.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/34" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">DOW University of Health Science</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Dental Care Professionals</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
</div>
<div class="container" style="display:flex; flex-direction: row; margin-top:30px;">                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/35" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-35.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/35" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Emaan Institute of Management &amp; Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/36" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-36.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/36" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Faisalabad Medical University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Vision Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Faisalabad</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/37" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-37.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/37" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Fatima Jinnah Medical University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> MBBS</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
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
</div>
<div class="container" style="display:flex; flex-direction: row; margin-top:30px;">
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/38" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-38.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/38" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Fatima Jinnah Women University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Software Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Rawalpendi</li>
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
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/40" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-40.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/40" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Federal Urdu University of Arts, Sciences &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Electrical Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/41" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-41.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/41" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Forman Christian College</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Biological Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
                                                <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 4 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
</div>
<div class="container" style="display:flex; flex-direction: row; margin-top:30px;">
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/42" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-42.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/42" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Foundation University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> MBBS</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 5 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/43" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-43.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/43" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Gandhara University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Anaesthesiology</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/44" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-44.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/44" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Ghazi University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Agricultural Entomology</li>
                        <li><i class="fa fa-caret-right"></i> Dera Ghazi Khan</li>
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
<div class="container" style="display:flex; flex-direction: row; margin-top:30px;">              
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/45" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-45.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/45" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Ghulam Ishaq Khan Institute of Engineering Sciences &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Chemical Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Swabi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/46" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-46.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/46" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">GIFT University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Arabic</li>
                        <li><i class="fa fa-caret-right"></i> Multan</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/47" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-47.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/47" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Gomal University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Agriculture</li>
                        <li><i class="fa fa-caret-right"></i> Dera Ismail Khan</li>
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
<div class="container" style="display:flex; flex-direction: row; margin-top:30px;">
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/48" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-48.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/48" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Government College for Women University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Botany</li>
                        <li><i class="fa fa-caret-right"></i> Sialkot City</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/49" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/event-49.png" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/49" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Government College University, Lahore</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Urdu</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/50" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-50.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/50" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Government College University Faisalabad</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Biochemistry</li>
                        <li><i class="fa fa-caret-right"></i> Faisalabad</li>
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
</div>
<div class="container" style="display:flex; flex-direction: row; margin-top:30px;">
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/51" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-51.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/51" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Government Sadiq College Women University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Applied Psychology</li>
                        <li><i class="fa fa-caret-right"></i> Bahawalpur</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/52" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-52.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/52" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Greenwich University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                     </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/53" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-53.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/53" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Habib University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Communication Design</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
<div>     
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/54" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-54.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/54" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Hajvery University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BFA Textile Design</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Arts</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/55" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-55.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/55" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Hamdard University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS English Linguistics</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Social Sciences &amp; Humanities</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/56" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-56.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/56" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Hazara University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Sociology</li>
                        <li><i class="fa fa-caret-right"></i> Mansehra</li>
                                                <li><i class="fa fa-caret-right"></i> Social Sciences &amp; Humanities</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/57" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-57.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/57" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">HITEC University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Civil Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Taxila</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/58" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-58.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/58" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">ILMA University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/59" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-59.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/59" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Indus University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/60" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-60.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/60" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Indus Valley School of Art and Architecture</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/61" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-61.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/61" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Information Technology University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Computer Engineering</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/62" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-62.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/62" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Institute for Art and Culture</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Animation</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/63" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-63.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/63" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Institute of Business Administration (IBA)</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/64" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-64.png" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/64" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Institute of Business Management (IoBM)</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Accounting &amp; Finance</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/65" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-65.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/65" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Institute of Management Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/66" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-66.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/66" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Institute of Southern Punjab</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Multan</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/67" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-67.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/67" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Institute of Space Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Aerospace Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/68" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-68.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/68" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">International Islamic University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Anthropology</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/69" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-69.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/69" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Iqra National University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/70" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-70.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/70" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Iqra University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Advertising</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/71" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-71.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/71" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Islamia College University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Arabic</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/72" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-72.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/72" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Isra University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                     </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/73" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-73.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/73" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Jinnah Sindh Medical University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> MBBS</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/74" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-74.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/74" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Jinnah University for Women</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Islamic Learning</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/75" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-75.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/75" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Karachi Institute of Economics &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/76" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-76.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/76" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Karakoram International University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Software Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Gilgit</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/77" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-77.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/77" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">KASB Institute of Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Commerce</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/78" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-78.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/78" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Khushal Khan Khattak University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Computer Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Karak</li>
                                                <li><i class="fa fa-caret-right"></i> Computer Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/79" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-79.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/79" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Khwaja Fareed University of Engineering &amp; Information Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Agricultural Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Rahimyar Khan</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/80" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-80.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/80" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Khyber Medical University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> DPT</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/81" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-81.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/81" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">King Edward Medical University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Nursing</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/82" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-82.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/82" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Kinnaird College for Women</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Zoology</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/83" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-83.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/83" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Kohat University of Science &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Social Work &amp; Sociology</li>
                        <li><i class="fa fa-caret-right"></i> Kohat</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/84" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-84.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/84" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Lahore College for Women University (LCWU)</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Applied Psychology</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/85" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-85.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/85" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Lahore Garrison University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Urdu</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Social Sciences &amp; Humanities</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> </li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/86" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-86.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/86" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Lahore Leads University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Civil Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/87" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-87.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/87" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Lahore School of Economics</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Economics</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/88" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-88.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/88" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Lahore University of Management Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Accounting &amp; Finance</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/89" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-89.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/89" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Lasbela University of Agriculture, Water &amp; Marine Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Doctor in Veterinary Medicine</li>
                        <li><i class="fa fa-caret-right"></i> Uthal</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/90" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-90.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/90" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Liaquat University of Medical &amp; Health Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Biomedical Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Jamshoro</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/91" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-91.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/91" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Virtual University of Pakistan</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Economics</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Social Sciences &amp; Humanities</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/92" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-92.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/92" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Women University Mardan</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Economics</li>
                        <li><i class="fa fa-caret-right"></i> Mardan</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/93" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-93.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/93" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Women University of Azad Jammu &amp; Kashmir</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Bagh</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/94" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-94.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/94" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Women University Swabi</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Political Sciences</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/95" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-95.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/95" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Zia-ud-Din University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Electrical Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Engineering</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/96" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-96.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/96" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Textile Institute of Pakistan</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Apparel Manufacturing</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/97" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-97.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/97" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">The Islamia University Bahawalpur</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Zoology</li>
                        <li><i class="fa fa-caret-right"></i> Bahawalpur</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/98" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-98.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/98" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">The Shaikh Ayaz University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Shikarpur</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/99" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-99.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/99" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">The Superior College University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> MBBS</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> 5 years</li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/100" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-100.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/100" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">The University of Agriculture, Peshawar</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Agriculture</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/101" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-101.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/101" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">The University of Faisalabad</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Arabic</li>
                        <li><i class="fa fa-caret-right"></i> Faisalabad</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/102" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-102.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/102" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">The University of Lakki Marwat</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Lakki Marwat</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/103" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-103.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/103" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">The Women University Multan</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Zoology</li>
                        <li><i class="fa fa-caret-right"></i> Multan</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/104" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-104.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/104" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Mehran University of Engineering &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Jamshoro</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/105" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-105.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/105" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Minhaj University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bs Islamic Studies</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Social Sciences &amp; Humanities</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/106" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-106.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/106" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Mohammad Ali Jinnah University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Biosciences</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/107" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-107.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/107" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Mirpur University of Science &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Media &amp; Communication</li>
                        <li><i class="fa fa-caret-right"></i> Mirpur</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/108" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-108.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/108" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Mohi-ud-Din Islamic University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Computer Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Mirpur</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/109" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-109.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/109" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Muhammad Nawaz Shareef University of Agriculture</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BSIT</li>
                        <li><i class="fa fa-caret-right"></i> Multan</li>
                                                <li><i class="fa fa-caret-right"></i> Other</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/111" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-111.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/111" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Muhammad Nawaz Shareef University of Engineering &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Multan</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/112" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-112.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/112" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Muslim Youth University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Civil Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
                                                <li><i class="fa fa-caret-right"></i> Other</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/113" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-113.png" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/113" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Namal Institute</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Electrical Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Mianwali</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/114" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-114.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/114" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">National College of Arts</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/115" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-115.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/115" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">National College of Business Administration &amp; Economics</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Banking &amp; Finance</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/116" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-116.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/116" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">National Defense University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Leadership &amp; Management Studies</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/117" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-117.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/117" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">National University of Computer &amp; Emerging Sciences (FAST NUCES)</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Artificial Intelligence</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
                                                <li><i class="fa fa-caret-right"></i> Computer Sciences</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/118" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-118.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/118" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">National Textile University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Apparel Manufacturing &amp; Merchandizing</li>
                        <li><i class="fa fa-caret-right"></i> Faisalabad</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/119" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-119.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/119" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">National University of Medical Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Biotechnology</li>
                        <li><i class="fa fa-caret-right"></i> Rawalpendi</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/120" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-120.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/120" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">National University of Modern Languages</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Applied Psychology</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/121" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-121.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/121" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">National University of Sciences &amp; Technology (NUST)</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Applied Biosciences</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/122" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-122.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/122" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">National University of Technology (NUTECH)</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Civil Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
                                                <li><i class="fa fa-caret-right"></i> Other</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/123" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-123.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/123" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Nazeer Hussain University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Mechanical Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/124" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-124.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/124" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">NED University of Engineering &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Applied Physics</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/125" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-125.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/125" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Newports Institute of Communications &amp; Economics</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/126" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-126.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/126" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">NFC Institute of Engineering &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Multan</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/127" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-127.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/127" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Nishtar Medical University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor  in Dental Surgery BDS</li>
                        <li><i class="fa fa-caret-right"></i> Multan</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/128" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-128.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/128" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Northern University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Nowshera</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/129" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-129.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/129" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Nur International University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Applied Psychology</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/130" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-130.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/130" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Sardar Bahadur Khan Women's University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS English</li>
                        <li><i class="fa fa-caret-right"></i> Quetta</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/131" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-131.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/131" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Sarhad University of Science &amp; Information Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Civil Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/132" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-132.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/132" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shah Abdul Latif University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Archaelogy</li>
                        <li><i class="fa fa-caret-right"></i> Khairpur</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/133" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-133.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/133" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shaheed Benazir Bhutto City University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/134" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-134.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/134" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shaheed Benazir Bhutto Dewan University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Agricultural Economics</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/135" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-135.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/135" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shaheed Benazir Bhutto University of Veterinary &amp; Animal Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Doctor in Veterinary Medicine</li>
                        <li><i class="fa fa-caret-right"></i> Other</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/136" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-136.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/136" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shaheed Benazir Bhutto University Shaheed Benazirabad</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Nawabshah</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/137" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-137.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/137" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shaheed Benazir Bhutto Women University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Education</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/138" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-138.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/138" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shaheed Mohtarma Benazir Bhutto Medical University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Nursing</li>
                        <li><i class="fa fa-caret-right"></i> Larkana</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/139" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-139.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/139" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shaheed Zulfiqar Ali Bhutto Institute of Science &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
                                                <li><i class="fa fa-caret-right"></i> Private</li>
                        <li><i class="fa fa-caret-right"></i> </li>
                    </ul>
                                    </div>
              </div>
            </div>
          </a>
        </div>
      </div>
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/140" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-140.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/140" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shaheed Zulfiqar Ali Bhutto Medical University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Cardiac Perfusion</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/141" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-141.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/141" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shaheed Zulfiqar Ali Bhutto University of Law</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> LLB</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Social Sciences &amp; Humanities</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/142" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-142.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/142" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shifa Tameer-e-Millat University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Anaesthesiology</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
                                                <li><i class="fa fa-caret-right"></i> Medical &amp; Health Sciences</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/143" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-143.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/143" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Sindh Agriculture University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Agricultural Economics &amp; Statistics</li>
                        <li><i class="fa fa-caret-right"></i> Tandojam</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/144" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-144.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/144" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Sindh Institute of Management &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/145" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-145.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/145" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Sindh Madresatul Islam University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Artificial Intelligence</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/146" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-146.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/146" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Sir Syed (CASE) Institute of Technology, Islamabad</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Islamabad</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/147" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-147.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/147" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Sir Syed University of Engineering &amp; Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/148" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-148.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/148" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Sohail University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Biochemistry</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/149" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-149.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/149" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Sukkur IBA University</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Agricultural Business</li>
                        <li><i class="fa fa-caret-right"></i> Sukker</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/150" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-150.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/150" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">Shuhada e Army Public School University of Technology</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> B.Tech Electronic Engineering Technology</li>
                        <li><i class="fa fa-caret-right"></i> Nowshera</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/151" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-151.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/151" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Agriculture</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Agriculture &amp; Resource Economics</li>
                        <li><i class="fa fa-caret-right"></i> Faisalabad</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/152" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-152.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/152" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Azad Jammu &amp; Kashmir</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS International Relationa</li>
                        <li><i class="fa fa-caret-right"></i> Bagh</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/153" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-153.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/153" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Central Punjab</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Microbiology</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/154" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-154.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/154" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Chitral</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Botany</li>
                        <li><i class="fa fa-caret-right"></i> Chitral</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/155" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-155.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/155" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Education</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Botany</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/156" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-156.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/156" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Engineering &amp; Technology, Lahore</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/157" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-157.png" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/157" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Engineering &amp; Technology, Taxila</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Civil Engineering</li>
                        <li><i class="fa fa-caret-right"></i> Taxila</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/158" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-158.png" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/158" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Engineering &amp; Technology, Peshawar</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BE Mining</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/159" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-159.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/159" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of FATA</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Kohat</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/160" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-160.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/160" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Gujrat</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Geography</li>
                        <li><i class="fa fa-caret-right"></i> Gujrat</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/161" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-161.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/161" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Haripur</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Telecom &amp; Networking</li>
                        <li><i class="fa fa-caret-right"></i> Haripur</li>
                                                <li><i class="fa fa-caret-right"></i> Other</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/162" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-162.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/162" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Health Sciences</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> MBBS</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/163" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-163.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/163" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Karachi</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Zoology</li>
                        <li><i class="fa fa-caret-right"></i> Karachi</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/164" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-164.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/164" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Kotli, AJK</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Architecture</li>
                        <li><i class="fa fa-caret-right"></i> Kotli</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/165" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-165.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/165" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Lahore</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Aircraft Maintenance &amp; Engineering Technology</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/166" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-166.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/166" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Loralai</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Botany</li>
                        <li><i class="fa fa-caret-right"></i> Loralai</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/167" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-167.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/167" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Malakand</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Zoology</li>
                        <li><i class="fa fa-caret-right"></i> Chakdara</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/168" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-168.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/168" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Management &amp; Technology (UMT)</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Computer Sciences</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/169" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-169.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/169" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Narowal</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> Bachelor in Business Administration (BBA)</li>
                        <li><i class="fa fa-caret-right"></i> Lahore</li>
                                                <li><i class="fa fa-caret-right"></i> Management Studies / Management Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/170" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-170.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/170" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Okara</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Zoology</li>
                        <li><i class="fa fa-caret-right"></i> Okara</li>
                                                <li><i class="fa fa-caret-right"></i> Natural Sciences</li>
                                                                        <li><i class="fa fa-caret-right"></i> Spring and Fall</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/171" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-171.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/171" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Peshawar</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Archaeology</li>
                        <li><i class="fa fa-caret-right"></i> Peshawer</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/172" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-172.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/172" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Sahiwal</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BSIT</li>
                        <li><i class="fa fa-caret-right"></i> Sahiwal</li>
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
                    
                            <div class="col lg-4 md-12 universitieslist" style="display: none;">
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/173" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-173.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/173" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Sargodha</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Agriculture &amp; Agribusiness Management</li>
                        <li><i class="fa fa-caret-right"></i> Sargodha</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/174" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-174.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/174" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Science &amp; Technology Bannu</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Anthropology</li>
                        <li><i class="fa fa-caret-right"></i> Bannu</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/175" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-175.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/175" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Sialkot</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Aviation Management</li>
                        <li><i class="fa fa-caret-right"></i> Sialkot City</li>
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
        <div class="c-gridpost__card"><a href="https://merafuture.pk/universities/view/176" class="c-gridpost__image w-inline-block text-center"><img src="https://merafuture.pk/public/uploads/university-176.jpg" alt=""></a>
          
          <a href="https://merafuture.pk/universities/view/176" class="c-gridpost__clickable w-inline-block">
            <div class="c-gridpost__text style2">
              <h3 class="">University of Sindh</h3>
              <div class="text-small low-text-contrast">
              	 <div class="result-item-features">
              	                         <ul class="inline">
                        <li><i class="fa fa-caret-right"></i> BS Zoology</li>
                        <li><i class="fa fa-caret-right"></i> Jamshoro</li>
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
    <li class="page-item"><a class="page-link" href="#">2</a></li>
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




    