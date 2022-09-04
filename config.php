<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database ="login_register";

$conn = mysqli_connect($hostname, $username, $password, $database) or die("Database connection failed");





if(isset($_POST['job'])){
$cname=$_POST['cname'];
$position=$_POST['position'];
$jdesc=$_POST['jdesc'];
$skills=$_POST['skills'];
$CTC=$_POST['CTC'];


$sql= "INSERT INTO `jobs`( `cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname','$position','$jdesc','$skills','$CTC')";
if(mysqli_query($conn,$sql)){
    echo "New Job Posted";
}
else{
    echo "ERROR: Failed to Post the Job $sql. " . mysqli_error($conn);
}

}

if(isset($_POST['applies'])){
    $name=$_POST['name'];
    $apply=$_POST['apply'];
    $qual=$_POST['qual'];
    $year=$_POST['year'];

    $sql="INSERT INTO `candidates`( `name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
  
    mysqli_query($conn,$sql);
}

?>