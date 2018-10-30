<?php

        session_start();
        include './dbconnect.php';
        include './functions.php';
        $db = getDatabase();
        
                $stmt40 = $db->prepare("SELECT * FROM about");
        $results40 = array();
        if ($stmt40->execute() && $stmt40->rowCount() > 0) {
            $results40 = $stmt40->fetchAll(PDO::FETCH_ASSOC);
            //print_r($results);

            
        }
        
        
               if(isPostRequest())
            {
               $stmt = $db->prepare("SELECT * FROM admin WHERE userName = :userName AND password = :password");
            
                $userName = filter_input(INPUT_POST,'username');
                $password = filter_input(INPUT_POST,'password');
                
                $Users = array(
                        ":userName" => $userName,
                        ":password" => $password);
               
                $results = array();
                //print_r($Users);

                if($stmt->execute($Users) && $stmt->rowCount() > 0)
                    {
                        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        
                        
                        foreach($results as $row){
                            $_SESSION['adminID'] = $row['adminID'];
                            
                        }
                    
                        $_SESSION['loggedin'] = true;
                        echo "Login Successful";
                        header('Location: menu_items.php');
 
                    }   
                else 
                    {
                        
                        $message = "Wrong username or password!";
                        echo "<script type='text/javascript'>alert('$message');</script>";

                        
                        //echo "Incorrect LogIn, Please Re-enter Username and Password";
                    }              
            }
        
        
        
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
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="bg-faded p-4 my-4">
			<hr class="divider">
			<h2 class="text-center text-lg text-uppercase my-0">Administrator<br>
			Login - <strong>Slice of Heaven</strong></h2>
			<hr class="divider">
			<br>
			<div class="row">
				<div class="col-md-4 col-md-offset-4"></div>
				<center>
					<form action="admin_login.php" method="post">
						Username <input name="username" type="text" value=""><br>
						<br>
						<br>
						Password <input name="password" type="password" value="">
						<p id="pPlaceH"></p><br>
						<br>
						<br>
						<input type="submit" value="Login">
					</form>
				</center>
				<script type="text/javascript">
				                                document.getElementById("admin_login").onclick = function () {
				                                    //location.href = "admin_homepage.html";
				                                };
				</script>
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
</body>
</html>