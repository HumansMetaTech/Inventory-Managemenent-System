<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$item = $_POST['cmbItem'];
	$price_list = $_POST['cmbPriceList'];
	$price_list_rate = $_POST['txtRate'];

	$sql = "INSERT INTO `tabitem price`(`item_code`, `price_list`, `price_list_rate`) VALUES
	 ('$item', '$price_list', '$price_list_rate')";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}
	 

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST