<html>
<head>
	<title>Edit Supplier Info</title>
</head>
<body>
<?php
/* 
 EDIT.PHP
 Allows user to edit specific entry in database
*/

 // creates the edit record form
 // since this form is used multiple times in this file, I have made it a function that is easily reusable
 	function renderForm($supplier_id, $supplier_name, $supplier_contactperson, $supplier_address, $error)
 	{
 		?>
 	<html>
 	<head>
 			<title>Edit Record</title>
 		</head>
 	<body>
		 <?php 
 // if there are any errors, display them
 			if ($error != '')
 				{
 					echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 		}
 		?> 
 
 		<form action="" method="post">
	 		<input type="hidden" name="supplier_id" value="<?php echo $supplier_id; ?>"/>
	 			<div>
	 					<!--<p><strong>Client ID:</strong> <?php echo $supplier_id; ?></p>	-->
 							<strong>Client Name: *</strong> <input type="text" name="supplier_name" value="<?php echo $supplier_name; ?>"/>
 							<br/>
 							<strong>Contact Person: *</strong> <input type="text" name="supplier_contactperson" value="<?php echo $supplier_contactperson; ?>"/>
 							<br/>
 							<strong>Address: *</strong> <input type="text" name="supplier_address" value="<?php echo $supplier_address; ?>"/>
 							<br/>
	 					<p>* Required</p>
 			<input type="submit" name="submit_supplier" value="Save">
 				</div>
 	</form> 
 	</body>
 	</html> 

 <?php
 }
 // connect to the database
 
 include'home.php';
 connect(); 
 // check if the form has been submitted. If it has, process the form and save it to the database
 	if (isset($_POST['submit_supplier']))
 			{ 
 // confirm that the 'id' value is a valid integer before getting the form data
 	if (is_numeric($_POST['supplier_id']))
 			{
 // get form data, making sure it is valid
 					$supplier_id = $_POST['supplier_id'];
 					$supplier_name = mysql_real_escape_string(htmlspecialchars($_POST['supplier_name']));
 					$supplier_contactperson = mysql_real_escape_string(htmlspecialchars($_POST['supplier_contactperson']));
 					$supplier_address = mysql_real_escape_string(htmlspecialchars($_POST['supplier_address']));

 // check that firstname/lastname fields are both filled in
 				if ($supplier_name == '' || $supplier_contactperson == '' || $supplier_address == '')
 						{
 // generate error message
 							$error = 'ERROR: Please fill in all required fields!';
 
 //error, display form
							 renderForm($supplier_id, $supplier_name, $supplier_contactperson,$supplier_address, $error);
 						}
 				else
 						{
 // save the data to the database
							 mysql_query("UPDATE tbl_supplier SET supplier_name='$supplier_name', 
							 	supplier_contactperson='$supplier_contactperson', 
							 	supplier_address = '$supplier_address' 
							 	WHERE supplier_id='$supplier_id'")
								 or die(mysql_error()); 
// echo 'something Success<br/> <a href  = "home.php"> Click Here to Continue...</a>';
// once saved, redirect back to the view page
 							header ("Location: Homepage.php"); 
						 }
 			}
 	else
 			{
 // if the 'id' isn't valid, display an error
 				echo 'Error1!';
			 }
			 }
 	else
 // if the form hasn't been submitted, get the data from the db and display the form
 			{
 
 // get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)
				 if (isset($_POST['submitfromhome']) && isset($_GET['supplier_id']) && is_numeric($_GET['supplier_id']) && $_GET['supplier_id'] >0)
 			{
 // query db
 				
 				$supplier_id = $_GET['supplier_id'];
 				$result = mysql_query("SELECT * FROM tbl_supplier WHERE supplier_id = '$supplier_id'")
 				or die(mysql_error()); 
 				$row = mysql_fetch_array($result);
 
 // check that the 'id' matches up with a row in the databse
 					if($supplier_id == $row['supplier_id'])
 							{
 
 // get data from db
 								$supplier_id = $row['supplier_id'];
 								$supplier_name = $row['supplier_name'];
 								$supplier_contactperson = $row['supplier_contactperson'];
 								$supplier_address = $row['supplier_address'];
 
 // show for				
 								renderForm($supplier_id, $supplier_name, $supplier_contactperson, $supplier_address, '');
 							}
 					else
 // if no match, display result
 							{
 								echo "No results!";
 							}
 			}
 					else
 // if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error
 						{
 								echo 'Error2!';
							}
 			}
?>
</body>
</html>
