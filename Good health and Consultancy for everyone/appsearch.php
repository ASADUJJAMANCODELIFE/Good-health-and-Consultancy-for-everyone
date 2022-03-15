<!DOCTYPE html>
 <?php #include("func.php");?>
<html>
<head>
	<title>Patient Details</title>

</head>
<body>
<?php
include("newfunc.php");
if(isset($_POST['app_search_submit']))
{
	$contact=$_POST['app_contact'];
	$query = "select * from appointmenttb where contact= '$contact';";
  $result = mysqli_query($con,$query);
  $row=mysqli_fetch_array($result);
  if($row['fname']=="" & $row['lname']=="" & $row['email']=="" & $row['contact']=="" & $row['doctor']=="" & $row['docFees']=="" & $row['appdate']=="" & $row['apptime']==""){
    echo "<script> alert('No entries found! Please enter valid details'); 
          window.location.href = 'admin-panel1.php#list-doc';</script>";
  }
  else {
          $fname = $row['fname'];
          $lname = $row['lname'];
          $email = $row['email'];
          $contact = $row['contact'];
          $doctor = $row['doctor'];
          $docFees= $row['docFees'];
          $appdate= $row['appdate'];
          $apptime = $row['apptime'];
          if(($row['userStatus']==1) && ($row['doctorStatus']==1))  
                    {
                      $appstatus = "Active";
                    }
                    if(($row['userStatus']==0) && ($row['doctorStatus']==1))  
                    {
                      $appstatus = "Cancelled by You";
                    }

                    if(($row['userStatus']==1) && ($row['doctorStatus']==0))  
                    {
                      $appstatus = "Cancelled by Doctor";
                    }
          echo "<tr>
            <td>$fname</td>
            <td>$lname</td>
            <td>$email</td>
            <td>$contact</td>
            <td>$doctor</td>
            <td>$docFees</td>
            <td>$appdate</td>
            <td>$apptime</td>
            <td>$appstatus</td>
          </tr>";
    echo "</tbody></table><center><a href='admin-panel1.php' class='btn btn-light'>Back to your Dashboard</a></div></center></div></div></div>";
  }
  }
	
?>

</body>
</html>