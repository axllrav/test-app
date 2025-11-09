<?php
include "navigation.php";

//validation
// 1. request-in

if ($_SERVER['REQUEST_METHOD'] != 'POST' && !isset($_POST['kodeMapel'])) {
    die("Can't access direct! <a href='inputMapel.php'>Back</a>");
}

// 2. empty filled
if (empty($_POST['kodeMapel']) || empty($_POST['namaMapel']) || empty($_POST['kodeGuru'])) {
    die("Empty data is detected, Please fill full the form!");
}

// 3. data ada yang sama
$mapel = $_SESSION['mapel'];
$errors = [];

foreach ($mapel as $items) {
    if ($items['kodeMapel'] === $_POST['kodeMapel']) {
        $errors[] = "Kode Mapel sudah terdaftar!";
    }
    if ($items['namaMapel'] === $_POST['namaMapel']) {
        $errors[] = "Nama Mapel sudah ada!";
    }
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    die();
}



// 4.filter by strip tags for restrict filled with html tag(s)
$kodmp = $_POST['kodeMapel'];  //dilihat berdasarkan name di input
$nammp = strip_tags($_POST['namaMapel']);
$kodeguru = strip_tags($_POST['kodeGuru']);


$mapel[] = ["kodeMapel" => $kodmp, "namaMapel" => $nammp, "kodeGuru" => $kodeguru]; 

//kirim ke session
$_SESSION['mapel'] = $mapel;

echo "Successfully added data <a href='index.php?menu=mapel'>See data</a>";

?>