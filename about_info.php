<?php 
        include './dbconnect.php';
        include './functions.php';

                $db = getDatabase(); 
                 $results="";


$stmt40 = $db->prepare("SELECT * FROM about");
        $results40 = array();
        if ($stmt40->execute() && $stmt40->rowCount() > 0) {
            $results40 = $stmt40->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results);

            
        }

                 
if ( isset($_GET['heading']) ) {
$getHeading = $_GET['heading'];
$getAbout = $_GET['about'];

$stmt = $db->prepare("UPDATE about SET bio = :bio, title = :title WHERE aboutID = 1");

            $binds = array(

                ":bio" => $getHeading,
                ":title" => $getAbout,      
            );


//Store an message depending on if it is successful
if ($stmt->execute($binds) && $stmt->rowCount() > 0)
 {
     $results .= 'Your customer info was added to the table.<br />';
     //print_r($results);
 } 
 else
 { 
     $results .= 'There was an error inserting into the customers table. <br />';
     //print_r($results);
 }          

            
            
            
//echo $getHeading;
}
        
        
        

            //$test = $_GET["heading"];
            //print_r($test);
        
        
        
        
        
        
        
        
       if(isPostRequest()){
           
            $stmt = $db->prepare("UPDATE about SET bio = :bio, title = :title WHERE aboutID = 1"); 
            
            $test = $_GET["heading"];
            print_r($test);

            
            
            $bio = filter_input(INPUT_POST, 'about');
            $title = filter_input(INPUT_POST, 'heading');
            

            $binds = array(

                ":bio" => $bio,
                ":title" => $title,     
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

          // print_r($results);
           
           
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
						<a class="nav-link text-uppercase text-expanded" href="menu_items.php">Menu Items</a>
					</li>
					<li class="nav-item px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="contact_info.php">Contact Information</a>
					</li>
					<li class="nav-item active px-lg-4">
						<a class="nav-link text-uppercase text-expanded" href="about_info.php">About Us Information (current)</a>
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
			<h2 class="text-center text-lg text-uppercase my-0">About Us<br>
			<strong>Information</strong></h2>
			<hr class="divider">
			<br>
			<form>
				<div class="row">
					<div class="form-group col-lg-4">
						<form action="about_info.php" method="post">
							<label>Heading</label> <input class="form-control" name="heading" type="text">
						</form>
					</div>
					<div class="clearfix"></div>
					<div class="form-group col-lg-12">
						<label>Message</label> 
						<textarea class="form-control" name="about" rows="6"></textarea>
					</div>
					<div class="form-group col-lg-12">
						<button class="btn btn-secondary" id="updt_btn" name="update" type="submit">Update</button>
					</div>
				</div>
			</form>
			<script type="text/javascript">
			                   document.getElementById("updt_btn").onclick = function () {

			                   };
			</script>
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
</body>
</html>