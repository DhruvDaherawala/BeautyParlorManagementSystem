<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
  ?>

<html>
<head>
  <title>admin</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style1.css">



</head>
<body>
<style>
  
    .foot p
{
  margin-left: 650px;
  font-size: 20px;
  color: red;
}
    
</style>

<header>

     
      <div class="text-1">
         <a href="index.html">LOGOUT</a>
       <a href="home.php">ADMIN-HOME</a>
       <a href="nap.php">Appointment</a>
       <a href="view-fb.php">View-Feedback</a>


        
      
      </div>
</header>

<img src="img1.jpg" width="100%" height="220px">


<section id="service">
  <div class="title-text">
    <H1>CHANGE PASSWORD</H1>
  </div>



  <div class="service-box">
      <section id="service">
  <div class="title-text-asdf">

    <div class="container">

      





      <form id="form1" method="post">


 
    

    
        <input type="text" name="id"  placeholder="Enter ID" required>
        <input type="password" name="npass"  placeholder="New Password" required="true">
        <input type="password" name="npass" placeholder="Confirm New Password" required="true">

     
        
        

 
    

        <div class="btn-box">
          
          <div class="abb"> <input type="submit"  name="submit" value="UPDATE" class="btn btn-white "> </div>


        </div>


      </form>
      </div>
          
        
         
        </div>
      </div>
   


      
     

  </section>






</body>


<div class="foot">
<p>Beauty Parlor Management System</p>
</div>



</html>