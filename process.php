<?php
include('connection.php');

  
$nim = $_POST['nim'];
$name = $_POST['full_name'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$major = $_POST['major'];
 
$query = mysqli_query($connect, "INSERT INTO mahasiswa(nim,full_name,gender,date_of_birth,address, major) VALUES('$nim', '$name', '$gender', '$date_of_birth', '$address', '$major')");

if($query){
 echo 'Data Saved Successfully. Click For <a href="index.php">Go Home</a> .'; //true
}else{
 echo 'Data Fail. Try again <a href="input.html">Click Here</a>'; //false
}
?>