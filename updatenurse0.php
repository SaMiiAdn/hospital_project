<?php 
session_start();
include 'includes/connection.php';
if (isset($_POST['submit'])) {
	// $id = $_POST['id'];
    $id = $_SESSION['id'];
	$name = $_POST['name'];
    $gender = $_POST['gender'];
    $department = $_POST['department'];
    $contact = $_POST['contact'];
    $salary = $_POST['salary'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $shift = $_POST['shift'];
    
    

    mysqli_query($conn,"UPDATE `nurses` SET `name`='$name',`gender`='$gender',`department`='$department',`contact_number`='$contact',`salary`='$salary',`address`='$address',`email`='$email',`shift`='$shift' WHERE `id`='$id'");

	//mysqli_query($conn, "UPDATE nurses SET name='$name', address='$address', email='$email', password='$password', gender='$gender', salary='$salary', shift='$shift', department='$department', contact_number='$number' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: appointments0.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM nurses WHERE id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: appointments0.php');
}
?>