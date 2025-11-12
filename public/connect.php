<?php

    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'nilai_siswa';

    $conn = new mysqli($hostname, $username, $password, $dbname);

    if($conn->connect_error){
        die('Koneksi gagal: ' . $conn->connect_error);
    }

    