<?php

include './dbconnect.php';
include './functions.php';

$smallPriceVar[] = array();
$var=0;

$db = getDatabase();


$stmt = $db->prepare("SELECT * FROM about");
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results);

            
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<title>Slice of Heaven - Contact</title><!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"><!-- Custom fonts for this template -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css"><!-- Custom styles for this template -->
	<link href="css/business-casual.css" rel="stylesheet">
</head>
<body>
	<div id="fb-root"></div>
	<script>
	      (function(d, s, id) {
	           var js, fjs = d.getElementsByTagName(s)[0];
	           if (d.getElementById(id)) return;
	           js = d.createElement(s); js.id = id;
	           js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
	           fjs.parentNode.insertBefore(js, fjs);
	         }(document, 'script', 'facebook-jssdk'));
	</script>
	<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">
		Slice of Heaven
	</div><!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
		<div class="container">
			<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Slice of Heaven</a> <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="index.php">Home</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="menu.php">Menu</a>
					</li>
					<li class="nav-item active px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="contact.php">Contact (current)</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="about.php">About Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="bg-faded p-4 my-4">
			<hr class="divider">
			<h2 class="text-center text-lg text-uppercase my-0">Contact <strong>Slice of Heaven</strong></h2>
			<hr class="divider">
			<div class="row">
				<div class="col-lg-8">
					<div id="map" style="width:100%;height:300px"></div>
					<script>
					                                             function myMap() {
					                                               var myCenter = new google.maps.LatLng(42.115298,-71.865509);
					                                               var mapCanvas = document.getElementById("map");
					                                               var mapOptions = {center: myCenter, zoom: 17};
					                                               var map = new google.maps.Map(mapCanvas, mapOptions);
					                                               var marker = new google.maps.Marker({position:myCenter});
					                                               marker.setMap(map);
					                                             }
					</script> 
					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnPa8PZv1pn9IuHRFTfjnkxQK_sxtDgOY&callback=myMap">
					</script>
				</div>
				<div class="col-lg-4">
					<?php foreach ($results as $row): ?>
					<h5 class="mb-0">Store Hours:</h5>
					<div class="mb-4">
						<?php echo $row["hours"] ?>
					</div>
					<h5 class="mb-0">Phone:</h5>
					<div class="mb-4">
						<?php echo $row["phone"] ?>
					</div>
					<h5 class="mb-0">Address:</h5>
					<div class="mb-4">
						<?php echo $row["Address"] ?><?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.container -->
	<footer class="bg-faded text-center py-5">
		<div class="container">
			<?php foreach ($results as $row): ?><b>Store Hours:</b> <?php echo $row["hours"] ?> <b>Phone:</b> <?php echo $row["phone"] ?> <b>Address:</b> <?php echo $row["Address"] ?><br>
			<p class="m-0">Copyright &copy; NoJo 2017</p><br>
			<?php endforeach; ?>
		</div><iframe frameborder="0" height="35" scrolling="no" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fsliceofheavenoxford&width=450&layout=standard&action=like&size=small&show_faces=false&share=true&height=35&appId" style="border:none;overflow:hidden" width="450"></iframe>
	</footer><!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js">
	</script> 
	<script src="vendor/popper/popper.min.js">
	</script> 
	<script src="vendor/bootstrap/js/bootstrap.min.js">
	</script> <!-- Zoom when clicked function for Google Map -->
	 
	<script>
	           $('.map-container').click(function () {
	             $(this).find('iframe').addClass('clicked')
	           }).mouseleave(function () {
	             $(this).find('iframe').removeClass('clicked')
	           });
	</script>
</body>
</html>