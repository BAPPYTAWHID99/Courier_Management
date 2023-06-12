<?php
require_once('../controller/headerCookie.php');
require('../model/userModel.php');

if (isset($_REQUEST['submit'])) {
	$date = $_REQUEST['date'];
	$companyName = $_REQUEST['companyName'];
	$address = $_REQUEST['address'];

	if ($date != null && $companyName != null && $address != null) {

		$status = addDocument($date, $companyName, $address);

		if ($status) {
			header('location: ../views/admindocumentDelivery.php');
		} else {
			header('location: ../views/admindocumentDelivery.php');
		}
	} else {
		echo "null submission..";
	}
}
