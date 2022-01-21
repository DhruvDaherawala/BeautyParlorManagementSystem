<?php 
include('includes/dbconnection.php');
session_start();
error_reporting(0);

if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
   
      $status=$_POST['status'];
     
    
     
   $query=mysqli_query($con, "update  tblappointment set Status='$status' where ID='$cid'");
    if ($query) {
    $msg="All remark has been updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
  
?>



<!DOCTYPE html>
<html>
<head>
  <title>view</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
 <style>
  

table, th, td
{
  border: 1px solid white;
}

.qwe a
{
  color: purple;
  text-decoration: none;
  padding-left: 56px;
  padding-right: 56px;

}

table.ttt
{
  margin-left: auto;
  margin-right: auto;
}







  </style>


      


<section id="service">
  <div class="title-text">
    <H1>View Appointment</H1>
  </div>
 
   
          
        
          
        
          <div class="table-responsive bs-example widget-shadow">
            <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
            
            <?php
$cid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblappointment where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
            <table class="ttt" style="background-color: #ff5050">
              <tr>
    <th>Appointment Number</th>
    <td><?php  echo $row['AptNumber'];?></td>
  </tr>
  <tr>
<th>Name</th>
    <td><?php  echo $row['Name'];?></td>
  </tr>

<tr>
    <th>Email</th>
    <td><?php  echo $row['Email'];?></td>
  </tr>
   <tr>
    <th>Mobile Number</th>
    <td><?php  echo $row['PhoneNumber'];?></td>
  </tr>
   <tr>
    <th>Appointment Date</th>
    <td><?php  echo $row['AptDate'];?></td>
  </tr>
 
<tr>
    <th>Appointment Time</th>
    <td><?php  echo $row['AptTime'];?></td>
  </tr>
  
  <tr>
    <th>Services</th>
    <td><?php  echo $row['Services'];?></td>
  </tr>
  
  

<tr>
    <th>Status</th>
    <td> <?php  
if($row['Status']=="Selected")
{
  echo "Selected";
}

if($row['Status']=="Rejected")
{
  echo "Rejected";
}

     ;?></td>
  </tr>
            </table>
            <table class="ttt" style="background-color: #ff5050">
              <?php if($row['Remark']==""){ ?>


<form name="submit" method="post" enctype="multipart/form-data"> 



  <tr>
    <th>Status :</th>
    <td>
   <select name="status" class="form-control wd-450" required="true" >
     <option value="Selected" selected="true">Selected</option>
     <option value="Rejected">Rejected</option>
   </select></td>
  </tr>

  <tr align="center">
    <td colspan="2"><button type="submit" name="submit" class="btn btn-az-primary pd-x-20">Submit</button></td>
  </tr>
  <tr>
    <td colspan="2"><button type="submit" name="" class=""> <div class="qwe"><a href="nap.php"> BACK</a></div></button></td>
  </tr>
  </form>
<?php } else { ?>
            </table>
            <table class="table table-bordered">
              <tr>
    <th>Remark</th>
    <td><?php echo $row['Remark']; ?></td>
  </tr>



            </table>
            <?php } ?>
            <?php } ?>
          </div>
     
  </section>




</body>
</html>