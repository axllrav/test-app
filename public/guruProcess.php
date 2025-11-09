<?php
include "navigation.php";

//validation
// 1. request-in

if ($_SERVER['REQUEST_METHOD'] != 'POST' && !isset($_POST['kodeGuru'])) {
    die("Can't access direct! <a href='inputGuru.php'>Back</a>");
}

// 2. empty filled
if (empty($_POST['kodeGuru']) || empty($_POST['namaGuru'])) {
    die("Empty data is detected, Please fill full the form! <a href='inputGuru.php'>Back</a>");
}

// 4. data ada yang sama
$guru = $_SESSION['guru'];
$errors = [];

foreach ($guru as $items) {
    if ($items['kodeGuru'] === $_POST['kodeGuru']) {
        $errors[] = "Kode Guru sudah terdaftar! <a onclick='history.back(-1)' href='#'>Back</a>";
    }
    if ($items['namaGuru'] === $_POST['namaGuru']) {
        $errors[] = "Nama Guru sudah ada! <a onclick='history.back(-1)' href='#'>Back</a>";
    }
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    die();
}



// 5.filter by strip tags for restrict filled with html tag(s)
$kodgu = strip_tags($_POST['kodeGuru']);  //dilihat berdasarkan name di input
$namgu = strip_tags($_POST['namaGuru']);

$guru[] = ["kodeGuru" => $kodgu, "namaGuru" => $namgu]; 

//kirim ke session
$_SESSION['guru'] = $guru;

echo "Successfully added data <a href='index.php?menu=guru'>See data</a>";

?>