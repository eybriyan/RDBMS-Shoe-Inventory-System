<?php
include 'home.php';
connect();
delete_Client();
delete_Suppplier();
function delete_Client(){

$client_id = $_GET['client_id'];
if (isset($_GET['client_id']) && is_numeric($_GET['client_id']))
{
$delete_client = mysql_query("DELETE FROM tbl_client where client_id = '$client_id'")or die(mysql_error());
header("Location: Homepage.php");
}
}
function delete_Suppplier(){
	$supplier_id = $_GET['supplier_id'];
if (isset($_GET['supplier_id']) && is_numeric($_GET['supplier_id']))
{
$delete_supplier = mysql_query("DELETE FROM tbl_supplier where supplier_id = '$supplier_id'")or die(mysql_error());
header("Location: Homepage.php");

}


}
?>