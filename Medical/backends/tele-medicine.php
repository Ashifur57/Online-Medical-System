<?php


session_start();
try {

    if (!file_exists('connection-pdo.php' ))
        throw new Exception();
    else
        require_once('connection-pdo.php' ); 
		
} catch (Exception $e) {

	$_SESSION['msg'] = 'There were some problem in the Server! Try after some time!';

	header('location: ../tele-medicine.php');

	exit();
	
}

if (!isset($_POST['name']) || !isset($_POST['number'])) {

	$_SESSION['msg'] = 'Invalid POST variable keys! Refresh the page!';

	header('location: ../tele-medicine.php');

	exit();
}

$regex = '/^[(A-Z)?(a-z)?(0-9)?\-?\_?\.?\s*]+$/';


if (!preg_match($regex, $_POST['name']) || !preg_match($regex, $_POST['number'])) {

	$_SESSION['msg'] = 'Whoa! Invalid Inputs!';

	header('location: ../tele-medicine.php');

	exit();

} else{
	$name = $_POST['name'];
	$number = $_POST['number'];
	$age = $_POST['age'];
	$t_id = $_POST['t_id'];
	$bill = $_POST['bill'];

	$sql = "INSERT INTO telemedicine(name,number,age,t_id,bill) VALUES(?,?,?,?,?)";
    	$query  = $pdoconn->prepare($sql);
    	if ($query->execute([$name,$number,$age,$t_id,$bill])) {

    	$_SESSION['msg'] = 'Tele-Medicine Request Accepted!<br>Your meeting code is "qxd-uxdu-cdc".ClicK Join Now to join';

		header('location: ../tele-medicine.php');
    	
    } else {

    	$_SESSION['msg'] = 'There were some problem in the server! Please try again after some time!';

		header('location:../tele-medicine.php');

    }


}