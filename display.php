

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
    
    
    <body background="heh.jpg">
        <div class="container">
        
        <div class="col-lg-12">
            <br><br>
            <h1 class="text-center text-warning"> BIRDS SIGHTED</h1>
            <br>
            <table class="table table-striped table-hover table-bordered">
               
                <tr class="bg-dark text-white text-centre"> 
                <th> ID</th>
                <th> PICTURE</th>
                <th> NAME</th>
                <th> SPECIES</th>
                <th> DATE</th>
                <th> LOCATION </th>
                <th> DELETE</th>
                <th> UPDATE </th>
                </tr>
                
  <?php

    include 'conn.php';

          $q = "select * from birdtable";
          $query = mysqli_query($con,$q);
        
          while($res = mysqli_fetch_array($query))  {  
                
  ?>
                
                <tr>
                <td> <?php echo $res['id']; ?></td>
                <td> <img src=" <?php echo $res['picture']; ?>" height="200px" width="200px"> </td>
                <td> <?php echo $res['name']; ?></td>
                <td> <?php echo $res['species']; ?></td>
                <td> <?php echo $res['date']; ?></td>
                <td> <?php echo $res['location']; ?> </td>
                <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">delete </a> </button> </td>
                <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">update </a> </button> </td>
                </tr>
            
                <?php
          }
                  ?>
              
            
            </table>
            
            <button class="btn-primary btn"> <a href="insert.php" class="text-white">Insert</a> </button>
            
            
        
        </div>
            
        </div>
        
        
    
    
    
    
    </body>
    
    
    
    
    
</html>