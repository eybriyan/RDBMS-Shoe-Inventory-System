<html>
<head>
	<title>View Transaction</title>
</head>
<body>
<?php
include 'home.php';
connect();
	if (isset($_GET['client_id'])){
		$client_id = $_GET['client_id'];
		$query = mysql_query("SELECT tbl_transaction.transaction_name , tbl_transaction.transaction_id,
			tbl_transaction.transaction_date, 
			tbl_transaction.transaction_desc
			FROM tbl_transaction inner join tbl_client 
			on tbl_transaction.client_id = tbl_client.client_id") 
		or die(mysql_error());
		echo '<p> View Client</p>
			<table border="1" cellpadding="10">
	 		<tr>
	 		<th>Transaction Name</th>
	 		<th>Transaction Date</th> 
	 		<th>Transaction Description</th>
	 		</tr>';
	 	while ($row = mysql_fetch_array($query)) 
	 	{
	 	echo '<tr>
		<td>' . $row['transaction_name'] . '</td>
		<td>' . $row['transaction_date'] . '</td>
		<td>' . $row['transaction_desc'] . '</td>
		<td>
		<form method = "post" action="edit_client.php?client_id=' . $row['transaction_id'] . '">
			<input type = "submit" name= "submitfromhome" value = "Edit">
		</form>
		</td>
		<td>
		<form method = "post" action ="delete.php?client_id=' . $row['transaction_id'] . '">
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

else {

	echo "Error";
}
?>
</body>
</html>