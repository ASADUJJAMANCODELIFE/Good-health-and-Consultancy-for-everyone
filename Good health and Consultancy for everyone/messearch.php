<!DOCTYPE html>
 <?php #include("func.php");?>
<html>
<head>
	<title>User Messages</title>
</head>
<body>
<?php
include("newfunc.php");
if(isset($_POST['mes_search_submit']))
{
	$contact=$_POST['mes_contact'];
	$query = "select * from contact where contact= '$contact'";
  $result = mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  if($row['name']=="" & $row['email']=="" & $row['contact']=="" & $row['message']==""){
    echo "<script> alert('No entries found! Please enter valid details'); 
          window.location.href = 'admin-panel1.php#list-doc';</script>";
  } 
  else {
    echo "<div class='container-fluid' style='margin-top:50px;'>
    <div class='card'>
    <div class='card-body' style='background-color:#342ac1;color:#ffffff;'>
  <table class='table table-hover'>
    <thead>
      <tr>
        <th scope='col'>User Name</th>
        <th scope='col'>Email</th>
        <th scope='col'>Contact</th>
        <th scope='col'>Message</th>
      </tr>
    </thead>
    <tbody>";
  
    
          $name = $row['name'];
          $email = $row['email'];
          $contact = $row['contact'];
          $message = $row['message'];
          echo "<tr>
            <td>$name</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$message</td>
          </tr>";
    
    echo "</tbody></table><center><a href='admin-panel1.php' class='btn btn-light'>Back to your Dashboard</a></div></center></div></div></div>";
  }
  }
	
?>

</body>
</html>