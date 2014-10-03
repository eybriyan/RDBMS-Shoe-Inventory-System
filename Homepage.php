<html>
<head>
	<title>Home</title>
	<?php
{
	include 'home.php';
	connect();
	ViewClient();
	ViewSupplier();
} 
function ViewClient() {
    $viewquery = mysql_query("SELECT * from tbl_client") or die(mysql_error());
	echo '<p> View Client</p>
	<table border="1" cellpadding="10">
	 <tr>
	 <th>ClientName</th>
	 <th>Client Contact Person</th> 
	 <th>Client Address</th>
	 </tr>';
	  while($row = mysql_fetch_array( $viewquery )) {
		echo '<tr>
		<td><a href="client_transaction.php?client_id=' . $row['client_id']. '">' . $row['client_name'] . '</a></td>
		<td>' . $row['client_contactperson'] . '</td>
		<td>' . $row['client_address'] . '</td>
		<td>
		<form method = "post" action="edit_client.php?client_id=' . $row['client_id'] . '">
			<input type = "submit" name= "submitfromhome" value = "Edit">
		</form>
		</td>
		<td>
		<form method = "post" action ="delete.php?client_id=' . $row['client_id'] . '">
			<input type = "submit" name = "delsubmithome" value = "Delete">
		</form>
		</td>
		</tr>';
	} 
      echo '</table>
      <div>
      <form method = "post" action ="add_client.php">
			<input type = "submit" name = "addsubmithome" value = "Add New Record">
	  </form>
	  </div>';

} 	
function ViewSupplier(){
	$viewquery = mysql_query("SELECT * from tbl_supplier") or die(mysql_error());
	echo '<p> View Supplier</p>
	 <table border="1" cellpadding="10">
	   <tr>
	   <th>Supplier Name</th>
	   <th>Supplier Contact Person</th>
	   <th>Supplier Address</th>
	   </tr>';
	  while($row = mysql_fetch_array( $viewquery )) {
		
		echo '<tr>
		<td><a href="view_supplier.php?supplier_id=' . $row['supplier_id']. '">' . $row['supplier_name'] . '</a></td>
		<td>' . $row['supplier_contactperson'] . '</td>
		<td>' . $row['supplier_address'] . '</td>
		<td>
		<form method = "post" action="edit_supplier.php?supplier_id=' . $row['supplier_id'] . '">
			<input type = "submit" name= "submitfromhome" value = "Edit">
		</form>
		</td>
		<td>
		<form method = "post" action ="delete.php?supplier_id=' . $row['supplier_id'] . '">
			<input type = "submit" name = "delsubmithome" value = "Delete">
		</form>
		</td>
		</tr>';
	} 
      echo '</table>
      <div>
      <form method = "post" action ="add_supplier.php">
			<input type = "submit" name = "addsubmithome" value = "Add New Record">
	  </form>
	  </div>';
}
?>
</head>
<body>
</body>
</html>

