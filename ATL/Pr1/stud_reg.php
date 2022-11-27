<?php

$name = $_POST['studname'];
$email = $_POST['email'];
$mobile = $_POST['mno'];
$address = $_POST['address'];
$qualification = $_POST['qualification'];
$course = $_POST['course'];
$dept = $_POST['dept'];

if (!empty($name) || !empty($email) || !empty($phone) || !empty($address) || !empty($qualification) || !empty($course) || !empty($dept)){
    
    $con = new mysqli("localhost", "root", "", "atl");
    
    $sql = "INSERT INTO stud_reg (Name, Email, Mobile, Address, Qualification, Course, Department)
    VALUES ('$name', '$email', '$mobile', '$address', '$qualification', '$course', '$dept')";

    if($con->query($sql) === TRUE){
        echo "<script>alert('Data added')</script>";
    }
    else{
        echo "<script>alert('Fail to add')</script>";
    }
}
else{
    echo "<script>alert('All fields are required')</script>";
}

$con->close();

?>
