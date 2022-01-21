<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if(isset($_POST['submit']))
{

  $name=$_POST['name'];
  $email=$_POST['email'];
  
  $adate=$_POST['adate'];
 

  $query=mysqli_query($con,"insert into tblservices(ServiceName,Cost,CreationDate) value('$name','$email','$adate')");
  if ($query) 
  {
    echo "<script>alert('Entry added to the database successfully');</script>";     
    echo "<script>window.location.href='home.php'</script>"; 
  }
  else
  {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";      
  }

}

?>

<html>
<head>
  <title>admin</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/style1.css">



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


</style>

<header>

     
      <div class="text-1">
         <a href="index.html">LOGOUT</a>
       <a href="change-pass.php">CHANGE PASSWORD</a>
       <a href="nap.php">Appointment</a>
       <a href="view-fb.php">View-Feedback</a>


        
      
      </div>
</header>

<img src="img1.jpg" width="100%" height="220px">


<section id="service">
  <div class="title-text">
    <H1>ADD NEW SERVICE TO THE DATABASE</H1>
  </div>



  <div class="service-box">
      <section id="service">
  <div class="title-text-asdf">

    <div class="container">

      





      <form id="form1" method="post">


  <div class="title-text">
    <h2>Add Service Name and Cost</h2>

    
     </div>
        <input type="name" name="name" placeholder="Servicename" required>
        <input type="text" name="email" placeholder="cost" required>
        <h2>Enter Creation Date</h2>
        <input type="date" name="adate" placeholder="Date" required>
        

 
    

        <div class="btn-box">
          
          <div class="abb"> <input type="submit"  name="submit" value="ADD ENTRY" class="btn btn-white "> </div>


        </div>


      </form>
      </div>
     
          <div class="title-text"><h1 class="title1">Manage Services</h3></div>
          
          
        
          <div class="ttt" >
            <div class="qwe"><h4 ">Update Services:</h4></div><br>
            <table class="ttt" style="background-color: #ff5050"> <thead class="ttt"> <tr> <th>ID</th>  <th>Service Name</th> <th>Service Price</th> <th>Creation Date</th> <th>Action</th> <th>Delete</th> </tr> </thead> <tbody>
<?php
$ret=mysqli_query($con,"select *from  tblservices");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

             <tr> <th scope="row"><?php echo $cnt;?></th> <td><?php  echo $row['ServiceName'];?></td> <td><?php  echo $row['Cost'];?></td><div class="text-3"><td><?php  echo $row['CreationDate'];?></td></div> <td><div class="text-2"><a href="edit-services.php?editid=<?php echo $row['ID'];?>">Edit</a></div></td> <td><div class="text-3"><a href="delete-services.php?editid=<?php echo $row['ID'];?>">Delete</a></div></td> </tr>   <?php 
$cnt=$cnt+1;
}?></tbody> </table> 
          </div>
        </div>
      </div>
   


      
     

  </section>












</body>


<div class="foot">
<p>Beauty Parlor Management System</p>
</div>



</html>