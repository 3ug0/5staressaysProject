<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" href="boot/css/bootstrap.css"/>
    <link rel="stylesheet" href="boot/css/mine.css"/>	
    <script src= "boot/js/jquery.min.js"></script>
    <script src= "boot/js/bootstrap.js"></script>
</head>
<body>
	<?php include 'nav.php' ?>

	<div class="container-fluid bg-grey">
		<br>
		<br>
		<br>
		<div class="container">
			<h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Nairobi, Kenya</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> Joe.eliteresearch@gmail.com</p> 
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
		</div>
<br>
<br>
</div>

	
<?php include 'footer.php' ?>
</body>
</html>