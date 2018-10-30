<!DOCTYPE html>
<html>
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
	   float: left;
	   width: 235px;

	   margin: 2px;
	   border: 3px solid #73AD21;  
	}

	.name{
	   font-size: 70%;
	   
	   
	}


	.floating-box2 {
	   float: left;
	   width: 235px;
	   clear:left;
	   margin: 2px;
	   border: 3px solid #73AD21;  
	}

	.btn {
	   
	   padding:10px;
	   clear:both;
	   float:left;
	   
	}

	.btn2 {
	   
	   padding:10px;
	   float:left;
	   
	}


	</style>
	<title></title>
</head>
<body>
	<?php   $arrayVar=array(); $i=0;?><?php
	include './dbconnect.php';
	include './functions.php';



	$db = getDatabase();


	$stmt = $db->prepare("SELECT * FROM defaultIngredients WHERE itemID = 7");
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
	<div class="floating-box">
		<?php foreach ($results as $row): ?><?php foreach ($results2 as $row2): ?><?php if ($row["ingCat"]==1){
		                        
		                            if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==0)
		                            {?><input id="<?php $row2[" type="checkbox">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
		<?php    }
		                            if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==1)
		                            {?> <input checked="true" id="<?php $row2[" type="checkbox">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
		<?php }
		                            
		                        
		                        
		                        
		                        
		                        
		                    }?> <?php endforeach; ?> <?php endforeach; ?>
	</div>
	<div class="floating-box">
		<?php foreach ($results as $row): ?><?php foreach ($results2 as $row2): ?><?php if ($row["ingCat"]==2){
		                        
		                            if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==0)
		                            {?><input id="<?php $row2[" type="checkbox">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
		<?php    }
		                            if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==1)
		                            {?> <input checked="true" id="<?php $row2[" type="checkbox">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
		<?php }

		                        
		                        
		                        
		                        
		                        
		                    }?> <?php endforeach; ?> <?php endforeach; ?>
	</div>
	<div class="floating-box2">
		<?php foreach ($results as $row): ?><?php foreach ($results2 as $row2): ?><?php if ($row["ingCat"]==3){
		                        
		                            if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==0)
		                            {?><input id="<?php $row2[" type="checkbox">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
		<?php    }
		                            if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==1)
		                            {?> <input checked="true" id="<?php $row2[" type="checkbox">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
		<?php }

		                        
		                        
		                        
		                        
		                        
		                    }?> <?php endforeach; ?> <?php endforeach; ?>
	</div>
	<div class="floating-box">
		<?php foreach ($results as $row): ?><?php foreach ($results2 as $row2): ?><?php if ($row["ingCat"]==4){
		                        
		                            if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==0)
		                            {?><input id="<?php $row2[" type="checkbox">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
		<?php    }
		                            if ($row["ingID"]==$row2["ingID"] && $row["defaultFlag"]==1)
		                            {?> <input checked="true" id="<?php $row2[" type="checkbox">"&gt; <?php echo "<span class='name'>" .  $row2["ingNiceName"] . "</span>";?><br>
		<?php }

		                        
		                        
		                        
		                        
		                        
		                    }?> <?php endforeach; ?> <?php endforeach; ?>
	</div><button class="btn" id="myBtn">Submit</button> <button class="btn2" id="myBtn2">Cancel</button> <!-- The Modal -->
	<div class="modal" id="myModal">
		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<p>Customization is final once submitted.</p>
			<p>Do you wish to continue?</p><button id="submit">Ok</button> <button id="cancel">Cancel</button>
		</div>
	</div>
	<script>
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on the button, open the modal 
	btn.onclick = function() {
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
	   //cancel code
	}


	</script>
</body>
</html>