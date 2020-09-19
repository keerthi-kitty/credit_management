<?php 

	// connect to db
	include('config/db_connect_admin.php');

	//write quarry for all customers
	$e_sql = 'SELECT *  FROM users';

	// make quarry & get result
	$e_result = mysqli_query($connect, $e_sql);

	//fetch the resulting rows as an array
	$employee = mysqli_fetch_all($e_result, MYSQLI_ASSOC);

	//freeing the result from memory
	mysqli_free_result($e_result);

	// close connection
	mysqli_close($connect);

	#explode function (reffer L28)
	//explode(',', $pizzas[0]['ingredients'])

?>

<!DOCTYPE html>
<html>
	
	<?php include('header.php'); ?>
     <hr>
	<h4 class="center darkred-text" style="color:black;
	padding-top: 5%; ">USERS</h4>
	<div class="container">
		<div class="row">
			<?php foreach ($employee as $emp): ?>
				<div class="col s4 md3">
					<div class="card z-depth-0" style="border-radius: 20px;">
						<!-- <img src="img/Me2.jpg" class="customer"> -->
						<div class="card-content center" style="color :black;padding-top: 5%">
							<h2><?php echo htmlspecialchars($emp['accid']); ?></h2>
							<h3><?php echo htmlspecialchars($emp['name']); ?></h3>
							<h4><?php echo htmlspecialchars($emp['credits']); ?></h4>

						</div>
						<div class="card-action right-align">
							<a class="brand-text" href="show.php?id=<?php echo htmlspecialchars($emp['accid']); ?>">more info</a>
						</div>
						
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>



</html>