<?php 
include('config/db_connect_admin.php');
if (isset($_GET['id'])) {

		$id=mysqli_real_escape_string($connect, $_GET['id']);

		// make sql
		$sql = "SELECT * FROM users WHERE accid = '$id' ";

		// get query result
		$result=$connect->query($sql);

		//print_r($customer);

		
			
	}
	?>

  <!DOCTYPE html>
 <html>
 <head>
 	<title>User Details</title>
 </head>

 	<?php include('header.php'); ?>

 	<div class="container center darkslategray-text" style="color:black; font-size: 35px;">
 		<?php while($row=$result->fetch_assoc()){ ?>

 			<h4><?php echo htmlspecialchars($row['name']); ?></h4>
 			<br>
 			<p>Email: <?php echo htmlspecialchars($row['email']); ?></p>
 			<br>
 			<p>PHONE: <?php echo htmlspecialchars($row['phone']); ?></p>
 			<br>
 			<p>ACCOUNT NO: <?php echo htmlspecialchars($row['accid']); ?></p>
 			<br>
 			<p>CREDIT: <?php echo htmlspecialchars($row['credits']); ?></p>
 			

 			<!-- Delete form -->
 			
 		

 			
 			
 		<?php }
 		 ?>
 	</div>

 	
 
 </html>