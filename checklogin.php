<?php

$host="localhost"; // Host name 
$username="root";// Mysql username 
$pass="1234"; // Mysql password 
$db_name="shoe_inventory"; // Database name 
$tbl_name="tbl_login"; // Table name 

// Connect to server and select databse.
mysql_connect("$host", "$username", "$pass")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$user=$_POST['user']; 
$pass=$_POST['pass']; 

// To protect MySQL injection (more detail about MySQL injection)
$user = stripslashes($user);
$pass = stripslashes($pass);
$user = mysql_real_escape_string($user);
$pass = mysql_real_escape_string($pass);
$sql= "SELECT * FROM $tbl_name WHERE username='$user' and pass='$pass'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
$_SESSION['user'];
$_SESSION['pass']; 
header("location:successlogin.php");
}
else {
echo "Wrong Username or Password";
}
?>