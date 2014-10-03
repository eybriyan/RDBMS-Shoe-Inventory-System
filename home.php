<html>
<head>
	
<title>Homepage</title>
</head>
<body>
<?php 

if(isset($_POST['submit'])) 
 	{ 
 		connect();
 		session_start();
 		SignIn(); 
 	} 
function connect(){
 $server =  'localhost';
 $db_name =  'shoe_inventory'; 
 $user =  'root'; 
 $password =  '1234'; 

 $con=mysql_connect($server,$user,$password) or die("Failed to connect to MySQL: " . mysql_error()); 
 $db=mysql_select_db($db_name,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
 /* $ID = $_POST['user']; $Password = $_POST['pass']; */ }
 function SignIn() { 
 //starting the session for user profile page 
 	if(!empty($_POST['user']) || !empty($_POST['pass'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
 	 {
 	  $query = mysql_query("SELECT * FROM tbl_login where username = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
 	  $row = mysql_fetch_array($query);
 	 if(!empty($row['username']) AND !empty($row['pass'])) 
 	 	{ 
 	 		//$_SESSION['username'] = $row['pass']; 
 	 		//header("Location: viewhomepage.php");
 	 		echo '<h3> Success Login </h3>';
 	 		echo "Hi " . $row['username'] .'<br>';
 	 		echo '<p><a href = "index.php">Logout</a><br> or Go back to logout </p>';
 	 		header("Location:Homepage.php");
 	 		 } 
 	 		else
 	 		 { echo file_get_contents("index.php") . "Error Try Again"; 
 	 	} 
 	 } 
 	

 	} 
 	?>	

</body>
</html>
