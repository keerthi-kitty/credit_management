<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <!-- Bootstrap CSS -->
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
    <div>
    <h1 style="color: green"> 
        
    </h1> 
  <form action="temp2.php" method="post">
    <!-- Use the custom-select class -->
    <select class="custom-select" 
            name="sac" style="width:150px;" required> 
            <option value="">select</option>
        <option value="8">Pizzas</option> 
     
        <option value="0">Ice Cream</option> 
        <option value="9">Fried Potatoes</option> 
    </select> 
    <input class="button" type="submit" value="submit">
</div>
</body> 
  
</html>
<!-- AND ($_POST["sac"]>=1001 AND $_POST["sac"]<=1010) AND ($_POST["rac"]>=1001 AND $_POST["rac"]<=1010) -->