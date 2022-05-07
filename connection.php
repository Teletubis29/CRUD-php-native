<?php
$connect = mysqli_connect("localhost", "root", "", "crud");
 
if($connect){
 //echo "Koneksi ke database berhasil";
}else{
 echo "Koneksi ke database gagal. Mohon periksa lagi config koneksi database Anda";
}
?>