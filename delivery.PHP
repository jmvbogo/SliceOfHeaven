<?php 

        include './dbconnect.php';
        include './functions.php';
        $today = getdate();
        $date = $today['month'] . ' ' . $today['mday'] . ', ' . $today['year'];
        
                $db = getDatabase(); 
                 $results="";
        

        
        
        
        
        
        
        
        
        
       if(isPostRequest()){
           
            $stmt = $db->prepare("INSERT INTO customers SET custFName = :custFName, custLName = :custLName, custAddress = :custAddress, custTown = :custTown, custState = :custState, custZip = :custZip, custPhone = :custPhone, custNotes = :custNotes"); 

            $custFName = filter_input(INPUT_POST, 'fname');
            $custLName = filter_input(INPUT_POST, 'lname');
            $custAddress = filter_input(INPUT_POST, 'address');
            $custTown = filter_input(INPUT_POST, 'city');
            $custState = filter_input(INPUT_POST, 'state');
            $custZip = filter_input(INPUT_POST, 'zip');
            $custPhone = filter_input(INPUT_POST, 'number');
            $custNotes = filter_input(INPUT_POST, 'notes');
            
            $binds = array(

                ":custFName" => $custFName,
                ":custLName" => $custLName,
                ":custAddress" => $custAddress,
                ":custTown" => $custTown,
                ":custState" => $custState,
                ":custZip" => $custZip,
                ":custPhone" => $custPhone,
                ":custNotes" => $custNotes              
            );
            
            
            
            //Store an message depending on if it is successful
            if ($stmt->execute($binds) && $stmt->rowCount() > 0)
             {
                 $results .= 'Your customer info was added to the table.<br />';
             } 
             else
             { 
                 $results .= 'There was an error inserting into the customers table. <br />';
             }

           //print_r($binds);
           
           
       }//end of is post request

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<title>Slice of Heaven - Home</title><!-- Bootstrap core CSS -->
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
					<li class="nav-item active px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="index.php">Home</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="menu.php">Menu</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="contact.php">Contact</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="about.php">About Us</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="cart.php">Your Cart</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="bg-faded p-4 my-4">
			<hr class="divider">
			<h2 class="text-center text-lg text-uppercase my-0">Address<br>
			For<br>
			<strong>Delivery</strong></h2>
			<hr class="divider">
			<div class="row">
				<div class="col-lg-6">
					<form action="delivery.php" method="post">
						<label>First Name</label> <input class="form-control" name="fname" placeholder="John" type="str_hrs"> <label>Last Name</label> <input class="form-control" name="lname" placeholder="Dough" type="str_hrs"> <label>Address</label> <input class="form-control" name="address" placeholder="1 Example St." type="str_hrs"> <label>City</label> <input class="form-control" name="city" placeholder="Oxford" type="str_hrs"> <label>State</label> <input class="form-control" name="state" placeholder="MA" type="str_hrs"> <label>Zip</label> <input class="form-control" name="zip" placeholder="00000" type="str_hrs"> <label>Phone Number</label> <input class="form-control" name="number" placeholder="(111)222-3333" type="str_hrs">
					</form>
				</div>
				<div class="col-lg-6">
					<label>Delivery Notes</label> 
					<textarea class="form-control" name="notes" rows="6"></textarea><br>
					<p>Once clicking on "Place order" your order will be automatically placed.<br>
					Clicking on "Cancel Order" will empty your cart and bring you to the home page.</p><button class="btn btn-secondary" id="place_order" type="submit">Place Order</button> 
					<script type="text/javascript">
					                                       document.getElementById("place_order").onclick = function () {
					                                           
					                                           
					                                           <?php ?>
					                                           location.href = "???";
					                                       };
					</script> <button class="btn btn-secondary" id="cncl_order">Cancel Order</button> 
					<script type="text/javascript">
					                                       document.getElementById("cncl_order").onclick = function () {
					                                           location.href = "index.php";
					                                       };
					</script> 
				</div>
			</div>
		</div>
	</div><!-- /.container -->
	<footer class="bg-faded text-center py-5">
		<div class="container">
			<b>Store Hours:</b> Sun-Thurs: 11am-10pm & Fri-Sat: 11am-Midnight <b>Phone:</b> (508)987-7172 <b>Address:</b> 273 Main St. Oxford, MA 05140<br>
			<p class="m-0">Copyright &copy; NoJo 2017</p><br>
		</div><iframe frameborder="0" height="35" scrolling="no" src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fsliceofheavenoxford&width=450&layout=standard&action=like&size=small&show_faces=false&share=true&height=35&appId" style="border:none;overflow:hidden" width="450"></iframe>
	</footer><!-- Bootstrap core JavaScript -->
	<script src="vendor/jquery/jquery.min.js">
	</script> 
	<script src="vendor/popper/popper.min.js">
	</script> 
	<script src="vendor/bootstrap/js/bootstrap.min.js">
	</script>
</body>
</html>