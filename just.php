<?php
$cn = mysqli_connect("Localhost","root","") or die("Not Connected");
$db = mysqli_select_db($cn,"customer_form") or die("Database Not Connected");

$Fname = $_POST['fname'];
$Sname = $_POST['sname'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$Email = $_POST['Email'];
$Number = $_POST['number'];
$Subject = $_POST['Subject'];
$Comment = $_POST['Comment'];

$st = "INSERT INTO `login_detail`(`C_Id`, `C_Fname`, `C_Sname`, `C_Address`, `C_City`, `C_Email`, `C_Mob`, `C_Subject`, `C_Messege`) VALUES (NULL,'$Fname','$Sname','$Address','$City','$Email','$Number','$Subject','$Comment')";
mysqli_query($cn, $st) or die("Not Inserted");
echo "<h1>The Record has been Submitted Sucessfully</h1>";
?>
