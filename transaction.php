

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href= 
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> 
    <script src="https://kit.fontawesome.com/577845f6a5.js" 
        crossorigin="anonymous"> 
    </script> 
  
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"> 
    </script> 
    <script src= 
"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"> 
    </script> 
    <script src= 
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"> 
    </script> 
<?php include('header.php'); ?>
</head>
<body>
	
	<form  action="check.php" method="post">
		<div class="form-wrapper">
		<h1>Credit Transfer....</h1>
		<div class="form-item" >
		<label style="font-size:25px;
		color:black;">Senders A/c num:</label><!-- <input type="text" name="sac" required="required" required> -->
		<select  name="sac" class="custom-select" 
            style="width:150px;" required> 
        <option value="">select AC</option> 
        <option value="1001" >1001</option>
        <option value="1002">1002</option> 
        <option value="1003">1003</option> 
        <option value="1004">1004</option> 
        <option value="1005">1005</option>
        <option value="1006" >1006</option>
        <option value="1007">1007</option>
        <option value="1008">1008</option>
        <option value="1009">1009</option>
        <option value="1010">1010</option>
        
    </select> 
			</div>
			<br>
		<div class="form-item">
		<label style="font-size:25px;color:black;">Receipient A/c num:</label>
		<select  name="rac" class="custom-select" 
            style="width:150px;" required> 
        <option value="">select AC</option> 
        <option value="1001" >1001</option>
        <option value="1002">1002</option> 
        <option value="1003">1003</option> 
        <option value="1004">1004</option> 
        <option value="1005">1005</option>
        <option value="1006" >1006</option>
        <option value="1007">1007</option>
        <option value="1008">1008</option>
        <option value="1009">1009</option>
        <option value="1010">1010</option>
		</select>

			</div>

		
<br>
			<div class="form-item">
		<label style="font-size:25px;color:black;">Credit:</label><input style="color:black;"type="number" name="cre" required="required" required>
			</div>
			<br>	
         
			
			<input class="button" type="submit" value="submit">

		</div>
	</form>

	