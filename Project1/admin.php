<?php

include("dbconnect.php");

if(isset($_POST["noticebtn"]))
{

 $notice  = $_POST["notice"];

 $qry = "INSERT INTO `notice`( `notice`) VALUES ('$notice')";

 $result = mysqli_query($connect, $qry);

 if($result)
 {
    echo  " Notice Added Successfully";
  }
 else
  {
    echo " Something went wrong ";
  }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <h2> Welcome Admin</h2>
  <div class="container">
    <div class="col-md-6 mx-auto">
        <form method="post">
            <div class="form-group">
                <label> Add Notice </label>
                <textarea name="notice" placeholder="Enter notice here.." class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" name="noticebtn"> Add </button>
            </div>
        </form>
    </div>
  </div>    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>