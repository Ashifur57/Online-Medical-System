<?php


session_start();
try {

    if (!file_exists('connection-pdo.php' ))
        throw new Exception();
    else
        require_once('connection-pdo.php' ); 
		
} catch (Exception $e) {

	$_SESSION['msg'] = 'There were some problem in the Server! Try after some time!';

	header('location: ../test.php');

	exit();
	
}

if (!isset($_POST['name']) || !isset($_POST['address'])) {

	$_SESSION['msg'] = 'Invalid POST variable keys! Refresh the page!';

	header('location: ../test.php');

	exit();
}

$regex = '/^[(A-Z)?(a-z)?(0-9)?\-?\_?\.?\s*]+$/';


if (!preg_match($regex, $_POST['name']) || !preg_match($regex, $_POST['address'])) {

	$_SESSION['msg'] = 'Whoa! Invalid Inputs!';

	header('location: ../test.php');

	exit();

} else {

	$name = $_POST['name'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	$test = $_POST['test'];
	$payment = $_POST['payment'];
	$t_id = $_POST['t_id'];
	$price = $_POST['price'];

	$sql = "INSERT INTO test(name,address,number,test,payment,t_id,price) VALUES(?,?,?,?,?,?,?)";
    $query  = $pdoconn->prepare($sql);
    if ($query->execute([$name,$address,$number,$test,$payment,$t_id,$price])) {

    	$_SESSION['msg'] = 'Test Request Recieved!';

		header('location: ../test.php');
    	
    } else {

    	$_SESSION['msg'] = 'There were some problem in the server! Please try again after some time!';

		header('location:../test.php');

    }


}