<?php
$host=""; // Host name 
$username=""; // Mysql username 
$password=""; // Mysql password 
$db_name=""; // Database name 
$tbl_name=``; // Table name
// Connect to server and select databse.

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$myusername=$_POST['email'];
$mypassword=$_POST['password'];
// To protect MySQL injection (more detail about MySQL injection)
$firstName = stripslashes($firstName);
$lastName = stripslashes($lastName);
$firstName = mysql_real_escape_string($firstName);
$lastName = mysql_real_escape_string($lastName);
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql="INSERT INTO `members1`(`firstName`, `lastName`, `email`, `password`) VALUES ('$firstName','$lastName','$myusername','$mypassword');";

if(mysql_query($sql) != 1) {
echo "email already exists in the database!";
} else {
	echo "You're all signed up!";
}
?>
