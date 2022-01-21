<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);

?>



<!DOCTYPE html>
<html>
<head>
  <title>services</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <style>
  
table, th, td
{
  border: 1px solid white;
}

table.ttt
{
  margin-left: auto;
  margin-right: auto;
}



.qwe
{
  color: purple;
}

    .foot p
{
  margin-left: 650px;
  font-size: 20px;
  color: red;
}

.text-2 a
{
  display: inline-block;
  font-size: 1em;
  background: #ff5050;
  padding: 10px 30px;
 
  text-decoration: none;
  font-weight: 600;
  margin-top: 10px;
  color: black;
  transition: 0.5s;
}

.text-2 a:hover
{
 
  background-color: yellow;
}

.text-3 a
{
  display: inline-block;
  font-size: 1em;
  background: #ff5050;
  padding: 10px 30px;
 
  text-decoration: none;
  font-weight: 500;
  margin-top: 10px;
  color: black;
  transition: 0.5s;
}

.text-3 a:hover
{
 
  background-color: yellow;
  color: red; 
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
     
      <div class="text-1">
        <a href="index.html">LOGOUT</a>
       
        <a href="home.php">ADMIN-HOME</a>
        <a href="change-pass.php">Change Pass</a>
        <a href="view-fb.php">View-Feedback</a>

      </div>
</header>

<img src="img1.jpg" width="100%" height="220px">

<section id="service">
  <div class="title-text">
    <H1>All Appointments</H1>
  </div>
 
   
          
          
        
          
            <table class="ttt" style="background-color: #ff5050"> <thead> <tr> <th>#</th> <th> Appointment Number</th> <th>Name</th><th>Email</th><th>Mobile Number</th> <th>Appointment Date</th><th>Appointment Time</th><th>Services</th><th>Status</th><th>Action</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblappointment");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

             <tr> <th scope="row"><?php echo $cnt;?></th>
              <td><?php  echo $row['AptNumber'];?></td>
               <td><?php  echo $row['Name'];?></td>
               <td><?php  echo $row['Email'];?></td>

               <td><?php  echo $row['PhoneNumber'];?></td>
               <td><?php  echo $row['AptDate'];?></td>
                <td><?php  echo $row['AptTime'];?></td>
                <td><?php  echo $row['Services'];?></td>

                <td><?php  echo $row['Status'];?></td>
                <td><div class="text-3"> <a href="delete-nap.php?viewid=<?php echo $row['ID'];?>">Update</a></div></td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
         
      

  </section>

 

<div class="foot">
<p>Beauty Parlor Management System</p>
</div>

</body>
</html>