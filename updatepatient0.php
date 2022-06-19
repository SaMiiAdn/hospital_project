<?php 
session_start();
include 'includes/connection.php';
if (isset($_POST['submit'])) {
	$id = $_POST['id'];
    $d = $_SESSION['d'];
	$name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $disease = $_POST['disease'];
    $num = $_POST['contact'];
    $payment = $_POST['payment'];
    $room = $_POST['room'];

    mysqli_query($conn, "UPDATE `patient` SET `Name`='$name',`Age`='$age',`Gender`='$gender',`Address`='$address',`Disease`='$disease',`Contact_number`='$num',`payment_status`='$payment',`room_no`='$room' where `patient_id`='$d';");
    //mysqli_query($conn,"UPDATE `patient` SET `Name`='$name',`Age`='$age',`Gender`='$gender',`Address`='$address',`Disease`='$disease',`Contact_number`='$num',`payment_status`='$payment',`room_no`='$room' ;WHERE `patient_id`='$id';");
	//mysqli_query($conn, "UPDATE `patient` SET `Name`='$name',`Age`='$age',`Gender`='$gender',`Address`='$adress',`Disease`='$disease',`Contact_number`='$num',`payment_status`='$payment'  WHERE `patient_id`='$id'");
	$_SESSION['message'] = "Address updated!"; 
	header('location: patients0.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM `patient` WHERE `patient_id`=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: patients0.php');
}
?>