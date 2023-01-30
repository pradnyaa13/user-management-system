<?php

Include("include/connection.php");


$id = $_GET['Id'];
$query = "CALL deletedata('$id')";
$res = mysqli_query($con, $query);





if($res)
{
   header("Location:index.php");
}
else
{
   echo "Please Try Again.....";
}


?>