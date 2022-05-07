<?php
include ('connection.php');
$id = $_GET['id'];
$query = mysqli_query($connect, "DELETE FROM mahasiswa WHERE id='$id'");
if ($query) {
    echo 'Data deleted Successfully,click for Home <a href="index.php">Here</a>';
    } else {
        echo 'Data fail,Try Again <a href="index.php"></a>' ; 
    } 
?>