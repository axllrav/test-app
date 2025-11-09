<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
</head>

<body>
    <style>
        * {
            margin: 0;
            padding: 0;

        }

        h4 {
            background-color: #3416baff;
            padding: 30px 0 20px 0;
            text-align: center;
            color: #939eeeff;
            font-size: 20px;
            font-family: arial;
            border-bottom: 4px solid #052b48ae;
            word-spacing: 50px;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            color: #939eeeff;
        }

    </style>
    <div>
        <h4><a href="index.php?menu=all">Nilai | </a><a href="index.php?menu=siswa">Siswa | </a><a href="index.php?menu=mapel">Mapel | </a><a href="index.php?menu=guru">Guru</a></h4>
    </div>
</body>

</html>