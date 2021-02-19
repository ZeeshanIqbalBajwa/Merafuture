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
  <script src="alert/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="alert/dist/sweetalert.css">
  <link rel="stylesheet" href="bootstrap\js\bootstrap.bundle.min.js">
  <link rel="stylesheet" href="bootstrap\js\bootstrap.bundle.js">
  

</head>


<body>

<!--Popovers-->
<!-- 
<div class="modal-dialog" style=" position: relative;">
<div class="modal-content" style=" position: relative;">
      <div class="modal-header alert-dismissible">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
        
      </div>
      <div class="modal-body ct-language__modal ">
        <div class="urdu-modal text-center"><h3>Welcome To</h3>
        <img style="width:160px; height:100px;" src="assets/logo/logo.jpg" alt="logo"><br>
        <div class="grid"><div>
            <p>CONTINUE IN ENGLISH</p>
            <a href="#"><button class="btn btn-dark" id="urdu-modal-btn1">ENGLISH</button></a>
            </div>
            <div class="vl"></div>
            <div><p class="p1">اردو کے لئے بٹن پر کلک کریں</p>
            <a href="#"><button  class="btn btn-dark" class="lang-es lang-select" data-lang="ur">اردو</button></a></div></div></div>
      </div>
      
    </div>
    </div>
    </div>
    </div> -->



<!--Popovers2-->





<!--Navigation-->

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

<!--video and Text1-->
  <div class="card mb-12"  >
    <div class="row no-gutters" style="background-color: #778899; margin-top:0px; ">
      <div class="col-md-6">
        <div class="card-body"><br><br>
          <h2 class="card-title">Select YOUR Future Career and University Degree through AI Based Aptitude Testing</h2>
          <p class="card-text" style="font-size: 20px;">Being the leading career counselling company, we support human capital through inclusive
            career counselling services, pragmatic learning sessions, and contemplative consultations for long-term and
            sustainable success. Tailored guidance to help you choose an educational and professional career that fits
            your personality and skill set.</p>
            <br><br>
          <button class="btn btn-light btn-block" style="h color: black; border: 1px solid black; border-radius: 20px;"
            type="submit"> <a href="clientlogin.php" style="color: black;">Take The Test</a></button><br>
          <button class="btn btn-light  btn-block" style="color: black; border: 1px solid black; border-radius: 20px;"
            type="submit"> <a href="SampleLoginPage/index.php" style="color: black;">Sign in</a></button>

        </div>
      </div>
      <div class="col-md-6" style="margin-top: 100px; padding-right: 20px;">
        <div data-w-id="bfddaba7-bdf9-7caf-a9f9-b00b1d0a3a8a"
          style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; filter: blur(0px); transform-style: preserve-3d;"
          class="decoration-rightside img-hero2">
          <div class="youtube-player videotpplayer" data-id="V74WeMdSKiM" data-related="0" data-control="1"
            data-info="1" data-fullscreen="1"
            style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto;">
            <iframe
              src="//www.youtube.com/embed/V74WeMdSKiM?autoplay=1&amp;autohide=2&amp;border=0&amp;wmode=opaque&amp;enablejsapi=1&amp;rel=0&amp;controls=1&amp;showinfo=1"
              frameborder="0" id="youtube-iframe"
              style="width: 100%; height: 100%; position: absolute; top: 0; left: 0;" allowfullscreen=""></iframe></div>
         
        </div>

      </div>
    </div>
  </div>





<!--Heading Text 01-->

  <div class="card" >
    <div class="card-body">
      <center>
        <h1 class="card-title">Aptitude Testing and Career Counselling by Merafuture</h1>
        <p  style="font-size:18px;" class="card-text">Watch these short videos to set better goals and make informed decisions throughout career
          development.</p>
      </center>
    </div>
  </div>





<!--Sliding videos01-->
        
<div id="owl-videos" class="owl-carousel owl-theme owl-loaded owl-drag">
          
      
     
    <div class="owl-stage-outer">
    <div class="owl-stage" style="transform: translate3d(-1170px, 0px, 0px); transition: all 0.25s ease 0s; width: 8970px;">
    <div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="3qib9LhPszs" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/3qib9LhPszs/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as an HR Professional in Pakistan</p>
      </div></div><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="PykINDUrzu4" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/PykINDUrzu4/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as a Journalist in Pakistan</p>
      </div></div><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="BjAlBmax0To" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/BjAlBmax0To/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as an Electrical Engineer in Pakistan</p>
      </div></div><div class="owl-item active" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="6DnT1iGtGKM" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/6DnT1iGtGKM/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Why is Career Counselling Important? Ahad Wazir</p>
      </div></div><div class="owl-item active" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="oxig4qnNUSE" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/oxig4qnNUSE/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as a Therapist in Pakistan </p>
      </div></div><div class="owl-item active" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="BlPWJn4zs8g" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/BlPWJn4zs8g/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career in UI UX Design in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="7tseO_WO7t4" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/7tseO_WO7t4/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Do not force your children towards a Career: Advice for Parents</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="Nisi6Ra_Y5Y" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/Nisi6Ra_Y5Y/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Importance of Performing Arts for young people</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="qHzjubfAHPU" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/qHzjubfAHPU/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as a Micro System Engineer in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="HYO50oqbSF0" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/HYO50oqbSF0/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Employability Skills: What are the three W's of Work by Mohsin Nishat</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="aRBu5vs7SPk" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/aRBu5vs7SPk/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as a Civil Engineer in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="z7KPf_Wi6hk" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/z7KPf_Wi6hk/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Why is it important to select a degree as per your aptitude?</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="24st8Wfizuw" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/24st8Wfizuw/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Entrepreneurs, Entrepreneurship and Business Opportunities in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="qAQrqkw-HPQ" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/qAQrqkw-HPQ/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as a Data Scientist in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="OjWtc8TuVQE" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/OjWtc8TuVQE/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as an Economist in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="NO87KF1dizw" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/NO87KF1dizw/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career in Computer Science in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="koUnqU7XICQ" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/koUnqU7XICQ/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as a Finance Professional in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="3qib9LhPszs" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/3qib9LhPszs/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as an HR Professional in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="PykINDUrzu4" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/PykINDUrzu4/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as a Journalist in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="BjAlBmax0To" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/BjAlBmax0To/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as an Electrical Engineer in Pakistan</p>
      </div></div><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="6DnT1iGtGKM" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/6DnT1iGtGKM/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Why is Career Counselling Important? Ahad Wazir</p>
      </div></div><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="oxig4qnNUSE" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/oxig4qnNUSE/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as a Therapist in Pakistan </p>
      </div></div><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="BlPWJn4zs8g" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/BlPWJn4zs8g/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career in UI UX Design in Pakistan</p>
      </div></div></div></div></div></div>



<!--Heading Text 02-->

<div class="card" style="margin-top:50px;">
  <div class="card-body">
    <center>
      <h1 class="card-title">Talk to the People in the Field</h1>
      <p class="card-text">Here’s what our qualified professionals have to say! Understand the insights and uncover your interests to achieve and succeed in your career goals.</p>
    </center>
  </div>
</div>

<!--Sliding videos 02-->

<div id="owl-videoscounsling" class="owl-carousel owl-theme owl-loaded owl-drag">
                 
      
     
    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2340px, 0px, 0px); transition: all 0.25s ease 0s; width: 4680px;"><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="uYB6Xbca940" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/uYB6Xbca940/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          
          <p>Which University Degree to Select? Let Merafuture help!</p>
      </div></div><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="WhFgA8GKkiM" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/WhFgA8GKkiM/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          
          <p>Story behind Merafuture </p>
      </div></div><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="5qmciG5VAHk" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/5qmciG5VAHk/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          
          <p>Dawn TV coverage of Merafuture</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="G4bPOYheOVY" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/G4bPOYheOVY/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          
          <p>Career Counselling for 10-12th Class Students to Select University Degree and Future Career. </p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="yV3v40med2U" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/yV3v40med2U/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          
          <p>Why is Career Counselling Important?</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="wxLYIrdOy5c" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/wxLYIrdOy5c/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          
          <p>How Career Counselling Works @ Merafuture.pk?</p>
      </div></div><div class="owl-item active" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="uYB6Xbca940" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/uYB6Xbca940/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          
          <p>Which University Degree to Select? Let Merafuture help!</p>
      </div></div><div class="owl-item active" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="WhFgA8GKkiM" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/WhFgA8GKkiM/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          
          <p>Story behind Merafuture </p>
      </div></div><div class="owl-item active" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="5qmciG5VAHk" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/5qmciG5VAHk/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          
          <p>Dawn TV coverage of Merafuture</p>
      </div></div><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="G4bPOYheOVY" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/G4bPOYheOVY/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          
          <p>Career Counselling for 10-12th Class Students to Select University Degree and Future Career. </p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="koUnqU7XICQ" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/koUnqU7XICQ/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as a Finance Professional in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="3qib9LhPszs" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/3qib9LhPszs/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as an HR Professional in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="PykINDUrzu4" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/PykINDUrzu4/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as a Journalist in Pakistan</p>
      </div></div><div class="owl-item" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="BjAlBmax0To" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/BjAlBmax0To/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as an Electrical Engineer in Pakistan</p>
      </div></div><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="6DnT1iGtGKM" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/6DnT1iGtGKM/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Why is Career Counselling Important? Ahad Wazir</p>
      </div></div><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="oxig4qnNUSE" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/oxig4qnNUSE/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career as a Therapist in Pakistan </p>
      </div></div><div class="owl-item cloned" style="width: 390px;"><div class="item">
          <div class="youtube-player" data-id="BlPWJn4zs8g" data-related="0" data-control="1" data-info="1" data-fullscreen="1" style="width:100%;display: block; position: relative;cursor: pointer;max-height:350px;height:100%; overflow:hidden;padding-bottom:56.25%;margin:0 auto"> <img src="//i.ytimg.com/vi/BlPWJn4zs8g/hqdefault.jpg" style="bottom: -100%; display: block; left: 0; margin: auto; max-width: 100%; width: 100%;height:auto; position: absolute; right: 0; top: -100%;"> <div style="height: 72px; width: 72px; left: 50%; top: 50%; margin-left: -36px; margin-top: -36px; position: absolute; background: url('https://i.imgur.com/TxzC70f.png') no-repeat;"></div> </div>
          <p>Career in UI UX Design in Pakistan</p>
          <p>How Career Counselling Works @ Merafuture.pk?</p>
      </div></div></div></div><span aria-label="Previous">‹</span></button></div></div>



<!--Heading Text 03-->

<div class="card" style="margin-top: 100px; border: 1px solid black;">
  <div class="card-body">
    <center>
      <h1 class="card-title">Our tests are developed and recognized by</h1>
      <p class="card-text"><img src="assets/img/NUST-logo.png" style="width:280px; height: 120px;"></p>
    </center>
  </div>
</div>

<!--Testinomials-->

<div class="card" >
  <div class="card-body" >
    <center>
      <h1 class="card-title">Testimonials</h1>
      <p class="card-text" style="font-size:20px; color: #00264D">Hear from the Students who are successfully pursuing their undergraduate degrees after taking our test and from Academics and Professionals who endorse our services. </p>
    </center>

    </div>
</div>

     <!--video and Text1-->
<!--Test-->
     

     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="card mb-12" style="border: 0px;" >
    <div class="row no-gutters" style="background-color: #F5F5F5; height: 500px; ">
      <div class="col-md-7">
        <div class="card-body" ><br><br>
          <h2 class="card-title"></h2>
          <br>
          <br>
          <p class="card-text" style="font-size: 20px; text-align:justify;">"MeraFuture is authentic and helpful. Especially if you are confused about your career path (as many of us tend to be in our teens) or indecisive. The results are detailed and provide direction. Highly recommended!"
            </p> <br><br> <b>Sahar Ahmad<b>
             <br> Fsc, APS</p>
            <br><br>
            </div>
          </div> 
      <div class="col-md-5" style="margin-top: 100px; padding-right: 20px;">
        <img src="assets/img/testimonial-3.jpg" style="padding-left: 120px;">
        <!-- <img src="https://merafuture.pk/public/uploads/testimonial-12.png"  > -->
       </div>
    </div>
  </div>
  </div>
    </div>
  </div>

    <div class="carousel-item">
    <div class="card mb-12" style="border: 0px;" >
    <div class="row no-gutters" style="background-color: #F5F5F5; height: 550px; ">
      <div class="col-md-7">
        <div class="card-body" ><br><br>
          <h2 class="card-title"></h2>
          <br>
          <br>
          <p class="card-text" style="font-size: 20px; text-align:justify;">"MeraFuture is authentic and helpful. Especially if you are confused about your career path (as many of us tend to be in our teens) or indecisive. The results are detailed and provide direction. Highly recommended!"
             <br><br> <b>Sahar Ahmad<b>
             <br> Fsc, APS</p>
            <br><br>
            </div>
      </div>

        
      <div class="col-md-5" style="margin-top: 100px; padding-right: 20px;">
        <img src="assets/img/testimonial-3.jpg" style="padding-left: 120px;">
       
       </div>
    </div>
  </div>
  

  </div>
</div>
</div>
    


<!--What Does our test assess-->


<div class="row featurette" style=" background-color: #F5F5F5; height: 600px; ">
  <div class="col-md-6 order-md-2">
    <div class="w-layout-grid c-services" style="display: flex; margin-top: 40px;">
    
      <a data-w-id="fa761249-6d2b-3e34-3938-d628130e0297" style="background-color: rgb(255, 255, 255); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="c-services__card-outer col-md-4" style="background-color:white; color:black;  ">
          <div style="" class="c-services__card-inner" ><img src="https://merafuture.pk/images/icon12.svg" width="64" alt="" class="margin-bottom">
            <h4 style="color:black;">Personality </h4>
           <p >How you think feel and behave</p>
            
          </div>
        </div>
      </a>
    



     
      <a data-w-id="7890ee21-a296-58b8-3cc2-d2e7ceddf8ff" style="background-color: rgb(255, 255, 255); margin-left:30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <div class="c-services__card-outer col-md-4" style="background-color:white; color:black; ">
          <div style="" class="c-services__card-inner"><img src="https://merafuture.pk/images/icon13.svg" width="64" alt="" class="margin-bottom">
            <h4 style="" class="c-services__header">Interest</h4>
            <p> What you want to Know and Learn</p>
            
          </div>
        </div>
      </a>
    
     </div>
     

      <div align="center">
      <a data-w-id="73e38929-1fed-4e43-33b4-534bd46306bf" style="background-color: rgb(255, 255, 255); margin-left:30px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <div class="c-services__card-outer " style="background-color:white; color:black; width:300px; height:240px " >
              <div style="" class="c-services__card-inner"><img src="https://merafuture.pk/images/icon15.svg" width="64" alt="" class="margin-bottom">
                <h4 style="" class="c-services__header">Subject Areas </h4>
               <p>Your strong <b>Knowledge </b>base  </p>
                <div class="iconfont"><em class="iconfont__no-italize"></em></div>
              </div>
            </div>
          </a>
      </div>
        </div>
       
     



  <div class="col-md-6 order-md-1" style="margin-top: 50px;">
    <h2 class="featurette-heading" style="margin-left: 40px;">What does our test assess?</h2>
    <p class="lead" style="text-align: justify; margin-left: 40px;">To understand your strengths & skills combined with all-inclusive coaching for successful engagements. With a focused career counselling approach & to guide you through the relevant options considering both plan and purpose.</p>
    <button class="btn btn-warning btn-lg" style="text-align: center; margin-left: 40px;">Know more about the test</button>
  <br><br><br>


      </div>
  
  </div>



<br>
<br>

<!--The Process of career counselling-->

<div class="row featurette" style=" background-color:#F5F5F5; ">
  
  <div class="col-md-6 order-md-1" style=" text-align:justify;">
    <h2 class="featurette-heading"  style="margin-left: 40px;">The process of career counselling</h2>
    <p class="lead" style="text-align: justify; margin-left: 40px;">We guide you through career assessment, career transition, and other career-related trends & challenges. With the all-embracing step-by-step systematic procedure, we identify your needs and rec</p>
    <button class="btn btn-warning btn-lg" style="text-align: center; margin-left: 40px;">Take You Test</button>
  </div>
  <div class="col-md-6 order-md-1">
        <div class="container position-relative md-margin-bottom container-nested">
          <div class="c-process__line is-brand-color-2 hidden-md"></div>
          
          <div class="col lg-2   xs-12">
            <div class="margin-bottom-double text-align-center">
              <div class="c-process__step-no is-brand-color-2"></div>
            </div>
            <h4>Complete your profile</h4>
          </div>
          
          <div class="col lg-2  xs-12 ">
            <div class="margin-bottom-double text-align-center">
              <div class="c-process__step-no is-brand-color-2"></div>
            </div>
            <h4>Pay Fees</h4>
          </div>
          <div class="col lg-2   xs-12">
            <div class="margin-bottom-double text-align-center">
              <div class="c-process__step-no is-brand-color-2"></div>
            </div>
            <h4>Take the Multidimensional Career Counselling Test (MCCT)</h4>
          </div>
          <div class="col lg-2  xs-12">
            <div class="margin-bottom-double text-align-center">
              <div class="c-process__step-no is-brand-color-2"></div>
            </div>
            <h4>Instantly get your Career Assessment Report (CAR) </h4>
          </div>
          <div class="col lg-2  xs-12">
            <div class="margin-bottom-double text-align-center">
              <div class="c-process__step-no is-brand-color-2"></div>
            </div>
            <h4>Book an appointment with a career counsellor (optional) </h4>
          </div>
          
        </div>
      </div>

  
</div>



<!--Our Fees-->

<h1 style="text-align:center; font-size:36px; color:black; margin-top:30px;">Our Fees</h1>

<div class="container" style=" width:100%; display:flex; margin-top:30px; background-color:#FAFAFA; ">
  <div class="col-lg-4" style="text-align: center; border-radius: 10px; border:0px; " >
  <i class="fa fa-graduation-cap" aria-hidden="true" ></i>
  <br>
  <br>
    <h5>Multidimensional Career Counselling Test @PKR 1000</h5>
    <p>6 Personality Types</p><hr>
    <p>10 Interest Fields</p><hr>
    <p>6 Subjects Areas</p><hr>
    <p>30 Pages Career Assessment Report (CAR)</p><hr>
    <p>Results of all dimensions with Career Suggestions </p><hr>
    <p>Two suitable Education Fields with Degree Options</p><hr>
    <p>Career Suggestions</p><hr>
    <p>10th and 12th Grade Subject Recommendations.</p><hr>
    <p>Pay through Jazz Cash Mobile Account, Jazz Cash Voucher, Debit/Credit Card </p><hr>
    

    <p><a class="btn btn-warning" href="clientlogin.php" role="button">Take Test »</a></p>
    <p><a  href="assets/Lady Cadet Course.pdf" class="btn btn-warning" href="#" role="button">Sample Career Report »</a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4" style="text-align: center; border-radius: 10px; margin-left:20px;  border:0px; ">
  <i class="fa fa-user" aria-hidden="true"></i>
  <br>
  <br>
    
    <h5>One on One Career Counselling Session @PKR 5000</h5>
  
    <p >Session with a Dedicated Career Counsellor </p><hr>
    <p>Duration: 1 Hour</p><hr>
    <p>Online:  Through Skype/Whatsapp/Zoom</p><hr>
    <p>30 Pages Career Assessment Report (CAR)</p><hr>
    <p>Discussion of Test Results </p><hr>
    <p>Two suitable Education Fields with Degree Options</p><hr>
    <p>Career Suggestions</p><hr>
    <p>10th and 12th Grade Subject Recommendations.</p><hr>
    <p>Pay through Jazz Cash Mobile Account, Jazz Cash Voucher, Debit/Credit Card </p><hr>
    
    <p><a class="btn btn-warning" href="clientlogin.php" role="button">Book Session(After Test)»</a></p>
    <p><a class="btn btn-warning" href="assets/MerafutureCareerPlan.pdf" role="button">Sample Action Report » </a></p>
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4" style="text-align: center; border-radius: 10px;  margin-left:20px;  border:0px;">
  <i class="fa fa-users" aria-hidden="true"></i>
  <br>
  <br>
  <h5>Schools, Colleges, Group Package @ 2000</h5>
    <p>Available for Schools, Colleges, Coaching Centers and Groups  </p><hr>
    <p>Multidimensional Career Counselling Test (MCCT)</p><hr>
    <p>30 pages Career Assessment Report</p><hr>
    <p>40 Minutes One on One Career Session after the Test  </p><hr>
    <p>Results of all dimensions with Career Suggestions </p><hr>
    <p>Two suitable Education Fields with Degree Options</p><hr>
    <p>Career Suggestions</p><hr>
    <p>10th and 12th Grade Subject Recommendations.</p><hr>
   
    <p><a class="btn btn-warning" href="#" role="button">Contact Us»</a></p><br>
   
  </div><!-- /.col-lg-4 -->
</div>

<br><br>

<h2 style="text-align:center; font-size:26px;"><a href="#"> Fresh From Our Blog</a></h2>

<br>
<br>
<!--Cards-->

<div class="card-group">
  <div class="card" style="margin-left: 30px;">
    <img src="assets/img/news-31.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="color: #DCDCDC;">Blog</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card"style="margin-left: 30px;">
    <img src="assets/img/news-32.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="color: #DCDCDC;">Blog</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card" style="margin-left: 30px; margin-right:30px;">
    <img src="assets/img/news-33.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="color: #DCDCDC;">Blog</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>


<br>
<br>




<!--Gradutes from-->

<h1 style="text-align:center; font-size:30px; color:black;">Brought to you by Graduates from</h1>
<br><br>
<!--Our Clients-->


<div class="container flexh-align-center">
    <div id="owl-demo3" class="owl-carousel owl-theme owl-loaded owl-drag">
    <style>.owl-item {

animation: move 10s infinite;

}

@keyframes move {
0%   {left: -200px; }
25%  { left: -400px;}
50%  { left: 0px;}
75%  { left: 200px;}
100% { left: 300px;}
}</style>
            
       
    <div class="owl-stage-outer">
    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.5s ease 0s; width: 1560px;">
      <div class="owl-item active" style="width: 195px;">
        <div class="item"><img src="assets/img/1.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item active" style="width: 195px;">
      <div class="item"><img src="assets/img/2.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item active" style="width: 195px;">
      <div class="item"><img src="assets/img/9.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item active" style="width: 195px;">
      <div class="item"><img src="assets/img/4.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item active" style="width: 195px;">
      <div class="item"><img src="assets/img/5.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item active" style="width: 195px;">
      <div class="item"><img src="assets/img/6.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item" style="width: 195px;">
      <div class="item"><img src="assets/img/7.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item" style="width: 195px;">
      <div class="item"><img src="assets/img/8.png" alt="Owl Image" class="img-fluid"></div></div>
    </div>
  </div>
<div class="owl-dots"><button role="button" class="owl-dot"></button></div></div>
     </div><br><br><br>



<!--Our Clients-->

<div class="container flexh-align-center">
<h1 style="text-align:center; font-size:30px; color:black;">Our Clients and Partners</h1>
<br><br>
    <div id="owl-demo3" class="owl-carousel owl-theme owl-loaded owl-drag">
    <style>.owl-item {

animation: mymove 10s infinite;

}

@keyframes mymove {
0%   {left: -300px; }
25%  { left: -600px;}
50%  { left: -300px;}
75%  { left: 0px;}
100% { left: -300px;}
}</style>
            
       
    <div class="owl-stage-outer">
    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0.5s ease 0s; width: 1560px;">
      <div class="owl-item active" style="width: 195px;">
        <div class="item"><img src="https://merafuture.pk/public/uploads/photo-31.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item active" style="width: 195px;">
      <div class="item"><img src="https://merafuture.pk/public/uploads/photo-32.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item active" style="width: 195px;">
      <div class="item"><img src="https://merafuture.pk/public/uploads/photo-33.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item active" style="width: 195px;">
      <div class="item"><img src="https://merafuture.pk/public/uploads/photo-34.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item active" style="width: 195px;">
      <div class="item"><img src="https://merafuture.pk/public/uploads/photo-35.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item active" style="width: 195px;">
      <div class="item"><img src="https://merafuture.pk/public/uploads/photo-36.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item" style="width: 195px;">
      <div class="item"><img src="https://merafuture.pk/public/uploads/photo-37.png" alt="Owl Image" class="img-fluid"></div></div>
      <div class="owl-item" style="width: 195px;">
      <div class="item"><img src="https://merafuture.pk/public/uploads/photo-38.png" alt="Owl Image" class="img-fluid"></div></div>
    </div>
  </div>
  <div class="owl-dots"><button role="button" class="owl-dot"></button></div></div>
     </div><br><br><br>


<h2 style="text-align:center; font-size:26px; color:black;">News And Events</h2>
<br><br>
<!--cards-->

<div class="card-group" style=" margin-bottom:50px;">
<div class="card" style="margin-left: 30px; margin-right:30px;">
    <img src="assets/img/a1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="color: #DCDCDC;">News</h5>
      <p class="card-text" style="font-size: 22px;">Merafuture get future at phone world</p>
      <p class="card-text"><small class="text-muted">09 Oct 2020</small></p>
    </div>
  </div>
  
  <div class="card" style="margin-left: 30px; margin-right:30px;">
    <img src="assets/img/a2.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title"  style="color: gray">News</h5>
      <p class="card-text" style="font-size: 22px;">Free Career Counselling seminar for Schools and Colleges</p>
      <p class="card-text"><small class="text-muted">21 Oct 2020</small></p>
    </div>
  </div>
  <div class="card" style="margin-left: 30px; margin-right:30px;">
    <img src="assets/img/a1.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="color: #DCDCDC;">News</h5>
      <p class="card-text" style="font-size: 22px;">Prepare how joinhands on mera future</p>
      <p class="card-text"><small class="text-muted">15 July 2020</small></p>
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














<!-- <script src="jquery.min.js"></script> -->
<script src="jquery.min.js"></script>
<script src="assets\OwlCarousel\dist\owl.carousel.min.js"></script>
<script src="assets\OwlCarousel\owl.js"></script>


<!--Script for Language-->
<script>

function set_language(){
  var language=jQuery('#language').val();
  window.location.href='http://localhost/merafuture/index.php/?language='+language;
}
</script>

    
    
</body>
</html>



















