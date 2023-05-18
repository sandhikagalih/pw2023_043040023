<?php
require('functions.php');
$name = 'Home';
// $students = [
//   [
//     "nama" => "Sandhika Galih",
//     "npm" => "043040023",
//     "email" => "sandhikagalih@unpas.ac.id"
//   ],
//   [
//     "nama" => "Doddy Ferdiansyah",
//     "npm" => "133040003",
//     "email" => "doddy@gmail.com"
//   ]
// ];

// $conn = mysqli_connect(HOST, USER, PASS, DB) or die('Unable to connect');

// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// $students = [];
// while ($student = mysqli_fetch_assoc($result)) {
//   $students[] = $student;
// }

$query = "SELECT * FROM mahasiswa";
$students = query($query);

// PDO Style
// require 'Database.php';

// $db = new Database;
// $students = $db->query("SELECT * FROM mahasiswa")->fetchAll();


// dd(BASE_URL === $_SERVER["REQUEST_URI"]);
require('views/index.view.php');
