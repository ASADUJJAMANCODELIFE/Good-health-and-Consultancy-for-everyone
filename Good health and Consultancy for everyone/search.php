<!------ CONFIGER---------->
<?php
session_start();
$con=mysqli_connect("localhost","root","","myhmsdb");
if(isset($_POST['search_submit'])){
  $contact=$_POST['contact'];
  $docname = $_SESSION['dname'];
 $query="select * from appointmenttb where contact='$contact' and doctor='$docname';";
 $result=mysqli_query($con,$query);


}

?>