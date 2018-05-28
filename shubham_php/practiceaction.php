<!DOCTYPE html>
<html lang="en">
<head>
  <title>Applicants Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container-fluid">
   <div class="row">
   		<div class="col-md-12 well">
   			<?php
                if(isset($_GET['submit']))
                {
                    ?>
                    <div class="alert alert-success text-center">
                      <strong>Success!</strong>
                    </div>
                    
             
                <h1>Details</h1>
                <p style="color:red">Name:</p>
                <?php echo $Name = $_GET['Name'];              
                ?>
                <br><br>
                <p style="color:red">Tasks per day</p>
                <?php echo $Work = $_GET['Work'];                
                ?>
                <br><br>
                     <?php echo $Eat = $_GET['Eat'];                
                ?>
                <br><br>
                <?php echo $Sleep =$_GET['Sleep'];
                }
                ?>
                <br><br>
                <?php 
               
                $dbhost = 'localhost';
                           $dbuser = 'guest';
                           $dbpass = 'guest123';
                           $dbname = 'daily';
                           $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
                           if(! $conn ) {
                               die('Could not connect: ' . mysql_error());
                           }
                           echo 'Connected successfully';
                           ;
                           
                           
                           
                           $sql = "INSERT INTO routine(serial_ID, name, work, eat, sleep) 
                                   VALUES ('', '$Name', '$Work', '$Eat', '$Sleep')";
                          
                           if(mysqli_query($conn, $sql)){
                               echo "Records inserted successfully.";
                           } else{
                               echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
                           }
                           
                           // Close connection
                           mysqli_close($conn);
                           
                           ?>
   		</div>
   </div>
</div>
</body>
</html>
             