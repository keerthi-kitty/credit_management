<!DOCTYPE html>
<html lang="eg">
<head>
	<?php include('header.php'); ?>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
	table,th,td{
       border:1px solid black;

	}
</style>
<body>
	<h1 style="padding-left: 40%;color:black">HISTORY</h1>
<table  style="color:black;
font-size:25px;">
<?php 

$connect =new mysqli("localhost","root","","userlist");
if (mysqli_connect_error()) {
		
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
	
	$sql="SELECT * FROM his";

   
	$result=$connect->query($sql);
	echo "
		<tr> <th>SENDER</th> 
		 <th>CREDIT</th> 
		  <th>RECEPIENT</th>
		  </tr>";
	while($row=$result->fetch_assoc())
	{    
		
		echo "<tr><td>".$row["sender"]."</td><td>".$row["amt"]."</td><td>".$row["rec"]."</td></tr>";
		
	}
	
}
?>
</table>
</body>
</head>
</html>
