<html>
<head>
	<title>Shoe Inventory System</title>
	<style>
body {
	background-image: url(http://goo.gl/SjIUjl); 
	background-repeat: no-repeat;
	background-position: fixed;
	background-attachment: fixed;
	min-width: 1000px;
	background-size: 100% 100%;"
}

.Login {
	margin-left: 350px;
	margin-top: 180px;
	background-color: red;
	width: 250px;
	padding: 20px;
	background-color: rgba(0,0,0,0.5);
	padding-bottom: 10px;
}

.button {
   border-top: 1px solid #1e8fff;
   background: #1e8fff;
   background: -webkit-gradient(linear, left top, left bottom, from(#1e8fff), to(#1e8fff));
   background: -webkit-linear-gradient(top, #1e8fff, #1e8fff);
   background: -moz-linear-gradient(top, #1e8fff, #1e8fff);
   background: -ms-linear-gradient(top, #1e8fff, #1e8fff);
   background: -o-linear-gradient(top, #1e8fff, #1e8fff);
   padding: 10px 20px;
   -webkit-border-radius: 0px;
   -moz-border-radius: 0px;
   border-radius: 0px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: #fcfcfc;
   font-size: 15px;
   font-family: Helvetica, Arial, Sans-Serif;
   text-decoration: none;
   vertical-align: middle;
   border: 1px solid #1e90ff;
   margin-top: 20px;
   margin-left: 75px;
   font-size: 18px;
   }

.button:hover {
   border-top-color: #097ae3;
   background: #097ae3;
   color: #ffffff;
   }
.button:active {
   border-top-color: #2878a6;
   background: #2878a6;
   }

.employee {
	font-family: arial; 
	margin-left: 350px; 
	margin-top: -48px; 
	position: absolute; 
	color: white; 
	background-color: #1e90ff; 
	width: 230px; 
	padding: 10px; 
	padding-left: 50px;
}

.Username {
	width: 250px; 
	height: 40px; 
	font-size: 18px; 
	margin-top: 10px; 
	padding-left: 5px; 
	color: #00141E;
}

.password {
	width: 250px; 
	height: 40px; 
	font-size: 18px; 
	margin-top: 10px; 
	padding-left: 5px;
}

	</style>
</head>
<body id="body-color"> 
	<h2 class="employee">Employee Login</h2>
	<div id="Sign-In" class="Login"> 
			<form method="POST" action="home.php">
				<input type="text" name="user" placeholder="Username" class="username"><br>
				<input type="password" name="pass" size="40" class="password"><br> 
				<input class="button" type="submit" name="submit" value="Log In">
			 </form>
			   </div> 
			</body>	
</html>