<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if(isset($_POST['submit']))
{

  $name=$_POST['name'];
  $email=$_POST['email'];
  $services=$_POST['services'];
  $adate=$_POST['adate'];
  $atime=$_POST['atime'];
  $phone=$_POST['phone'];
  $aptnumber = mt_rand(100000000, 999999999);

  $query=mysqli_query($con,"insert into tblappointment(AptNumber,Name,Email,PhoneNumber,AptDate,AptTime,Services) value('$aptnumber','$name','$email','$phone','$adate','$atime','$services')");
  if ($query) 
  {
    echo "<script>alert('Thank you for booking, your appointment number is $aptnumber, we will give you phone call shortly.');</script>";     
    echo "<script>window.location.href='appoint.php'</script>"; 
  }
  else
  {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";      
  }

}

?>

<html>
<head>
  <title>appointment</title>
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


<header>

      <a href="index.html"><img src="logo.jpg" width="78px" height="78px"></a>
      <div class="text-1">
       <a href="index.html">HOME</a>
        
        <a href="index1.php">SERVICES</a>
        <a href="locate.php">LOCATE US</a>
      </div>
</header>

<img src="img1.jpg" width="100%" height="220px">



<section id="service">
  <div class="title-text-asdf">

    <div class="container">

    	





    	<form id="form1" method="post">


  <div class="title-text">
    <p>Miracle Beauty Parlor</p>

    
     </div>
        <input type="name" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="phone" name="phone" placeholder="Phone" required>
        <input type="date" name="adate" placeholder="Date" required>
        <input type="time" name="atime" placeholder="Time" required>

 
 		<select name="services" id="services" class="form-control"required>


        <option value="">Select Service</option>

        <?php $query=mysqli_query($con,"select * from tblservices");
												while($row=mysqli_fetch_array($query))
												{
													?>
													<option style="color: red;" value="<?php echo $row['ServiceName'];?>" ><?php echo $row['ServiceName'];?>  = <?php echo $row['Cost'];?> RS<?php</option>
													<?php
												} ?> 					
        </select>

        <div class="btn-box">
        	
        	<div class="abb"> <input type="submit"  name="submit" value="Book Now" class="btn btn-white "> </div>


        </div>


    	</form>


      <dvi class="step-row">
      	<div id="progress"> </div>
      	<div class="step-col"><small><H2>BOOK NOW</H2></small></div>
      </dvi>




</body>


</html>