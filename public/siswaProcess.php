<?php

include 'navigation.php';
require_once 'connect.php';

//validation
// 1. request-in

if ($_SERVER['REQUEST_METHOD'] != 'POST' && !isset($_POST['nis'])) {
    die("Can't access direct! <a href='inputSiswa.php'>Back</a>");
}

// 2. empty filled
if (empty($_POST['nis']) || empty($_POST['nama']) || empty($_POST['kelas'])) {
    die("Empty data is detected, Please fill full the form!");
}

// 3. tipe data tidak sesuai
if (!is_numeric($_POST['nis']) || is_numeric($_POST['nama'])) {
    die("Field NIS is must filled by number");
}

// 4. data ada yang sama
$siswa = $_SESSION['siswa'];
$errors = [];

foreach ($siswa as $items) {
    if ($items['nis'] === $_POST['nis']) {
        $errors[] = "NIS sudah terdaftar!";
    }
    if ($items['nama'] === $_POST['nama']) {
        $errors[] = "Nama siswa sudah ada!";
    }
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    die();
}



// 5.filter by strip tags for restrict filled with html tag(s) or xss
$nis = strip_tags($_POST['nis']);  //dilihat berdasarkan name di input
$nama = strip_tags($_POST['nama']);
$kelas = strip_tags($_POST['kelas']);

//menambah data baru untuk dimasukkan ke database/session 
$sql = "INSERT INTO students (nis, nama_siswa, kode_kelas) VALUES ('$nis', '$nama', '$kelas')";

//kirim ke db
$result = $conn->query($sql);

echo "Successfully added data <a href='index.php?menu=siswa'>See data</a>";
