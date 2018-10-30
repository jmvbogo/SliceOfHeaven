<?php

        include './dbconnect.php';
        include './functions.php';
        $today = getdate();
        $date = $today['month'] . ' ' . $today['mday'] . ', ' . $today['year'];
        

        $total=0;
        $ings="";
        


?>
<!DOCTYPE html>
<html lang="en">
<head>

	<style>
	/* The Modal (background) */
	.modal {
	   display: none; /* Hidden by default */
	   position: fixed; /* Stay in place */
	   z-index: 1; /* Sit on top */
	   padding-top: 100px; /* Location of the box */
	   left: 0;
	   top: 0;
	   width: 100%; /* Full width */
	   height: 100%; /* Full height */
	   overflow: auto; /* Enable scroll if needed */
	   background-color: rgb(0,0,0); /* Fallback color */
	   background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	}

	/* Modal Content */
	.modal-content {
	   background-color: #fefefe;
	   margin: auto;
	   padding: 20px;
	   border: 1px solid #888;
	   width: 80%;
	}

	/* The Close Button */
	.close {
	   text-align:right;
	   color: #aaaaaa;
	   float: right;
	   font-size: 28px;
	   font-weight: bold;
	}

	.close:hover,
	.close:focus {
	   color: #000;
	   text-decoration: none;
	   cursor: pointer;
	}


	.floating-box {
	   background-color:    #e6e6e6;
	   opacity: .93;
	   filter: alpha(opacity=60); /* For IE8 and earlier */
	   float: left;
	   width: 235px;

	   margin: 2px;
	   border: 3px solid #73AD21;  
	}

	.name{
	   font-size: 70%;
	   font-weight: bold;
	   
	   
	}


	.floating-box2 {
	   background-color:    #e6e6e6;
	   opacity: .93;
	   filter: alpha(opacity=60); /* For IE8 and earlier */
	   float: left;
	   width: 235px;
	   clear:left;
	   margin: 2px;
	   border: 3px solid #73AD21;  
	}




	</style>
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
	<?php




	$var = $_GET['id'];
	//print_r($var);


	$db = getDatabase();


	$stmt = $db->prepare("SELECT * FROM defaultIngredients WHERE itemID =" . $var);
	        $results = array();
	        if ($stmt->execute() && $stmt->rowCount() > 0) {
	            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	            //print_r($results);

	            
	        }
	        ?><?php
	$stmt2 = $db->prepare("SELECT ingID, ingNiceName FROM ingredients");
	        $results2 = array();
	        if ($stmt2->execute() && $stmt2->rowCount() > 0) {
	            $results2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
	            //print_r($results2);

	            
	        }


	        ?>
	<div>
		<div>
			<div class="floating-box">
				<?php foreach ($results as $row): ?><?php foreach ($results2 as $row2): ?><?php if ($row["ingCat"]==1){
				                                                                                
				                                                                                    if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==0)
				                                                                                    {?><input id="<?php $row2[" type="checkbox" value="0">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
				<?php    }
				                                                                                    if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==1)
				                                                                                    {?> <input checked="true" id="<?php $row2[" type="checkbox" value="1">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
				<?php }
				                                                                                    
				                                                                                
				                                                                                
				                                                                                
				                                                                                
				                                                                                
				                                                                            }?> <?php endforeach; ?> <?php endforeach; ?>
			</div>
			<div class="floating-box">
				<?php foreach ($results as $row): ?><?php foreach ($results2 as $row2): ?><?php if ($row["ingCat"]==2){
				                                                                                
				                                                                                    if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==0)
				                                                                                    {?><input name="<?php $row2[" type="checkbox" value="0">" id="<?php $row2["ingNiceName"]?>"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
				<?php    }
				                                                                                    if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==1)
				                                                                                    {?> <input checked="true" id="<?php $row2[" type="checkbox" value="1">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
				<?php }

				                                                                                
				                                                                                
				                                                                                
				                                                                                
				                                                                                
				                                                                            }?> <?php endforeach; ?> <?php endforeach; ?>
			</div>
			<div class="floating-box2">
				<?php foreach ($results as $row): ?><?php foreach ($results2 as $row2): ?><?php if ($row["ingCat"]==3){
				                                                                                
				                                                                                    if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==0)
				                                                                                    {?><input id="<?php $row2[" type="checkbox" value="0">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
				<?php    }
				                                                                                    if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==1)
				                                                                                    {?> <input checked="true" id="<?php $row2[" type="checkbox" value="1">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
				<?php }

				                                                                                
				                                                                                
				                                                                                
				                                                                                
				                                                                                
				                                                                            }?> <?php endforeach; ?> <?php endforeach; ?>
			</div>
			<div class="floating-box">
				<?php foreach ($results as $row): ?><?php foreach ($results2 as $row2): ?><?php if ($row["ingCat"]==4){
				                                                                                
				                                                                                    if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==0)
				                                                                                    {?><input class="unchecked" id="<?php $row2[" type="checkbox" value="0">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
				<?php  }
				                                                                                    if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==1)
				                                                                                    {?> <input checked="true" id="<?php $row2[" type="checkbox" value="1">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
				<?php }

				                                                                                
				                                                                                
				                                                                                
				                                                                                
				                                                                                
				                                                                            }?> <?php endforeach; ?> <?php endforeach; ?>
			</div><button id="myBtn1">Submit</button> <button id="myBtn2">Cancel</button> <!-- The Modal -->
			<div class="modal" id="myModal">
				<!-- Modal content -->
				<div class="modal-content">
					<span class="close">&times;</span>
					<p>Customization is final once submitted.</p>
					<p>Do you wish to continue?</p><button id="submit" type="submit">Ok</button> <button id="cancel">Cancel</button>
				</div>
			</div>
		</div>
	</div><!-- /.container -->
	<script>

	 window.resizeTo(
	   window.screen.availWidth / 2.5,
	   window.screen.availHeight / 1.4
	 );

	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn1 = document.getElementById("myBtn1");

	// Get the button that opens the modal
	var btn2 = document.getElementById("myBtn2");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on the button, open the modal 
	btn1.onclick = function() {
	   modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	   modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	   if (event.target == modal) {
	       modal.style.display = "none";
	   }
	}

	cancel.onclick = function() {
	   modal.style.display = "none";
	}


	submit.onclick = function() {
	//submit code
	}

	myBtn2.onclick = function() {
	self.close ();

	}

	function myFunction(p1) {
	p1
	}



	</script> 
	<script src="vendor/jquery/jquery.min.js">
	</script> 
	<script src="vendor/popper/popper.min.js">
	</script> 
	<script src="vendor/bootstrap/js/bootstrap.min.js">
	</script>
</body>
</html>