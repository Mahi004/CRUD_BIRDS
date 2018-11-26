<?php

include 'conn.php';

/*this below lines will update the database information once submit is clicked  with refrence to the id*/


 if(isset($_POST['done'])){

     $id = $_GET['id'];
     $name = $_POST['name'];
     $species = $_POST['species'];
     $date = $_POST['date'];
     $location = $_POST['location'];
  $q = " update birdtable set id=$id, name='$name', species='$species', date='$date', location='$location' where id=$id  ";

   $query = mysqli_query($con,$q);

   header('location:display.php');
 }


?>


<!DOCTYPE html>
<html>
<head>
    <title> </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
</head>

<body>
    <div class="col-lg-6 m-auto">
    
    <form method="post" enctype="multipart/form-data">
        
        <div class="card">
            <br>
            
            <div class="card-header bg-dark">
            <h1 class="text-white text-center"> UPDATE YOUR BIRD DETAILS </h1>
            
            </div>
            
            <label>NAME:</label>
            <input type="text" name="name" class="form-control"> <br>
        
            <label>SPECIES:</label>
            <input type="text" name="species" class="form-control"> <br>
            
            <label>DATE:</label>
            <input type="date" name="date" class="form-control"> <br>
            
            <label>LOCATION:</label>
            <input type="text" name="location" class="form-control"> <br>
            
            <button class="btn btn-success" type="submit" name="done"> SUBMIT </button>
            <br>
            
        </div>
        
        
        
    
    </form>
    
    
    </div>
    
    
</body>


</html>