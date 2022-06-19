<?php

include 'includes/connection.php';

if (isset($_POST['submit'])) 
{  
    if (!empty($_POST['name']) && !empty($_POST['gender']) && !empty($_POST['address']) && !empty($_POST['disease']) && !empty($_POST['num']) && !empty($_POST['payment']) && !empty($_POST['room']))// && !empty($_POST['age']) && !empty($_POST['dept']) && !empty($_POST['status'])) 
    {
        $name = $_POST['name'];
        $age=$_POST['age'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
       
        $disease = $_POST['disease'];
        $contact = $_POST['num'];
        //$num = $_POST['num'];
        $payment = $_POST['payment'];
        $room = $_POST['room'];



        echo"$num";

             $query="INSERT INTO `patient`(`Name`, `Age`, `Gender`, `Address`, `Disease`, `Contact_number`, `payment_status`,`room_no`) VALUES ('$name','$age','$gender','$address','$disease','$contact','$payment','$room');";
          

            $run = mysqli_query($conn,$query) or die(mysqli_error());

            if ($run) {
                echo '<script>alert("Form submitted successfully")
                return True</script>';
                header("Location: patients0.php");
                exit();
            }
            else {
                echo '<script>alert("All fields required");
                return True</script>';
                header("Location: add-patient0.php");
                exit();
            }
    }
}

?>

