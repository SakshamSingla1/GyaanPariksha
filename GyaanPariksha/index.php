<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Onine examiner</title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.min.css"/>
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/font.css">
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value;
  var letters = /^[A-Za-z]+$/;
  if (y == null || y == "") {
    alert("Name must be filled out.");
    return false;
  }
  var z = document.forms["form"]["college"].value;
  if (z == null || z == "") {
    alert("college must be filled out.");
    return false;
  }
  var x = document.forms["form"]["email"].value;
  var atpos = x.indexOf("@");
  var dotpos = x.lastIndexOf(".");
  if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
    alert("Not a valid e-mail address.");
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if (a == null || a == "") {
    alert("Password must be filled out");
    return false;
  }
  if (a.length < 5 || a.length > 25) {
    alert("Passwords must be 5 to 25 characters long.");
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a != b) {
    alert("Passwords must match.");
    return false;
  }
}
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body {
  font: 400 15px Lato, sans-serif;
  line-height: 1.8;
  color: #818181;
}
h2 {
  font-size: 24px;
  text-transform: uppercase;
  color: #303030;
  font-weight: 600;
  margin-bottom: 30px;
}
h4 {
  font-size: 19px;
  line-height: 1.375em;
  color: #303030;
  font-weight: 400;
  margin-bottom: 30px;
}
.jumbotron {
  background: url(img/backg.png);
  background-size: stretch;
  background-repeat: no-repeat;
  background-position: center;
  color: #fff;
  padding: 100px 25px;
  font-family: Montserrat, sans-serif;
}
.container-fluid {
  padding: 60px 50px;
}
.bg-grey {
  background-color: #f6f6f6;
}
.logo-small {
  color: #150079;
  font-size: 50px;
}
.logo {
  color: #150079;
  font-size: 200px;
}
.thumbnail {
  padding: 0 0 15px 0;
  border: none;
  border-radius: 0;
}
.thumbnail img {
  width: 100%;
  height: 100%;
  margin-bottom: 10px;
}
.carousel-control.right,
.carousel-control.left {
  background-image: none;
  color: #150079;
}
.carousel-indicators li {
  border-color: #f4511e;
}
.carousel-indicators li.active {
  background-color: #f4511e;
}
.item h4 {
  font-size: 19px;
  line-height: 1.375em;
  font-weight: 400;
  font-style: italic;
  margin: 70px 0;
}
.item span {
  font-style: normal;
}
.panel {
  border: 1px solid #150079;
  border-radius: 0 !important;
  transition: box-shadow 0.5s;
}
.panel:hover {
  box-shadow: 5px 0px 40px rgba(0, 0, 0, 0.2);
}
.panel-footer .btn:hover {
  border: 1px solid #f4511e;
  background-color: #fff !important;
  color: #f4511e;
}
.panel-heading {
  color: #fff !important;
  background-color: #f4511e !important;
  padding: 25px;
  border-bottom: 1px solid transparent;
  border-radius: 0px;
}
.panel-footer {
  background-color: white !important;
}
.panel-footer h3 {
  font-size: 32px;
}
.panel-footer h4 {
  color: #aaa;
  font-size: 14px;
}
.panel-footer .btn {
  margin: 15px 0;
  background-color: #f4511e;
  color: #fff;
}
.navbar {
  margin-bottom: 0;
  background-color: #f4511e;
  z-index: 9999;
  border: 0;
  font-size: 12px !important;
  line-height: 1.42857143 !important;
  letter-spacing: 4px;
  border-radius: 0;
  font-family: Montserrat, sans-serif;
}
.navbar li a,
.navbar .navbar-brand {
  color: #150079 !important;
}
.navbar-nav li a:hover,
.navbar-nav li.active a {
  color: #150079 !important;
  background-color: #fff !important;
}
.navbar-default .navbar-toggle {
  border-color: transparent;
  color: #fff !important;
}
footer .glyphicon {
  font-size: 20px;
  margin-bottom: 20px;
  color: #150079;
}
.slideanim {
  visibility: hidden;
}
.slide {
  animation-name: slide;
  -webkit-animation-name: slide;
  animation-duration: 1s;
  -webkit-animation-duration: 1s;
  visibility: visible;
}
@keyframes slide {
  0% {
    opacity: 0;
    transform: translateY(70%);
  }
  100% {
    opacity: 1;
    transform: translateY(0%);
  }
}
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  .flip-card-inner {
  position: relative;
  width: 100%;
  height: 400px;
  transform-style: preserve-3d;
  transition: transform 0.6s;
}

.thumbnail:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front,
.flip-card-back {
  position: absolute;
  width: 300px;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #fff;
}

.flip-card-back {
  transform: rotateY(180deg);
  background-color: #fff;
  color: #000;
  height: 400px;
  padding: 20px;
}

.flip-card-back h4 {
  margin-top: 0;
}

.flip-card-back p {
  margin-bottom: 5px;
}
  </style>
</head>
<body>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><span class="glyphicon glyphicon-home"></span></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" data-toggle="modal" data-target="#login">ADMIN</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal">SIGN IN</a></li>
        <li><a href="#" data-toggle="modal" data-target="#myModal1">SIGN UP</a></li>
        <li><a href="#" data-toggle="modal" data-target="#login2">TEACHER</a></li>
        <li><a href="#services" >SERVICES</a></li>
        <li><a href="#developers">DEVELOPERS</a></li>
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="jumbotron text-center">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</div>
<!-- Container (Admin Section) -->
<div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title">
          <span style="color:#150079;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; ">
            <b>LOGIN - ADMIN</b>
          </span>
        </h4>
      </div>
      <div class="modal-body title1">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
            <form role="form" method="post" action="head.php?q=index.php">
              <div class="form-group">
                <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control"/>
              </div>
              <div class="form-group">
                <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
              </div>
              <div class="form-group text-center">
                <input type="submit" name="login" value="Login" class="btn btn-primary" />
              </div>
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div> -->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!----Teacher signin--->
<div class="modal fade" id="login2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:#150079;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>LOGIN -TEACHER</b></span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Teacher user id" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login2" value="Login" class="btn btn-primary" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission is using one platform for examinations. Reduce paperwork and offering quick and accurate results. </h4><br>
      <p><strong>VISION:</strong> Our vision of Online Exam System is more popularly helps for our modern age system. It helps us to use the present  technology into examiantion system . It can be helpful for quick and accurate results.Through it helps for only limited sector of people , it is cost efficient , eco friendly and so on.</p>
    </div>
  </div>
</div>



<!-- Container (USERS section) -->
<!--sign in modal start-->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span style="color:#150079;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>LOGIN -USER</b></span></h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="login.php?q=index.php" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="email"></label>  
  <div class="col-md-6">
  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
    
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Log in</button>
    </fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign in modal closed-->

<!--sign up modal start-->
<div class="modal fade" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content title1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title title1"><span  style="color:#150079;font-family:Montserrat, sans-serif; font-size: 20px !important;letter-spacing: 4px; "><b>SIGN UP</b></span></h4>
      </div>
      <div class="modal-body">
       <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="name"></label>  
  <div class="col-md-6">
  <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="gender"></label>
  <div class="col-md-6">
    <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" >
   <option value="Male">Select Gender</option>
  <option value="M">Male</option>
  <option value="F">Female</option> </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="name"></label>  
  <div class="col-md-6">
  <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label title1" for="email"></label>
  <div class="col-md-6">
    <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="mob"></label>  
  <div class="col-md-6">
  <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number">
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label" for="password"></label>
  <div class="col-md-6">
    <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-3 control-label" for="cpassword"></label>
  <div class="col-md-6">
    <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password">
    
  </div>
</div>
<?php if(@$_GET['q7'])
{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
<!-- Button -->
<div class="form-group">
  <label class="col-md-3 control-label" for=""></label>
  <div class="col-md-6"> 
  <button type="submit" class="btn btn-primary">Sign Up</button>
  </div>
</div>
</fieldset>
</form>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--sign up modal closed-->
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What We Offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <i class="material-icons" style="font-size: 60px; color: #150079;">group_add</i>
      <h4>e-Examination</h4>
      <p>Seamless online examination experience for multiple users</p>
    </div>
    <div class="col-sm-4">
      <i class="material-icons" style="font-size: 60px; color: #150079;">attach_money</i>
      <h4>Cost Optimized</h4>
      <p>Reduces paperwork and saves costs</p>
    </div>
    <div class="col-sm-4">
      <i class="material-icons" style="font-size: 60px; color: #150079;">thumb_up</i>
      <h4>User Satisfaction</h4>
      <p>Ensuring user satisfaction is our top priority</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <i class="material-icons" style="font-size: 60px; color: #150079;">eco</i>
      <h4>Environmentally Friendly</h4>
      <p>Promoting eco-friendly practices with paperless exams</p>
    </div>
    <div class="col-sm-4">
      <i class="material-icons" style="font-size: 60px; color: #150079;">verified_user</i>
      <h4>Certified</h4>
      <p>Government of India certified platform</p>
    </div>
    <div class="col-sm-4">
      <i class="material-icons" style="font-size: 60px; color: #150079;">mail</i>
      <h4 style="color: #303030;">Contact Us</h4>
      <p>Directly reach out to us for any assistance</p>
    </div>
  </div>
</div>
<!-- Container (Portfolio Section) -->
<div id="developers" class="container-fluid text-center bg-grey">
  <h2>Developers</h2><br>
  <h4>Who are we</h4>
  <div class="row text-center slideanim">
    <div class="col-sm-3">
      <div class="thumbnail" onclick="flipFrame(this, 'Saksham Singla', '+91 7082158997', 'sksingla135@gmail.com')">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/Saksham.png" alt="SAKSHAM" style="width: 300px; height: 400px;">
            <p><strong>SAKSHAM SINGLA</strong></p>
            <p>MMDU BTech CSE 3rd year</p>
          </div>
          <div class="flip-card-back">
            <h4>Contact Details</h4>
            <p><strong>Phone:</strong> <a href="tel:+917082158997">+91 7082158997</a></p>
            <p><strong>Email:</strong> <a href="mailto:sksingla135@gmail.com">sksingla135@gmail.com</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail" onclick="flipFrame(this, 'Kartik Saini', '+91 7027479087', 'kartiksaini2800@gmail.com')">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/KARTIK.jpg" alt="KARTIK" style="width: 300px; height: 400px;">
            <p><strong>KARTIK SAINI</strong></p>
            <p>MMDU BTech CSE 3rd year</p>
          </div>
          <div class="flip-card-back">
            <h4>Contact Details</h4>
            <p><strong>Phone:</strong> <a href="tel:+917027479087">+91 7027479087</a></p>
            <p><strong>Email:</strong> <a href="mailto:kartiksaini2800@gmail.com">kartiksaini2800@gmail.com</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail" onclick="flipFrame(this, 'Subodh', '+91 9128954838', 'sk0737564@gmail.com')">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/SUBODH.png" alt="SUBODH" style="width: 300px; height: 400px;">
            <p><strong>SUBODH</strong></p>
            <p>MMDU BTech CSE 3rd year</p>
          </div>
          <div class="flip-card-back">
            <h4>Contact Details</h4>
            <p><strong>Phone:</strong> <a href="tel:+919128954838">+91 9128954838</a></p>
            <p><strong>Email:</strong> <a href="mailto:sk0737564@gmail.com">sk0737564@gmail.com</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail" onclick="flipFrame(this, 'Abhishek Bansal', '+91 9588711448', 'abhishekbansal7402@gmail.com')">
        <div class="flip-card-inner">
          <div class="flip-card-front">
            <img src="img/ABHI.png" alt="ABHISHEK" style="width: 300px; height: 400px;">
            <p><strong>ABHISHEK BANSAL</strong></p>
            <p>MMDU BTech CSE 3rd year</p>
          </div>
          <div class="flip-card-back">
            <h4>Contact Details</h4>
            <p><strong>Phone:</strong> <a href="tel:+919588711448">+91 9588711448</a></p>
            <p><strong>Email:</strong> <a href="mailto:abhishekbansal7402@gmail.com">abhishekbansal7402@gmail.com</a></p>
          </div>
        </div>
      </div>
    </div>
  </div><br> 
</div>
<!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About GyaanPariksha - Online Examination System</h2><br>
      <h4>The GyaanPariksha is a comprehensive platform designed to conduct online tests and assess the knowledge of participants on various subjects. Gone are the days when exams had to be conducted in a physical classroom, requiring everyone to be present simultaneously. With GyaanPariksha, students can now take exams conveniently online, at their own pace, and using their own devices, regardless of their location. All that's needed is a web browser and an internet connection.</h4><br>
      <p>GyaanPariksha provides a flexible and efficient solution for conducting online examinations. It offers a range of features to fulfill diverse examination requirements. The system enables the creation and management of a question repository, allowing instructors to generate customized exams at a later stage. This flexibility empowers educators to design online quizzes according to their preferences. Additionally, GyaanPariksha provides automated paper grading, streamlining the evaluation process.</p> 
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Have a question or want to get in touch? Fill out the form below and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> HARYANA, INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span> <a href="tel:+917082158997">+91 7082158997</a></p>
      <p><span class="glyphicon glyphicon-envelope"></span> <a href="mailto:sksingla135@gmail.com">sksingla135@gmail.com</a></p>
    </div>
    <div class="col-sm-7 slideanim">
      <?php 
      if (@$_GET['q']) {
        echo '<span style="font-size:18px;"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;'.@$_GET['q'].'</span>';
      } else {
        echo '
        <form role="form" method="post" action="feed.php?q=index.php">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Your Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Your Email" type="email" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
              <textarea class="form-control" id="comments" name="feedback" placeholder="Your Message" rows="4" required></textarea>
            </div>
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" name="submit" input type="submit">Send Message</button>
            </div>
          </div>
        </form>';
      }
      ?>
    </div>
  </div>
</div>
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>Thank you for visiting us.</p>
	<p>&copy; 2023 GyaanPariksha - Online Examination System</p>
  <p></p>
</footer>
<script>
$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        window.location.hash = hash;
      });
    } 
  });
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
function flipFrame(frame, name, phone, email) {
  frame.classList.toggle('flip');
  if (frame.classList.contains('flip')) {
    frame.querySelector('.flip-card-back h4').innerText = name;
    frame.querySelector('.flip-card-back a[href^="tel:"]').href = 'tel:' + phone;
    frame.querySelector('.flip-card-back a[href^="mailto:"]').href = 'mailto:' + email;
  }
}
</script>
</body>
</html>