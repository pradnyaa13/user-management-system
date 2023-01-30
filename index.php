<?php

Include("include/connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Home Page</title>
   
</head>
<body>
<div class="jumbotron jumbotron-fluid bg-primary text-white" >
  <div class="container">
    <h1 class="display-4">Show User Data</h1>
    <p class="lead">User Details......</p>
  </div>
</div>
<hr>

<a class="btn btn-primary" href="create.php">Add User</a>


<table class="table table-bordered">
 <tr>
      <th>User Id </th>
      <th>User Name</th>
      <th>User Age</th>
      <th>User Address</th>
      <th>Edit User Data</th>
      <th>Delete User Data</th>

 </tr>
  <?php 
  $query="CALL showdata()";
  $res= mysqli_query($con, $query);
  while($row = mysqli_fetch_assoc($res))
  {
    ?>
    <tr>
       <td><?php echo $row['userid']; ?></td>
       <td><?php echo $row['username'];?></td>
       <td><?php echo $row['userage']; ?></td>
       <td><?php echo $row['useraddress'];?></td>
       <td><a class="btn btn-warning" href="edit2.php?Id=<?php echo $row['userid']; ?>">Edit</a></td>
       <td><a class="btn btn-danger" href="delete.php?Id=<?php echo $row['userid']; ?>">Delete</a></td>
      
      

    </tr>
    

  <?php
  
  
  }
  


  ?>

  
  
 </body>
 </html>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 

