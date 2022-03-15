<!DOCTYPE html>
 <?php #include("func.php");?>
<html>
<head>
	<title>Doctor Details</title>
</head>
<body>
<?php
include("newfunc.php");
if(isset($_POST['doctor_search_submit']))
{
	$contact=$_POST['doctor_contact'];
  $query = "select * from doctb where email= '$contact'";
  $result = mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  if($row['username']=="" & $row['password']=="" & $row['email']=="" & $row['docFees']==""){
    echo "<script> alert('No entries found!'); 
          window.location.href = 'admin-panel1.php#list-doc';</script>";
  }
  else {
    echo "<div class='container-fluid' style='margin-top:50px;'>
	<div class ='card'>
	<div class='card-body' style='background-color:#342ac1;color:#ffffff;'>
<table class='table table-hover'>
  <thead>
    <tr>
      <th scope='col'>Username</th>
      <th scope='col'>Password</th>
      <th scope='col'>Email</th>
      <th scope='col'>Consultancy Fees</th>
    </tr>
  </thead>
  <tbody>";

	// while ($row=mysqli_fetch_array($result)){
		    $username = $row['username'];
        $password = $row['password'];
        $email = $row['email'];
        $docFees = $row['docFees'];
        echo "<tr>
          <td>$username</td>
          <td>$password</td>
          <td>$email</td>
          <td>$docFees</td>
        </tr>";
	// }
	echo "</tbody></table><center><a href='admin-panel1.php' class='btn btn-light'>Back to dashboard</a></div></center></div></div></div>";
}
  }
	

?>

</body>
</html>