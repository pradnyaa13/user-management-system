<?php
Include("include/connection.php");
 $id=$_GET['Id'];
 $query = "CALL seldata('$id')";
$res = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($res);
//echo $id;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit page</title>
</head>
<body class=bg>
<div class="jumbotron jumbotron-fluid bg-warning text-white" >
  <div class="container">
    <h1 class="display-4">Edit User Data</h1>
    <p class="lead">Please Change User Details.......</p>
  </div>
</div>
<form method="POST">
<div class="form-group">
    <label>User Name</label>
    <input type="text" value="<?php echo $row['username'] ?>" class="form-control" name="username" placeholder="Enter username" required>
</div>

<div class="form-group">
    <label>User Age</label>
    <input type="number" value="<?php echo $row['userage'] ?>" class="form-control" name="userage" placeholder="Enter userage" required>
</div>

<div class="form-group">
    <label>User Address</label>
    <input type="text" value="<?php echo $row['useraddress'] ?>" class="form-control" name="useraddress" placeholder="Enter useraddress" required>
</div>
   
  <button type="submit" class="btn btn-primary" name="btnSave">Update</button>
</form>
<?php 
if(isset($_POST['btnSave']))
{
$na = $_POST['username'];
$ag = $_POST['userage'];
$ad= $_POST['useraddress'];
  


echo$na;
echo$ag;
echo$ad;


$query = "CALL UpdateDatas('$id','$na','$ag','$ad')";
if(mysqli_query($con,$query))
{
  header("Location:index.php");
}
else
{
  
   echo "saved successfully";
   


}
}
?> 
</body>
</html>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
