
<?php

function addForm($supplier_name, $supplier_contactperson, $supplier_address, $error)
{
?>

<html>
<head>
	<title>Add Content</title>
</head>
<?php 
 // if there are any errors, display them
 if ($error != '')
 {
 echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
 }

 ?>
<body>
 <form action = "" method = "post">
 	<div>
 		<strong>Add Supplier</strong><br/><br/>
 			<strong>Client Name: *</strong><input type = "text" name = "supplier_name" values = "<?php echo $supplier_name?>"> <br/>
 			<strong>Contact Person: *</strong><input type = "text" name = "supplier_contactperson" value = "<?php echo $supplier_contactperson?>"> <br/>
 			<strong>Address: *</strong><input type= "text" name = "supplier_address" value = "<?php echo $supplier_address?>"> <br/>
 			<p>* Required</p>
 			<input type= "submit" name = "addsupplier" value = "Add">
 	</div>
 </form>
</body>
</html>



<?php 
}

include'home.php';
 connect();
 
 if (isset($_POST['addsupplier']))
 {
 	$supplier_name = mysql_real_escape_string(htmlspecialchars($_POST['supplier_name']));
 	$supplier_contactperson = mysql_real_escape_string(htmlspecialchars($_POST['supplier_contactperson']));
 	$supplier_address = mysql_real_escape_string(htmlspecialchars($_POST['supplier_address']));
 	if ($supplier_name == "" OR $supplier_contactperson == "" OR $supplier_address == "")
 	{
 		$error = "Error. Please Enter Require Fields";
 		addForm($supplier_name, $supplier_contactperson , $supplier_address, $error);
 	}
 	else 
 	{
 		mysql_query("INSERT INTO tbl_supplier SET supplier_name= '$supplier_name', 
 			supplier_contactperson = '$supplier_contactperson', 
 			supplier_address = '$supplier_address'")
 			or die(mysql_error());
 			//echo "success";
 			header("Location: Homepage.php");

 	}
 }
else{
 addForm('','','', '');
}
?>