<?php 
session_start();
include 'includes/connection.php';
if (isset($_POST['submit'])) {
	// $id = $_POST['id'];
    $id = $_SESSION['id'];
	$name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
	$specialist = $_POST['specialist'];
    $salary = $_POST['salary'];
    $status = $_POST['status'];
    $shift = $_POST['shift'];

    mysqli_query($conn,"UPDATE `doctor` SET `Name`='$name',`Age`='$age',`Gender`='$gender',`Address`='$address',`specialist`='$specialist',`salary`='$salary',`status`='$status',`shift`='$shift' WHERE `Doc_id`='$id'");
	//mysqli_query($conn, "UPDATE doctor SET name='$name', address='$address', username='$email', password='$password', gender='$gender', designation='$designation', salary='$salary', shift='$shift', department='$department', contact_number='$number' WHERE id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: admindash.php');
}

if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM doctor WHERE Doc_id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: doctors0.php');
}
?>