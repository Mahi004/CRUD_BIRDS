<?php

include 'conn.php';

if(isset($_POST['done'])){
    
    $picture = $_FILES['picture'];
    
    $filename = $picture['name'];
    $fileerror = $picture['error'];
    $filetmp = $picture['tmp_name'];
    
    $fileext = explode('.',$filename);
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png','jpg','jpeg');
    
    if(in_array($filecheck,$fileextstored)){
        
        $destinationfile = 'imagesu/'.$filename;
        
        move_uploaded_file($filetmp,$destinationfile);
        
    }
    
    $name = $_POST['name'];
    $species = $_POST['species'];
    $date = $_POST['date'];
    $location = $_POST['location'];
    
    $q = " INSERT INTO `birdtable`(`picture`,`name`,`species`, `date`, `location`) VALUES ('$destinationfile','$name','$species','$date','$location')";
        
    $query = mysqli_query($con,$q);
    
    header("location:display.php");
    
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

<body >
    <div class="col-lg-6 m-auto">
    
    <form method="post" enctype="multipart/form-data">
        
        <div class="card">
            <br>
            
            <div class="card-header bg-dark">
            <h1 class="text-white text-center"> INSERT YOUR BIRD DETAILS </h1>
            
            </div>
            <label>IMAGE:</label>
            <input type="file" name="picture" class="form-control"> <br>
            
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