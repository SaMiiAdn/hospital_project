<?php

include 'includes/connection.php';

if (isset($_POST['submit'])) 
{  
    if (!empty($_POST['name']) && !empty($_POST['gender']) && !empty($_POST['department']) && !empty($_POST['contact']) && !empty($_POST['salary']) && !empty($_POST['address']) && !empty($_POST['email']) && !empty($_POST['shift']))// && !empty($_POST['dept']) && !empty($_POST['num'])) 
    {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $department = $_POST['department'];
        $contact = $_POST['contact'];
        $salary = $_POST['salary'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $shift = $_POST['shift'];
     

            $query="INSERT INTO `nurses`(`name`, `gender`, `department`, `contact_number`, `salary`, `address`, `email`, `shift`) VALUES ('$name','$gender','$department','$contact','$salary','$address','$email','$shift')";
          //  $query = "insert into nurse(name,gender,department,contact_number,salary,address,email,shift,password) values ('$name','$gender','$dept','$num','$salary','$address','$email','$shift','$password')";

            $run = mysqli_query($conn,$query) or die(mysqli_error());

            if ($run) {
                echo '<script>alert("Form submitted successfully")
                return True</script>';
                header("Location: appointments0.php");
                exit();
            }
            else {
                echo '<script>alert("All fields required");
                return True</script>';
                header("Location: add-nurse0.php");
                exit();
            }
        }
    
}

?>

