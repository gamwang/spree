<?php

$host="localhost"; // Host name 
$username="spreefee_1"; // Mysql username 
$password="TLSTKek9876"; // Mysql password 
$db_name="spreefee_1"; // Database name 
$tbl_name=`members1`; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$myusername=$_POST['email']; 
$mypassword=$_POST['mypassword']; 

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM `members1` WHERE email = '$myusername' and password = '$mypassword';";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername and $mypassword and redirect to file "login_success.php"
session_start();
$_SESSION["username"]="$myusername";
$_SESSION["password"]="$mypassword";
$namequery=mysql_query("SELECT * FROM `members1` WHERE email='$myusername';");
$_SESSION["userData"]=mysql_fetch_row($namequery);
header("location:login_success.php");
}
else {
echo "Wrong Username or Password";
}
?>
