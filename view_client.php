<html>
<head>
	<title>View Client</title>
</head>
<body>
<?php
include 'home.php';connect();
if(isset($__GET['client_id']) && is_numeric($__GET['client_id']) && $__GET['client_id'] > 0){
$query = mysql_query('SELECT * FROM tbl_client') or die(mysql_error());
$row = mysql_fetch_array($query);
$querytransact = mysql_query(query)
	echo "<table>
	<tr> 
		<th>Client Name</th> 
		<th>Transaction Name<th>
		<th>Date<th>
	</tr>
	<tr>
	<td>".$row['client_name']. "</td>
	<td><a href = transaction.php?transaction_id=".$." </td>
	<td> </td>
	</tr>
	</table>";
	}
?>
</body>
</html>