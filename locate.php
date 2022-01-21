<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if(isset($_POST['submit']))
{

  $name=$_POST['name'];
  $email=$_POST['email'];
  $rate=$_POST['rate'];
  $tarea=$_POST['tarea'];



 


  $query=mysqli_query($con,"insert into tblcontact(Name,Email,Rate,Txtarea) value('$name','$email','$rate','$tarea')");
  if ($query) 
  {
    echo "<script>alert('Thank you for feedback, we appreciate it');</script>";     
    echo "<script>window.location.href='locate.php'</script>"; 
  }
  else
  {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";      
  }

}

?>

<!DOCTYPE html>
<html>
<head>
  <title>contact</title>
<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
  <style>

    .foot p
{
  margin-left: 650px;
  font-size: 20px;
  color: red;
}
   a{text-decoration: none;
   	color: yellow;} 

.ovrlay
{
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  border-radius: 7px;
  cursor: pointer;
  background: linear-gradient(rgba(0,0,0,0.2),green);
  opacity: 0;
  transition: 0.5s;

}

.service-box
{

  width: 80%;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  margin: auto;
 
    
}

  </style>

<header>
      <a href="index.html"><img src="logo.jpg" width="78px" height="78px"></a>
      <div class="text-1">
        <a href="index.html">HOME</a>
        
        <a href="index1.php">SERVICES</a>
        <a href="appoint.php">BOOK APPOINTMENT</a>
      </div>
</header>

<img src="img1.jpg" width="100%" height="220px">

<section id="service">
  <div class="title-text">
    <p>Talk to us</p>
    <H1></H1>
  </div>
  


      <div class="single-service">
      	   <div class="container">
        <form id="form1" method="post">


  <div class="titlesxt">
    <h2>Contact Us</h2>

    
     </div >
     <div class="qqq">
        <input type="name" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
</div>
       <div class="ppp"> <h3><small>How was your overall experience</small></h3> </div>
        <br>
   <div class="www">
        <input type="radio" name="rate" id="exc" value="Excellent">
        <label for="exc">EXCELLENT</label><br>
        <input type="radio" name="rate" id="good" value="Good" >
        <label for="good">GOOD</label><br>

        <input type="radio" name="rate" id="avg" value="Average">
        <label for="avg">AVERAGE</label>

        <br><br><br>

      </div>  
        <div class="qpqp">
        <textarea name="tarea" placeholder="Type your Message" required="required"></textarea>
        
 </div>
 		

        <div class="btn-box">
        	
        	<div class="abb"> <input type="submit"  name="submit" value="SUBMIT" class="btn btn-white "> </div>


        </div>


    	</form>
    </div>
        
        
        
      </div>


<div class="service-box">
      <div class="single-service">
       <div class="titlesxt"> <h2 data-text="Locate Us">LOCATE US - MIRACLE BEAUTY PARLOR - MYSORE 570988<br>CLICKHERE<br><a href="tel:9876543211">PHONE - 9876543211 </a> <br> <a href="mailto:example@123.com"> EMAIL - example@123.com </a> </h2> </div>

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3897.24684664808!2d76.68657261460523!3d12.366390591254948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3baf71273625ff79%3A0xe21bc942801a6077!2sMaharaja%20Institute%20of%20Technology%20Mysore!5e0!3m2!1sen!2sin!4v1642173670466!5m2!1sen!2sin" width="1400" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
        
        
      </div>

      
     
  </section>

<div class="foot">
<p>Beauty Parlor Management System</p>
</div>




</body>


</html>