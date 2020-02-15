<?php

$link = mysqli_connect("localhost", "root", "", "safai");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$userid = mysqli_real_escape_string($link, $_REQUEST['userid']);
$pwd = mysqli_real_escape_string($link, $_REQUEST['password']);
 
// attempt insert query execution
$sql = "select userid,password from officials where userid='$userid' and password='$pwd'";
$result = mysqli_query($link,$sql);
//echo $result;
//$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1) {
         
         header("location: complaint.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
 
// close connection
mysqli_close($link);
?>

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
	<font color="red"><b><?php echo $error; ?></b></font>
</div>
</div>
</body>
</html>
