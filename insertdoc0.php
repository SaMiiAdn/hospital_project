<?php

include 'includes/connection.php';

if (isset($_POST['submit'])) 
{  
    if (!empty($_POST['name']) && !empty($_POST['age']) && !empty($_POST['gender']) && !empty($_POST['address']) && !empty($_POST['specialist']) && !empty($_POST['salary']) && !empty($_POST['status']) && !empty($_POST['shift'])) // && !empty($_POST['shift']) && !empty($_POST['dept']) && !empty($_POST['num'])) 
    {
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $espi = $_POST['specialist'];
        $salary = $_POST['salary'];
        $status = $_POST['status'];
        $shitf = $_POST['shift'];

       // if ($password === $conpassword) 
        //{
            $query="INSERT INTO `doctor`(`Name`, `Age`, `Gender`, `Address`, `specialist`, `salary`, `status`, `shift`) VALUES ('$name','$age','$gender','$address','$espi','$salary','$status','$shift')";
           // $query = "insert into doctor(name,gender,department,designation,contact_number,salary,address,username,shift,password) values ('$name','$gender','$dept','$des','$num','$salary','$address','$email','$shift','$password')";

            $run = mysqli_query($conn,$query) or die(mysqli_error());

            if ($run) {
                echo '<script>alert("Form submitted successfully")
                return True</script>';
                header("Location: doctors0.php");
                exit();
            }
            else {
                echo '<script>alert("All fields required");
                return True</script>';
                header("Location: add-doctor0.php");
                exit();
            }
        
    }
}

?>

