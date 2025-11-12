<!DOCTYPE html>
<?php

require_once __DIR__ . "/../vendor/autoload.php";

use TugasNilai\ViewDataSiswa;

$kelas = [
    ['kodeKelas' => 'K001', 'kelas' => 'XI-RPL1'],
    ['kodeKelas' => 'K002', 'kelas' => 'XI-RPL2'],
    ['kodeKelas' => 'K003', 'kelas' => 'XI-RPL3'],
    ['kodeKelas' => 'K004', 'kelas' => 'XI-RPL4'],
    ['kodeKelas' => 'K005', 'kelas' => 'XI-RPL5']
];

$siswa = [
    ['nis' => '24250001', 'nama' => 'Xavier Hilton', 'kelas' => 'XI-RPL3'],
    ['nis' => '24250002', 'nama' => 'Viola Nezela', 'kelas' => 'XI-RPL4'],
    ['nis' => '24250003', 'nama' => 'Axell Rafael', 'kelas' => 'XI-RPL2']
];

$nilai = [
    ['kodeNilai' => '1', 'nis' => '24250001', 'kodeMapel' => 'M1', 'nilai' => ['kehadiran' => '14', 'tugas' => '80', 'formatif' => '92', 'uts' => '90', 'uas' => '88']],
    ['kodeNilai' => '2', 'nis' => '24250002', 'kodeMapel' => 'M2', 'nilai' => ['kehadiran' => '13', 'tugas' => '70', 'formatif' => '82', 'uts' => '80', 'uas' => '70']],
    ['kodeNilai' => '3', 'nis' => '24250003', 'kodeMapel' => 'M3', 'nilai' => ['kehadiran' => '15', 'tugas' => '97', 'formatif' => '96', 'uts' => '98', 'uas' => '90']],
];

$guru = [
    ['kodeGuru' => 'G1', 'namaGuru' => 'Bambang'],
    ['kodeGuru' => 'G2', 'namaGuru' => 'Roso'],
    ['kodeGuru' => 'G3', 'namaGuru' => 'Baim']
];


$mapel = [
    ['kodeMapel' => 'M1', 'namaMapel' => 'MTK', 'kodeGuru' => 'G1'],
    ['kodeMapel' => 'M2', 'namaMapel' => 'B. Indo', 'kodeGuru' => 'G2'],
    ['kodeMapel' => 'M3', 'namaMapel' => 'Seni', 'kodeGuru' => 'G3']
];

if(!isset($_SESSION['kelas'])){
    $_SESSION['kelas'] = $kelas;
}

if(!isset($_SESSION['siswa'])){
    $_SESSION['siswa'] = $siswa;
}

if(!isset($_SESSION['nilai'])){
    $_SESSION['nilai'] = $nilai;
}

if(!isset($_SESSION['mapel'])){
    $_SESSION['mapel'] = $mapel;
}

if(!isset($_SESSION['guru'])){
    $_SESSION['guru'] = $guru;
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <?php
    $data = $nilai;

    foreach ($nilai as $x => $row) {
        foreach ($siswa as $i => $rowSiswa) {
            if ($row['nis'] == $rowSiswa['nis']) {
                $data[$x]['nama'] = $rowSiswa['nama'];
                $data[$x]['kelas'] = $rowSiswa['kelas'];
            }
        }
        foreach ($mapel as $rowMapel) {
            if ($row['kodeMapel'] == $rowMapel['kodeMapel']) {
                $data[$x]['namaMapel'] = $rowMapel['namaMapel'];
                $data[$x]['kodeGuru'] = $rowMapel['kodeGuru'];
            }
        }
        foreach ($guru as $rowGuru) {
            if ($data[$x]['kodeGuru'] == $rowGuru['kodeGuru']) {
                $data[$x]['namaGuru'] = $rowGuru['namaGuru'];
            }
        }
    }

    

    foreach ($data as $r) {
        $siswa = new ViewDataSiswa($r['nis'], $r['nama'], $r['kelas']);
        $siswa->setMapel($r['namaMapel']);
        $siswa->setGuru($r['namaGuru']);
        $siswa->setAbsen($r['nilai']['kehadiran'], 20);
        $siswa->setTugas($r['nilai']['tugas']);
        $siswa->setFormatif($r['nilai']['formatif']);
        $siswa->setUts($r['nilai']['uts']);
        $siswa->setUas($r['nilai']['uas']);


        echo $siswa->showData() . "<hr>";
    }
    ?>
    <!-- <a href="inputNilai.php">Masukkan data nilai untuk siswa</a> -->
</body>

</html>