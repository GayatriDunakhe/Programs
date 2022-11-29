<?php

$num = isset($_POST['number']) ? $_POST['number'] : 0;
$choose = isset($_POST['choose']) ? $_POST['choose'] : '';

switch($choose){
    case 'm':
        $cm = $num * 100;
        $f = $num * 3.2808;
        $in = $num * 39.370;
        $m = $num;
        $ans = 'Meters: '.$m.'<br />'.
        'Centimeters: '.$cm.'<br />'.
        'Foot: '.$f.'<br />'.
        'Inches: '.$in;
    break;

    case 'cm':
        $m = $num / 100;
        $f = $num * 0.032808;
        $in = $num * 0.39370;
        $cm = $num;
        $ans = 'Centimeters: '.$cm.'<br />'.
        'Meters: '.$m.'<br />'.            
        'Foot: '.$f.'<br />'.
        'Inches: '.$in;
    break;

    case 'f':
        $m = $num / 3.2808;
        $cm = $num / 0.032808;
        $in = $num * 12.000;
        $f = $num;
        $ans = 'Foot: '.$f.'<br />'.
        'Meters: '.$m.'<br />'.
        'Centimeters: '.$cm.'<br />'.            
        'Inches: '.$in;
    break;

    case 'in':
        $m = $num / 39.370;
        $cm = $num / 0.39370;
        $f = $num / 12.000;
        $in = $num;
        $ans = 'Inches: '.$in.'<br />'.
        'Foot: '.$f.'<br />'.
        'Meters: '.$m.'<br />'.
        'Centimeters: '.$cm;
    break;

    default:
        $ans = 'Something wrong';
    break;

}

// echo "<script>alert(".$ans.")</script>";
echo $ans;

if (!empty($number) || !empty($choose)) {

    $con = new mysqli("localhost", "root", "", "atl");

    $sql = "INSERT INTO convertdb (Number, Meter, Centimeter, Foot, Inches)
    VALUES ('$num', '$m', '$cm', '$f', '$in')";

    if($con->query($sql) === TRUE){
        echo "<script>alert('Data added')</script>";
    }
    else{
        echo "<script>alert('Fail to add')</script>";
    }
}

$con->close();

?>