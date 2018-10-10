<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
    <link rel="stylesheet" href="boot/css/bootstrap.css"/>
    <link rel="stylesheet" href="boot/css/mine.css"/>	
    <script src= "boot/js/jquery.min.js"></script>
    <script src= "boot/js/bootstrap.js"></script>
</head>
<body>
	<?php
session_start();
if (!isset($_SESSION['email'])) {
include 'nav.php';
}
else{
   include 'nav2.php'; 
}

?>
<div class="jumbotron text-center">
  <br>
  <br>
	<h2 id="navText">Providing High quality help on your way to scholarly excellence</h2>
      <h3 id="navText">Get your custom essay crafted by a competent writer</h3>
      <br>
      <br>
      <br>
</div>

<div class="container container-fluid">
  <div class="row">
    <div class="col-md-6">
      <h2>Welcome to our site!</h2><br>
      <p>This marks the end of your search on finding professionals to craft your custom essays.Whether you have come to ask a question or get your essay done,you will find the appropriate help here</p><br>

      <ul style="list-style-type: circle;">
      	<li>We guarantee that each essay ordered is written by an experienced writer and customized to suit your needs</li>
      	<li>We are proffesional,educated,experienced and dedicated to your success </li>
      	<li>We offer quality academic help at incredibly low prices</li>
      </ul><br>


      <p>We are here to guide you through the whole process and ensure your satisfaction at the end of it all.Get in touch with us today and let us guide you through.</p>



      
    </div>
    <div class="col-md-6" style="max-width: 100%;">
      <img src="images/image3.jpg" alt="loading image">
    </div>
  </div>
</div>

<br>
<br>

<div class="container-fluid bg-grey">
  <div class="container">
    <h2 style="text-align: center;">Quality is our priority</h2><br>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="images/image1.jpg"  alt="loading">
      <p>We are dedicated to finding the best writers who will craft your essays professionally to suit your needs.Each essay will be perfectly tailored for you.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="images/image4.jpg" alt="loading">
      <p>We are focused on providing quality at a pocket friendly price.Contact us today and be part of this experience.An experience of quality work delivered in a timely manner.
      </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <img src="images/image5.jpg" alt="loading">
      <p>Well you can relax as we understand the importance of confidentiality in our business.Our cooperations will remain between us as usual</p>
      </div>
    </div>
  
</div>
   <h2 style="text-align: center;">What our Clients say</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>"Quality work delivered in a timely fashion"<br><span style="font-style:normal;">Eugene Maseria ,Student</span></h4>
    </div>
    <div class="item">
      <h4>"They have the best writers in the market"<br><span style="font-style:normal;">Joel Mungai, Student</span></h4>
    </div>
    <div class="item">
      <h4>"Best place to get help with writing online"<br><span style="font-style:normal;">Keith Ochieng, Student</span></h4>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
</div>
<?php include 'footer.php' ?>

</body>
</html>