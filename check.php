<!DOCTYPE html>
<html>
<head>
	<title>Transaction Status</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 style="color:red;
  align-items: center;
  padding-top: 10%;
  padding-left: 10%;
  font-family: Times;
  font-size: 60px" >
<?php 
if(isset($_POST["sac"]) ){
$connect =new mysqli("localhost","root","","userlist");
if (mysqli_connect_error()) {
		
		die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}
else{
	$sen=$_POST["sac"];
	$sql="SELECT * FROM users WHERE accid=$sen";

   
	$result=$connect->query($sql);
	while($row=$result->fetch_assoc())
	{    
		$tr1= $row["credits"];
		$n1=$row["name"];
		
	}
	$rev=$_POST["rac"];
	$sql1="SELECT * FROM users WHERE accid=$rev";

   
	$result1=$connect->query($sql1);
	while($row=$result1->fetch_assoc())
	{    
		$tr2=$row["credits"];
		$n2=$row["name"];
		}

	// echo $tr1;
	// echo $tr2;
	// echo $_POST["cre"];
	if($sen==$rev)
		echo "CANNOT TRANSFER TO SELF ";
	elseif ($_POST["cre"]<=0) 
		echo "NO NEG TRANSACTION";
		elseif ($tr1<=$_POST["cre"])
			echo "BALLANCE LOW"; 
		
	
		else
			{
				$ap1=$tr1-$_POST["cre"];
				$ap2=$tr2+$_POST["cre"];

				$sql2="UPDATE users SET credits = '$ap1' WHERE accid='$sen'";
				$sql3="UPDATE users SET credits = '$ap2' WHERE accid='$rev'";
				if($connect->query($sql2)==TRUE)
				{}
				if($connect->query($sql3)==TRUE)
					{}
				?>
				</h1>
	<h1 style="color:green;align-items: center;
  padding-top: 10%;
  padding-left: 10%;
  font-family: Times;
  font-size: 60px">
		<?php
				   echo "successful transaction";
				$sql4="INSERT INTO his (sender,amt,rec) VALUES (?,?,?) ";
				$stmt = $connect->prepare($sql4);
					$stmt->bind_param("sis",$n1,$_POST["cre"],$n2);
					$stmt->execute();
				   
				   	

			}

	
$connect->close();
}
}
else
{
	echo "RETRY WITH PROPER ACC NO";
}

?>
</h1>
<a href="home.php"><button type="button" class="button">DONE</button></a>
</body>
</html>