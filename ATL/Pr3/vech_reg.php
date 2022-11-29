<?php

$custname = $_POST['custname'];
$company = $_POST['company'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$regnum = $_POST['regnum'];
$regdate = $_POST['regdate'];
$model = $_POST['model'];
$color = $_POST['color'];
$year = $_POST['year'];
$dealname = $_POST['dealname'];
$town = $_POST['town'];

if (!empty($custname) || !empty($company) || !empty($mobile) || !empty($email) || !empty($regnum) || !empty($regdate) || !empty($model) || !empty($color) || !empty($year) || !empty($dealname) || !empty($town)) {

    $con = new mysqli("localhost", "root", "", "atl");

    $sql = "INSERT INTO vech_reg (Custname, Company, Mobile, Email, Regnum, Regdate, Model, Color, Year, Dealname, Town)
    VALUES ('$custname', '$company', '$mobile', '$email', '$regnum', '$regdate', '$model', '$color', '$year', '$dealname', '$town')";

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