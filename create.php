<?php

Include("include/connection.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">"
    <title>create page</title>
    
</head>
<body>
<div class="jumbotron jumbotron-fluid text-center bg-danger text-white">
  <h1 class="display-4">Create User </h1>
  <p class="lead">Please Enter User Details.......</p>
 </div>
 <hr>
<form method="POST">
  <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control" name="username" placeholder="Enter user name" required>
  </div>
 
  <div class="form-group">
    <label>User Age</label>
    <input type="number" class="form-control" name="userage" min="18" placeholder="Enter user age" required>
  </div>

  <div class="form-group">
    <label>User Address</Address></label>
    <input type="text" class="form-control" name="useraddress" placeholder="Enter user address"required>
  </div>
 
  <button type="submit" name="btnSave"class="btn btn-primary">Submit</button>
</form>

<?php

if(isset($_POST['btnSave']))
{
$na = $_POST['username'];
$ag = $_POST['userage'];
$ad = $_POST['useraddress'];

$query = "CALL Insertdata('$na','$ag','$ad')";
$res = mysqli_query($con, $query);

if($res)
{
   header("Location: index.php");
  
}
else
{
   echo "Please Try Again.....";
}
}

?>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>