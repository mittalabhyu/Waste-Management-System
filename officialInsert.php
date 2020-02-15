<!DOCTYPE html>
<html lang="en">
<head>
  <title>Waste Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color:rgb(170, 187, 201);
    }
   .jumbotron{
     background-color: rgb(134, 247, 134);
     height: 200px;
  
   }
   h2{
     color: darkblue;
     
   }
  
  
   h1{
     color: darkblue;
     font-size: 350%;
   }
   h3{
     color:darkblue;
   }
   .B{
     color: darkblue;
     font-size: 150%;
   }
</style>
    
</head>
<body>

<div class="jumbotron text-center">
  <h1> FOR OFFICIALS</h1>
  <p class="B"><marquee> An initiative to clean our city.</marquee></p> 
</div>
<table width="100%">
    <div class="A">
  <tr>
      <td>
          <table border="1" width="100%" >
              <tr style="background-color:rgb(195, 218, 69)">
                  <td><a href="index.html">Home</a></td>
                  <td><a href="about.html">About</a></td>
                  <td><a href="official.html">Officials</a></td>
                  <td><a href="public.html">Public</a></td>
                  <td><a href="ward.html">Ward</a></td>
              </tr>
          </table>
      </td>
  </tr>
</table>
<div align="center">
	<font color="green"><b>User registered successfully</b></font>
</div>
</div>
</body>
</html>

<?php

$link = mysqli_connect("localhost", "root", "", "safai");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['username']);
$mobile = mysqli_real_escape_string($link, $_REQUEST['mobileno']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$userid = mysqli_real_escape_string($link, $_REQUEST['username']);
$pwd = mysqli_real_escape_string($link, $_REQUEST['password']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$ward = mysqli_real_escape_string($link, $_REQUEST['ward']);
 
// attempt insert query execution
$sql = "INSERT INTO officials (Name,MobileNumber,Email,UserId,Password,CityId,WardId) VALUES ('$name', '$mobile', '$email','$userid','$pwd',$city,$ward)";
if(mysqli_query($link, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>