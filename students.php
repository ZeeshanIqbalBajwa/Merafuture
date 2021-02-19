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


    <div class="jumbotron p-4 p-md-5 text-white rounded " style="background-image: url(assets/img/yellow.jpg)">
        <div class="col-md-12 px-0" ><br>
            <br>
            <h1 class="display-4 font-italic">Students and Parents</h1>
            <br>
            <br>

        </div>
    </div>

    <!--textArea 01 -->

    <div class="card" style="margin-top: 50px;">
        <div class="card-body">
            <center>
                <h1 class="card-title">Aptitude Testing and Career Counselling by Merafuture</h1>
                <p class="card-text" style="font-size:20px;">Watch these short videos to set better goals and make
                    informed decisions throughout career development.</p>
            </center>
        </div>
    </div>




    <!--Sliding videos-->

<!--Sliding videos01-->
        
<div id="owl-videos" class="owl-carousel owl-theme owl-loaded owl-drag">
          
      
     
    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1170px, 0px, 0px); transition: all 0.25s ease 0s; width: 8970px;"><div class="owl-item cloned" style="width: 390px;"><div class="item">
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
      </div></div></div></div></div>
<br>
<br>
<br>

    <!--text 01-->
    <h2 style="text-align:center;">
    Tell me more about the tests
</h2>

<br>
<!--tab group-->
<div class="container">
  
  <div class="col-lg-12">
    <div class="tab-content panels-faq">
      <div class="tab-pane active" id="tab1">
        <div class="panel-group" id="help-accordion-1" style="background-color: #ECECEC;">
          <div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#opret-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading" style="color:black;">
                <p style="font-size:22px; font-weight:bold;">How do I edit my profile?</p>
              </div>
            </a>
            <div id="opret-produkt" class="collapse in">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#rediger-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading" style="color:black;">
              <p style="font-size:22px; font-weight:bold;">How do I upload a new profile picture?</p>
              </div>
            </a>
            <div id="rediger-produkt" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#a" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading" style="color:black;">
              <p style="font-size:22px; font-weight:bold;">How can i create a new account for me?</p>
              </div>
            </a>
            <div id="a" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#b" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading" style="color:black;">
              <p style="font-size:22px; font-weight:bold;">Which university suits me according to my Qualification?</p>
              </div>
            </a>
            <div id="b" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#c" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading" style="color:black;">
              <p style="font-size:22px; font-weight:bold;">Number of Students enroll in all universities?</p>
              </div>
            </a>
            <div id="c" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#rediger-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading" style="color:black;">
              <p style="font-size:22px; font-weight:bold;">How do I upload a new profile picture?</p>
              </div>
            </a>
            <div id="rediger-produkt" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
         <div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#rediger-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading" style="color:black;">
              <p style="font-size:22px; font-weight:bold;">How do I upload a new profile picture?</p>
              </div>
            </a>
            <div id="rediger-produkt" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div><div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#red" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading" style="color:black;">
              <p style="font-size:22px; font-weight:bold;">How do I upload a new profile picture?</p>
              </div>
            </a>
            <div id="red" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#ret-pris" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading" style="color:black;">
              <p style="font-size:22px; font-weight:bold;">Can I change my phone number?</p>
              </div>
            </a>
            <div id="ret-pris" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#slet-produkt" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading" style="color:black;">
              <p style="font-size:22px; font-weight:bold;">Where do I change my privacy settings?</p>
              </div>
            </a>
            <div id="slet-produkt" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
          <div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#opret-kampagne" data-toggle="collapse" data-parent="#help-accordion-1">
              <div class="panel-heading" style="color:black;">
              <p style="font-size:22px; font-weight:bold;">What is this?</p>

              </div>
            </a>
            <div id="opret-kampagne" class="collapse">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="tab2">
        <div class="panel-group" id="help-accordion-2">      
          <div class="panel panel-default panel-help" style="margin: 30px;">
            <a href="#help-three" data-toggle="collapse" data-parent="#help-accordion-2">
              <div class="panel-heading" style="color:black;">
              <p style="font-size:22px; font-weight:bold;">Lorem ipsum?</p>
              </div>
            </a>
            <div id="help-three" class="collapse in">
              <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus nesciunt ut officiis accusantium quisquam minima praesentium, beatae fugit illo nobis fugiat adipisci quia distinctio repellat culpa saepe, optio aperiam est!</p>
                <p><strong>Example: </strong>Facere, id excepturi iusto aliquid beatae delectus nemo enim, ad saepe nam et.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
</div>


<br>
<br>
<br>

<h2 style="text-align:center; font-size:26px;"><a href="#"> Fresh From Our Blog</a></h2>

<br>
<br>
<!--Cards-->

<div class="card-group">
  <div class="card" style="margin-left: 30px;">
    <img src="assets/img/news-31.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card"style="margin-left: 30px;">
    <img src="assets/img/news-32.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card" style="margin-left: 30px; margin-right:30px;">
    <img src="assets/img/news-33.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>


<br>
<br>
<br>
<br>
<h2 style="text-align:center; font-size:26px;">News And Events</h2>
<br><br>
<!--cards-->

<div class="card-group">
<div class="card" style="margin-left: 30px; margin-right:30px;">
    <img src="assets/img/a.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  
  <div class="card" style="margin-left: 30px; margin-right:30px;">
    <img src="assets/img/b.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card" style="margin-left: 30px; margin-right:30px;">
    <img src="assets/img/news-31.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>



<br>
<br>

<br>
<br>

<br>
<br>






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





    <script src="bootstrap/js/index.js"></script>
    <script src="jquery.min.js"></script>
    <script src="assets\OwlCarousel\dist\owl.carousel.min.js"></script>
<script src="assets\OwlCarousel\owl.js"></script>
    <script src="index.js"></script>


</body>
</html>