<?php
session_start();
$UserName=$_POST['txtUser'];
$Password=$_POST['txtPass'];
$UserType=$_POST['cmbUser'];
if($UserType=="JobSeeker")
{
$con = mysqli_connect("localhost","root","","job");
$sql = "select * from jobseeker_reg where UserName='".$UserName."' and Password='".$Password."' ";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'Login.php\';</script>';
}
else
{
$_SESSION['ID']=$row['JobSeekId'];
$_SESSION['Name']=$row['JobSeekerName'];
$_SESSION['$UserName_job']=$UserName;
header("location:./JobSeeker/home.php");
} 
mysqli_close($con);
}
else
{
$con = mysqli_connect("localhost","root","","job");
$sql = "select * from employer_reg where UserName='".$UserName."' and Password='".$Password."'";
$result = mysqli_query($con,$sql);
$records = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
if ($records==0)
{
echo '<script type="text/javascript">alert("Wrong UserName or Password");window.location=\'Login.php\';</script>';
}
else
{
$_SESSION['ID']=$row['EmployerId'];
$_SESSION['Name']=$row['CompanyName'];
$_SESSION['$UserName_emp']=$UserName;
header("location:./Employer/index.php");
} 
mysqli_close($con);
}
?>
