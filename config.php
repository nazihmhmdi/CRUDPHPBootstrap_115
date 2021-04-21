<?php
//koneksi ke database ("" merupakan password phpmyadmin)
$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

//cek koneksi ke Database
//Apabila Error
if (mysqli_connect_errno()) {
  echo "Koneksi database gagal : " . mysqli_connect_error();
}