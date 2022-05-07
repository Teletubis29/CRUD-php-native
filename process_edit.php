<?php
include('connection.php');
 
$id = $_POST['id'];
$nim = $_POST['nim'];
$name = $_POST['full_name'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$address = $_POST['address'];
$major = $_POST['major'];
 
$query = mysqli_query($connect, "UPDATE mahasiswa SET nim ='$nim', full_name ='$name', gender='$gender', date_of_birth='$date_of_birth', address='$address', major='$major' WHERE id='$id'");
// $query = mysqli_query($connect, UPDATE mahasiswa );
if ($query) {
    echo "";
    echo 'SUCCESS, Click Go Home = > <a href="index.php">Click Here </a>';
} else {
    echo 'EDIT FAIL, TRY AGAIN <a href="edit.php">form Edit</a>';
}
?>