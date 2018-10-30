<?php
        include './dbconnect.php';
        include './functions.php';
        $db = getDatabase();
        $AA = array();
        $i=0;
        
        
        
        
        $stmt = $db->prepare("SELECT * FROM orders");
        $results = array();
        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results);

            
        }
        
        
        
        
                $stmt2 = $db->prepare("SELECT * FROM orders ORDER BY ORDERID DESC");
        $results2 = array();
        if ($stmt2->execute() && $stmt2->rowCount() > 0) {
            $results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results);

            
        }
        
        
        
        

               if(isPostRequest()){
            
            // $selectVar = filter_input(INPUT_POST, 'select');
            
            
                        // $stmt3 = $db->prepare("UPDATE orders SET orderID = :orderID, orderFlag = :orderFlag, orderTime = :orderTime, orderTotal = :orderTotal, orderRecipt = :orderRecipt WHERE orderID = :orderID"); 

            // $orderID = filter_input(INPUT_POST, '1');
            // $orderFlag = filter_input(INPUT_POST, '2');
            // $orderTime = filter_input(INPUT_POST, '3');
            // $orderTotal = filter_input(INPUT_POST, '4');
            // $orderRecipt = filter_input(INPUT_POST, '5');

            // $binds = array(

                // ":orderID" => $orderID,
                // ":orderFlag" => $orderFlag,
                // ":orderTime" => $orderTime,
                // ":orderTotal" => $orderTotal,
                // ":orderRecipt" => $orderRecipt           
            // );
            
            
            // $results3="";
            // Store an message depending on if it is successful
            // if ($stmt3->execute($binds) && $stmt3->rowCount() > 0)
             // {
                 // $results3 .= 'Your customer info was added to the table.<br />';
             // } 
             // else
             // { 
                 // $results3 .= 'There was an error inserting into the customers table. <br />';
             // }

           // print_r($binds);

            
            
            
            

           
           
       }//end of is post request

        




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
	<meta content="" name="description">
	<meta content="" name="author">
	<title>Slice of Heaven - Admin Login Page</title><!-- Bootstrap core CSS -->
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
			<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Slice of Heaven</a> <button class="btn btn-default" id="admin_logout">Log out</button> 
			<script type="text/javascript">
			                                       document.getElementById("admin_logout").onclick = function () {
			                                           
			                                           location.href = "admin_login.php";
			                                       };
			</script><button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="admin_homepage.php">Administrator Homepage</a>
					</li>
					<li class="nav-item active px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="orders.php">Past & Present Orders (current)</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="menu_items.php">Menu Items</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="contact_info.php">Contact Information</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="about_info.php">About Us Information</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="admin_accounts.php">Administator Accounts</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="bg-faded p-4 my-4">
			<hr class="divider">
			<h2 class="text-center text-lg text-uppercase my-0">Past & Present<br>
			<strong>Orders</strong></h2>
			<hr class="divider">
			<br>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-10">
					<?php foreach ($results2 as $row2): ?>
					<form action="orders.php" method="post">
						<label>| ID | &nbsp;&nbsp;&nbsp; <!--Completed -->
						 | &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;||&nbsp; Total &nbsp; |</label><br>
						<input size="2" type="text" value="<?php echo $row2[">" name="1"/&gt;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!--<input size="2" type="text" value="<?php echo $row2["orderFlag"]?>" name="2"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
						 <input type="text" value="<?php echo $row2[">" name="3"/&gt; <input size="6" type="text" value="<?php echo $row2[">" name="4"/&gt;<br>
						|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Recipt&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<br>
						<textarea cols="40" rows="5">"name="5"/&gt;<?php echo $row2["orderRecipt"]?></textarea><br>
						<!--<input type="submit" value="Update"/>-->
					</form><?php endforeach; ?><!--end of post form-->
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