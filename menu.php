<!DOCTYPE html>
<?php  

include './dbconnect.php';
include './functions.php';

$smallPriceVar[] = array();
$var=0;

$db = getDatabase();




$stmt40 = $db->prepare("SELECT * FROM about");
        $results40 = array();
        if ($stmt40->execute() && $stmt40->rowCount() > 0) {
            $results40 = $stmt40->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results);

            
        }

$stmt = $db->prepare("SELECT * FROM items WHERE catID = 1 && itemID % 2 = 0");
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results);

            
        }
                
?><?php $stmt2 = $db->prepare("SELECT * FROM items WHERE catID = 2 && itemID % 2 = 0");
        $results2 = array();
        if ($stmt2->execute() && $stmt2->rowCount() > 0) {
            $results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results);

            
        }
                
?><?php $stmt3 = $db->prepare("SELECT * FROM items WHERE catID = 13 && itemID % 2 = 0 || itemID=289 || itemID=291 || itemID=293 || itemID=303");
        $results3 = array();
        if ($stmt3->execute() && $stmt3->rowCount() > 0) {
            $results3 = $stmt3->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results3);

            
        }
                
?><?php $stmt4 = $db->prepare("SELECT * FROM items WHERE catID = 4 && itemID % 2 = 0");
        $results4 = array();
        if ($stmt4->execute() && $stmt4->rowCount() > 0) {
            $results4 = $stmt4->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results3);

            
        }
                
?><?php $stmt5 = $db->prepare("SELECT * FROM items WHERE catID = 5 && itemID % 2 = 0");
        $results5= array();
        if ($stmt5->execute() && $stmt5->rowCount() > 0) {
            $results5 = $stmt5->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results3);

            
        }
                
?><?php $stmt6 = $db->prepare("SELECT * FROM items WHERE catID = 3");
        $results6= array();
        if ($stmt6->execute() && $stmt6->rowCount() > 0) {
            $results6 = $stmt6->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results6);

            
        }
                
?><?php $stmt7 = $db->prepare("SELECT * FROM items WHERE catID = 12 && itemID % 2 = 0");
        $results7= array();
        if ($stmt7->execute() && $stmt7->rowCount() > 0) {
            $results7 = $stmt7->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results7);

            
        }
                
?><?php $stmt8 = $db->prepare("SELECT * FROM items WHERE catID = 10");
        $results8= array();
        if ($stmt8->execute() && $stmt8->rowCount() > 0) {
            $results8 = $stmt8->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results7);

            
        }
                
?><?php $stmt9 = $db->prepare("SELECT * FROM items WHERE catID = 6 && itemID % 2 = 0");
        $results9= array();
        if ($stmt9->execute() && $stmt9->rowCount() > 0) {
            $results9 = $stmt9->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results7);

            
        }
                
?><?php $stmt10 = $db->prepare("SELECT * FROM items WHERE catID = 7 && itemID % 2 = 0");
        $results10= array();
        if ($stmt10->execute() && $stmt10->rowCount() > 0) {
            $results10 = $stmt10->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results7);

            
        }
                
?><?php $stmt11 = $db->prepare("SELECT * FROM items WHERE catID = 11");
        $results11= array();
        if ($stmt11->execute() && $stmt11->rowCount() > 0) {
            $results11 = $stmt11->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results7);

            
        }
                
?><?php $stmt12 = $db->prepare("SELECT * FROM items WHERE catID = 18");
        $results12= array();
        if ($stmt12->execute() && $stmt12->rowCount() > 0) {
            $results12 = $stmt12->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results7);

            
        }
                
?><?php $stmt13 = $db->prepare("SELECT * FROM items WHERE catID = 9");
        $results13= array();
        if ($stmt13->execute() && $stmt13->rowCount() > 0) {
            $results13 = $stmt13->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results7);

            
        }
                
?><?php $stmt14 = $db->prepare("SELECT * FROM items WHERE catID = 14");
        $results14= array();
        if ($stmt14->execute() && $stmt14->rowCount() > 0) {
            $results14 = $stmt14->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results7);

            
        }
                
?><?php $stmt15 = $db->prepare("SELECT * FROM items WHERE catID = 16");
        $results15= array();
        if ($stmt15->execute() && $stmt15->rowCount() > 0) {
            $results15 = $stmt15->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results7);

            
        }
                
?><?php $stmt16 = $db->prepare("SELECT * FROM items WHERE catID = 15 && itemID % 2 = 0");
        $results16= array();
        if ($stmt16->execute() && $stmt16->rowCount() > 0) {
            $results16 = $stmt16->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results7);

            
        }
                
?><?php $stmt17 = $db->prepare("SELECT * FROM items WHERE catID = 17");
        $results17= array();
        if ($stmt17->execute() && $stmt17->rowCount() > 0) {
            $results17 = $stmt17->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results7);

            
        }
                
?>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<title>Slice of Heaven - Menu</title><!-- Bootstrap core CSS -->
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
					<li class="nav-item active px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="menu.php">Menu (current)</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="about.php">About Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav><button id="go_2_top" onclick="topFunction()" title="Go to top">Top</button>
	<div class="container">
		<div class="bg-faded p-4 my-4">
			<h2 class="text-center text-lg text-uppercase my-0"><strong>Specials</strong></h2>
			<hr class="divider">
			<br>
			<br>
			<div class="col-xs-12 col-md-12">
				<div class="row">
					<div class="col-xs-1 col-md-1"></div>
					<div class="col-md-2">
						<a href="#spcls">
						<div class="card h-100">
							<div class="card-body text-center">
								<h4 class="card-title m-0">Lrg 1-Topping Pizza, 10 Wings & A Salad<br>
								<small class="text-muted"><strong>$22.99 +tx</strong></small></h4>
							</div>
						</div></a>
					</div>
					<div class="col-xs-2 col-md-2">
						<a href="#spcls">
						<div class="card h-100">
							<div class="card-body text-center">
								<h4 class="card-title m-0">Large $ Cheese Pizza & 10 Wings<br>
								<br>
								<small class="text-muted"><strong>$14.99 +tx</strong></small></h4>
							</div>
						</div></a>
					</div>
					<div class="col-xs-2 col-md-2">
						<a href="#spcls">
						<div class="card h-100">
							<div class="card-body text-center">
								<h4 class="card-title m-0">2 Small 1-Topping Pizzas<br>
								<br>
								<br>
								<small class="text-muted"><strong>$12.99 +tx</strong></small></h4>
							</div>
						</div></a>
					</div>
					<div class="col-xs-2 col-md-2">
						<a href="#spcls">
						<div class="card h-100">
							<div class="card-body text-center">
								<h4 class="card-title m-0"><strong></strong>2 Large Cheese Pizzas<br>
								<br>
								<br>
								<small class="text-muted"><strong>$16.99 +tx</strong></small></h4>
							</div>
						</div></a>
					</div>
					<div class="col-xs-2 col-md-2">
						<a href="#spcls">
						<div class="card h-100">
							<div class="card-body text-center">
								<h4 class="card-title m-0">Buy Any 5 Pizzas Get 1 Free<br>
								<br>
								<br>
								<small class="text-muted"><strong>5 + FREE</strong></small></h4>
							</div>
						</div></a>
					</div>
					<div class="col-xs-1 col-md-1"></div>
				</div>
			</div><br>
			<br>
			<br>
			<h2 class="text-center text-lg text-uppercase my-0"><strong>Menu</strong></h2><br>
			<p class="text-center">Download our menu <a href="img/menu.pdf">PDF here</a></p>
			<hr class="divider">
			<br>
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-2 text-center">
						<a href="#gourmet_pizzas">Gourmet Pizzas</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#pizza_calzones">Pizzas & Calzones</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#apps">Appetizers</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#spclty_grndrs">Specialty Grinders</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#grndrs">Grinders</a> <!--<div class=""> Description </div> -->
						 <!--<div class=""> Sub Categories </div> -->
					</div>
					<div class="col-sm-2 text-center">
						<a href="#wrps_gyrs">Wraps & Gyros</a>
					</div>
				</div>
			</div><br>
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-2 text-center">
						<a href="#dnnrs_plts">Dinners & Plates</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#psts">Pastas</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#prmsn_stl">Parmesan Style</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#stk_pstrm">Steak & Pastrami</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#sfd">Seafood Delights</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#spcls">Specials</a>
					</div>
				</div>
			</div><br>
			<div class="col-lg-12">
				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-2 text-center">
						<a href="#kid">Kids Specials</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#slds">Salads</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#dsrts">Deserts</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#prty">Party Platters</a>
					</div>
					<div class="col-sm-2 text-center">
						<a href="#drnks">Drinks</a>
					</div>
					<div class="col-sm-1"></div>
				</div>
			</div><!-- <button onclick="topFunction()" id="myBtn" title="Go_to_top">Back to Categories</button> -->
			<div class="bg-faded p-4 my-4">
				<div class="row">
					<div class="col-lg-12">
						<br>
						<h2><a id="gourmet_pizzas"><strong>Gourmet Pizzas</strong></a></h2>
						<div class="row">
							<?php foreach ($results as $row): ?>
							<div class="col-md-4">
								<h3><?php echo $row["niceName"] ?></h3>
								<p><?php echo $row["itemDesc"] ?></p><label class="checkbox-inline">Small $ <?php echo $row["itemSmallPrice"] ?></label> <label class="checkbox-inline">Large $ <?php echo $row["itemPrice"] ?></label>
							</div>
							<div class="col-sm-3"></div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                       function newPopup(url) {
									                                           popupWindow = window.open(
									                                               url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                       }
									</script>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="pizza_calzones"><strong>Pizza/Calzones</strong></a></h2>
						<h4>Any pizza can be made into a calzone</h4><br>
						<div class="row">
							<?php foreach ($results2 as $row2): ?>
							<div class="col-md-4">
								<h3><?php echo $row2["niceName"] ?></h3>
								<p><?php echo $row2["itemDesc"] ?></p><label class="checkbox-inline">Small $ <?php echo $row2["itemSmallPrice"] ?></label> <label class="checkbox-inline">Large $ <?php echo $row2["itemPrice"] ?></label>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="apps"><strong>Appetizers</strong></a></h2>
						<div class="row">
							<?php foreach ($results3 as $row3): ?>
							<div class="col-md-4">
								<h3><?php echo $row3["niceName"] ?></h3>
								<p><?php echo $row3["itemDesc"] ?></p><label class="checkbox-inline">Small $ <?php echo $row3["itemSmallPrice"] ?></label> <label class="checkbox-inline">Large $ <?php echo $row3["itemPrice"] ?></label>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="spclty_grndrs"><strong>Specialty Grinders</strong></a></h2>
						<div class="row">
							<?php foreach ($results4 as $row4): ?>
							<div class="col-md-4">
								<h3><?php echo $row4["niceName"] ?></h3>
								<p><?php echo $row4["itemDesc"] ?></p><label class="checkbox-inline">Small $ <?php echo $row4["itemSmallPrice"] ?></label> <label class="checkbox-inline">Large $ <?php echo $row4["itemPrice"] ?></label>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                       function newPopup(url) {
									                                           popupWindow = window.open(
									                                               url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                       }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="grndrs"><strong>Grinders</strong></a></h2>
						<h3>All grinders and wraps are toasted unless specified.<br>
						Also available as wraps. Subs below served with provolone<br>
						cheese, onions, peppers, lettuce, tomatoes and<br>
						our homemade Italian dressing.</h3><br>
						<div class="row">
							<?php foreach ($results5 as $row5): ?>
							<div class="col-md-4">
								<h3><?php echo $row5["niceName"] ?></h3>
								<p><?php echo $row5["itemDesc"] ?></p><label class="checkbox-inline">Small $ <?php echo $row5["itemSmallPrice"] ?></label> <label class="checkbox-inline">Large $ <?php echo $row5["itemPrice"] ?></label>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="wrps_gyrs"><strong>Wraps & Gyros</strong></a></h2>
						<div class="row">
							<?php foreach ($results6 as $row6): ?>
							<div class="col-md-4">
								<h3><?php echo $row6["niceName"] ?></h3>
								<p><?php echo $row6["itemDesc"] ?></p><label class="checkbox-inline">Small $ <?php echo $row6["itemSmallPrice"] ?></label> <label class="checkbox-inline">Large $ <?php echo $row6["itemPrice"] ?></label>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="dnnrs_plts"><strong>Dinners & Plates</strong></a></h2>
						<div class="row">
							<?php foreach ($results7 as $row7): ?>
							<div class="col-md-4">
								<h3><?php echo $row7["niceName"] ?></h3>
								<p><?php echo $row7["itemDesc"] ?></p><label class="checkbox-inline">Small $ <?php echo $row7["itemSmallPrice"] ?></label> <label class="checkbox-inline">Large $ <?php echo $row7["itemPrice"] ?></label>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="psts"><strong>Pastas</strong></a></h2>
						<div class="row">
							<?php foreach ($results8 as $row8): ?>
							<div class="col-md-4">
								<h3><?php echo $row8["niceName"] ?></h3>
								<p><?php echo $row8["itemDesc"] ?></p><label>$<?php echo $row8["itemPrice"] ?></label><br>
								<br>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="prmsn_stl"><strong>Parmesan Style</strong></a></h2>
						<div class="row">
							<?php foreach ($results9 as $row9): ?>
							<div class="col-md-4">
								<h3><?php echo $row9["niceName"] ?></h3>
								<p><?php echo $row9["itemDesc"] ?></p><label class="checkbox-inline">Small $ <?php echo $row9["itemSmallPrice"] ?></label> <label class="checkbox-inline">Large $ <?php echo $row9["itemPrice"] ?></label>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="stk_pstrm"><strong>Steak & Pastrami</strong></a></h2>
						<div class="row">
							<?php foreach ($results10 as $row10): ?>
							<div class="col-md-4">
								<h3><?php echo $row10["niceName"] ?></h3>
								<p><?php echo $row10["itemDesc"] ?></p><label class="checkbox-inline">Small $ <?php echo $row10["itemSmallPrice"] ?></label> <label class="checkbox-inline">Large $ <?php echo $row10["itemPrice"] ?></label>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="sfd"><strong>Seafood Delights</strong></a></h2>
						<div class="row">
							<?php foreach ($results11 as $row11): ?>
							<div class="col-md-4">
								<h3><?php echo $row11["niceName"] ?></h3>
								<p><?php echo $row11["itemDesc"] ?></p><label>$<?php echo $row11["itemPrice"] ?></label><br>
								<br>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="spcls"><strong>Specials</strong></a></h2>
						<div class="row">
							<?php foreach ($results12 as $row12): ?>
							<div class="col-md-4">
								<h3><?php echo $row12["niceName"] ?></h3>
								<p><?php echo $row12["itemDesc"] ?></p><label>$<?php echo $row12["itemPrice"] ?></label><br>
								<br>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="kid"><strong>Kids Specials</strong></a></h2>
						<div class="row">
							<?php foreach ($results13 as $row13): ?>
							<div class="col-md-4">
								<h3><?php echo $row13["niceName"] ?></h3>
								<p><?php echo $row13["itemDesc"] ?></p><label>$<?php echo $row13["itemPrice"] ?></label><br>
								<br>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="slds"><strong>Salads</strong></a></h2>
						<div class="row">
							<?php foreach ($results14 as $row14): ?>
							<div class="col-md-4">
								<h3><?php echo $row14["niceName"] ?></h3>
								<p><?php echo $row14["itemDesc"] ?></p><label>$<?php echo $row14["itemPrice"] ?></label><br>
								<br>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="dsrts"><strong>Deserts</strong></a></h2>
						<div class="row">
							<?php foreach ($results15 as $row15): ?>
							<div class="col-md-4">
								<h3><?php echo $row15["niceName"] ?></h3>
								<p><?php echo $row15["itemDesc"] ?></p><label>$<?php echo $row15["itemPrice"] ?></label><br>
								<br>
							</div>
							<div class="col-sm-3">
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="prty"><strong>Party Platters</strong></a></h2>
						<div class="row">
							<?php foreach ($results16 as $row16): ?>
							<div class="col-md-4">
								<h3><?php echo $row16["niceName"] ?></h3>
								<p><?php echo $row16["itemDesc"] ?></p><label class="checkbox-inline">Small $ <?php echo $row16["itemSmallPrice"] ?></label> <label class="checkbox-inline">Large $ <?php echo $row16["itemPrice"] ?></label>
							</div>
							<div class="col-sm-3">
								<label class="checkbox-inline"></label>
								<center></center>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div><br>
						<h2><a id="drnks"><strong>Drinks</strong></a></h2>
						<div class="row">
							<?php foreach ($results17 as $row17): ?>
							<div class="col-md-4">
								<h3><?php echo $row17["niceName"] ?></h3>
								<p><?php echo $row17["itemDesc"] ?></p><label>$<?php echo $row17["itemPrice"] ?></label><br>
								<br>
							</div>
							<div class="col-sm-3">
								<label class="checkbox-inline"></label>
							</div>
							<div class="col-sm-3">
								<center>
									<script type="text/javascript">
									                                   function newPopup(url) {
									                                       popupWindow = window.open(
									                                           url,'popUpWindow','height=300,width=400,left=10,top=10,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
									                                   }
									</script>
									<p></p>
								</center>
							</div>
							<div class="col-sm-2"></div><?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.container -->
	<footer class="bg-faded text-center py-5">
		<div class="container">
			<?php foreach ($results40 as $row40): ?><b>Store Hours:</b> <?php echo $row40["hours"] ?> <b>Phone:</b> <?php echo $row40["phone"] ?> <b>Address:</b> <?php echo $row40["Address"] ?><br>
			<p class="m-0">Copyright &copy; NoJo 2017</p><br>
			<?php endforeach; ?>
		</div><iframe frameborder="0" height="35" scrolling="no" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fsliceofheavenoxford&width=450&layout=standard&action=like&size=small&show_faces=false&share=true&height=35&appId" style="border:none;overflow:hidden" width="450"></iframe>
	</footer><!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js">
	</script> 
	<script src="vendor/popper/popper.min.js">
	</script> 
	<script src="vendor/bootstrap/js/bootstrap.min.js">
	</script> 
	<script src="vendor/bootstrap/js/bootstrap.js">
	</script>
</body>
</html>