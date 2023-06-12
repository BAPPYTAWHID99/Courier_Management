<?php
require_once('../controller/headerCookie.php');
require('../model/userModel.php');

$documentDeliveryid =  $_GET['documentDeliveryid'];

if (deleteDocById($documentDeliveryid)) {
	header('location: ../views/admindocumentDelivery.php?delmsg=success');
} else {
	header('location: ../views/admindocumentDelivery.php?delmsg=error');
}
